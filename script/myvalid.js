
//Name
var myNField = document.theform.myname;
var myNError = document.getElementById('formnerror');
var myNBackError = document.getElementById('myname');

//telephone
var myTField = document.theform.mytelephone;
var myTError	=	document.getElementById('formterror');
var myTBackError = document.getElementById('mytelephone');

//email
var myEField = document.theform.myemail;
var myEError	=	document.getElementById('formeerror');
var myEBackError = document.getElementById('myemail');

//textarea
var myTxField = document.theform.mytextarea;
var myTxError	=	document.getElementById('formtxerror');
var myTxBackError = document.getElementById('mytextarea');


//name
var myNameFieldCheck = document.getElementById("myname");
var myName_Pattern = new RegExp("[A-Za-z]+,[A-Za-z]+", "i");

//email
var myEmailFieldCheck = document.getElementById("myemail");
var myEmail_Pattern= new RegExp("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})", "i");

//Telephone
var myTelephoneFieldCheck = document.getElementById("mytelephone");
var myTelephone_Pattern	= new RegExp("\\d{2}[\\-]\\d{3}[\\-]\\d{4}", "i");

//textarea
var myTextareaFieldcheck	= document.getElementById("mytextarea");



function ValidateMyForm(){
	//reset myNError
	myNError.innerHTML = " ";
	//return true;
	if( myNameFieldCheck.value == null || myNameFieldCheck.value == "" || myName_Pattern.test(myNameFieldCheck.value) == false)
		{
		
		myNError.innerHTML = "Your Name is required to fill. Last,First";
		myNBackError.style.backgroundColor= "pink";
		
		myNameFieldCheck.focus();		
		return false;
		}
	//email	
	if( myEmailFieldCheck.value  == null || myEmailFieldCheck.value  == "" || myEmail_Pattern.test(myEmailFieldCheck.value) == false)
	{
		myEError.innerHTML = "Your Email is required to fill. abcd@abcd.com";
		myEBackError.style.backgroundColor= "pink";
		myEmailFieldCheck.focus();
		return false;
	}
	
	//telephone
	if( myTelephoneFieldCheck.value  == null || myTelephoneFieldCheck.value  == "" || myTelephone_Pattern.test(myTelephoneFieldCheck.value) == false)
	{
		myTError.innerHTML = "Your Telephone is required to fill. xx-xxx-xxxx";
		myTBackError.style.backgroundColor= "pink";
		myTelephoneFieldCheck.focus();
		return false;
	}
	
	//textarea
		if( myTextareaFieldcheck.value  == null ||  myTextareaFieldcheck.value  == "" )
	{
		
		myTxBackError.style.backgroundColor= "pink";
		myTextareaFieldcheck.focus();
		return false;
	}

	alert("Thanks you for Contact");

    return true;
    /*
	myNameFieldCheck.value = "";
	myTelephoneFieldCheck.value = "";
	myEmailFieldCheck.value = "";
	myTextareaFieldcheck.value = "";
	myTextareaFieldcheck.style.backgroundColor = "white";
    */
}
/*-----------------------------------myName--------------------*/



myNField.onchange = function(){
	//reset error message
	myNError.innerHTML = "";
		if (!(myName_Pattern.test(this.value))){
		
		myNError.innerHTML = "Input does not match Expected pattern. Last,First";
		myNBackError.style.backgroundColor= "red";
		
	} else{
		
		myNBackError.style.backgroundColor= "white";
		
	}
}

//*-----------------------------------myName--------------------*/


myNField.onchange = function(){
	//reset error message
	myNError.innerHTML = "";
		if (!(myName_Pattern.test(this.value))){		
		myNError.innerHTML = "Input does not match Expected pattern. Last,First";
		myNBackError.style.backgroundColor= "pink";
		
	} else{
		
		myNBackError.style.backgroundColor= "white";
		
	}
}

/*-----------------------------------myemail--------------------*/

myEField.onchange = function(){
	myEError.innerHTML = "";
			
	if (!(myEmail_Pattern.test(this.value))){	
			myEError.innerHTML = "Input does not match Expected pattern. abcd@abcd.com";
			myEBackError.style.backgroundColor= "pink";
		
	} else{
		myEError.innerHTML = "";
		myEBackError.style.backgroundColor= "white";
		
	}
}
/*-----------------------------------mytelephone--------------------*/

myTField.onchange = function(){
	myTError.innerHTML = "";

	if (!(myTelephone_Pattern.test(this.value))){	
		myTError.innerHTML = "Input does not match Expected pattern. xx-xxx-xxxx";
		myTBackError.style.backgroundColor= "pink";
		
	} else{
		myTError.innerHTML = "";
		myTBackError.style.backgroundColor= "white";
		
	}
}
/*-----------------------------------mytextarea--------------------*/

myTxField.onchange = function(){
	//reset error message
	myTxError.innerHTML = "";
		if( myTextareaFieldcheck.value  == null ||  myTextareaFieldcheck.value  == "" ){
		
		myTxBackError.style.backgroundColor= "pink";
		
		
	} else{
		
		myTxBackError.style.backgroundColor=  "white";
		
	}
}

