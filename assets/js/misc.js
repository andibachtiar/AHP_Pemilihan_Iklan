function Ajax(urlAction,dataString){

			$.ajax({
			   type: "POST",
			   url:urlAction,
			   data:dataString,
			   complete:function(res,status){
				   if (status == "success"){
					$("#msgbox").dialog("close");
					$("#notify").html(res.responseText);
					$("#notify").dialog({position : "center"});
					$("#notify").dialog("open");						
				   }
			   }
			});	
}

function msgbox($url,$dataString,$html){
	$("#msgbox").html("<div align=center><img src=../images/icon/warning-24.png /><br>"+$html+"</div>")
				$("#msgbox").dialog({
					position : "center",
					buttons	: {
						"Yes"	: function(){
									Ajax($url,$dataString);
						},
						"No"	: function(){
									$(this).dialog("close");
						},
					}
				});	
	$("#msgbox").dialog("open");
}