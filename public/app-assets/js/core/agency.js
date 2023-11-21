function sessionchecker(message)
{
	if(message == 'expired session, please log in again')
  {
      window.location.href = site;
  }
}


function doXHREvents(xmls)
{

      xmls.onloadstart = function (e)
      {
        document.getElementById("loader").style.display = 'block';

      }
      xmls.onloadend = function (e)
      {
          document.getElementById("loader").style.display = 'none';

      }
      xmls.onerror = function() {
      alert("The Network is Bad and Request failed, Sorry about that");
        document.getElementById("loader").style.display = 'none';
      }
}



function ReportError(msg, area)
{
		document.getElementById(area).innerHTML = msg;
		setTimeout(function (){ document.getElementById(area).innerHTML = ''}, 4000);
    return;
}


function addzone()
{
  
  var zone = document.getElementById('zone').value;

  if(zone == ''){ReportError('zone is required','errorformobile') ; return;}

  var url = site + "/processaddzone";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);
  fd = new FormData();

  fd.append("name",zone);

   xml.setRequestHeader("X-CSRF-TOKEN", t);
    xml.onreadystatechange = function()
    {
        if(xml.status == 419)
        {
          location.reload();
        }
       if(xml.readyState == 4 && xml.status == 200)
       {
         if(xml.responseText == "yea")
        {
            window.location.href =  site + "/dashboard/viewzones";
        }
        else
        {
          ReportError('something went wrong','errorformobile') ; return;
        }
       }

    }
    xml.send(fd);
}


function addemployeegeneral(addedsecond)
{
  var url = site + "/agency/addemployeegeneral";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);
 

  var firstname = document.getElementById('firstname').value;
  var lastname= document.getElementById('lastname').value;
  var email= document.getElementById('email').value;
  var zone_id = document.getElementById('zone_id').value;
  var language= document.getElementById('language').value;
  var status = document.getElementById('status').value;
  var skilled_or_noneskilled = document.getElementById('skilled_or_noneskilled').value;
  var clockoutsafeguard = document.getElementById('clockoutsafeguard').value;
  var gender = document.getElementById('gender').value;
  var role = document.getElementById('role').value;

  if(firstname == ""){  ReportError("firstname is required","err"); return; }
  if(lastname== ""){  ReportError("lastname is required","err"); return; }
  if(email ==""){  ReportError("email is required","err");  return; }
  if(zone_id ==""){  alert("Please Select Zone"); return; }
  if(gender ==""){  ReportError("gender is required","err");  return; }
  if(role ==""){  ReportError("Role is required","err");  return; }
 

 fd = new FormData();
 fd.append("firstname",firstname);
 fd.append("lastname",lastname);
 fd.append("email",email);
 fd.append("zone_id",zone_id);
 fd.append("language",language);
 fd.append("skilled_or_noneskilled",skilled_or_noneskilled);
 fd.append("gender",gender);
 fd.append("status",status);
 fd.append("clockoutsafeguard",clockoutsafeguard);
 fd.append("addedsecond",addedsecond);
 fd.append("role",role);

 xml.setRequestHeader("X-CSRF-TOKEN", t);
 xml.onreadystatechange = function()
 {
     if(xml.status == 419)
     {
       location.reload();
     }
    if(xml.readyState == 4 && xml.status == 200)
    {
      if(xml.responseText == "yea")
     {
         window.location.href =  site + "/dashboard/employee/update";
     }
     if(xml.responseText == "email taken")
     {
      ReportError('email taken','err') ; return;
     }
    
    }

 }
 xml.send(fd);

}


function changeState(id)
{
  if(id == ""){  alert("Please Select Country"); return; }
  var url = site + "/agency/changestate";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);
  fd = new FormData();

  fd.append("id",id);
  

    doXHREvents(xml);
     xml.setRequestHeader("X-CSRF-TOKEN", t);
 		 xml.onreadystatechange = function()
 		 {
       if(xml.status == 419)
       {
         location.reload();
       }
 				if(xml.readyState == 4 && xml.status == 200)
 				{
            document.getElementById("sstate").innerHTML = xml.responseText;
 				}

 		 }
 		 xml.send(fd);
}




function changeCity(id)
{
  
  if(id == ""){  alert("Please Select State"); return; }
  var url = site + "/agency/changecity";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);
  fd = new FormData();

  fd.append("id",id);
  

    doXHREvents(xml);
     xml.setRequestHeader("X-CSRF-TOKEN", t);
 		 xml.onreadystatechange = function()
 		 {
       if(xml.status == 419)
       {
         location.reload();
       }
 				if(xml.readyState == 4 && xml.status == 200)
 				{
            document.getElementById("ccity").innerHTML = xml.responseText;
 				}

 		 }
 		 xml.send(fd);
}


function updateLocationEmployee(addedsecond)
{
  var url = site + "/agency/updatelocationemployee";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);
 

  var address_line = document.getElementById('address_line').value;
  var address_line_two = document.getElementById('address_line_two').value;
  var city_id = document.getElementById('city_id').value;
  var country_id = document.getElementById('country_id').value;
  var state_id = document.getElementById('state_id').value;
  var ssn = document.getElementById('ssn').value;
  var zip = document.getElementById('zip').value;
  var hire_date = document.getElementById('hire_date').value;
  var dob = document.getElementById('dob').value;
  var timezone = document.getElementById('timezone').value;
  var pay_rate = document.getElementById('pay_rate').value;

  if(address_line == ""){  ReportError("address line is required","err"); return; }
  if(address_line_two == ""){  ReportError("address line two is required","err"); return; }
  if(city_id ==""){  ReportError("Please select city","err");  return; }
  if(state_id ==""){  alert("Please Select state"); return; }
  if(country_id ==""){  ReportError("Please select Country","err");  return; }
  if(ssn ==""){  ReportError("SSN  is required","err");  return; }
  if(zip ==""){  ReportError("ZIP is required","err");  return; }
  if(hire_date ==""){  alert("Hire date is required"); return; }
  if(dob ==""){  ReportError("Date of Birth is required","err");  return; }
  if(timezone ==""){  ReportError("timezone is required","err");  return; }
  if(pay_rate ==""){  ReportError("pay_rate is required","err");  return; }
 

 fd = new FormData();
 fd.append("address_line",address_line);
 fd.append("address_line_two", address_line_two);
 fd.append("city_id", city_id);
 fd.append("state_id",state_id);
 fd.append("country_id",country_id);
 fd.append("ssn",ssn);
 fd.append("zip",zip);
 fd.append("hire_date",hire_date);
 fd.append("dob", dob);
 fd.append("timezone",timezone);
 fd.append("pay_rate",pay_rate);

 xml.setRequestHeader("X-CSRF-TOKEN", t);
 xml.onreadystatechange = function()
 {
     if(xml.status == 419)
     {
       location.reload();
     }
    if(xml.readyState == 4 && xml.status == 200)
    {
      if(xml.responseText == "yea")
     {
      ReportError('Location data updated','err') ; return;
     }
     if(xml.responseText == "email taken")
     {
      ReportError('email taken','err') ; return;
     }
    
    }

 }
 xml.send(fd);
}











