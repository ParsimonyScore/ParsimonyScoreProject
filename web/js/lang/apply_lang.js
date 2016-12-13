
/*
	function to applying the language chosen by the user
*/

function apply_lang(){	

	// default pages 
	for(x in lang.default) {
		if(document.getElementById("id_"+x)!=null) $("#id_"+x).text(lang.default[x]);
	}
	// set up the menu 
	
	if(document.getElementById("id_menu")!=null) { 
		var li= document.getElementById("id_menu").getElementsByTagName("li"); //fa-chevron-down
		var menu;
		if(li.length== lang.menu.gest.length) menu=lang.menu.gest;
		else if(li.length== lang.menu.admin.length) menu=lang.menu.admin;
		else if(li.length== lang.menu.super_admin.length) menu=lang.menu.super_admin;
		if(menu !=null) {
			for(var i=0;i<li.length;i++) {		
				li[i].getElementsByTagName("a")[0].innerHTML+=menu[i];
			}			
		}
			
	}
	// pages
	for (f in lang.pages) {
		if(document.getElementById(f) != null) { 
			for(x in lang.pages[f]) {
				if(x=="placeholders") {
					for(ph in lang.pages[f][x]) {
						if(document.getElementById(ph)!=null)
							document.getElementById(ph).placeholder=lang.pages[f][x][ph];
					}
				}
				else {
					if(document.getElementById(f+"_"+x)!=null)
						document.getElementById(f+"_"+x).innerHTML=lang.pages[f][x];
				}
			}
		}		
	}
	
	// tables 
	
	for(t in lang.tables) {
		if(document.getElementById("table_"+t) != null) {
			var th= document.getElementById("table_"+t).getElementsByTagName("th");
			for(i=0;i<th.length;i++) {
				if(th[i].innerHTML.trim()=="") th[i].innerHTML=lang.tables[t].th[i];
			}
		}
	}
}
