<?php
include_once './config.php';
include ("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT); //Receber dados do formulario

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->SMTPDebug = 0;                                       //Ativar Debug = 1, visualizar em Preview no Inspecionar enviar.php em DevTools 
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'mail.prosperservice.com.br';           //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'contato@prosperservice.com.br';        //SMTP username
  $mail->Password   = 'Hkopro19$@';                           //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  $mail->setLanguage('pt');
  $mail->CharSet = 'utf8';

  //Recipients
  $mail->setFrom('contato@prosperservice.com.br', 'Formulário Prosper Service');
  $mail->addAddress('contato.luctech@outlook.com', 'Dev Teste'); 
  $mail->addAddress('atendimento@prosperservice.com.br', 'Atendimento Prosper');     //Add a recipient
  $mail->addAddress('contato@prosperservice.com.br', 'Contato Prosper');               //Name is optional
  //$mail->addReplyTo('info@example.com', 'Information');
  //$mail->addCC('cc@example.com');

  /*Attachments
  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name */

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'Solicitação de Orçamento - Site Prosper';
  $mail->Body    = "<strong>Solicitação de Orçamento atráves do site Prosper</strong> <br> <strong>Nome:</strong>".$dados['nome']."<br><strong>Contato:</strong>".$dados['contato']."<br><strong>Email:</strong>".$dados['email']."<br><strong>Endereço:</strong>".$dados['endereco']."<br><strong>Cidade:</strong>".$dados['cidade']."<br><strong>Estado:</strong>".$dados['estado']."<br><strong>CEP:</strong>".$dados['cep']."<br><strong>Condominio:</strong>".$dados['condominio']."<br><strong>Administradora:</strong>".$dados['administradora']."<br><strong>Perfil:</strong>".$dados['perfil']."<br><strong>Mensagem:</strong>".$dados['mensagem']."<br>";
  //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  $mail->send();
  echo 'E-Mail enviado com sucesso';
} catch (Exception $e) {
  echo "Erro no envio do email. Error: {$mail->ErrorInfo}";
}

//ENVIO SEM VALIDAÇÃO TOTAL
  //$corpoMSG = "<strong>Nome:</strong>".$dados['nome']."<br><strong>Contato:</strong>".$dados['contato']."<br><strong>Email:</strong>".$dados['email']."<br><strong>Endereço:</strong>".$dados['endereco']."<br><strong>Cidade:</strong>".$dados['cidade']."<br><strong>Estado:</strong>".$dados['estado']."<br><strong>CEP:</strong>".$dados['cep']."<br><strong>Condominio:</strong>".$dados['condominio']."<br><strong>Administradora:</strong>".$dados['administradora']."<br><strong>Perfil:</strong>".$dados['perfil']."<br><strong>Mensagem:</strong>".$dados['mensagem']."<br>";

//VALIDAÇÃO CAPTCHA

if(isset($dados['sitekey'])){

    // if (empty($dados)){
    //     $retorna = ['status' => false, 'msg' => "<p> Erro no preenchimento </p>"];
    // }
    // else {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response".$dados['g-recaptcha-response']);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, POSSUI_SLL);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $resposta = curl_exec($curl);
    curl_close($curl);

    $dados_recaptcha = json_decode($resposta);
}
?>