/////////////////////////////
///neww/////////////////////







 function updatestageone()
 {

  var url = site + "/agency/updatestageone";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);



  var agencyname = document.getElementById('agencyname').value;
  var address_line_one = document.getElementById('address_line_one').value;
  var address_line_two = document.getElementById('address_line_two').value;
  var countryid = document.getElementById('countryid').value;
  var stateid = document.getElementById('stateid').value;
  var cityid = document.getElementById('cityid').value;
  var zip = document.getElementById('zip').value;
  var contact_name = document.getElementById('contact_name').value;
  var contact_email = document.getElementById('contact_email').value;
  var contact_phone = document.getElementById('contact_phone').value;
  var telephone = document.getElementById('telephone').value;

  if(agencyname == ""){  alert("Please Select agencyname"); return; }
  if(address_line_one== ""){  alert("Please Select line one"); return; }
  if(countryid ==""){  alert("Please Select country id"); return; }
  if(stateid ==""){  alert("Please Select Country"); return; }
  if(contact_name ==""){  alert("Please Select Contact name"); return; }
  if(contact_email==""){  alert("Please Select contact email"); return; }
  if(contact_phone==""){  alert("Please Select contact phone"); return; }
  if(telephone==""){  alert("Please Select telephone"); return; }

  

  fd = new FormData();
  fd.append("agencyname",agencyname);
  fd.append("address_line_one",address_line_one);
  fd.append("address_line_two",address_line_two);
  fd.append("countryid",countryid);
  fd.append("stateid",stateid);
  fd.append("cityid",cityid);
  fd.append("zip",zip);
  fd.append("contact_name",contact_name);
  fd.append("contact_email",contact_email);
  fd.append("contact_phone",contact_phone);
  fd.append("telephone",telephone);


  doXHREvents(xml);
  xml.setRequestHeader("X-CSRF-TOKEN", t);
   xml.onreadystatechange = function()
   {
    if(xml.status == 419)
    {
      location.reload();
    }
      if(xml.readyState == 4 && xml.status == 200)
      {
         alert("General data updated, you can move to next tab");
      }

   }

   xml.send(fd);

  
 }




 function configuration()
 {

  var url = site + "/agency/configuration";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);



  var duration = document.getElementById('duration').value;
 // var overtime = document.querySelector('input[name = overtime]:checked').value;
 // var budget = document.querySelector('input[name = budget]:checked').value;
 // var schedule_defualt_view= document.querySelector('input[name = schedule]:checked').value;
 // var popular_shift = document.querySelector('input[name = shift]:checked').value;
 // var live_in = document.querySelector('input[name = live]:checked').value;
  //var timecard = document.querySelector('input[name = timecard]:checked').value;
 // var split_snapshot = document.querySelector('input[name = snapshot]:checked').value;
  var certification_alert= document.getElementById('certified').value;
  //var sort_report_by= document.querySelector('input[name = report]:checked').value;
 // var job_name_preference = document.querySelector('input[name = preference]:checked').value;
 // var nones = document.getElementById('nones').value;
  //var zonelevel_snapshot = document.querySelector('input[name = zonelevel]:checked').value;
 // var zone_type = document.querySelector('input[name = zone]:checked').value;
 // var enable_billing = document.querySelector('input[name = billing]:checked').value;
  var default_billing = document.getElementById('debilling').value;
  var default_invoice_type = document.getElementById('invoicetype').value;
  var default_hourly_rate = document.getElementById('hourlyrate').value;
  //var payroll_period = document.querySelector('input[name = quater]:checked').value;
  var work_week_start = document.getElementById('weekly').value;
  var state_setting = document.getElementById('setting').value;
 // var snapshot_based_on = document.querySelector('input[name = base]:checked').value;

 var snapshot_based_on  =
 document.getElementsByName('base');
    var snap_base = "";
    for (var i = 0; i < snapshot_based_on .length; i++) {
     if (snapshot_based_on [i].checked) {
       snap_base += snapshot_based_on [i].value
          + " " + " ";
        }
      }

   if(snap_base ==  "")
 {
    alert("please provide Snapshot_based_on"); return;
 }


 var payroll_period =
 document.getElementsByName('quater');
    var pay_per= "";
    for (var i = 0; i < payroll_period.length; i++) {
     if (payroll_period [i].checked) {
       pay_per += payroll_period[i].value
          + " " + " ";
        }
      }

   if(pay_per==  "")
 {
    alert("please provide Payroll period"); return;
 }



 var enable_billing =
 document.getElementsByName('billing');
    var enabi= "";
    for (var i = 0; i < enable_billing.length; i++) {
     if (enable_billing[i].checked) {
       enabi += enable_billing[i].value
          + " " + " ";
        }
      }

   if(enabi==  "")
 {
    alert("please provide Enable Billing"); return;
 }



 var zone_type =
 document.getElementsByName('zone');
    var zonpe= "";
    for (var i = 0; i < zone_type.length; i++) {
     if (zone_type[i].checked) {
       zonpe += zone_type[i].value
          + " " + " ";
        }
      }

   if(zonpe==  "")
 {
    alert("please provide Zone Type"); return;
 }



 var zonelevel_snapshot =
 document.getElementsByName('zonelevel');
    var zolevel= "";
    for (var i = 0; i < zonelevel_snapshot.length; i++) {
     if (zonelevel_snapshot[i].checked) {
       zolevel += zonelevel_snapshot[i].value
          + " " + " ";
        }
      }

   if(zolevel==  "")
 {
   // alert("please provide Zonelevel Snapshot"); return;
 }



 var job_name_preference  =
 document.getElementsByName('preference');
    var prejob= "";
    for (var i = 0; i < job_name_preference .length; i++) {
     if (job_name_preference [i].checked) {
       prejob += job_name_preference [i].value
          + " " + " ";
        }
      }

   if(prejob==  "")
 {
    alert("please provide Job Name Preference"); return;
 }



 var sort_report_by =
 document.getElementsByName('report');
    var sorep= "";
    for (var i = 0; i < sort_report_by .length; i++) {
     if (sort_report_by [i].checked) {
       sorep += sort_report_by[i].value
          + " " + " ";
        }
      }

   if(sorep==  "")
 {
    alert("please provide Sort Report By"); return;
 }
  


 var split_snapshot =
 document.getElementsByName('snapshot');
    var splinap= "";
    for (var i = 0; i < split_snapshot.length; i++) {
     if (split_snapshot [i].checked) {
      splinap += split_snapshot[i].value
          + " " + " ";
        }
      }

   if(splinap==  "")
 {
    alert("please provide Split Snapshot"); return;
 }


 var timecar =
 document.getElementsByName('timecard');
    var timca= "";
    for (var i = 0; i < timecar.length; i++) {
     if (timecar [i].checked) {
      timca += timecar[i].value
          + " " + " ";
        }
      }

   if(timca==  "")
 {
    alert("please provide Timecard"); return;
 }


 var live_in =
 document.getElementsByName('live');
    var liin= "";
    for (var i = 0; i < live_in.length; i++) {
     if (live_in[i].checked) {
      liin += live_in[i].value
          + " " + " ";
        }
      }

   if(liin==  "")
 {
    alert("please provide Live In"); return;
 }



 var popular_shift =
 document.getElementsByName('shift');
    var poshi= "";
    for (var i = 0; i < popular_shift.length; i++) {
     if (popular_shift[i].checked) {
      poshi += popular_shift[i].value
          + " " + " ";
        }
      }

   if(poshi==  "")
 {
    alert("please provide Popular Shift"); return;
 }

 var  schedule_defualt_view =
 document.getElementsByName('schedule');
    var scde= "";
    for (var i = 0; i <  schedule_defualt_view.length; i++) {
     if ( schedule_defualt_view[i].checked) {
      scde +=  schedule_defualt_view[i].value
          + " " + " ";
        }
      }

   if(scde==  "")
 {
    alert("please provide  Schedule Defualt View"); return;
 }

 var  budge =
 document.getElementsByName('budget');
    var bud= "";
    for (var i = 0; i <  budge.length; i++) {
     if ( budge[i].checked) {
      bud +=  budge[i].value
          + " " + " ";
        }
      }

   if(bud==  "")
 {
    alert("please provide Budget"); return;
 }


 var  overti =
 document.getElementsByName('overtime');
    var ovet= "";
    for (var i = 0; i <  overti.length; i++) {
     if ( overti[i].checked) {
      ovet +=  overti[i].value
          + " " + " ";
        }
      }

   if(ovet==  "")
 {
    alert("please provide Overtime"); return;
 }


  if(duration == ""){  alert("Please Select Duration"); return; }
  if(ovet== ""){  alert("Please Select overtime"); return; }
  if(bud==""){  alert("Please Select budget"); return; }
  if(scde ==""){  alert("Please Select schedule defualt view"); return; }
  if(poshi ==""){  alert("Please Select popular shift"); return; }
  if(liin==""){  alert("Please Select live in"); return; }
  if(timca==""){  alert("Please Select timecard"); return; }
  if(splinap==""){  alert("Please Select split snapshot"); return; }
  if(certification_alert == ""){  alert("Please Select certification alert"); return; }
  if(sorep== ""){  alert("Please Select sort report"); return; }
  if(prejob ==""){  alert("Please Select job name preference"); return; }
 // if(zolevel ==""){  alert("Please Select zonelevel snapshot"); return; }
  if(zonpe ==""){  alert("Please Select zone type"); return; }
  if(enabi==""){  alert("Please Select enable billing"); return; }
  if(default_billing==""){  alert("Please Select defualt billing"); return; }
  if(default_invoice_type==""){  alert("Please Select defualt invoice type"); return; }
  if(default_hourly_rate == ""){  alert("Please Select defualt hourly rate"); return; }
  if(pay_per== ""){  alert("Please Select payroll period"); return; }
  if(work_week_start==""){  alert("Please Select work week start"); return; }
  if(state_setting ==""){  alert("Please Select state setting"); return; }
  if(snap_base ==""){  alert("Please Select snapshot based on"); return; }
 
  

  

  fd = new FormData();
  fd.append("default_billing",default_billing);
  fd.append("enable_alert",enabi);
  fd.append("week_start",work_week_start);
  fd.append("overtime_alert",ovet);
  fd.append("budget_alert",bud);
  fd.append("allow_timecard_split",timca);
  fd.append("clock_in_notification",duration);
  fd.append("default_hourly_rate",default_hourly_rate);
  fd.append("timezone",zolevel);
  fd.append("schedule_defualt_view",scde);
  fd.append("popular_shift",poshi);
  fd.append("live_in",liin);
  fd.append("split_snapshot",splinap);
  fd.append("certification_alert",certification_alert);
  fd.append("sort_report_by",sorep);
  fd.append("job_name_preference",prejob);
  fd.append("zone_type",zonpe);
  fd.append("defualt_invoice_type",default_invoice_type);
  fd.append("payroll_period",pay_per);
  fd.append("state_setting",state_setting);
  fd.append("snapshot_based_on",snap_base);

 


  doXHREvents(xml);
  xml.setRequestHeader("X-CSRF-TOKEN", t);
   xml.onreadystatechange = function()
   {
    if(xml.status == 419)
    {
      location.reload();
    }
      if(xml.readyState == 4 && xml.status == 200)
      {
         
         alert("Configuration data updated, you can move to next tab");
      }

   }
   console.log(fd);
   xml.send(fd);

  
 }







 function notification()
 {

  var url = site + "/agency/notification";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);



  var alert_title = document.getElementById('alert_title').value;
  var alert_details = document.getElementById('alert_details').value;
  var alert_type = document.getElementById('alert_type').value;
 // var status = document.querySelector('input[name = status]:checked').value;


 var stats =
  document.getElementsByName('status');
     var sas = "";
     for (var i = 0; i < stats.length; i++) {
      if (stats[i].checked) {
        sas += stats[i].value
           + " " + " ";
         }
       }

    if(sas ==  "")
  {
     alert("please provide Status"); return;
  }
  
  if(alert_title == ""){  alert("Please Select alert title"); return; }
  if(alert_details== ""){  alert("Please Select alert details"); return; }
  if(alert_type ==""){  alert("Please Select alert type"); return; }
  if(sas ==""){  alert("Please Select status"); return; }
  
  

  fd = new FormData();
  fd.append("alert_title",alert_title);
  fd.append("alert_details",alert_details);
  fd.append("alert_type",alert_type);
  fd.append("status",sas);
  

  doXHREvents(xml);
  xml.setRequestHeader("X-CSRF-TOKEN", t);
   xml.onreadystatechange = function()
   {
    if(xml.status == 419)
    {
      location.reload();
    }
      if(xml.readyState == 4 && xml.status == 200)
      {
         //document.getElementById("cityarea").innerHTML = xml.responseText;
         alert("Notification data updated, you can move to next tab");
      }

   }
   console.log(fd);
   xml.send(fd);

  
 }





 function threshold()
 {

  var url = site + "/agency/threshold";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);



 // var threshold_type = document.querySelector('input[name = threshold]:checked').value;
  var threshold_value = document.getElementById('threshold_value').value;
 

  var thresh =
  document.getElementsByName('threshold');
     var thre = "";
     for (var i = 0; i < thresh.length; i++) {
      if (thresh[i].checked) {
        thre += thresh[i].value
           + " " + " ";
         }
       }

    if(thre ==  "")
  {
     alert("please provide Threshold Type"); return;
  }
  
  if(thre == ""){  alert("Please Select threshold type"); return; }
  if(threshold_value== ""){  alert("Please Select threshold value"); return; }
  
  

  fd = new FormData();
  fd.append("threshold_type",thre);
  fd.append("threshold_value",threshold_value);
 
  

  doXHREvents(xml);
  xml.setRequestHeader("X-CSRF-TOKEN", t);
   xml.onreadystatechange = function()
   {
    if(xml.status == 419)
    {
      location.reload();
    }
      if(xml.readyState == 4 && xml.status == 200)
      {
         //document.getElementById("cityarea").innerHTML = xml.responseText;
         alert("Threshold data updated");
      }

   }
   console.log(fd);
   xml.send(fd);

  
 }







