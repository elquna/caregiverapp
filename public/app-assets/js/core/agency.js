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
 loadAdvancedFormForEmployee()
}



function loadAdvancedFormForEmployee()
{
  var url = site + "/agency/loadadvancedformforemployee";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("GET", url, true);
   xml.setRequestHeader("X-CSRF-TOKEN", t);
    xml.onreadystatechange = function()
    {
        if(xml.status == 419)
        {
          location.reload();
        }
       if(xml.readyState == 4 && xml.status == 200)
       {
          resetBackgrounds();
         document.getElementById("book-appointment").innerHTML = xml.responseText;
         document.getElementById("advanced").style.background = "pink"
       }

    }
    xml.send();
}


function resetBackgrounds()
{
  document.getElementById("advanced").style.background = "#ffffff";
  document.getElementById("general").style.background = "#ffffff";
  document.getElementById("certification").style.background = "#ffffff";
  document.getElementById("location").style.background = "#ffffff";
}


function updateEmployeeAdvanced(addedsecond)
{
  var url = site + "/agency/updateemployeeadvanced";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);
 

  var external_code_1 = document.getElementById('external_code_1').value;
  var external_code_2 = document.getElementById('external_code_2').value;
  var phone = document.getElementById('phone').value;
  var agency_employer_id = document.getElementById("agency_employer_id").value;

  /*if(external_code_1 ==""){  ReportError("external_code_1 is required","err");  return; }
  if(external_code_2 ==""){  ReportError("external_code_2 is required","err");  return; }*/
  if(phone ==""){  ReportError("phone is required","err");  return; }

  var how_to_notify_check = document.getElementsByName('how_to_notify');

  how_to_notify = "";
  for(i=0; i < how_to_notify_check.length; i++)
  {
     if(how_to_notify_check[i].checked == true)
     {
        if(how_to_notify == "")
        {
           how_to_notify = [how_to_notify_check[i].value];
        }
        else
        {
          how_to_notify[how_to_notify.length] = how_to_notify_check[i].value;
        }
        JSON.stringify(how_to_notify);
     }
     if(how_to_notify == "")
     {
       how_to_notify = [];
     }
     
  }
  //console.log(how_to_notify)
  
  var notify_when_check = document.getElementsByName('notify_when');
  var notify_when = "";
  for(i=0; i <  notify_when_check.length; i++)
  {
     if( notify_when_check[i].checked == true)
     {
        if( notify_when == "")
        {
            notify_when = [ notify_when_check[i].value];
        }
        else
        {
           notify_when[ notify_when.length] =  notify_when_check[i].value;
        }
        console.log(JSON.stringify(notify_when));
     }

     if(notify_when == "")
     {
      notify_when = [];
     }
     
  }
  
  console.log(notify_when);
  fd = new FormData();
  fd.append("external_code_1",external_code_1);
  fd.append("external_code_2", external_code_2);
  fd.append("phone",phone);
  fd.append("how_to_notify", JSON.stringify(how_to_notify));
  fd.append("notify_when", JSON.stringify(notify_when));
  fd.append("addedsecond", addedsecond);
  fd.append("agency_employer_id", agency_employer_id);
  
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
      ReportError('Advanced data updated','err') ; return;
     }
     if(xml.responseText == "email taken")
     {
      ReportError('email taken','err') ; return;
     }
    
    }

 }
 xml.send(fd);
 loadFormForCertificate()
  
}



function  loadFormForCertificate()
{
  
}









