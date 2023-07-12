<?php
header('Content-Type: text/html; charset=utf-8 Location: /index.php');
$nome = $_GET['nome'];
$email = $_GET['email'];
$celular = $_GET['celular'];
$mensagem = $_GET['mensagem'];
if ($nome == "teste") {
	$to = "sidney.miranda2013@gmail.com";
} else {
	$to = "reginaldo@caboataneassociados.com.br";
}
$subject = "Contato formulário site";
$body = "Nome: ".$nome. "\r\n".
		"Email: ".$email. "\r\n".
		"Celular: ".$celular. "\r\n".
		"Mensagem: ".$mensagem;
$header = "From:reginaldo@caboataneassociados.com.br"."\r\n".
		"Reply-To:".$email."\r\n".
		"X=Mailer:PHP/".phpversion();
if(mail($to, $subject, $body, $header)) {
	header("Location:http://caboataneassociados.com.br");
};
?>
















