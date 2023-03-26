<?php 

	if (isset($_POST['name'])) {$name = $_POST['name'];}
	if (isset($_POST['email'])) {$email = $_POST['email'];}
	if (isset($_POST['tel'])) {$tel = $_POST['tel'];}
	if (isset($_POST['massage'])) {$massage = $_POST['massage'];}
	

	$name = stripslashes($name);
	$name = htmlspecialchars($name);

	$email = stripslashes($email);
	$email = htmlspecialchars($email);
	
	$tel = stripslashes($tel);
	$tel = htmlspecialchars($tel);

	$massage = stripslashes($massage);
	$massage = htmlspecialchars($massage);
	
	

	$subject = 'Новое сообщение с сайта Мой Мурман';

	$mail_to = 'moymurman@mail.ru'; // ВАШ email
	
	$headers = 'From: Moy_Murman <support@weatherless.ru>' . "\r\n";
	
	$text .= "Имя: ".$name."\nПочта: ".$email. "\nТелефон для связи:".$tel."\nСообщение: ".$massage;
	
	if (mail($mail_to, $subject, $text, $headers)) {
		echo "success";
	}

?>