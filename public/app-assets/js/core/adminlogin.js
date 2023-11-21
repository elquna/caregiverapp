function sessionchecker(message)
{
	if(message == 'expired session, please log in again')
  {
      window.location.href = site;
  }
}


function ReportError(msg, area)
{
		document.getElementById(area).innerHTML = msg;
		setTimeout(function (){ document.getElementById(area).innerHTML = ''}, 4000);
    return;
}


function loginadmin()
{


    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if(email == ''){ReportError('email is required','errorformobile') ; return;}
    if(password == ''){ReportError('Password is required','errorformobile') ; return;}

  var url = site + "/mainlogin";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);
  fd = new FormData();

  fd.append("password",password);
  fd.append("email",email);


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
              window.location.href =  site + "/dashboard/main";
          }
          else
          {
            ReportError('Invalid Login details','errorformobile') ; return;
          }
 				}

 		 }
 		 xml.send(fd);
}


