<?php
require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$nome = $_POST['Nome'];
$email = $_POST['Email'];

try{
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'braganathan38@gmail.com';
    $mail->Password = '';
    $mail->Port = 587;

    $mail->setFrom('braganathan38@gmail.com');
    $mail->addAddress('braganathan38@gmail.com');
    
    $mail->isHTML(true);
    $mail->Subject = '*** NOVO CADASTRO LEAD ***';
    $mail->Body = "Novo cliente cadastrado via formulário: <br><br> Nome: <strong>". $nome . "<br>Email: " . $email . "<br><br><br> *** FINAL DE AVISO ***";
    $mail->AltBody = 'Chegoooou';

    if($mail->send()){
        echo "<script>alert('teste');</script>";
    }else{
        echo "Email nao enviado";
    }

}catch(Exception $e){
    echo "Erro ao encaminhar email: {$mail->ErrorInfo}";
}