function processaddemployee()
{
 var holder = window.location.pathname.split("/").pop();
 if(holder.length != 10)
 {
  alert("Wrong Location"); return;
 }
 var url = site + "/agency/processaddemployee";
 var xml = new XMLHttpRequest();
 var t = document.getElementById('t_').value;
 var xml = new XMLHttpRequest();
 xml.open("POST", url, true);



 var firstname = document.getElementById('firstname').value;
 var lastname= document.getElementById('lastname').value;
 var email= document.getElementById('email').value;
 var zone = document.getElementById('zone_id').value;
 var language= document.getElementById('language').value;
 var level = document.getElementById('level').value;
 var skill = document.getElementById('skill').value;
 var faculty = document.getElementById('faculty').value;
 var checkout_safeguard = document.getElementById('checkout').value;
 var password = document.getElementById('password').value;


 var current_sta =
  document.getElementsByName('current_status');
     var curr_st = "";
     for (var i = 0; i < current_sta.length; i++) {
      if (current_sta[i].checked) {
        curr_st += current_sta[i].value
           + " " + " ";
         }
       }

    if(curr_st ==  "")
  {
     alert("please provide Current Status"); return;
  }

  var gend =
  document.getElementsByName('gender');
     var gen = "";
     for (var i = 0; i < gend.length; i++) {
      if (gend[i].checked) {
        gen += gend[i].value
           + " " + " ";
         }
       }

    if(gen ==  "")
  {
     alert("please provide Gender"); return;
  }



  if(firstname == ""){  alert("Please Select Firstname"); return; }
  if(lastname== ""){  alert("Please Select Lastname"); return; }
  if(email ==""){  alert("Please Select Email"); return; }
  if(zone ==""){  alert("Please Select Zone"); return; }
  if(language ==""){  alert("Please Select Contact language"); return; }
  if(level==""){  alert("Please Select Level"); return; }
  if(skill==""){  alert("Please Select Skill"); return; }
  if(faculty==""){  alert("Please Select Faculty"); return; }
  if(checkout_safeguard == ""){  alert("Please Select Checkout Safeguard"); return; }
  if(password== ""){  alert("Please Select Password"); return; }
  if(current_sta ==""){  alert("Please Select Current Status"); return; }
  if(gend ==""){  alert("Please Select Gender"); return; }
 

 fd = new FormData();
 fd.append("firstname",firstname);
 fd.append("lastname",lastname);
 fd.append("email",email);
 fd.append("zone",zone);
 fd.append("language",language);
 fd.append("level",level);
 fd.append("skill",skill);
 fd.append("faculty",faculty);
 fd.append("gender",gen);
 fd.append("current_status",curr_st);
 fd.append("checkout_safeguard",checkout_safeguard);
 fd.append("password",password);
 fd.append("holder",holder);



 doXHREvents(xml);
 xml.setRequestHeader("X-CSRF-TOKEN", t);
  xml.onreadystatechange = function()
  {
   if(xml.status == 419)
   {
     location.reload();
   }
     if(xml.readyState == 4 && xml.status == 200)
     {
        if(xml.responseText.includes("old"))
        {
          var datas = JSON.parse(xml.responseText);
          window.location.href = site + "/dashboard/edit_employee_data/locale/english/" +  datas.holder;
        }
        if(xml.responseText.includes("Error_"))
        {
            alert(xml.responseText)
        }

     }

  }
  console.log(fd);
  xml.send(fd);

 
}


