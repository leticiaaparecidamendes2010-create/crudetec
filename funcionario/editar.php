<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
    <!-- STYLE-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <?php
        $id = $_REQUEST['id']; //pega o ID do funcionario na URL
        include_once("../conexao.php");//inclui a conexao do BD
        $sql="select * from funcionario where id = $id";
        $result = mysqli_query($conexao,$sql);//executa o SQL
        $linha = mysqli_fetch_assoc($result);//carrega o resultado 
        //carregar os dados nas variavéis
        $nome = $linha['nome'];       
        $sexo = $linha['sexo'];       
        $cargo = $linha['cargo'];       
        $salario = $linha['salario'];       
        $cpf = $linha['cpf'];       
        $celular = $linha['celular'];       
    ?>
<div class="container">
    <h1>Atualizar Funcionários</h1>
    <hr>
    <form action="atualizar.php" method="post">
  <div class="form-group row">
    <label for="nome" class="col-4 col-form-label">Nome</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="nome" name="nome" placeholder="Nome completo" type="text" class="form-control" required="required" value="<?php echo  $nome; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="sexo" class="col-4 col-form-label">Sexo</label> 
    <div class="col-8">
    
      <select id="sexo" name="sexo" class="custom-select" required="required"> 
        <option value="F"<?php if ($sexo=='F') echo  'selected';?>  >Feminino</option>
        <option value="M"<?php if ($sexo=='M') echo  'selected';?> >Masculino</option>
        <option value="NF"<?php if ($sexo=='NF') echo  'selected';?> >Não Informado</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="cargo" class="col-4 col-form-label">Cargo</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-group"></i>
          </div>
        </div> 
        <input id="cargo" name="cargo" placeholder="Cargo Atual" type="text" required="required" class="form-control"  value="<?php echo  $cargo; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="salario" class="col-4 col-form-label">Salário</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-money"></i>
          </div>
        </div> 
        <input id="salario" name="salario" placeholder="Salário Bruto" type="text" class="form-control" required="required" value="<?php echo  $salario; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="cpf" class="col-4 col-form-label">CPF</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX" type="text" class="form-control" required="required" value="<?php echo  $cpf; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="celular" class="col-4 col-form-label">Celular</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-whatsapp"></i>
          </div>
        </div> 
        <input id="celular" name="celular" placeholder="(xx) XXXXX-XXXX" type="text" class="form-control" required="required" value="<?php echo  $celular; ?>">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
        <input type="hidden" name="id" value="<?php echo  $id; ?>">
      <button name="submit" type="submit" class="btn btn-warning">Atualizar</button>
      <a href="listar.php" class="btn btn-primary">Voltar</a>
    </div>
  </div>
</form>


</div>

    
</body>
</html>