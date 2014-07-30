function httpGet(theUrl)
{
    var xmlHttp = null;

    xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false );
    xmlHttp.send( null );
    return xmlHttp.responseText;
}

function checkform(){
	var str = window.location.pathname;
	var isbaha = httpGet(window.location.origin + str.replace("/use.php", "") + "/API/isbaha.php?name=" + document.getElementById("Name").value);
	if(isbaha == "1"){
      	return true;
	}else{
		flash('#Name',8,10,100);
		return false;
	}
}

function isEmail(strEmail) {
if (strEmail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/)!= -1){
return true;
}else{}
flash('#Email',8,10,100);
		return false;
}




