<?php

$email_address_to = "yarhtut@live.com";

$headers = "" .
"From: yarhtut@live.com\r\n".
"Reply-To:yarhtut@live.com\r\n".
'MIME-Version: 1.0' . "\r\n".
'Content-type: text/html; charset=iso-8859-1' . "\r\n";

if (mail($email_address_to,"Order Confirmation",$message,$headers)){

    echo "success";

}else{
//email failed
    echo "failed";
}

?>