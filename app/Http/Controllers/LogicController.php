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

   

   public function addemployee($addedsecond)
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

    

        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = bcrypt($request->addedsecond);
        $user->random =  base64_encode($request->addedsecond);
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
    return view('dashboard.viewemployees')->with(['timezones'=>$employees]);
  }

  public function loadadvancedformforemployee(Request $request)
  {
    if(session('id'))
    {
      $employee = Employee::where('addedsecond', session("addedsecond"))->first();
      $user = User::where('id',session('id'))->first();
      $zones = Zone::where('agency_id', session('agency_id'))->get();
      $user = User::where('id',session('id'))->first();
      $agency = Agency::where('id', $user->agency_id)->first();
     
    

     return view('dashboard.dashboard_employee_advanced_form')->with([ 'employee'=>$employee, 'addedsecond'=>session("addedsecond"), 'staff'=>$user, 'zones'=>$zones,  'agency'=>$agency]);
    }
    else{
        return redirect()->route('adminlogin');
    }
  }



}
