<?php

if(isset($_POST['email']) && !empty($_POST['email']))
{

$nome =($_POST['nome']);
$email =($_POST['email']);
$telefone =($_POST['telefone']);
$mensagem =($_POST['mensagem']);

$to = "raylandercribeiro@gmail.com";
$subject = "contato - !Hi Ribeiro";
$body = "Nome: ".$nome. "\n".
        "Email: ".$email. "\n".
        "Telefone: ".$telefone. "\n".
        "Mensagem: ".$mensagem;



    if(mail($to,$subject,$body)){
            echo ("E-mail enviado com sucesso!!!");
     }else{
        echo ("e-mail não enviado");
     }
}

?>