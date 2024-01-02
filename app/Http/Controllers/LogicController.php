<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\Agency;
use App\Models\Members;
use App\Models\Employee;
use Session;
use URL;
use App\Models\Zone;
use App\Models\Timezone;
use App\Models\Employeecertification;
use Illuminate\Support\Facades\Storage;
use App\Models\Facility;


class LogicController extends Controller
{
    public function processlogin(Request $request)
    {
      $email = $request->input('email');
      $password = $request->input('password');
  
          if (Auth::attempt(['email'=>$email,'password'=>$password]))
          {
              $user = Auth::user();
              session(['id'=>$user->id]);
              session(['role'=>$user->role]);
              session(['email'=>$user->email]);
              session(['name'=>$user->firstname]);
              session(['agency_id'=>$user->agency_id]);
              echo "yea";
  
          }
          else{
              return response()->json(['error'=>'Authentication failed', 'message'=>'Invalid login details', "error_code"=>"N0009"],200);
          }
    }
  
  
    public function dashboard(Request $request)
    {
          if(session('id'))
          {
            $user = User::where('id',session('id'))->first();

            if(session('role') == 1)
            {
                return view('admin.superdashboard')->with(['staff'=>$user]);
            }
            else
            {
                $agency = Agency::where('id', $user->agency_id)->first();
                $state = State::where('id',$agency->state_id)->first();
                $city = city::where('id',$agency->city_id)->first();
                $country = Country::where('id',$agency->country_id)->first();
                $countries = Country::all();
                $us = Country::where('id',233)->first();
                return view('dashboard.dashboard')->with(['staff'=>$user, 'country'=>$country, 'city'=>$city, 'state'=>$state, 'us'=>$us, 'countries'=>$countries]);
            }
  
           
          }
          else{
              return redirect()->route('adminlogin');
          }
    }


    public function agency(Request $request)
    {
          if(session('id'))
          {
            $user = User::where('id',session('id'))->first();
            $agency = Agency::where('id', $user->agency_id)->first();
                $state = State::where('id',$agency->state_id)->first();
                $city = city::where('id',$agency->city_id)->first();
                $country = Country::where('id',$agency->country_id)->first();
                $countries = Country::all();
                $us = Country::where('id',233)->first();
                $otherstates = State::where('country_id', $agency->country_id)->get();
                $othercities = City::where('state_id', $agency->state_id)->get();
                return view('dashboard.agency_setup')->with(['othercities'=>$othercities, 'otherstates'=>$otherstates, 'staff'=>$user, 'country'=>$country, 'city'=>$city, 'state'=>$state, 'us'=>$us, 'countries'=>$countries, 'agency'=>$agency]);
  
          }
          else{
              return redirect()->route('adminlogin');
          }
    }



    public function zones(Request $request)
    {
          if(session('id'))
          {
            $user = User::where('id',session('id'))->first();
  
           return view('dashboard.add_zone')->with(['staff'=>$user]);
          }
          else{
              return redirect()->route('adminlogin');
          }
    }

    public function processaddzone(Request $request)
    {
       
        $check = Zone::where(['agency_id'=>session('agency_id'), 'name'=>$request->name])->first();
        if($check == NULL)
        {
            $zone = new Zone();
            $zone->name = $request->name;
            $zone->agency_id = session('agency_id');
            $zone->save();
            echo "yea";
        }
    }

    public function viewzones(Request $request)
    {
          if(session('id'))
          {
            $user = User::where('id',session('id'))->first();
            $zones = Zone::where('agency_id', session('agency_id'))->get();
  
           return view('dashboard.view_zones')->with(['staff'=>$user, 'zones'=>$zones]);
          }
          else{
              return redirect()->route('adminlogin');
          }
    }

   

