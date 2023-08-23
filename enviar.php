<?php
include_once './config.php';
require 'PHPMailerAutoload.php';
require 'class.phpmailer.php';

$curl = curl_init();

//Receber dados do formulario
$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);

//Iniciar PHPMAILER e Configurações
$mailer = new PHPMailer;
$mailer->isSMTP(); // funcao mailer para usar SMTP
// $mailer->SMTPDebug = 1;
$mailer->SMTPOptions = array(
		'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$mailer->Host = 'smtp.comtidev.com.br'; // Servidor smtp pleskw0012.hospedagemdesites.ws
//Para cPanel: 'mail.dominio.com.br' ou 'localhost';
//Para Plesk 7 / 8 : 'smtp.dominio.com.br';
//Para Plesk 11 / 12.5: 'smtp.dominio.com.br' ou host do servidor exemplo : 'pleskXXXX.hospedagemdesites.ws';

$mailer->SMTPAuth = true;// Habilita a autenticação do form
$mailer->IsSMTP();
$mailer->isHTML(true); // Formato de email HTML
$mailer->Port = 587;// Porta de conexão

$mailer->Username = 'dev@comtidev.com.br'; // Conta de e-mail que realizará o envio
$mailer->Password = 'Com@ti0615'; // Senha da conta de e-mail

// email do destinatario
$address = "dev@comtidev.com.br";

$mailer->From = 'dev@comtidev.com.br';             //Obrigatório ser a mesma caixa postal indicada em "username"
$mailer->Sender = 'dev@comtidev.com.br';
$mailer->FromName = "Contato - SITE Prosper";          // seu nome
$mailer->Subject = "Contato - SITE Prosper";             // assunto da mensagem
$mailer->AddAddress($address, "destinatario"); 
$mailer->AddAddress("atendimento@prosperservice.com.br", "destinatario"); 

//ENVIO SEM VALIDAÇÃO TOTAL
  $corpoMSG = "<strong>Nome:</strong>".$dados['nome']."<br><strong>Contato:</strong>".$dados['contato']."<br><strong>Email:</strong>".$dados['email']."<br><strong>Endereço:</strong>".$dados['endereco']."<br><strong>Cidade:</strong>".$dados['cidade']."<br><strong>Estado:</strong>".$dados['estado']."<br><strong>CEP:</strong>".$dados['cep']."<br><strong>Condominio:</strong>".$dados['condominio']."<br><strong>Administradora:</strong>".$dados['administradora']."<br><strong>Perfil:</strong>".$dados['perfil']."<br><strong>Mensagem:</strong>".$dados['mensagem']."<br>";
  // $mailer->MsgHTML($corpoMSG);
  $mailer->MsgHTML(utf8_decode($corpoMSG));
  $mailer->Send();
  $retorna = ['status' => true, 'msg' => "Mensagem Enviada com sucesso!"];
  echo json_encode($retorna);
  header("Location: index.html");

//VALIDAÇÃO CAPTCHA

if(isset($dados['sitekey'])){

    // if (empty($dados)){
    //     $retorna = ['status' => false, 'msg' => "<p> Erro no preenchimento </p>"];
    // }
    // else {

    curl_setopt($curl, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response".$dados['g-recaptcha-response']);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, POSSUI_SLL);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $resposta = curl_exec($curl);
    curl_close($curl);

    $dados_recaptcha = json_decode($resposta);
}

/* if($dados_recaptcha->success){

  $corpoMSG = "<strong>Nome:</strong>".$dados['nome']."<br><strong>Contato:</strong>".$dados['contato']."<br><strong>Email:</strong>".$dados['email']."<br><strong>Endereço:</strong>".$dados['endereco']."<br><strong>Cidade:</strong>".$dados['cidade']."<br><strong>Estado:</strong>".$dados['estado']."<br><strong>CEP:</strong>".$dados['cep']."<br><strong>Condominio:</strong>".$dados['condominio']."<br><strong>Administradora:</strong>".$dados['administradora']."<br><strong>Perfil:</strong>".$dados['perfil']."<br><strong>Mensagem:</strong>".$dados['mensagem']."<br>";
  $mailer->MsgHTML(utf8_decode($corpoMSG));
  $mailer->Send();                            
  $retorna = ['status' => true, 'msg' => "Mensagem Enviada com sucesso!"];
  echo json_encode($retorna);
  header("Location: index.html");
 } else {
$retorna = ['status' => false, 'msg' => "ERRO: Identificado tentativa de email com bot!"];
echo json_encode($retorna);
/*}

?>

