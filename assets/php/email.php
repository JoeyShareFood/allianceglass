<?php

if(isset($_POST(['email'])) && !empty($_POST(['email']))){

    $name = addslashes($_POST(['name']));
    $email = addslashes($_POST(['email']));
    $message = addslashes($_POST(['message']));

    $to = "spntn.mateus@gmail.com";
    $subject = "Contato - AllianceGlas";
    $body = "Nome: ".$name."\r\nEmail: ".$email."\r\nMensagem: ".$message;


    $header = "From:smsilva.mateus@gmail.com"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

    if(mail($to, $subject, $body, $header)) {

        echo("Email enviado com sucesso!");
    }
    else {
        echo("O Email não pode ser enviado");
    }
}
?>