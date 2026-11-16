
<?php
//conexao com o BD
//todo arquivo que for conectar, ao BD, 'chamará' ele
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="crud";    
    //chama o comando CONNECT e passa os valores das variáveis
    $conexao=mysqli_connect($servidor,$usuario,$senha,$banco);
    //testar a conexao
    if (!$conexao) //se NÃO conectou, avisa o erro
    {
        die("Erro: ".mysqli_error($conexao));
    }
?>