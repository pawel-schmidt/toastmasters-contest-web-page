<?php

    $to = "mateuszmar@wp.pl";
    $from = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"subject"} = "subject";
    $fields{"message"} = "message";

    $body = "";
    foreach($fields as $key => $value) {
        $body .= sprintf("%20s: %s\n", $value, $_REQUEST[$key]);
    }

    $send = mail($to, $subject, $body, $headers);

?>