function processEditEmployee()
{
  var holder = window.location.pathname.split("/").pop();
  if(holder.length != 10)
  {
   alert("Wrong Location"); return;
  }
  var url = site + "/agency/processeditemployee";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);
 
 
 
  var firstname = document.getElementById('firstname').value;
  var lastname= document.getElementById('lastname').value;
  var email= document.getElementById('email').value;
  var zone = document.getElementById('zone_id').value;
  var language= document.getElementById('language').value;
  var level = document.getElementById('level').value;
  var skill = document.getElementById('skill').value;
  var faculty = document.getElementById('faculty').value;
  var checkout_safeguard = document.getElementById('checkout').value;

 
 
  var current_sta =
   document.getElementsByName('current_status');
      var curr_st = "";
      for (var i = 0; i < current_sta.length; i++) {
       if (current_sta[i].checked) {
         curr_st += current_sta[i].value
            + " " + " ";
          }
        }
 
     if(curr_st ==  "")
   {
      alert("please provide Current Status"); return;
   }
 
   var gend =
   document.getElementsByName('gender');
      var gen = "";
      for (var i = 0; i < gend.length; i++) {
       if (gend[i].checked) {
         gen += gend[i].value
            + " " + " ";
          }
        }
 
     if(gen ==  "")
   {
      alert("please provide Gender"); return;
   }
 
 
 
   if(firstname == ""){  alert("Please Select Firstname"); return; }
   if(lastname== ""){  alert("Please Select Lastname"); return; }
   if(email ==""){  alert("Please Select Email"); return; }
   if(zone ==""){  alert("Please Select Zone"); return; }
   if(language ==""){  alert("Please Select Contact language"); return; }
   if(level==""){  alert("Please Select Level"); return; }
   if(skill==""){  alert("Please Select Skill"); return; }
   if(faculty==""){  alert("Please Select Faculty"); return; }
   if(checkout_safeguard == ""){  alert("Please Select Checkout Safeguard"); return; }
   if(current_sta ==""){  alert("Please Select Current Status"); return; }
   if(gend ==""){  alert("Please Select Gender"); return; }
  
 
  fd = new FormData();
  fd.append("firstname",firstname);
  fd.append("lastname",lastname);
  fd.append("email",email);
  fd.append("zone",zone);
  fd.append("language",language);
  fd.append("level",level);
  fd.append("skill",skill);
  fd.append("faculty",faculty);
  fd.append("gender",gen);
  fd.append("current_status",curr_st);
  fd.append("checkout_safeguard",checkout_safeguard);
  fd.append("holder",holder);
 
 
 
  doXHREvents(xml);
  xml.setRequestHeader("X-CSRF-TOKEN", t);
   xml.onreadystatechange = function()
   {
    if(xml.status == 419)
    {
      location.reload();
    }
      if(xml.readyState == 4 && xml.status == 200)
      {
        
         if(xml.responseText.includes("okk"))
         {
             alert("General tab updated, you move to other tab");
         }
 
      }
 
   }
   console.log(fd);
   xml.send(fd);
 
}






function updateaddemployeelocation()
{

  var holder = window.location.pathname.split("/").pop();
  if(holder.length != 10)
  {
   alert("Wrong Location"); return;
  }

 var url = site + "/agency/updateaddemployeelocation";
 var xml = new XMLHttpRequest();
 var t = document.getElementById('t_').value;
 var xml = new XMLHttpRequest();
 xml.open("POST", url, true);



 var address_line = document.getElementById('address_line').value;
 var address_line2= document.getElementById('address_line2').value;
 var country= document.getElementById('countryid').value;
 var state = document.getElementById('stateid').value;
 var city = document.getElementById('cityid').value;
 var zip = document.getElementById('zip').value;
 var timezone = document.getElementById('timezone').value;
 var ssn = document.getElementById('ssn').value;
 var pay_class = document.getElementById('pay_class').value;
 var pay_rate = document.getElementById('pay_rate').value;
 var hire_date = document.getElementById('hire_date').value;
 var birthday = document.getElementById('birthday').value;




   if(address_line == ""){  alert("Please Select Address Line"); return; }
  if(address_line2== ""){  alert("Please Select Address Line 2"); return; }
  if(country==""){  alert("Please Select Country"); return; }
  if(state ==""){  alert("Please Select State"); return; }
  if(city ==""){  alert("Please Select City"); return; }
  if(zip==""){  alert("Please Select Zip"); return; }
  if(timezone==""){  alert("Please Select Timezone"); return; }
  if(ssn==""){  alert("Please Select SSN"); return; }
  if(pay_class == ""){  alert("Please Select Pay Class"); return; }
  if(pay_rate== ""){  alert("Please Select Pay Rate"); return; }
 // if(hire_rate ==""){  alert("Please Select Hire Rate"); return; }
  if(birthday ==""){  alert("Please Select Birthday"); return; }
 

 

 

 fd = new FormData();
 fd.append("address_line",address_line);
 fd.append("address_line2",address_line2);
 fd.append("country",country);
 fd.append("state",state);
 fd.append("city",city);
 fd.append("zip",zip);
 fd.append("timezone",timezone);
 fd.append("ssn",ssn);
 fd.append("pay_class",pay_class);
 fd.append("pay_rate",pay_rate);
 fd.append("hire_date",hire_date);
 fd.append("birthday",birthday);
 fd.append("holder",holder);



 doXHREvents(xml);
 xml.setRequestHeader("X-CSRF-TOKEN", t);
  xml.onreadystatechange = function()
  {
   if(xml.status == 419)
   {
     location.reload();
   }
     if(xml.readyState == 4 && xml.status == 200)
     {

        alert("You have successfully updated employee location, continue by clicking other tabs.");
        //document.getElementById("cityarea").innerHTML = xml.responseText;
        alert(xml.responseText);
     }

  }
  console.log(fd);
  xml.send(fd);

 
}



