function httpGet(theUrl)
{
    var xmlHttp = null;

    xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false );
    xmlHttp.send( null );
    return xmlHttp.responseText;
}

var isbaha = httpGet(window.location.origin + "/API/isbaha.php?name=" + document.getElementById("Name").value);

function checkform(){
	if(document.getElementById("Name").value.match("[a-zA-Z0-9]{1,12}") && isbaha == "1"){
      	return true;
	}else{
		flash('#Name',8,10,100);
		return false;
	}
}



