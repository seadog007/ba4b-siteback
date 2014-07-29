function checkform(){
	if(document.getElementById("Name").value.match("[^a-zA-Z0-9]")||document.getElementById("Name").value.length>=13){
      	flash('#Name',8,10,100);
      	return false
	}else{
		return true
	}
}