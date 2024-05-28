<?php

    $to = "kdgehlot2003@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "You have a message.";

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"phone"} = "phone";
    $fields{"message"} = "message";

    

    $body = "Here is what was sent:\r\n"; 

    foreach($fields as $a => $b){$body .= $b." : ".$_REQUEST[$a]."\r\n"; }


    $send = mail($to, $subject, $body, $headers);

?>