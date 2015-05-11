/**
 * Created by 21104216 on 18/05/14.
 */
function showandhide(){

    if(document.getElementById('questionitem1').checked){
        document.getElementById('order').style.display ='block';
    }else{
        document.getElementById('order').style.display = 'none';
    }

    if(document.getElementById('questionitem2').checked){

        document.getElementById('enquiry').style.display ='block';
    }else{
        document.getElementById('enquiry').style.display = 'none';
    }

    if(document.getElementById('all').selected){
        console.log("Running All products");
        document.getElementById('col4_pro').style.display ="block";
        document.getElementById('col4_pro1').style.display = "block";
        document.getElementById('col4_pro2').style.display = "block";
        document.getElementById('col4_pro3').style.display = "block";
        document.getElementById('col4_pro4').style.display = "block";
        document.getElementById('product_enquiry').style.display = "block";

    }

    if(document.getElementById('vegetables').selected){

        document.getElementById('col4_pro').style.display = "block";
        document.getElementById('col4_pro1').style.display = "none";
        document.getElementById('col4_pro2').style.display = "none";
        document.getElementById('col4_pro3').style.display = "none";
        document.getElementById('col4_pro4').style.display = "none";
        document.getElementById('product_enquiry').style.display = "none";
    }

    if(document.getElementById('fruits').selected){

        document.getElementById('col4_pro').style.display = "none";
        document.getElementById('col4_pro1').style.display = "block";
        document.getElementById('col4_pro2').style.display = "none";
        document.getElementById('col4_pro3').style.display = "none";
        document.getElementById('col4_pro4').style.display = "none";
        document.getElementById('product_enquiry').style.display = "none";
    }
    if(document.getElementById('drinks').selected){

        document.getElementById('col4_pro').style.display = "none";
        document.getElementById('col4_pro1').style.display = "none";
        document.getElementById('col4_pro2').style.display = "block";
        document.getElementById('col4_pro3').style.display = "none";
        document.getElementById('col4_pro4').style.display = "none";
        document.getElementById('product_enquiry').style.display = "none";
    }
    if(document.getElementById('bakery').selected){

        document.getElementById('col4_pro').style.display = "none";
        document.getElementById('col4_pro1').style.display = "none";
        document.getElementById('col4_pro2').style.display = "none";
        document.getElementById('col4_pro3').style.display = "block";
        document.getElementById('col4_pro4').style.display = "none";
        document.getElementById('product_enquiry').style.display = "none";
    }
    if(document.getElementById('meat').selected){

        document.getElementById('col4_pro').style.display = "none";
        document.getElementById('col4_pro1').style.display = "none";
        document.getElementById('col4_pro2').style.display = "none";
        document.getElementById('col4_pro3').style.display = "none";
        document.getElementById('col4_pro4').style.display = "block";
        document.getElementById('product_enquiry').style.display = "none";
    }
    if(document.getElementById('enq').selected){

        document.getElementById('col4_pro').style.display = "none";
        document.getElementById('col4_pro1').style.display = "none";
        document.getElementById('col4_pro2').style.display = "none";
        document.getElementById('col4_pro3').style.display = "none";
        document.getElementById('col4_pro4').style.display = "none";
        document.getElementById('product_enquiry').style.display = "block";
    }

}
