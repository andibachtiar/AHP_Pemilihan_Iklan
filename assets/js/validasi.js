/*
	methode that you can use :
	required	: required field not be empty
	digits		: filed for use only digits (0-9)
	char		: field for use only character (A-Z) (a-z)
	number		: field for use only number and point (.)
	email		: field for use only email
	nospace		: field for use no space character
	minLength	: use for comapre length value and minimal length

*/

function insertLabel(labelId,kata){
	removeLabel(labelId);
	$("#"+labelId).after("<label id="+ labelId +" class=error>"+ kata +"</label>")
}

function removeLabel(labelID){
	$("label#"+labelID).remove();
}

function validate(id){
	var getFocus = new Array();
	var pattAllChar = /[A-Za-z0-9]/g ; //a-z, A-Z, 0-9, including the _ (underscore) character.
	var pattChar = /[^\sA-Za-z,._-]/g  ; //find a character
	var pattNonChar = /[A-Za-z]/g ; // find a non character
	var pattNumber = /[^0-9.]/g ;	 // find a number character with (.)
	var pattNonNumber = /[0-9.]/g ; // find a non number character
	var pattPunc = /[][!"#$%&'()*+,./:;<=>?@\^_`{|}~-]/g;  // find a puncuation character
	var pattDigit = /\D/g ; 	//find a digit from 0-9
	var pattNonDigit = /\D/g ; // find a non digit character
	var pattBlank = /[ \t]/g;	//find a blank and tab character
	var pattEmail = /\b[A-Za-z0-9._%+]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b/g
	var pattNoSpace = /\s/g ; //find a space character
	//definition form element to array
	if ((id == "")||(id == undefined)){
	var frm = $("form").serializeArray();
	}else{
	var frm = $("form[id="+ id +"]").serializeArray();
	}
	//get form element include name,value, etc
	$.each(frm, function(i, field){
		var cls = $("#"+ field.name).attr("class");
			cls = cls.split(" ");
			removeLabel(field.name)
			if (cls == undefined){ cls = "" };
				for(z=0;z<cls.length;z++){
						var validating = cls[z];
						var fieldVal = $("#"+ field.name).val()
						fieldVal = $.trim(fieldVal);
						var fieldLength = fieldVal.length;
						var minLength = $("#"+ field.name).attr("minlength")
						var maxVal = $("#"+ field.name).attr("maxval")
						var minVal = $("#"+ field.name).attr("minval")
						var accepted = $("#"+ field.name).attr("accept")
						var group = $("#"+ field.name).attr("group")
						var equalVal = $("#"+ field.name).attr("equalTo")
							equalVals = $("#"+ equalVal).val()
						if (minLength == undefined){
							minLength = 0;	
						}
						
						var title = $("#"+ field.name).attr("title")
							//test any case regexp
							switch(validating){
								case "":
									result = false;
								break;
								
								case "required":				
										if ((fieldVal == "")||(fieldVal.length < minLength)){
											result = true;
										}else{
											result = false;
										}
								break;
								case "maxval":
									if (eval(fieldVal) > eval(maxVal)){
											result = true;
										}else{
											result = false;
										}
								break;
								
								case "minval":
									if (eval(fieldVal) < eval(minVal)){
											result = true;
										}else{
											result = false;
										}
								break;
								
								case "digits":
									result = pattDigit.test(fieldVal);
								break;
								
								case "char":
									result = pattChar.test(fieldVal);
								break;
								
								case "number":
									result = pattNumber.test(fieldVal);
								break;
								
								case "email":
									result = pattEmail.test(fieldVal);
									if (result == false){
										result = true
									}else{
										result = false
									}
								break;
								
								case "date":
									result = /Invalid|NaN/.test(new Date(fieldVal));
								break;
								
								case "equal":
									if (fieldVal == equalVals){
										result = false;
									}else{
										result = true;
										$("#"+ field.name).val("")
									}
								break;
								
								case "nospace":
									result = pattNoSpace.test(fieldVal);
								break;
								
							}
									if (group == undefined){
										if (result){
										insertLabel( field.name,title );
										$("#"+ field.name).effect("highlight",1000);
										$("label#"+ field.name).effect("pulsate");
										getFocus.push( field.name );
										}
									}else{
										if (result){
										insertLabel( group ,title );
										$("#"+ field.name).effect("highlight",1000);
										$("label#"+ field.name).effect("pulsate");
										getFocus.push( field.name );
										}
									}
								
				
	
										
				}
		});
	
										if (getFocus.length > 0){
										//If something wrong
										
										$("#"+getFocus[0]).focus();
										return false;
										}else{
										return true;
										}
}