function updateaddemployeeadvance()
 {
  var holder = window.location.pathname.split("/").pop();
  if(holder.length != 10)
  {
   alert("Wrong Location"); return;
  }

  var url = site + "/agency/updateaddemployeeadvance";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);

  var payroll_id= document.getElementById('payroll_id').value;
  var yrs_service= document.getElementById('yrs_service').value;
  var agency_emp_id= document.getElementById('agency_emp_id').value;
  var home_phone= document.getElementById('home_phone').value;
  var work_phone= document.getElementById('work_phone').value;
  var howtonotify =
  document.getElementsByName('notify');
     var result = "";
     for (var i = 0; i < howtonotify.length; i++) {
      if (howtonotify[i].checked) {
        result += howtonotify[i].value
           + " " + " ";
         }
       }

    if(result ==  "")
  {
     alert("please provide How to Notify"); return;
  }


  var notifystaff =
  document.getElementsByName('staff');
     var res = "";
     for (var i = 0; i < notifystaff.length; i++) {
      if (notifystaff[i].checked) {
        res += notifystaff[i].value
           + " " + " ";
         }
       }

    if(res ==  "")
  {
     alert("please provide Nofify Staff Detail"); return;
  }




  if(payroll_id == ""){  alert("Please Select Payroll ID"); return; }
  if(yrs_service== ""){  alert("Please Select Years of Service"); return; }
  if(agency_emp_id==""){  alert("Please Select Agency Emp.ID"); return; }
  if(home_phone ==""){  alert("Please Select Home Phone"); return; }
  if(work_phone ==""){  alert("Please Select Work Phone"); return; }
  if(res==""){  alert("Please Select Notify Staff When"); return; }
  if(result==""){  alert("Please Select How to Notify"); return; }
 
  
  fd = new FormData();
  fd.append("payroll_id",payroll_id);
  fd.append("yrs_service",yrs_service);
  fd.append("agency_emp_id",agency_emp_id);
  fd.append("home_phone",home_phone);
  fd.append("work_phone",work_phone);
  fd.append("notify_means",result);
  fd.append("notify_staff",res);
  fd.append("holder",holder);
 
 
  

  doXHREvents(xml);
  xml.setRequestHeader("X-CSRF-TOKEN", t);
   xml.onreadystatechange = function()
   {
    if(xml.status == 419)
    {
      location.reload();
    }
      if(xml.readyState == 4 && xml.status == 200)
      {

        alert("You have successfully updated employee, continue by clicking other tabs.");
         //document.getElementById("cityarea").innerHTML = xml.responseText;
         alert(xml.responseText);
      }

   }
   console.log(fd);
   xml.send(fd);

  
 }







 function updatepreference()
 {

  var holder = window.location.pathname.split("/").pop();
  if(holder.length != 10)
  {
   alert("Wrong Location"); return;
  }

  var url = site + "/agency/updatepreference";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);


  var allowpreference =
  document.getElementsByName('allow_preference');
     var result = "";
     for (var i = 0; i < allowpreference.length; i++) {
      if (allowpreference[i].checked) {
        result += allowpreference[i].value
           + " " + " ";
         }
       }

    if(result ==  "")
  {
     alert("please provide Employee Preference and Availability"); return;
  }


  var preference =
  document.getElementsByName('client_preference');
     var res = "";
     for (var i = 0; i < preference .length; i++) {
      if (preference [i].checked) {
        res += preference [i].value
           + " " + " ";
         }
       }

    if(res ==  "")
  {
     alert("please provide Client Preference"); return;
  }

  var available =
  document.getElementsByName('availability');
     var rese = "";
     for (var i = 0; i < available .length; i++) {
      if (available [i].checked) {
        rese += available [i].value
           + " " + " ";
         }
       }

    if(rese ==  "")
  {
     alert("please provide Availability"); return;
  }


  if(result == ""){  alert("Please Select Allow Employee to set Preferences and Availability"); return; }
  if(res== ""){  alert("Please Select Client Preferences"); return; }
  if(rese==""){  alert("Please Select Availability"); return; }
  
  fd = new FormData();
  fd.append("allow_employee_preference",result);
  fd.append("client_preference",res);
  fd.append("availability",rese);
  fd.append("holder",holder);
  
 
 
  

  doXHREvents(xml);
  xml.setRequestHeader("X-CSRF-TOKEN", t);
   xml.onreadystatechange = function()
   {
    if(xml.status == 419)
    {
      location.reload();
    }
      if(xml.readyState == 4 && xml.status == 200)
      {
        alert("You have successfully updated employee, continue by clicking other tabs.");
         //document.getElementById("cityarea").innerHTML = xml.responseText;
         alert(xml.responseText);
      }

   }
   console.log(fd);
   xml.send(fd);

  
 }





function updatecertification()
{

  var holder = window.location.pathname.split("/").pop();
  if(holder.length != 10)
  {
   alert("Wrong Location"); return;
  }

 var url = site + "/agency/updatecertification";
 var xml = new XMLHttpRequest();
 var t = document.getElementById('t_').value;
 var xml = new XMLHttpRequest();
 xml.open("POST", url, true);

 var certificate_name= document.getElementById('certificate_name').value;
 var certificate_date= document.getElementById('certificate_date').value;
 var retrieval_date= document.getElementById('retrieval_date').value;
 var certificate_note= document.getElementById('certificate_note').value
 
 
 var make_expired =
 document.getElementsByName('if_expired');
    var result = "";
    for (var i = 0; i < make_expired.length; i++) {
     if (make_expired[i].checked) {
       result += make_expired[i].value
          + " " + " ";
        }
      }

   if(result ==  "")
 {
    alert("please provide Make Inactive if Expired"); return;
 }


 if(certificate_name == ""){  alert("Please Select Certification Name"); return; }
 if(certificate_date== ""){  alert("Please Select Certification Date"); return; }
 if(retrieval_date==""){  alert("Please Select Retrieval Date"); return; }
 if( certificate_note ==""){  alert("Please Select Notes "); return; }
 if(result ==""){  alert("Please Select Make Inactive If Expired"); return; }
 


 
 fd = new FormData();
 fd.append("certificate_name",certificate_name);
 fd.append("certificate_date",certificate_date);
 fd.append("retrieval_date",retrieval_date);
 fd.append("certificate_note",certificate_note);
 fd.append("make_expired",result);
 fd.append("holder",holder);
 


 

 doXHREvents(xml);
 xml.setRequestHeader("X-CSRF-TOKEN", t);
  xml.onreadystatechange = function()
  {
   if(xml.status == 419)
   {
     location.reload();
   }
     if(xml.readyState == 4 && xml.status == 200)
     {

       alert("You have successfully updated employee, continue by clicking other tab.");
        //document.getElementById("cityarea").innerHTML = xml.responseText;
        alert(xml.responseText);
     }

  }
  console.log(fd);
  xml.send(fd);

 
}




