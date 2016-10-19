
// function for chosing file/text in form of adding new score 
function setTypeSelected(value){
	if(value=="file") {
		$("#type_file").css("display", "");
		$("#type_text").css("display", "none");
		$("#type_text").value="";
	}
	else {
		$("#type_file").css("display", "none");
		$("#type_text").css("display", "");
		$("#type_file").value="";
	}
}