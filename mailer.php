<?php
$name = $_POST["name"];
$to = "ironman92101@gmail.com";
$subject = "[MyWebsite]" . $_POST["subject"];
$txt = $_POST["body"];
$headers = "From: me@irnman.github.io" . "\r\n";

mail($to,$subject,$txt,$headers);
?>