function addmembers()
{

 var url = site + "/members/addmembers";
 var xml = new XMLHttpRequest();
 var t = document.getElementById('t_').value;
 var xml = new XMLHttpRequest();
 xml.open("POST", url, true);

 var firstname= document.getElementById('firstname').value;
 var middlename= document.getElementById('middlename').value;
 var lastname= document.getElementById('lastname').value;
 var email= document.getElementById('email').value
 var job_name= document.getElementById('job_name').value;
 var job_zone= document.getElementById('job_zone').value;
 var d_facility= document.getElementById('d_facility').value;
 var contact_name= document.getElementById('contact_name').value;
 var intake_date= document.getElementById('intake_date').value;
 var discharge_date= document.getElementById('discharge_date').value;
 var physician_firstname= document.getElementById('physician_firstname').value;
 var  physician_lastname= document.getElementById('physician_lastname').value;
 var npi= document.getElementById('npi').value;
 var password= document.getElementById('password').value;
 
 
 var show_only_scheduled_visits =
 document.getElementsByName('show_only_scheduled');
    var show_only = "";
    for (var i = 0; i < show_only_scheduled_visits.length; i++) {
     if (show_only_scheduled_visits[i].checked) {
       show_only += show_only_scheduled_visits[i].value
          + " " + " ";
        }
      }

   if(show_only ==  "")
 {
    alert("please provide Show only scheduled visits"); return;
 }



 var allow_location_exception_offsite =
 document.getElementsByName('allow_location_exception');
    var allow_location= "";
    for (var i = 0; i < allow_location_exception_offsite.length; i++) {
     if (allow_location_exception_offsite[i].checked) {
      allow_location+= allow_location_exception_offsite[i].value
          + " " + " ";
        }
      }

   if(allow_location ==  "")
 {
    alert("please provide Allow Location Exceptions for Offsite Visits"); return;
 }


 var require_bluetooth_device_visits =
 document.getElementsByName('require_bluetooth_device');
    var require_bluetooth= "";
    for (var i = 0; i < require_bluetooth_device_visits.length; i++) {
     if (require_bluetooth_device_visits[i].checked) {
      require_bluetooth+= require_bluetooth_device_visits[i].value
          + " " + " ";
        }
      }

   if(require_bluetooth ==  "")
 {
    alert("please provide Require Bluetooth Device for Visits"); return;
 }



 var allow_employees_clockout_job =
 document.getElementsByName('allow_employees_clockout');
    var allow_employee= "";
    for (var i = 0; i < allow_employees_clockout_job .length; i++) {
     if (allow_employees_clockout_job [i].checked) {
      allow_employee+= allow_employees_clockout_job [i].value
          + " " + " ";
        }
      }

   if(allow_employee ==  "")
 {
    alert("please provide Allow Employees to Clockout from Job While Offsite"); return;
 }


 var employee_chart =
 document.getElementsByName('employee_charting');
    var charting= "";
    for (var i = 0; i < employee_chart.length; i++) {
     if (employee_chart[i].checked) {
      charting+= employee_chart[i].value
          + " " + " ";
        }
      }

   if(charting ==  "")
 {
    alert("please provide Employee Charting "); return;
 }



 var stat =
 document.getElementsByName('status');
    var sat= "";
    for (var i = 0; i < stat.length; i++) {
     if (stat[i].checked) {
      sat+= stat[i].value
          + " " + " ";
        }
      }

   if(sat ==  "")
 {
    alert("please provide Employee Charting "); return;
 }


 if(firstname == ""){  alert("Please Select Firstname"); return; }
 if(middlename== ""){  alert("Please Select Middlename"); return; }
 if(lastname==""){  alert("Please Select Lastname"); return; }
 if( email ==""){  alert("Please Select Email "); return; }
 if(job_name ==""){  alert("Please Select Job Name"); return; }
 if(job_zone == ""){  alert("Please Select Job Zone"); return; }
 if(d_facility== ""){  alert("Please Select Defualt Facility"); return; }
 if(contact_name==""){  alert("Please Select Contact Name"); return; }
 if( intake_date ==""){  alert("Please Select Intake Date "); return; }
 if(discharge_date ==""){  alert("Please Select Discharge Date"); return; }
 if(physician_firstname == ""){  alert("Please Select Physician Firstname"); return; }
 if(physician_lastname== ""){  alert("Please Select Physician Lastname"); return; }
 if(npi==""){  alert("Please Select NPI"); return; }
 if( password ==""){  alert("Please Select Password"); return; }
 if(show_only ==""){  alert("Please Select Show Only Scheduled Visits"); return; }
 if(allow_location== ""){  alert("Please Select Allow Location Exceptions for Offsite Visits"); return; }
 if(require_bluetooth== ""){  alert("Please Select Require Bluetooth Device for Visits"); return; }
 if(allow_employee== ""){  alert("Please Select Allow Employees to Clockout from Job While Offsite"); return; }
 if(charting==""){  alert("Please Select Employee Charting"); return; }
 if( sat ==""){  alert("Please Select Status "); return; }
 

 




 
 fd = new FormData();
 fd.append("firstname",firstname);
 fd.append("middlename",middlename);
 fd.append("lastname",lastname);
 fd.append("email",email);
 fd.append("job_name",job_name);
 fd.append("job_zone",job_zone);
 fd.append("d_facility",d_facility);
 fd.append("contact_name",contact_name);
 fd.append("intake_date",intake_date);
 fd.append("discharge_date",discharge_date);
 fd.append("physician_firstname",physician_firstname);
 fd.append("physician_lastname",physician_lastname);
 fd.append("npi",npi);
 fd.append("password",password);
 fd.append("show_only",show_only);
 fd.append("allow_location",allow_location);
 fd.append("require_bluetooth",require_bluetooth);
 fd.append("allow_employee",allow_employee);
 fd.append("charting",charting);
 fd.append("sat",sat);
 


 

 doXHREvents(xml);
 xml.setRequestHeader("X-CSRF-TOKEN", t);
  xml.onreadystatechange = function()
  {
   if(xml.status == 419)
   {
     location.reload();
   }
     if(xml.readyState == 4 && xml.status == 200)
     {

       alert("You have successfully added member, continue by clicking other tab.");
        //document.getElementById("cityarea").innerHTML = xml.responseText;
        alert(xml.responseText);
     }

  }
  console.log(fd);
  xml.send(fd);

 
}






function updatememberlocation()
{

 var url = site + "/members/updatememberlocation";
 var xml = new XMLHttpRequest();
 var t = document.getElementById('t_').value;
 var xml = new XMLHttpRequest();
 xml.open("POST", url, true);

 var address_line= document.getElementById('address_line').value;
 var address_line2= document.getElementById('address_line2').value;
 var countryid= document.getElementById('countryid').value;
 var stateid= document.getElementById('stateid').value
 var cityid= document.getElementById('cityid').value;
 var zip= document.getElementById('zip').value;
 var country= document.getElementById('country').value;
 var timezone= document.getElementById('timezone').value;
 var authorize_phone= document.getElementById('authorize_phone').value;
 var validator= document.getElementById('validator').value;
 var birthday= document.getElementById('birthday').value;
 var gender= document.getElementById('gender').value;
 var ssn= document.getElementById('ssn').value;
 var cell_phone= document.getElementById('cell_phone').value;
 var work_phone= document.getElementById('work_phone').value;
 

 if(address_line == ""){  alert("Please Select Address Line"); return; }
 if(address_line2== ""){  alert("Please Select Address Line 2"); return; }
 if(countryid==""){  alert("Please Select Country"); return; }
 if(stateid ==""){  alert("Please Select State"); return; }
 if(cityid ==""){  alert("Please Select City"); return; }
 if(zip==""){  alert("Please Select Zip"); return; }
 if(country==""){  alert("Please Select Country"); return; }
 if(timezone==""){  alert("Please Select Timezone"); return; }
 if(ssn==""){  alert("Please Select SSN"); return; }
 if( authorize_phone == ""){  alert("Please Select Authorize Phone"); return; }
 if(validator== ""){  alert("Please Select Validator"); return; }
 if(gender ==""){  alert("Please Select Gender"); return; }
 if(birthday ==""){  alert("Please Select Birthday"); return; }
 if(cell_phone ==""){  alert("Please Select Cell Phone"); return; }
 if(work_phone ==""){  alert("Please Select Work Phone"); return; }

 





 
 fd = new FormData();
 fd.append("address_line",address_line);
 fd.append("address_line2",address_line2);
 fd.append("countryid",countryid);
 fd.append("stateid",stateid);
 fd.append("cityid",cityid);
 fd.append("zip",zip);
 fd.append("country",country);
 fd.append("timezone",timezone);
 fd.append("authorize_phone",authorize_phone);
 fd.append("validator",validator);
 fd.append(" birthday", birthday);
 fd.append(" ssn", ssn);
 fd.append("gender",gender);
 fd.append(" cell_phone", cell_phone);
 fd.append("work_phone",work_phone);

 


 

 doXHREvents(xml);
 xml.setRequestHeader("X-CSRF-TOKEN", t);
  xml.onreadystatechange = function()
  {
   if(xml.status == 419)
   {
     location.reload();
   }
     if(xml.readyState == 4 && xml.status == 200)
     {

       alert("You have successfully updated member, continue by clicking other tab.");
        //document.getElementById("cityarea").innerHTML = xml.responseText;
        alert(xml.responseText);
     }

  }
  console.log(fd);
  xml.send(fd);

 
}




