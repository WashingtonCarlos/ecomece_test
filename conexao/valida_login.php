<?php
    session_start();
    $email = $_POST['email'];
    $senhat = $_POST['senha'];
    include_once("conexao.php");
    
    $result1  = mysqli_query($conectar,"SELECT * FROM usuario WHERE email = '$email' AND senha = '$senhat' LIMIT 1 ");
    $resultado = mysqli_fetch_array($result1);
    echo $resultado['nome'];

    if (empty($resultado)){
        //mensagem de erro
        $_SESSION['loginErro'] = "E-mail ou senha inválido";

        //Mandar o usuario para a tela de login
        header("Location: ../index.php");
    }else{
        //Define o que é atribuido no banco de dados
        $_SESSION['nomeUlt']          = $resultado['nomeUlt'];
        $_SESSION['nomePri']          = $resultado['nomePri'];
        $_SESSION['inputEmail']       = $resultado['email'];
        $_SESSION['CEP']              = $resultado['cep'];
        $_SESSION['CIDADE']           = $resultado['cidade'];
        $_SESSION['ESTADO']           = $resultado['estado'];
        $_SESSION['TELEFONE']         = $resultado['telefone'];
        $_SESSION['ENDERECO']         = $resultado['endereco'];
        $_SESSION['senha']            = $resultado['senha'];
        $_SESSION['ID']               = $resultado['id'];


            //redirecionando para pagina comum do usuario 
            header("Location: usuario.php");
    }  
?>