<?php

//phpinfo();

$to      = 'rsantellan@gmail.com';
$subject = 'the subject';
$message = 'hello';


echo mail($to, $subject, $message);