function updatememberadvance()
{

 var url = site + "/members/updatememberadvance";
 var xml = new XMLHttpRequest();
 var t = document.getElementById('t_').value;
 var xml = new XMLHttpRequest();
 xml.open("POST", url, true);

 var medical_id= document.getElementById('medical_id').value;
 var medica_number= document.getElementById('medica_number').value;
 var external_code2= document.getElementById('external_code2').value;
 var agency_jobid= document.getElementById('agency_jobid').value
 var budgeted_hours= document.getElementById('budgeted_hours').value;
 var note_budgeted_hours= document.getElementById('note_budgeted_hours').value;
 var service_item= document.getElementById('service_item').value;
 var pay_type= document.getElementById('pay_type').value;
 var amount= document.getElementById('amount').value;
 var job_group= document.getElementById('job_group').value;
 var requirement= document.getElementById('requirement').value;
 var  full_weight= document.getElementById('full_weight').value;
 var select_employee= document.getElementById('select_employee').value;
 var  emplo = document.getElementById('emplo').value;
 
 
 var caregiver_Hourly =
 document.getElementsByName('caregiver');
    var pay_hourly = "";
    for (var i = 0; i < caregiver_Hourly .length; i++) {
     if (caregiver_Hourly [i].checked) {
       pay_hourly+= caregiver_Hourly [i].value
          + " " + " ";
        }
      }

   if(pay_hourly ==  "")
 {
    alert("please provide Caregiver Hourly Pay Override"); return;
 }



 var sends =
 document.getElementsByName('send_alerts');
    var alsend= "";
    for (var i = 0; i < sends.length; i++) {
     if (sends[i].checked) {
      alsend+= sends[i].value
          + " " + " ";
        }
      }

   if(alsend ==  "")
 {
    alert("please provide Send Alerts to"); return;
 }


 var alert00 =
 document.getElementsByName('alerts');
    var aler= "";
    for (var i = 0; i < alert00.length; i++) {
     if (alert00[i].checked) {
      aler+= alert00[i].value
          + " " + " ";
        }
      }

   if(aler ==  "")
 {
    alert("please provide Alerts"); return;
 }



 var vics=
 document.getElementsByName('simultaneous');
    var cloc= "";
    for (var i = 0; i < vics.length; i++) {
     if (vics [i].checked) {
      cloc+= vics [i].value
          + " " + " ";
        }
      }

   if(cloc==  "")
 {
    alert("please provide Allow Simultaneous Clock-In"); return;
 }


 var life =
 document.getElementsByName('live_in');
    var lif= "";
    for (var i = 0; i < life.length; i++) {
     if (life[i].checked) {
      lif+= life[i].value
          + " " + " ";
        }
      }

   if(lif ==  "")
 {
    alert("please provide Live_In "); return;
 }



 var contin =
 document.getElementsByName('contingency');
    var tinge= "";
    for (var i = 0; i < contin.length; i++) {
     if (contin[i].checked) {
      tinge+= contin[i].value
          + " " + " ";
        }
      }

   if(tinge ==  "")
 {
    alert("please provide Contingency Plan Available "); return;
 }


 var ference =
 document.getElementsByName('preferences');
    var preces= "";
    for (var i = 0; i < ference.length; i++) {
     if (ference[i].checked) {
      preces+= ference[i].value
          + " " + " ";
        }
      }

   if(preces ==  "")
 {
    alert("please provide Client Preferences"); return;
 }


 if( medical_id == ""){  alert("Please Select Medical Record Id"); return; }
 if(medica_number== ""){  alert("Please Select MEDICAID NUMBER"); return; }
 if(external_code2==""){  alert("Please Select External Code 2"); return; }
 if(agency_jobid ==""){  alert("Please Select Agency Job ID"); return; }
 if(budgeted_hours==""){  alert("Please Select Budgeted Hours"); return; }
 if(note_budgeted_hours==""){  alert("Please Select Notes for Budgeted Hours"); return; }
 if(service_item==""){  alert("Please Select Service Item"); return; }
 if(pay_type==""){  alert("Please Select Pay Type"); return; }
 if(amount==""){  alert("Please Select Amount"); return; }
 if(job_group == ""){  alert("Please Select Job Group"); return; }
 if(requirement== ""){  alert("Please Select Client Requirements"); return; }
 if(full_weight ==""){  alert("Please Select Full Weight transfer"); return; }
 if(select_employee ==""){  alert("Please Select Employee"); return; }
 if(pay_hourly ==""){  alert("Please Select Caregiver Hourly Pay Override"); return; }
 if(alsend ==""){  alert("Please Select Send Alerts to"); return; }
 if( aler == ""){  alert("Please Select Alerts"); return; }
 if(cloc== ""){  alert("Please Select Allow Simultaneous Clock-In "); return; }
 if(lif==""){  alert("Please Select Live-In"); return; }
 if(tinge==""){  alert("Please Select Contingency Plan Available"); return; }
 if(preces==""){  alert("Please Select Client Preferences"); return; }
 if(emplo==""){  alert("Please Select Employee Zone"); return; }






 
 fd = new FormData();
 fd.append("medical_id",medical_id);
 fd.append("medica_number",medica_number);
 fd.append("external_code2",external_code2);
 fd.append("agency_jobid",agency_jobid);
 fd.append("budgeted_hours",budgeted_hours);
 fd.append("note_budgeted_hours",note_budgeted_hours);
 fd.append("service_item",service_item);
 fd.append("pay_type",pay_type);
 fd.append("amount",amount);
 fd.append("job_group",job_group);
 fd.append("requirement",requirement);
 fd.append("full_weight",full_weight);
 fd.append("select_employee",select_employee);
 fd.append("pay_hourly",pay_hourly);
 fd.append("alsend",alsend);
 fd.append("aler",aler);
 fd.append("clockins",cloc);
 fd.append("lif",lif);
 fd.append("tinge",tinge);
 fd.append("preces",preces);
 fd.append("emplo",emplo);



 

 doXHREvents(xml);
 xml.setRequestHeader("X-CSRF-TOKEN", t);
  xml.onreadystatechange = function()
  {
   if(xml.status == 419)
   {
     location.reload();
   }
     if(xml.readyState == 4 && xml.status == 200)
     {

       alert("You have successfully added member, continue by clicking other tab.");
        //document.getElementById("cityarea").innerHTML = xml.responseText;
        alert(xml.responseText);
     }

  }
  console.log(fd);
  xml.send(fd);

 
}




