<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="texto">
            <img src="assents/img/3333449 (1).jpg" alt="" height="600vh">

        </div>




        <main class=" container">
            <div class="dentro">
                <h1>LOGIN</h1>
                <form action="#">
                    <div class="input-field">

                        <input type="email" name="nome" id="nome" placeholder="Digite seu email">
                        <div class="underline"></div>
                    </div>

                    <div class="input-field">

                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                        <div class="underline"></div>
                    </div>

                    <a href="paginainicial.html"> <input type="submit" value="Entrar"> </a>
            </div>
            </form>


            <p>NÃO POSSUI CONTA?</p>
            <a href="php/cadastro.php">
                <button>CADASTRO</button> </a>
            </fieldset>
        </main>
    </header>
</body>

</html>



<?php
if (isset($_POST['email'])) 
{
    $email = htmlentities(addslashes($_POST['email']));
    $senha = htmlentities(addslashes($_POST['senha']));
    if (!empty($email) && !empty($senha)) {
        require_once 'php/usuarios.php';
        $us = new Usuario("mery_goumert", "localhost", "root", "");
        if ($us->entrar($email, $senha))
         {
              header("location: index.php");
        } else
         {
             echo "Email e/ou senha estao incorretos"
        }
    } else 
    {
        echo "Preencha todos os campos";
    }
}

?>
