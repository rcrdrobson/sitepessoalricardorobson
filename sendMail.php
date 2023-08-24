<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$from = "contatosite@ricardorobson.com.br";
$to = "rcrdrobson@gmail.com";
$name = $_POST['name'];
$contato = $_POST['contact'];
$message = $_POST['message'];
$subject = "Nova mensagem do site pessoal";
$bodyMail = "Nome: ".$name."\nContato: ".$contato."\nMensagem: ".$message;
$headers = "De:". $from;
mail($to, $subject, $bodyMail, $headers);
echo "A mensagem de e-mail foi enviada.";
?>