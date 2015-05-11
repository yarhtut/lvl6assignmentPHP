/*
I have got some help for myprovalid.js from
Luke Hardiman 
Student ID = 9901623
*/


//Name
var myNField = document.theform.name;
var myNError = document.getElementById('formnerror');
var myNBackError = document.getElementById('name');

//telephone
var myTField = document.theform.telephone;
var myTError	=	document.getElementById('formterror');
var myTBackError = document.getElementById('telephone');

//email
var myEField = document.theform.email;
var myEError	=	document.getElementById('formeerror');
var myEBackError = document.getElementById('email');

//textarea
var myTxField = document.theform.address;
var myTxError	=	document.getElementById('formtxerror');
var myTxBackError = document.getElementById('address');

//radio
//var myRField = document.theform.questionitem1;
//var myRField = document.theform.getElementsByClassName("radio_onchange");

var myRError	=	document.getElementById('formrerror');
var myRBackError = document.getElementById('racheck');

//selected options
var mySError	=	document.getElementById('formserror');
var myS1BackError = document.getElementById('order');
var myS2BackError = document.getElementById('enquiry');


//Checkbox
var myCError	=	document.getElementById('formCerror');
var myCBackError = document.getElementById('check');

//Subcribe the letters
var myScError	=	document.getElementById('formSuberror');
var myScBackError = document.getElementById('subletter');

//name
var myNameFieldCheck = document.getElementById("name");
var myName_Pattern = new RegExp("[A-Za-z]+,[A-Za-z]+", "i");

//email
var myEmailFieldCheck = document.getElementById("email");
var myEmail_Pattern= new RegExp("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})", "i");

//Telephone
var myTelephoneFieldCheck = document.getElementById("telephone");
var myTelephone_Pattern	= new RegExp("\\d{2}[\\-]\\d{3}[\\-]\\d{4}", "i");

//textarea
var myTextareaFieldcheck	= document.getElementById("address");

//radio
var myRadio1Fieldcheck	= document.getElementById("questionitem1");
var myRadio2Fieldcheck	= document.getElementById("questionitem2");

//select
var mySelect1OptionCheck = document.getElementById("vegeorder");
var mySelect2OptionCheck = document.getElementById("worker");

//check location
var  myCheckLocation1Check = document.getElementById("location1");
var myCheckLocation2Check = document.getElementById("location2");
var myCheckLocation3Check = document.getElementById("location3");

//subcribe the newsletter
var mySubletter1check	= document.getElementById("subletter1");
var mySubletter2check	= document.getElementById("subletter2");

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
	
	
	//radio
	if( myRadio1Fieldcheck.checked == false && myRadio2Fieldcheck.checked == false )
	{
		myRError.innerHTML = "Your have to checked at least one of those";
		myRBackError.style.backgroundColor= "pink";
		
		return false;
	}
	
	//select option
	if( mySelect1OptionCheck.selectedIndex == false && mySelect2OptionCheck.selectedIndex == false )
	{
		mySError.innerHTML = "Your have to select at least one of those";
		myS1BackError.style.backgroundColor= "pink";
		myS2BackError.style.backgroundColor= "pink";
		
		return false;
	}
	
	//if( myCheckLocation1Check.checked == false && myCheckLocation2Check.checked == false && myCheckLocation3Check.checked == false )
	if( (myCheckLocation1Check.checked == true || myCheckLocation2Check.checked == true || myCheckLocation3Check.checked == true) == false)
	{
		myCError.innerHTML = "Your have to select at least one of our Business Location";
		myCBackError.style.backgroundColor= "pink";
		
		
		return false;
	}
	//subcribe letters
	if( mySubletter1check.checked == false && mySubletter1check.checked == false )
	{
		myScErrorError.innerHTML = "Your have to checked at least one of those";
		myScBackError.style.backgroundColor= "pink";
		
		return false;
	}
	
	alert("Thanks you for enquiry");

    return true;
	
	

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
/*-----------------------------------myName--------------------*/


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
/*-----------------------------------myradio--------------------*/
function radio_onchange(){
	if( myRadio1Fieldcheck.checked == true || myRadio2Fieldcheck.checked == true){
		myRBackError.style.backgroundColor= "rgba(225,219,187, 1)";
		myRError.innerHTML = "";

	} else{
		myRError.innerHTML = "Your have to checked at least one of those";
		myRBackError.style.backgroundColor= "pink";
		
	}
}
/*-----------------------------------myOption Select--------------------*/

function option_onchange(){
	if( mySelect1OptionCheck.selectedIndex > 0 || mySelect2OptionCheck.selectedIndex > 0){
		myS1BackError.style.backgroundColor= "rgba(225,219,187, 1)";
		myS2BackError.style.backgroundColor= "rgba(225,219,187, 1)";
		mySError.innerHTML = "";

	} else{
		mySError.innerHTML = "Your have to select at least one of those";
		myS1BackError.style.backgroundColor= "pink";
		myS2BackError.style.backgroundColor= "pink";
		
	}
}
/*-----------------------------------mycheck checked--------------------*/
function check_onchange(){

	if( myCheckLocation1Check.checked == true || myCheckLocation2Check.checked == true || myCheckLocation3Check.checked == true){
		myCBackError.style.backgroundColor= "rgba(225,219,187, 1)";
		
		myCError.innerHTML = "";

	} else{
		myCError.innerHTML = "Your have to select at least one of those";
		myCBackError.style.backgroundColor= "pink";
		
		
	}
}
/*-----------------------------------subletter-------------------*/
function subletter_onchange(){

	if(mySubletter1check.checked  == true || mySubletter1check.checked  == true){
		myScBackError.style.backgroundColor= "rgba(225,219,187, 1)";
		myScError.innerHTML = "";

	} else{
		myScError.innerHTML = "Your have to checked at least one of those";
		myScBackError.style.backgroundColor= "pink";
		
	}
}

