function checkform(){
	if(document.getElementById("Name").value.match("[a-zA-Z0-9]{1,12}") && document.getElementById("Name").value.length>=12){
      	return true
	}else{
		flash('#Name',8,10,100);
		return false
	}
}
