// Ajax Setting
function Ajax(urlAction,dataString){

			$.ajax({
			   type: "POST",
			   url:urlAction,
			   data:dataString,
			   complete:function(res,status){
				   if (status == "success"){
					$("#msgbox").dialog("close");
					$("#notify").html(res.responseText);
					$("#notify").dialog("open");
						
						
				   }
			   }
			});	
}

function Msgbox($url,$dataString,$html){
	$("#msgbox").html("<div align=center><img src=../images/icon/warning-24.png /><br>"+$html+"</div>")
				$("#msgbox").dialog({
					position : "center",
					buttons	: {
						"Ya"	: function(){
									$(this).dialog({ buttons : {} });
									Ajax($url,$dataString);
						},
						"Tidak"	: function(){
									$(this).dialog("close");
						},
					}
				});	
	$("#msgbox").dialog("open");
}

function Notify($cls,$kata){
	switch($cls){
	case "valid":
	$("#notify").html("<div align=center><img src=../images/icon/badge-circle-check-24.png /><br>"+$kata+"</div>");
		$("#notify").dialog({
			buttons	: {
				"Ok"	: function(){
							$(this).dialog("close");
							$("#dialog").dialog("close");
							location.reload();
				},
				
			}
		});
	
	break;
	case "invalid":
	$("#notify").html("<div align=center><img src=../images/icon/badge-circle-cross-24.png /><br>"+$kata+"</div>");
		$("#notify").dialog({
			buttons	: {
				"Ok"	: function(){
							$(this).dialog("close");
				},
				
			}
		});	
	break;
	}
}

function reloadContent(){
	location.reload();
}