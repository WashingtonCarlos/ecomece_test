<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>E-comerce Teste</title>
</head>
<body>
    <?php
      unset(
         $_SESSION['nomeUsuario'],
         $_SESSION['cpf'],   
         $_SESSION['inputEmail'],       
         $_SESSION['cep'],
         $_SESSION['cidade'],
         $_SESSION['estado'],
         $_SESSION['endereco'],
         $_SESSION['telefone'],
         $_SESSION['ID']       
       );
    ?>
    <div class = "container">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <h1>Login de Acesso</h1>
            <form class = "form-signin" method="POST" action="conexao/valida_login.php">
                <label class = "inputEmail" for="InputEmail">email</label>
                <input class = "form-control" type="email" name="email" placeholder="digite seu melhor e-mail" required autofocus><br>
                <label class = "inputName" for="nome">Senha</label>
                <input class = "form-control" type="password" name="senha" placeholder="Digite a senha "><br>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Acesse</button>
                <hr class="my-4">
            </form>
            <form class = "form-signin" method = "POST" action="cadastra.php">
                <button class="btn btn-lg btn-outline-secondary btn-block text-uppercase" type="submit">Cadastre-se</button>
            </form>
        </div>
    </div>
    <p class = "text-center text-danger" >
        <?php
          if (isset($_SESSION['loginErro'])){
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']);
          }
        ?>
      </p>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
</body>
</html>