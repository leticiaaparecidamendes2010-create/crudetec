<?php
    //pegar os dados do form e colcoar em variáveis
    $nome =$_POST['nome'];
    $sexo=$_POST['sexo'];
    $email=$_POST['email'];
    $endereco=$_POST['endereco'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['telefone'];
    include_once("../conexao.php");//conecta
    $sql = "insert into cliente(nome,sexo,email,endereco,cpf,telefone)
     values ('$nome','$sexo','$email','$endereco','$cpf','$telefone')";
    $result=mysqli_query($conexao,$sql);
    if ($result)
    {
        echo "Registro Inserido com sucesso";
        header("location:listar.php");//redireciona para a pagina listar
    }
    else
    {
        die("Erro na inserção");
    }
    



?>