<?php
    //pegar os dados do form e colcoar em variáveis
    $id = $_POST['id'];//pega o ID da input oculta(hidden)
    $nome =$_POST['nome'];
    $sexo=$_POST['sexo'];
    $cargo=$_POST['cargo'];
    $salario=$_POST['salario'];
    $cpf=$_POST['cpf'];
    $celular=$_POST['celular'];
    include_once("../conexao.php");//conecta
    $sql = "update funcionario set nome='$nome',sexo='$sexo',
            salario='$salario',cpf='$cpf',celular='$celular' where id=$id";     
    $result=mysqli_query($conexao,$sql);
    if ($result)
    {
        echo "Registro atualizado com sucesso";
        header("location:listar.php");//redireciona para a pagina listar
    }
    else
    {
        die("Erro na inserção");
    }
    



?>