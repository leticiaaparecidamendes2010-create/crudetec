<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Funcionários</title>
    <!-- STYLE-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php
        include_once("../menu.php");
            ?>
<div class="container">
    <h1>Listar Funcionários</h1>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Salário</th>
                <th>Operação</th>
            </tr>
        </thead>
        <tbody>
        <?php  //abre o php
            include_once("../conexao.php"); //conecta com o BD
            $sql ="select * from funcionario"; //código SQL
            $result = mysqli_query($conexao,$sql); // EXECUTA o código SQL
            while ($linha = mysqli_fetch_assoc($result)) 
            { //o enquanto vai percorrer cada linha da consulta SQL
                //vamos fechar o php para digitar o html  ?>
                <tr>
                    <td><?php echo $linha['nome']; ?>  </td>
                    <td><?php echo $linha['cargo']; ?></td>
                    <td><?php echo $linha['salario']; ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $linha['id']; ?>" class="btn btn-warning">Editar</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#remover<?php echo $linha['id']; ?>">
                            Remover
                            </button>
                    </td>
                            <!-- Modal -->
                            <div class="modal fade" id="remover<?php echo $linha['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Remover Funcionário</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Confirma exclusão ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <a type="button" class="btn btn-danger" href="remover.php?id=<?php echo $linha['id']; ?>">Sim</a>
                                    
                                </div>
                                </div>
                            </div>
                            </div>
                </tr>
                <?php //reabre o php para fechar o while 
                        }
                ?>
            </tbody>
        </table>



</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>