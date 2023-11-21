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




function addemployee()
{

 var url = site + "/employee/add_employee";
 var xml = new XMLHttpRequest();
 var t = document.getElementById('t_').value;
 var xml = new XMLHttpRequest();
 xml.open("POST", url, true);



 var firstname = document.getElementById('firstname').value;
 var lastname= document.getElementById('lastname').value;
 var zone = document.getElementById('zone_id').value;
 var countryid = document.getElementById('countryid').value;
 var stateid = document.getElementById('stateid').value;
 var cityid = document.getElementById('cityid').value;
 var zip = document.getElementById('zip').value;
 var contact_name = document.getElementById('contact_name').value;
 var contact_email = document.getElementById('contact_email').value;
 var contact_phone = document.getElementById('contact_phone').value;
 var telephone = document.getElementById('telephone').value;

 

 

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

        alert("You have successfully added employee, continue by clicking other tabs.");
        //document.getElementById("cityarea").innerHTML = xml.responseText;
        alert(xml.responseText);
     }

  }
  console.log(fd);
  xml.send(fd);

 
}