   public function addemployee($addedsecond,$rand)
   {
    if(session('id'))
    {
      $user = User::where('id',session('id'))->first();
      $zones = Zone::where('agency_id', session('agency_id'))->get();
      $user = User::where('id',session('id'))->first();
      $agency = Agency::where('id', $user->agency_id)->first();
      $state = State::where('id',$agency->state_id)->first();
      $city = city::where('id',$agency->city_id)->first();
      $country = Country::where('id',$agency->country_id)->first();
      $countries = Country::all();
      $us = Country::where('id',233)->first();
      $otherstates = State::where('country_id', $agency->country_id)->get();
      $othercities = City::where('state_id', $agency->state_id)->get();

     return view('dashboard.add_employee')->with(['addedsecond'=>$addedsecond, 'staff'=>$user, 'zones'=>$zones, 'othercities'=>$othercities, 'otherstates'=>$otherstates,  'country'=>$country, 'city'=>$city, 'state'=>$state, 'us'=>$us, 'countries'=>$countries, 'agency'=>$agency]);
    }
    else{
        return redirect()->route('adminlogin');
    }
   }


   public function addemployeegeneral(Request $request)
   {
        $this->sessionchecker();
        $chekemail = User::where('email',$request->email)->first();
        if($chekemail != NULL)
        {
            echo "email taken"; return;
        }

    
        $password = substr(str_shuffle("123abcdefghjkmnopqrstu"),-5);
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = bcrypt($password);
        $user->random =  base64_encode($password);
        $user->agency_id = session('agency_id');

        if($user->save())
        {
        $employee = New Employee();
        $employee->user_id = $user->id;
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->email = $user->email;
        $employee->agency_id = $user->agency_id;
        $employee->zone_id = $request->zone_id;
        $employee->language = $request->language;    
        $employee->skilled_or_noneskilled = $request->skilled_or_noneskilled;
        $employee->gender = $request->gender;
        $employee->current_status = $request->status;
        $employee->clockoutsafeguard = $request->clockoutsafeguard;
        $employee->addedsecond = $request->addedsecond;
        $employee->addedby =  session('id');

          if($employee->save())
          {
            
            session(['addedsecond'=>$request->addedsecond]);
            echo "yea";
          }

        }



   }

   private function sessionchecker()
   {
    if(!session('id'))
    {
        echo "expired session, please log in again"; return;
    }
   }



  public function dashboard_employee_update(Request $request)
  {
    if(session('id'))
    {
      $employee = Employee::where('addedsecond', session("addedsecond"))->first();
      $user = User::where('id',session('id'))->first();
      $zones = Zone::where('agency_id', session('agency_id'))->get();
      $user = User::where('id',session('id'))->first();
      $agency = Agency::where('id', $user->agency_id)->first();
      $state = State::where('id',$employee->state_id)->first();
      $city = city::where('id',$employee->city_id)->first();
      $country = Country::where('id',$employee->country_id)->first();
      $countries = Country::all();
      $us = Country::where('id',233)->first();
      $otherstates = State::where('country_id', $employee->state_id)->get();
      $othercities = City::where('state_id', $employee->state_id)->get();
      $timezone = new Timezone();
      $timezones = $timezone->timezones();  
    

     return view('dashboard.dashboard_employee_update')->with(['timezones'=>$timezones, 'employee'=>$employee, 'addedsecond'=>session("addedsecond"), 'staff'=>$user, 'zones'=>$zones, 'othercities'=>$othercities, 'otherstates'=>$otherstates,  'country'=>$country, 'city'=>$city, 'state'=>$state, 'us'=>$us, 'countries'=>$countries, 'agency'=>$agency]);
    }
    else{
        return redirect()->route('adminlogin');
    }
  }

  public function changestate(Request $request)
  {
        $this->sessionchecker();
        $states = State::where('country_id', $request->id)->orderby('name','asc')->get();
        return view('dashboard.ChangeState')->with(['states'=>$states]);
  }

  public function changecity(Request $request)
  {
        $this->sessionchecker();
        $cities = City::where('state_id', $request->id)->orderby('name','asc')->get();
        return view('dashboard.ChangeCity')->with(['cities'=>$cities]);

  }