function updatemembercareplandoc()
{

 var url = site + "/members/updatemembercareplandoc";
 var xml = new XMLHttpRequest();
 var t = document.getElementById('t_').value;
 var xml = new XMLHttpRequest();
 xml.open("POST", url, true);

 var nursedoc_name= document.getElementById('nursedoc_name').value;
 var nursedoc_date= document.getElementById('nursedoc_date').value;
 var nurserenewal_date= document.getElementById('nurserenewal_date').value;
 var nurse_note= document.getElementById('nurse_note').value
 var doc_name= document.getElementById('doc_name').value;
 var doc_date= document.getElementById('doc_date').value;
 var renewal_date= document.getElementById('renewal_date').value;

 var make_viewable =
 document.getElementsByName('viewable_mobile');
    var mobile= "";
    for (var i = 0; i < make_viewable.length; i++) {
     if (make_viewable[i].checked) {
      mobile+= make_viewable[i].value
          + " " + " ";
        }
      }

   if(mobile ==  "")
 {
    alert("please provide Make Viewable in Mobile"); return;
 }


 if(nursedoc_name == ""){  alert("Please Select Document Name"); return; }
 if(nursedoc_date== ""){  alert("Please Select Document Date"); return; }
 if(nurserenewal_date==""){  alert("Please Select Renewal Date"); return; }
 if( nurse_note ==""){  alert("Please Select Notes"); return; }
 if(doc_name==""){  alert("Please Select Careplan Document Name"); return; }
 if(doc_date==""){  alert("Please Select  Careplan Document Date"); return; }
 if(renewal_date==""){  alert("Please Select  Careplan Renewal Date"); return; }
 if( mobile== ""){  alert("Please Select Make Viewable in Mobile"); return; }
 

 
 





 
 fd = new FormData();
 fd.append("nursedoc_name",nursedoc_name);
 fd.append("nursedoc_date",nursedoc_date);
 fd.append("nurserenewal_date",nurserenewal_date);
 fd.append("nurse_note",nurse_note);
 fd.append("doc_name",doc_name);
 fd.append("doc_date",doc_date);
 fd.append("renewal_date",renewal_date);
 fd.append("mobile",mobile);


 


 

 doXHREvents(xml);
 xml.setRequestHeader("X-CSRF-TOKEN", t);
  xml.onreadystatechange = function()
  {
   if(xml.status == 419)
   {
     location.reload();
   }
     if(xml.readyState == 4 && xml.status == 200)
     {

       alert("You have successfully updated member, continue by clicking other tab.");
        //document.getElementById("cityarea").innerHTML = xml.responseText;
        alert(xml.responseText);
     }

  }
  console.log(fd);
  xml.send(fd);

 
}




function updatememberbilling()
{

 var url = site + "/members/updatememberbilling";
 var xml = new XMLHttpRequest();
 var t = document.getElementById('t_').value;
 var xml = new XMLHttpRequest();
 xml.open("POST", url, true);

 var icd_codes= document.getElementById('icd_codes').value;
 

 var billing_ena =
 document.getElementsByName('billing_enable');
    var enable_bill= "";
    for (var i = 0; i < billing_ena.length; i++) {
     if (billing_ena[i].checked) {
      enable_bill+= billing_ena[i].value
          + " " + " ";
        }
      }

   if(enable_bill==  "")
 {
    alert("please provide Enable Billing"); return;
 }



 var billing_ty =
 document.getElementsByName('billing_type');
    var type_bill= "";
    for (var i = 0; i < billing_ty.length; i++) {
     if (billing_ty[i].checked) {
      type_bill+= billing_ty[i].value
          + " " + " ";
        }
      }

   if(type_bill==  "")
 {
    alert("please provide Billing Type"); return;
 }



 var billing_sele =
 document.getElementsByName('select_billing');
    var select_bill= "";
    for (var i = 0; i < billing_sele.length; i++) {
     if (billing_sele[i].checked) {
      select_bill+= billing_sele[i].value
          + " " + " ";
        }
      }

   if(select_bill==  "")
 {
    alert("please provide Select Billing"); return;
 }

 

 
 if(icd_codes == ""){  alert("Please Select ICD-10 Codes"); return; }
 if(enable_bill== ""){  alert("Please Select Enable Billing"); return; }
 if(type_bill==""){  alert("Please Select Billing Type"); return; }
 if(select_bill == ""){  alert("Please Select Select Billing"); return; }






 
 fd = new FormData();
 fd.append("icd_codes",icd_codes);
 fd.append("enable_bill",enable_bill);
 fd.append("type_bill",type_bill);
 fd.append("select_bill",select_bill);



 doXHREvents(xml);
 xml.setRequestHeader("X-CSRF-TOKEN", t);
  xml.onreadystatechange = function()
  {
   if(xml.status == 419)
   {
     location.reload();
   }
     if(xml.readyState == 4 && xml.status == 200)
     {

       alert("You have successfully updated member, continue by clicking other tab.");
        //document.getElementById("cityarea").innerHTML = xml.responseText;
        alert(xml.responseText);
     }

  }
  console.log(fd);
  xml.send(fd);

 
}




function updatememberinsurance()
{

 var url = site + "/members/updatememberinsurance";
 var xml = new XMLHttpRequest();
 var t = document.getElementById('t_').value;
 var xml = new XMLHttpRequest();
 xml.open("POST", url, true);

 var select_player  = document.getElementById('select_player').value;
 var select_program = document.getElementById('select_program').value;
 var policy_number= document.getElementById('policy_number').value;
 var group_number = document.getElementById('group_number').value
 var group_name = document.getElementById('group_name').value;
 var effective_date= document.getElementById('effective_date').value;
 var effective_endate= document.getElementById('effective_endate').value;
 var insurance_type= document.getElementById('insurance_type').value;
 var deductible= document.getElementById('deductible').value;
 var copayment= document.getElementById('copayment').value;
 var act =
 document.getElementsByName('active');
    var acti= "";
    for (var i = 0; i < act.length; i++) {
     if (act[i].checked) {
      acti+= act[i].value
          + " " + " ";
        }
      }

   if(acti ==  "")
 {
    alert("please provide Make Active"); return;
 }

 
 if( select_player == ""){  alert("Please Select Player"); return; }
 if(select_program== ""){  alert("Please Select Program"); return; }
 if(policy_number==""){  alert("Please Select Policy Number"); return; }
 if(group_number ==""){  alert("Please Select Group NO"); return; }
 if(group_name==""){  alert("Please Select Group Name"); return; }
 if(effective_date==""){  alert("Please Select Effective Date"); return; }
 if(effective_endate==""){  alert("Please Select Effective End Date"); return; }
 if(insurance_type==""){  alert("Please Select Insurance Type"); return; }
 if(deductible==""){  alert("Please Select Deductible"); return; }
 if(copayment == ""){  alert("Please Select Copayment Type"); return; }
 if(acti== ""){  alert("Please Select Active"); return; }
 
 





 
 fd = new FormData();
 fd.append("select_player",select_player);
 fd.append("select_program",select_program);
 fd.append("policy_number",policy_number);
 fd.append("group_number",group_number);
 fd.append("group_name",group_name);
 fd.append("effective_date",effective_date);
 fd.append("effective_endate",effective_endate);
 fd.append("insurance_type",insurance_type);
 fd.append("deductible",deductible);
 fd.append("copayment",copayment);
 fd.append("acti",acti);



 


 

 doXHREvents(xml);
 xml.setRequestHeader("X-CSRF-TOKEN", t);
  xml.onreadystatechange = function()
  {
   if(xml.status == 419)
   {
     location.reload();
   }
     if(xml.readyState == 4 && xml.status == 200)
     {

       alert("You have successfully updated member.");
        //document.getElementById("cityarea").innerHTML = xml.responseText;
        alert(xml.responseText);
     }

  }
  console.log(fd);
  xml.send(fd);

 
}


function deceptionButton()
{
  alert("Please start from general tab");
  window.location.reload();
}





