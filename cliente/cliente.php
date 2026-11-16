<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de  Cliente</title>
    <!-- STYLE-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php
        include_once("../menu.php");
            ?>
<div class="container">
    <h1>Cadastro de Cliente</h1>
    <hr>
    <form action="inserir.php" method="post">
  <div class="form-group row">
    <label for="nome" class="col-4 col-form-label">Nome</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="nome" name="nome" placeholder="Nome completo" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="sexo" class="col-4 col-form-label">Sexo</label> 
    <div class="col-8">
      <select id="sexo" name="sexo" class="custom-select" required="required">
        <option value="F">Feminino</option>
        <option value="M">Masculino</option>
        <option value="NF">Não Informado</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="Endereço" class="col-4 col-form-label">Endereço</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-group"></i>  
          </div>
        </div> 
        <input id="endereco" name="endereco" placeholder="Endereço" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>

  
  <div class="form-group row">
    <label for="Email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-money"></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="Email" type="text" class="form-control" required="required">
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
        <input id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX" type="text" class="form-control" required="required">
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
        <input id="telefone" name="telefone" placeholder="(xx) XXXXX-XXXX" type="text" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Adicionar</button>
      <button name="apagar" type="reset" class="btn btn-warning">Limpar</button>
    </div>
  </div>
</form>


</div>

    
</body>
</html>