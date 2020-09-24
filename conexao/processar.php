<?php
session_start();
include_once("conexao.php");
$nomePri     = $_POST['nomePri'];
$senha       = $_POST['senha'];
$email       = $_POST['inputEmail'];
$nomeUlt     = $_POST['nomeUlt'];
$endereco    = $_POST['endereco'];
$cidade      = $_POST['cidade'];
$estado      = $_POST['inputEstado'];
$cep         = $_POST['cep'];
$telefone    = $_POST['telefone'];
echo "email: ".$email;
$query = mysqli_query($conectar,"INSERT INTO usuario (cep,cidade,nomePri,created,email,endereco,estado,nomeUlt,senha,telefone) 
VALUES ('$cep','$cidade','$nomePri',now(),'$email','$endereco','$estado','$nomeUlt','$senha','$telefone')");
    
    if (!$query) {
        die("Erro ao conectar ao banco: " . mysqli_error($conectar));
    }

    echo '<script type="text/javascript">
             alert("Salvo com Sucesso !");
             window.history.go(-1);
          </script>';
    // if(mysqli_affected_rows($conectar)!= 0){
    //     header("Location: ../index.php");
    // }
?>