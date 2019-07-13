<?php
if (isset($_POST['emailusu']) && !empty($_POST['emailusu'])){

$email = addslashes($_POST['emailusu']);
$nome = addslashes($_POST['nome']);
$assunto = addslashes($_POST['assunto']);
$mensagem = addslashes($_POST['mensagem']);

$para = 'lucasmatoss2000@gmail.com';
$headers = 'MIME-Version: 1.0'. "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' ."\r\n";
$headers .= 'para: Lucas Matos<lucasmatoss2000@gmail.com>' ."\r\n";
$body = "<br>Nome:</br> ".$nome. "\r\n".
        "<br>Email:</br> ".$email."\r\n".
        "<br>Mensagem:</br><br>".$mensagem;
$headers .= 'From: <falandoespanholrs@fespanhol.com.br>' ."\r\n";
$headers .= 'Replay-To:'.$email."\r\n";
mail($para,$assunto,$body,$headers);

}

?>
