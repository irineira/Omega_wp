<?php

	$post = (!empty($_POST)) ? true : false;

	if ($post) {

		$name = $_POST['name'];
		$company = $_POST['company'];
		$email = $_POST['email'];
		$tel = $_POST["tel"];

		$error = false;
		$sub = 'Paletare form';

		if (!$name) {$error = 'No name';}
		if (!$email) {$error = 'No email';}
		if (!$tel) {$error = 'Ne tel';}

		if (!$error) {
			$address = "info@paletarepublic.com";
			$mes = "Name: ".$name."\nCompany: " .$company."\nEmail: ".$email."\nTel: ".$tel."\n\n";
			$send = mail($address, $sub, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");

			if ($send) {echo 'OK';}
		}

		else {echo $error;}
	}
?>