<?php
    //pegar os dados do form e colcoar em variáveis
    $nome =$_POST['nome'];
    $sexo=$_POST['sexo'];
    $cargo=$_POST['cargo'];
    $salario=$_POST['salario'];
    $cpf=$_POST['cpf'];
    $celular=$_POST['celular'];
    include_once("../conexao.php");//conecta
    $sql = "insert into funcionario(nome,sexo,cargo,salario,cpf,celular)
     values ('$nome','$sexo','$cargo','$salario','$cpf','$celular')";
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