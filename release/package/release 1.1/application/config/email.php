<?php
	/*$config = Array(
		'useragent' => 'mySmaty Web Mailer',
		'protocol'	=> 'smtp',
		'smtp_host'	=> 'mail.mysmaty.com',
		'smtp_user'	=> 'webmaster@mysmaty.com',
		'smtp_pass'	=> 'Pass@word1!',
		'smtp_port'	=> 25,
		'SMTPAuth'  => true,
		'mailtype'	=> 'html'
	);*/
	$config = Array(
		'useragent' 	=> "NayaGaadi Mailer",
		'protocol'	=> "smtp",
		'mailpath'	=> "/usr/bin/sendmail",
		'smtp_host'	=> "Mail.NayaGaadi.com",
		'smtp_user'	=> "sales@nayagaadi.com",
		'smtp_pass'	=> "Slokam@12345#!",
		'smtp_port'	=> "25",
		'SMTPAuth'  => true,
		'charset'	=> "utf-8",
		'mailtype'	=> "html",
		'newline'=> "\r\n",
		'wordwrap'	=> true
	);
?>