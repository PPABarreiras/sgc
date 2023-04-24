<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function enviarEmail($nome, $email) {
    //Chama a classe Mailer
$mail = new PHPMailer(true);
try {
    //Server settings            
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                
    $mail->Username   = 'sistemachaves2022@gmail.com';  
    $mail->Password   = 'ikremileyylyvonz';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('sistemachaves2022@gmail.com', 'SGC');
    $mail->addAddress($email, $nome);
    $mail->addReplyTo($email, 'Information');
    $mail->addEmbeddedImage(dirname(__FILE__) . "./Conta-confirmada.jpg", "banner_sistema");
    $body = '
        <table width="600px" cellpadding="0" cellspacing="0" align="center" bgcolor="#F5F8FA">
                    <tr>
                        <td style="padding: 40px 0 0px 0;" align="center">
                        <img src="cid:banner_sistema" alt="Imagem do SGC">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 20px 50px 0px 20px; text-align: left;" align="left" >
                            <h1 style="font-size: 1.8em; color: #405F9E;">Bem-vindo(a) ao SGC!</h1> 
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0px 20px 160px 20px;">
                            <p style="padding: 0px; color: #23314E; font-size: 16px;">
                            Olá, ' .$nome.'!</p>
                            <p style="padding: 0px; color: #23314E; font-size: 16px;">O seu cadastro foi efetuado com sucesso. Por favor, Siga as próximas orientações do administrador da portaria.</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 10px 10px 10px;" bgcolor="#D9DCE1" align="center">
                            <p style="text-align: center; color: #2D4A81; font-size: 12px;">© 2022 IFBA., Inc. Todos os direitos reservados</p> 
                        </td>
                    </tr>
                </table>';
    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Confirmação de conta';
    $mail->Body    = $body;
    $mail->AltBody = 'Seu cadastro foi efetuado com sucesso!';
    $mail->CharSet = 'UTF-8';
    $mail->send();
} catch (Exception $e) {
    echo "Erro ao enviar o email: {$mail->ErrorInfo}";
}
}