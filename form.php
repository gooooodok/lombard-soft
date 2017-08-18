<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lombard-Soft</title>
<meta http-equiv="Refresh" content="3; URL=http://localhost/"> 
</head>
<body>

<?php 

$sendto   = "	zagraychuk@gmail.com";
$username = $_POST['name'];
$usermail = $_POST['email'];

$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";


$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "</body></html>";


if(@mail($sendto, $subject, $msg, $headers)) {
	echo "<center>Письмо отправлено</center>";
} else {
	echo "<center>Письмо не отправлено</center>";
}

?>

</body>
</html>