  public function updatelocationemployee(Request $request)
  {
    $this->sessionchecker();
    $employee = Employee::where('addedsecond', session("addedsecond"))->first();
    $employee->state_id = $request->state_id;
    $employee->city_id = $request->city_id;
    $employee->country_id = $request->country_id;
    $employee->zip = $request->zip;
    $employee->dob = $request->dob;
    $employee->ssn = $request->ssn;
    $employee->hire_date = $request->hire_date;
    $employee->pay_rate = $request->pay_rate;
    $employee->address_line = $request->address_line;
    $employee->address_line_two = $request->address_line_two;
    $employee->timezone = $request->timezone;
    if($employee->save())
    {
        echo "yea";
    } 
  }


  public function viewemployees()
  {
    if(!session('id'))
    {
      return redirect()->route('adminlogin');
    }
    $employees = Employee::where('agency_id', session('agency_id'))->get();
    foreach($employees as $one)
    {
      $state = State::where('id', $one->state_id)->first();
      $city = City::where('id', $one->city_id)->first();
      $zone = Zone::where('id',$one->zone_id)->first();
   

      $one->city = ($city == NULL)? "" : $city->name;
      $one->state = ($state == NULL)? "" : $state->name;
      $one->zone = ($zone == NULL)? "" : $zone->name;
      
    }
    return view('dashboard.view_employees')->with(['emp'=>$employees]);
  }

  public function view_employee_details($addedsecond)
  {
    
     session(['addedsecond'=>$addedsecond]);
      return redirect()->route('dashboard_employee_update');

  }

  public function loadadvancedformforemployee(Request $request)
  {
     $this->sessionchecker();
      $employee = Employee::where('addedsecond', session("addedsecond"))->first();
      $user = User::where('id',session('id'))->first();
      $zones = Zone::where('agency_id', session('agency_id'))->get();
      $user = User::where('id',session('id'))->first();
      $agency = Agency::where('id', $user->agency_id)->first();
     return view('dashboard.dashboard_employee_advanced_form')->with([ 'employee'=>$employee, 'addedsecond'=>session("addedsecond"), 'staff'=>$user, 'zones'=>$zones,  'agency'=>$agency]);
  }

  public function updateemployeeadvanced(Request $request)
  {
    $this->sessionchecker();
    $employee = Employee::where('addedsecond', $request->addedsecond)->first();
    $employee->phone = $request->phone;
    $employee->agency_employer_id = $request->agency_employer_id;
    $employee->external_code_1 = $request->external_code_1;
    $employee->external_code_2 = $request->external_code_2;
    $employee->how_to_notify = $request->how_to_notify;
    $employee->notify_when = $request->notify_when;
    $employee->save();
  }

  public function loadcertifications(Request $request)
  {
    $this->sessionchecker();
    $employee = Employee::where('addedsecond', session("addedsecond"))->first();
    $user = User::where('id',session('id'))->first();
    $zones = Zone::where('agency_id', session('agency_id'))->get();
    $user = User::where('id',session('id'))->first();
    $agency = Agency::where('id', $user->agency_id)->first();
    $certifications =  Employeecertification::where('addedsecond',$employee->addedsecond)->get();
    return view('dashboard.employee_cerifications')->with(['certifications'=>$certifications, 'employee'=>$employee, 'addedsecond'=>session("addedsecond"), 'staff'=>$user, 'zones'=>$zones,  'agency'=>$agency]);
  }


  public function AWSLinkHelper()
  {
     return "https://" . "africansights". ".s3".".". "us-east-1" ."."."amazonaws.com/";
     
  }


