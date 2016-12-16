
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

// to show log
function showLog(){
	var log =document.getElementById("calculScore_log");
	if(log.style.display=="none") {
		log.style.display="";
		document.getElementById("calculScore_show_log").innerHTML=lang.pages.calculScore.hide_log;
	}
	else {
		log.style.display="none"; 
		document.getElementById("calculScore_show_log").innerHTML=lang.pages.calculScore.show_log;
	}
}

function ScoreCaclul(id, url, url_cmp) {
	$.ajax({
		url: url,
		type: "POST",
		data: "id="+id+"&calcul=1",
		dataType : 'html',
		success: function (my_text) {
			if(my_text.indexOf("Error")!=-1){
				alert(my_text);
			}
			else {
				var result = JSON.parse(my_text);
				all_lines="";
				for(i=0;i<result["output"].length;i++) {
					all_lines+=result["output"][i]+"\n";
				} 
				document.getElementById("calculScore_log").innerHTML=all_lines;
				var score= result["score"];
				var tr="<tr>"
					  	+ "<td>"+score.problem+"</td>"
					  	+ "<td>"+score.k+"</td>"
					  	+ "<td>"+score.l+"</td>"
					  	+ "<td>"+score.r+"</td>"
					  	+ "<td>"+score.n+"</td>"
					  	+ "<td>"+score.g+"</td>"
					  	+ "<td>"+score.b+"</td>"
					  	+ "<td>"+score.s+"</td>"
					  	+ "<td>"+parseFloat(score.rn.toFixed(4))+"</td>"
					  	+ "<td>"+parseFloat(score.rg.toFixed(4))+"</td>"
					  	+ "<td>"+parseFloat(score.rb.toFixed(4))+"</td>"
					  	+ "<td>"+parseFloat(score.nb.toFixed(4))+"</td>"
					  	+ "<td>"+parseFloat(score.ng.toFixed(4))+"</td>"
					  	+ "<td>"+parseFloat(score.gb.toFixed(4))+"</td>"
					  	+ "<td>"+score.file_name+"</td>"
					  + "</tr>";
				document.getElementById("calculScore_content").innerHTML=tr;
				document.getElementById("calculScore_lod").style.display="none";
				document.getElementById("calculScore_show_log").style.display="";
				document.getElementById("table_score").style.display="";
				ScoreCompare(score, url_cmp);
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) { 
				alert("Status: " + textStatus); alert("Error: " + errorThrown); 
		} 		
	});	
}


function ScoreCompare(score, url) {
	document.getElementById("compScore").style.display="";
	var table= $("#table_compare").DataTable({"bSort": false});
	$.ajax({
		url: url,
		type: "GET",
		data: "id="+score.id,
		dataType : 'html',
		success: function (my_text) {
			if(my_text.indexOf("Error")!=-1){
				alert(my_text);
			}
			else {
				document.getElementById("table_compare").style.display="";
				var result = JSON.parse(my_text);
				for(var i=0;i<10;i++) {
					var tr=[];
					for(k in result[""+i].score) {
						if(k!="id" && k!="file_name") {
							tr.push(result[i].score[k]);
						}
					}
					tr.push(result[i].rngs);
					table.row.add(tr).draw(true); 	
				}
				document.getElementById("compScore_lod").style.display="none";
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) { 
				alert("Status: " + textStatus); alert("Error: " + errorThrown); 
		} 		
	});	
}