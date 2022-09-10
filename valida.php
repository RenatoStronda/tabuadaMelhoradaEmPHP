
<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    if (isset($usuario) && !empty($usuario) && isset($senha) && !empty($senha))
    {
        if($usuario == "renato" && $senha == "123")
        {
            session_start();
            $_SESSION["user"] = $usuario;
            header("location:menu.php");
        }
        else
        {
            header("location:index.php");
        }
        
    }
    else
    {
        header("location:index.php");
    }
?> 