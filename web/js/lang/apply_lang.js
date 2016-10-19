
/*
	author : Ismail ELFAQIR
	function to applying the language chosen by the user
*/

function apply_lang(){	

	// default pages 
	for(x in lang.default) {
		if(document.getElementById("id_"+x)!=null) $("#id_"+x).text(lang.default[x]);
	}
	// set up the menu 
	var menu="";
	if(document.getElementById("id_gest_menu") != null ) menu = "id_gest_menu";
	else if(document.getElementById("id_admin_menu") != null ) menu = "id_admin_menu";
	
	if(menu!="") {
		var li= document.getElementById(menu).getElementsByTagName("li");
		for(var i=0;i<li.length;i++) {
			li[i].getElementsByTagName("a")[0].innerHTML+=lang.menu.gest[i];
		}			
	}
	// pages
	for (f in lang.pages) {
		if(document.getElementById(f) != null) { 
			for(x in lang.pages[f]) {
				if(x=="placeholders") {
					for(ph in lang.pages[f][x]) {
						document.getElementById(ph).placeholder=lang.pages[f][x][ph];
					}
				}
				else $("#"+f+"_"+x).text(lang.pages[f][x]);
			}
		}		
	}
}
