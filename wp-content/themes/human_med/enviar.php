<?php
require_once('class.phpmailer.php'); //chama a classe de onde você a colocou.

$mail = new PHPMailer(); // instancia a classe PHPMailer

$mail->IsSMTP();

//configuração do gmail
$mail->Port = '465'; //porta usada pelo gmail.
$mail->Host = 'smtp.gmail.com'; 
$mail->IsHTML(true); 
$mail->Mailer = 'smtp'; 
$mail->SMTPSecure = 'ssl';

//configuração do usuário do gmail
$mail->SMTPAuth = true; 
$mail->Username = '****'; // usuario gmail.   
$mail->Password = '****'; // senha do email.

$mail->SingleTo = true; 

// configuração do email a ver enviado.
$mail->From = $email = $_POST['email']; 
$mail->FromName = $nome = $_POST['nome']; 
$email = $_POST['email'];

$mail->addAddress($email); // email do destinatario.

$mail->Subject = "Contato Formulário - HumanMed"; 
$mail->Body = $mensagem = $_POST['mensagem'];

if(!$mail->Send())
	echo "Erro ao enviar Email:" . $mail->ErrorInfo;
	?>