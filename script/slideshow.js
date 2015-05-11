

		var Image = new Array("imgs/farm.jpg", "images/4.jpg","images/33.jpg");
		
		
		var Description = new Array ("Kia Ora Koutou Katoa ", "We will help you to get better healthy life", "Wellcome to our Capital Organic New Zealand");
		var h2 = new Array("Capital Organic","Capital Organic Wellington","Organic Wellington");
		
		var Image_Number = 0;
		var Image_length = Image.length - 1;
		
		var slideShow_Timer; //defined the slideShow_Timer for play and stop();
		
		
	function change_image(num){
			Image_Number = Image_Number + num;
		if(Image_Number > Image_length){
			console.log("Restart slideshow");
			Image_Number = 0;
			
		}
	
		if(Image_Number < 0){
			console.log("At start");
			Image_Number =   Image.length - 1;
		}
		try{
			document.slideshow.src= Image[Image_Number];
			document.getElementById("description").innerHTML = Description[Image_Number];
			document.getElementById("descriptionh2").innerHTML = h2[Image_Number];
		
		}catch(e){console.log("caught slideshow error -> ",e)}
		
		return false;
	}
	
	function play(){
		slideShow_Timer = setInterval("change_image(1)" ,2000); 
		
	}
	
	
	function stop(){
		clearInterval(slideShow_Timer); 
	}
	
	
	
