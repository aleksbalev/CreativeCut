<?php

$method = $_SERVER['REQUEST_METHOD'];
$project_name = "project_name";
$admin_email = "admin_email";
$email = "email";
$form_subject = "form_subject";
//Script Foreach
$c = true;
if ( $method === 'POST' ) {
	$project_name = trim($_POST[$project_name]);
	$admin_email = trim($_POST[$admin_email]);
	$email = trim($_POST[$email]);
	$form_subject = trim($_POST[$form_subject]);
	foreach ( $_POST as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";
	}
}
} else if ( $method === 'GET' ) {
	$project_name = trim($_GET[$project_name]);
	$admin_email = trim($_GET[$admin_email]);
	$email = trim($_GET[$email]);
	$form_subject = trim($_GET[$form_subject]);
	foreach ( $_GET as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border-bottom: 1px solid #d9d9d9;'><b>$key</b></td>
			<td style='padding: 10px; border-bottom: 1px solid #d9d9d9;'>$value</td>
		</tr>
		";
	}
}
}
$message = "<table style='width: 100%;'>$message</table>";
function adopt($text) {
	return '=?UTF-8?B?'.Base64_encode($text).'?=';
}
$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
'Reply-To: '.$admin_email.'' . PHP_EOL;
mail($admin_email, adopt($form_subject), $message, $headers );