( function( $ ) {
	
	$.fn.ceynetValidation = function(options) {
		var form = $(this);
		var frmName = form.attr("name");
		var frmMethod = form.attr("method");
		var frmAction = form.attr("action");
		var frmId = form.attr("id");
		var frmSerialize = form.serialize();
		//var countthis = 0;
	
		//alert("check");
	
		var formError = 0;
	
		var formElement = ["input","select","textarea"];
		//alert(formError);
		var formMessage = {
			"":"",
			required: "This field is required.",
			txtrequired: "This textarea is required.",
			remote: "Please fix this field.",
			email: "Please enter a valid email address.",
			url: "Please enter a valid URL.",
			date: "Please enter a valid date.",
			dateISO: "Please enter a valid date ( ISO ).",
			number: "Please enter a valid number.",
			digits: "Please enter only digits.",
			creditcard: "Please enter a valid credit card number.",
			equalTo: "Please enter the same value again.",
			notRobot: "Please enter the correct answer.",
			selectOption: "Please select an option",
			name: "Please enter a valid name.",
			address: "Please enter a valid address.",
			heading: "Please enter a heading.",
			price: "Please enter a valid price.",
			image: "Please select an image.",
			cv: "Please select a valid file.",
			descriprion: "Please enter description.",
			short_descriprion: "Enter description not longer than 75 characters",
			priority_value: "Please enter a valid whole number",
			pro_code: "Please enter a product code",
			password: "Please enter password",
			days: "Please enter a date",
			required_name: "Please enter a valid name.",
			required_email: "Please enter a valid email address.",
			user_name:"Please enter your user name"
		};

		
		var formPatterne = {
			"":"",
			required: '',
			txtrequired: '',
			remote: '',
			email: new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i),
			url: new RegExp(/^[a-z0-9-]+$/),
			date: new RegExp(/^([0-9]{2,4})[- \/.](0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])$/),
			dateISO: '',
			number: new RegExp(/[0-9]+$/),
			digits: new RegExp(/[0-9 -()+]+$/),
			creditcard: '',
			equalTo: '' ,
			notRobot: new RegExp(/[4]/),
			selectOption: new RegExp(/[0-9]/),
			name: new RegExp(/[^,;]/),
			address: new RegExp(/[a-zA-Z0-9]+$/),
			heading: new RegExp(/[a-zA-Z0-9]+$/),
			price: new RegExp(/[0-9]+$/),
			image: new RegExp(/\.(jpg|jpeg|png|gif)$/),
			cv: new RegExp(/\.(jpg|jpeg|png|gif|pdf|PDF|docx)$/),
			descriprion : new RegExp(/[a-zA-Z0-9]+$/),
			short_descriprion : new RegExp(/^[\w \d \s \.,!&-:@#$%^;\\|<>"?=]{1,75}$/),
			priority_value : new RegExp(/^\d+$/),
			pro_code : new RegExp(/[a-zA-Z0-9]+$/),
			password : '',
			days:new RegExp(/^\d+$/),
			required_name:new RegExp(/[^,;]/),
			required_email: new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i),
			user_name: new RegExp(/[^\s]/)
		};	
		
		//var frmError = '<span name="'+fieldName+'" class="label label-important">'+formMessage['required']+'</span>';

		form.find("span.cnt-error").remove();
		form.find("span.cntValidateError").remove();
		form.find("span.cntValidateErrorArrow").remove();


		// Onclick Feild Hidden
		$("#"+frmId).on("click",".cntValidateError",function(){
			//alert('ok');
			var inthis = $(this).attr("name");
			inthis = inthis.replace("error","");
			///alert(inthis);
			$(this).remove();	
			$("#"+inthis+"arrow").remove();
		});

		form.find('[required]').each( function() {
			var field = $(this);
			var fieldValue = field.val();
			var fieldId = field.attr("id");
			var fieldName = field.attr("name");
			var fieldRequired = (field.attr("required-data")=="undefined")?"required":field.attr("required-data");
			//alert(fieldValue);
			var nopattern = false;

			if(field.is(":visible")){
				//var frmErrorMag = '<span name="'+fieldName+'-error" class="cnt-error">'+formMessage["required"]+'</span>';
				var frmErrorMag = formMessage["required"];
				//alert("sdasdas");
				//var frmErrorRegx = '<span name="'+fieldName+'-error" class="cnt-error">'+formMessage[fieldRequired]+'</span>';
				//var frmErrorRegx = formMessage[fieldRequired];
				var frmErrorRegx = '<span id="'+fieldName+'-arrow" class="cntValidateErrorArrow"></span><span name="'+fieldName+'-error" class="cntValidateError">'+formMessage[fieldRequired]+'</span>';
				var frmErrorSelectThis = '<span id="'+fieldName+'-arrow" class="cntValidateErrorArrow"></span><span name="'+fieldName+'-error" class="cntValidateError">'+formMessage['required']+'</span>';

				//alert(field.is("input"));
				if((field.is("input"))){
					var fieldType = field.attr("type");
					//alert(fieldType+'~'+fieldValue);
					//alert(fieldType+'~'+fieldValue+'~'+fieldId);
					if(fieldType=="text"){
						if(fieldValue==""){
							formError += Number(1);  field.last().addClass("cnt-errorBdr");  field.attr("placeholder",frmErrorMag);
							$("#"+fieldId).focus();
						}
						else{
							field.last().removeClass("cnt-errorBdr");
						}
					}else if(fieldType=="password"){
						if(fieldValue==""){ 
							formError += Number(1);  field.last().addClass("cnt-errorBdr");   field.attr("placeholder",frmErrorMag);
							$("#"+fieldId).focus(); 
						}
						else{
							field.last().removeClass("cnt-errorBdr");
						}
					}else if(fieldType=="checkbox"){
						var dataGroup = field.attr("name");
						//alert(dataGroup);
						var countthis = $("input[name='" + dataGroup + "']:checked").length;
						//var countthis = dataGroup.filter(":checked").size();
						//alert(countthis);
						if(countthis==0){
							formError += Number(1);  field.last().addClass("cnt-errorBdr");   field.attr("placeholder",frmErrorMag);
							frmErrorRegxThis = '<span id="'+fieldName+'-arrow" class="cntValidateErrorArrow"></span><span name="'+fieldName+'-error" class="cntValidateError">'+formMessage['selectOption']+'</span>';
							field.after(frmErrorRegxThis);
							field.last().addClass("cnt-errorBdr"); 
							$("#"+fieldId).focus();
						}else{
							field.last().removeClass("cnt-errorBdr"); 
						}
						
						
					}else if(fieldType=="radio"){
						var dataGroup = field.attr("name");
						//alert(dataGroup);
						var countthis = $("input[name='" + dataGroup + "']:checked").length;
						//alert(countthis);
						if(countthis==0){
							formError += Number(1);  field.last().addClass("cnt-errorBdr");   field.attr("placeholder",frmErrorMag);
							frmErrorRegxThis = '<span id="'+fieldName+'-arrow" class="cntValidateErrorArrow"></span><span name="'+fieldName+'-error" class="cntValidateError">'+formMessage['selectOption']+'</span>';
							field.after(frmErrorRegxThis);
							field.last().addClass("cnt-errorBdr"); 
							$("#"+fieldId).focus();
						}else{
							field.last().removeClass("cnt-errorBdr"); 
						}
					}

				}else if(field.is("textarea")){
					//alert(fieldValue);
					if(fieldValue==""){
							formError += Number(1);  field.last().addClass("cnt-errorBdr");  field.attr("placeholder",frmErrorMag); 
							frmErrorRegxThis = '<span id="'+fieldName+'-arrow" class="cntValidateErrorArrow"></span><span name="'+fieldName+'-error" class="cntValidateError">'+formMessage['txtrequired']+'</span>';
							field.after(frmErrorRegxThis);
							field.last().addClass("cnt-errorBdr");
							$("#"+fieldId).focus();
						}
						else{
							field.last().removeClass("cnt-errorBdr");
						}

					
				}else if(field.is("select")){

					if(fieldValue=="--Select--"){
						formError += Number(1);  field.last().addClass("cnt-errorBdr");   field.attr("placeholder",frmErrorMag);
						$("#"+fieldId).focus(); 
					}else{
						field.last().removeClass("cnt-errorBdr");
					}
					//alert('ok');
				}
				

				if(fieldRequired!=null){

					//alert(fieldRequired);
					fieldequalTo= fieldRequired.search("equalTos");
					//alert(fieldequalTo);
					if(fieldequalTo>=0){
						nopattern = true;
						equalTo = fieldRequired.replace("equalTos", '').replace("['", '').replace("']", '');
	
						//alert(equalTo);
						fieldValueInthis = $("#"+equalTo).val();
						//fieldValueInthis =  $("#passwords").val();
						if(fieldValueInthis!=fieldValue){
							//alert(fieldValueInthis+"="+fieldValue);
							frmErrorRegxThis = '<span id="'+fieldName+'-arrow" class="cntValidateErrorArrow"></span><span name="'+fieldName+'-error" class="cntValidateError">'+formMessage['equalTo']+'</span>';
							formError += Number(1); 
							field.after(frmErrorRegxThis);
							field.last().addClass("cnt-errorBdr"); 
							$("#"+fieldId).focus();
						}
	
					}
					//alert(fieldequalTo);
				}

				//alert(nopattern);
		//alert(formError);
				if(fieldRequired != "undefined" && fieldRequired != null && nopattern==false){
					//alert(fieldType+'~'+fieldValue+'~'+fieldRequired);
					var thisPatten  =  formPatterne[fieldRequired].test(fieldValue);
					//alert(thisPatten);
					if(thisPatten!=true){
						formError += Number(1);  
						field.after(frmErrorRegx);
						//field.attr("placeholder",frmErrorRegx)
						field.last().addClass("cnt-errorBdr");
						$("#"+fieldId).focus();
					}else{
						field.last().removeClass("cnt-errorBdr");
					}
				}
			}
		});
		
		if(formError>0){
			//alert(formError);
			return false;	
		}else{
			return true;
		}

	};

} )( jQuery );
