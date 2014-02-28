<?php

    $to = "hussainmuhammad1111@gmail.com";
    $subject = "Mail Test ".strftime('%T','Y',time());
    $message = "this si a simple message please aceept it";
    $message = wordwrap($message,70);
    $from  = "localhost@localhost.com";
    $header = "From ".$from;


    mail($to, $subject, $message, $header);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