  public function uploadfile(Request $request)
  {
        $this->validate($request, [

          'image' => 'required|mimes:pdf,png,jpg,jpeg',
      ]);

      

           $base_location = 'uploads';

            // Handle File Upload
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $mime = $file->getClientMimeType();
                $documentPath = $request->file('image')->store($base_location, 's3');
                $filename = explode("/", $documentPath);
                $filename =  $filename[1];
                //We save new path
              
              
                $awsurl = $this->AWSLinkHelper();
                $pri = new Employeecertification();
                $pri->certificate_date = $request->certificate_date;
                $pri->file = $awsurl.$documentPath;
                $pri->certificate_date = $request->certificate_date;
                $pri->file = $awsurl.$documentPath;
                $pri->expiry_date = $request->expiry_date;
                $pri->notes = $request->notes;
                $pri->name = $request->name;
                $pri->makeinactiveifexpired = $request->makeinactiveifexpired;
                $pri->addedsecond = $request->addedsecond;
                $pri->addedby = session('id');
                $pri->uploadmime = $mime;
                $pri->save();
            } 

      }



      public function addmember($addedtime,$rand)
      {
       if(session('id'))
       {
         $user = User::where('id',session('id'))->first();
         $zones = Zone::where('agency_id', session('agency_id'))->get();
         $user = User::where('id',session('id'))->first();
         $agency = Agency::where('id', $user->agency_id)->first();
         $state = State::where('id',$agency->state_id)->first();
         $city = city::where('id',$agency->city_id)->first();
         $country = Country::where('id',$agency->country_id)->first();
         $countries = Country::all();
         $us = Country::where('id',233)->first();
         $otherstates = State::where('country_id', $agency->country_id)->get();
         $othercities = City::where('state_id', $agency->state_id)->get();
         $fac = Facility::where('agency_id', $user->agency_id)->get();
   
        return view('dashboard.add_member')->with(['fac'=>$fac, 'addedtime'=>$addedtime, 'staff'=>$user, 'zones'=>$zones, 'othercities'=>$othercities, 'otherstates'=>$otherstates,  'country'=>$country, 'city'=>$city, 'state'=>$state, 'us'=>$us, 'countries'=>$countries, 'agency'=>$agency]);
       }
       else{
           return redirect()->route('adminlogin');
       }
      }

      public function addmembergeneral(Request $request)
      {
        

       $this->sessionchecker();
        $chekemail = User::where('email',$request->email)->first();
        if($chekemail != NULL)
        {
            echo "email taken"; return;
        }

    
        $password = substr(str_shuffle("123abcdefghjkmnopqrstuvwxyz"),6);
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->role = 10;
        $user->email = $request->email;
        $user->password = bcrypt($password);
        $user->random =  base64_encode($password);
        $user->agency_id = session('agency_id');

        if($user->save())
        {
        $mem = new Members();
        $mem->user_id = $user->id;
        $mem->firstname = $request->firstname;
        $mem->lastname = $request->lastname;
        $mem->middlename = $request->middlename;
        $mem->email = $user->email;
        $mem->agency_id = $user->agency_id;
        $mem->zone_id = $request->zone_id;
        $mem->physician_firstname = $request->physician_firstname;    
        $mem->physician_lastname = $request->physician_lastname;
        $mem->physician_npi = $request->physician_npi;
        $mem->current_status = 'active';
        $mem->default_facility = $request->facility_id;
        $mem->addedtime = $request->addedtime;
        $mem->jobname = $request->jobname;
        $mem->added_by =  session('id');
        $mem->contact_name = $request->contact_name;
        $mem->intake_date = $request->intakedate;
        $mem->discharge_date = $request->dischargedate;
        $mem->jobcode = $request->jobcode;


          if($mem->save())
          {
            
            session(['addedtime'=>$request->addedtime]);
            echo "yea";
          }

        }
      }


      public function viewmembers()
      {
        if(!session('id'))
        {
          return redirect()->route('adminlogin');
        }
        $mem = Members::where('agency_id', session('agency_id'))->get();
        foreach($mem as $one)
        {
          $state = State::where('id', $one->state_id)->first();
          $city = City::where('id', $one->city_id)->first();
          $zone = Zone::where('id',$one->zone_id)->first();
       
    
          $one->city = ($city == NULL)? "" : $city->name;
          $one->state = ($state == NULL)? "" : $state->name;
          $one->zone = ($zone == NULL)? "" : $zone->name;
          
        }
        return view('dashboard.view_members')->with(['mem'=>$mem]);
      }



}
