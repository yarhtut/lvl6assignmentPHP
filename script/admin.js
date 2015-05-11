/**
 * Created by Yar on 5/21/14.
 */
var social = document.getElementById("social_facebook_update");
var logo = document.getElementById('logo_update');
var twitter = document.getElementById('social_twitter_update');
var google = document.getElementById('social_google_update');

if(document.getElementById('logo') != null){
    document.getElementById('logo').onclick = function(){
        window.location = "update.php?action=top_logo";
    };
}
//page is top_log_update
if (/top_logo/.test(window.location.href)){
    logo.style.background = "#0186ba";
    //hide element
    document.getElementById('dash_right').style.display = 'none';
}


//page is to upadte social facebook

//page is top_social_facebook
if (/top_social_facebook/.test(window.location.href)){
    social.style.background = "#0186ba";
   //hide element
    document.getElementById('dash_right').style.display = 'none';

}

//page is top_soical_twitter
if(document.getElementById('social_twitter_update') != null){
    document.getElementById('social_twitter_update').onclick = function(){
        window.location = "update.php?action=top_social_twitter";
    };
}
//page is top_social_twitter
if (/top_social_twitter/.test(window.location.href)){
   twitter.style.background = "#0186ba";
    //hide element
    document.getElementById('dash_right').style.display = 'none';


}
//page is top_soical_google+ when click social_google_update
if(document.getElementById('social_google_update') != null){
    document.getElementById('social_google_update').onclick = function(){
        window.location = "update.php?action=top_social_google";
    };
}
//page is top_social_google+ and hite the dash_right page
if (/top_social_google/.test(window.location.href)){
    google.style.background = "#0186ba";
    //hide element
    document.getElementById('dash_right').style.display = 'none';


}
/*
if (/update.php/.test(window.location.href)){
    //hide element
    document.getElementById('social_facebook_update').style.display = 'none';
    document.getElementById('social_facebook_delete').style.display = 'none';
    document.getElementById('social_twitter_update').style.display = 'none';
    document.getElementById('social_twitter_delete').style.display = 'none';
    document.getElementById('social_google_update').style.display = 'none';
    document.getElementById('social_google_delete').style.display = 'none';
    document.getElementById('logo_update').style.display = 'none';
    document.getElementById('logo_delete').style.display = 'none';
}
//
if(document.getElementById('social_update') !=null){
    document.getElementById('social_update').onclick = function(){
        document.getElementById('social_facebook_update').style.display='block';
        document.getElementById('social_facebook_delete').style.display='block';
        document.getElementById('social_twitter_update').style.display = 'block';
        document.getElementById('social_twitter_delete').style.display = 'block';
        document.getElementById('social_google_update').style.display = 'block';
        document.getElementById('social_google_delete').style.display = 'block';
        document.getElementById('logo_update').style.display='none';
        document.getElementById('logo_delete').style.display='none';
        document.getElementById('social_facebook_update').style.background='#4b4b4b';

        document.getElementById('social_facebook_delete').style.background='#4b4b4b';
        document.getElementById('social_twitter_update').style.background='#4b4b4b';
        document.getElementById('social_twitter_delete').style.background='#4b4b4b';
        document.getElementById('social_google_update').style.background='#4b4b4b';
        document.getElementById('social_google_delete').style.background='#4b4b4b';
    };
}
if(document.getElementById('logo') !=null){
    document.getElementById('logo').onclick = function(){
        document.getElementById('logo_update').style.display='block';
        document.getElementById('logo_delete').style.display='block';
        document.getElementById('social_facebook_update').style.display='none';
        document.getElementById('social_facebook_delete').style.display='none';
        document.getElementById('social_twitter_update').style.display = 'none';
        document.getElementById('social_twitter_delete').style.display = 'none';
        document.getElementById('social_google_update').style.display = 'none';
        document.getElementById('social_google_delete').style.display = 'none';
        document.getElementById('logo_update').style.background='#4b4b4b';
        document.getElementById('logo_delete').style.background='#4b4b4b';
    };
}
*/