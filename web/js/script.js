
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
	var table= $("#table_compare").DataTable({});
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
				ScoreComparePlot(result);
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) { 
				alert("Status: " + textStatus); alert("Error: " + errorThrown); 
		} 		
	});	
}


function sort_result(result){
	var my_result=[];
	var val= [];
	for(var i=0;i<10;i++) {
		val.push(parseFloat(result[i].rngs));
	}
	val.sort(function(a,b) { return a - b;});
	for(var i=0;i<10;i++) {
		for(var j=0;j<10;j++) {
			if(val[i] == parseFloat(result[j].rngs)) {
				my_result.push(result[j]);
				break;
			}
		}
	}
	return my_result;
};

function ScoreComparePlot(result){

	result=sort_result(result);
	var all= [];
	for(var i=0;i<10;i++) {
		all.push([i+1, parseFloat(result[i].rngs)]);
	}
	var data = [
		{ data: all, points: { symbol: "circle" } }
		//{ data: generate(4, 0.9), points: { symbol: "diamond" } }
	];

	$.plot("#compare_plot", data, {
		series: {
			points: {
				show: true,
				radius: 3
			}
		},
		grid: {
			hoverable: true
		}
	});

	$("<div id='tooltip'></div>").css({
		position: "absolute",
		display: "none",
		border: "1px solid #fdd",
		padding: "2px",
		"background-color": "#fee",
		opacity: 0.80
	}).appendTo("#plot_compare");
	$("#compare_plot").bind("plothover", function (event, pos, item) {
		if (item) {
			var x = item.datapoint[0].toFixed(2),
				y = item.datapoint[1].toFixed(2);

			$("#tooltip").html(result[parseInt(x)-1].score["problem"]+" with RNGS = " + y)
				.css({top: item.pageY-$("body").scrollTop-200, left: item.pageX-500})
				.fadeIn(200);
		} else {
			$("#tooltip").hide();
		}
	});
	$(".flot-y-axis .flot-tick-label").css({ left:-50 });
}