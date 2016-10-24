var score;
function ScoreTmp(){
	this.page=0;
	this.url="";
	this.url_files="";
	this.url_accept_remove="";
	this.showBy=25;
	this.img=document.getElementById("loading");
	this.tab;
	this.all_scors_tmp=[];
	this.moreScores =true;
	this.activeMoreScores;
	
	// to show scores 
	this.getScores = function(){
		this.img.style.display="";
		var obj=this;		
		$.ajax({
			url: this.url,
			type: "POST",
			data: "page="+this.page+"&show="+this.showBy,
			dataType : 'html',
			success: function (my_text) {
				if(my_text.indexOf("Error")!=-1){
					alert(my_text);
				}
				else {
					all_scores= JSON.parse(my_text);	
					if(all_scores.length==0) obj.moreScores=false;
					obj.all_scors_tmp=obj.all_scors_tmp.concat(all_scores);
					obj.showTab();
					obj.img.style.display="none";
					obj.page++;
					obj.activeMoreScores=setInterval('score.getMoreScores();', 250);
				}
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) { 
					alert("Status: " + textStatus); alert("Error: " + errorThrown); 
			} 		
		});
	};

	// function to update table 
	this.showTab = function (){
		this.tab.fnClearTable();
		var all = [];
		for(i=0;i<this.all_scors_tmp.length;i++) {
			var t= [];
			for(k in this.all_scors_tmp[i]) {
				if(k!="id") {
					if(k=="file_name") t.push('<center><a href="#" id="file_'+this.all_scors_tmp[i]["id"]+'" title="'+this.all_scors_tmp[i][k]+'"  onclick="score.getDataFile(\''+this.all_scors_tmp[i][k]+'\', \''+this.all_scors_tmp[i]["id"]+'\' )"><span class="fa fa-file-text" ></span></a></center>');
					else t.push(this.all_scors_tmp[i][k]);
				}
			} 
			var options= '<center><a href="javascript:void(0)" onclick="score.addToScores('+i+',1)" title="'+lang.tables.scoreTmp.options.accept+'"><span class="fa fa-check"></span></a>&nbsp;&nbsp;';
			options +='<a href="javascript:void(0)" onclick="score.addToScores('+i+',0)" title="'+lang.tables.scoreTmp.options.remove+'"><span class="fa fa-times"></span></a></center>';
			t.push(options);
			all.push(t);
		}
		if(all.length>0) this.tab.fnAddData(all); 		
	};
	
	// function to get file content (data) 
	this.getDataFile= function(filename, id) {
		var a= document.getElementById("file_"+id);
		if(a.getAttribute("data-content") != null) {
			$("#file_"+id).popover("show"); 
		}
		else {
			var obj=this;
			a.setAttribute("data-toggle", "popover");
			a.setAttribute("data-placement", "left");
			a.setAttribute("data-html", "true");
			a.setAttribute("data-content", '<center><img  width="100" src="'+document.getElementById("loading").getAttribute("src")+'" /></center>');
			$("#file_"+id).popover("show"); 		
			$.ajax({
				url: this.url,
				type: "POST",
				data: "filename="+filename,
				dataType : 'html',
				success: function (my_text) {
					if(my_text.indexOf("Error")!=-1){
						alert(my_text);
					}
					else {
						var content = document.getElementById("fileContent").innerHTML;
						content=content.replace("#my_data#", my_text);
						content=content.replace("#download#", "javascript : window.open('"+obj.url_files+"/"+filename+"', '_blank')");
						content=content.replace("#close#", "javascript : $('#file_"+id+"').popover('hide')");
						a.setAttribute("data-content", content);
						$("#file_"+id).popover("show"); 
					}
				},
				error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
				} 		
			});				
		}		
	};

	/*
		function to add a score or remove it
		accept =0 -> remove the score
		accept =1 -> add the score
	*/
	this.addToScores= function(line, accept){
		var message= (accept==1) ? lang.tables.scoreTmp.messages.accept :  lang.tables.scoreTmp.messages.remove;
		var my_score = this.all_scors_tmp[line];
		var obj=this;
		if(confirm(message)) {
			$.ajax({
				url: this.url_accept_remove,
				type: "POST",
				data: "id="+my_score.id+"&accept="+accept,
				dataType : 'html',
				success: function (my_text) {
					if(my_text.indexOf("Error")!=-1){
						alert(my_text);
					}
					else {
						obj.all_scors_tmp.splice(line, 1);
						obj.showTab();
					}
				},
				error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
				} 		
			});	
		}
	};
	
	// function to get more scores ween the scrollbar of the page is in the bottom
	
	this.getMoreScores= function(){
		if(!this.moreScores) {
			clearInterval(this.activeMoreScores);
		} 
		else {
			var scrollPosition = window.pageYOffset;
			var clientHeight =document.documentElement.clientHeight;  
			var HeightPage =document.documentElement.scrollHeight;
			if((scrollPosition+clientHeight)+600 >=HeightPage) {
				clearInterval(this.activeMoreScores);
				this.getScores();
			}
		}
			
	};
			
}

