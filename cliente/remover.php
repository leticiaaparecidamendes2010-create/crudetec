<?php
        $id = $_REQUEST['id']; //pega o ID do funcionario na URL
        include_once("../conexao.php");//inclui a conexao do BD
        $sql="delete from cliente where id = $id";
        $result = mysqli_query($conexao,$sql);//executa o SQL
        if ($result)
        {
            header("location:listar.php");
        }
        else

        {
            mysqli_error($result);
        }

        ?>