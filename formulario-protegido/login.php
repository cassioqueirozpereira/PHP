<?php 
    session_start();
    $erro="";
    if (!isset($_POST["login"])||($_POST["login"]==""))
        $erro="Preencha o login";
    elseif (!isset($_POST["senha"])||($_POST["senha"]==""))
        $erro="Preencha a senha";
    else{
        $login=$_POST["login"];
        $senha=$_POST["senha"];
        if ($login!="admin"||$senha!="1234")
            $erro="Login ou senha invalido(s)";
        else {
            $_SESSION["usuario"]="Administrador";
        }
    }

    if ($erro != "")
        header("Location: form_login.php?erro=$erro", true, 301);
    else
        header("Location: protegida.php", true, 301);
?>