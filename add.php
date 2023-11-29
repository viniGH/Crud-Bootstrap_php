<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
  include('functions.php'); 
  add();
  include(HEADER_TEMPLATE); 
?>

<h2 class= "mt-2">Novo Cliente</h2>

  <form action="add.php" method="post">
    <!-- area de campos do form -->
    <hr />
    <div class="row">
      <div class="form-group col-md-7">
        <label for="name">Nome / Razão Social</label>
        <input type="text" maxlength="255" class="form-control" name="customer['name']">
      </div>

      <div class="form-group col-md-3">
        <label for="campo2" >CNPJ / CPF</label>
        <input type="text" maxlength="11" class="form-control" name="customer['cpf_cnpj']">
      </div>

      <div class="form-group col-md-2">
        <label for="campo3">Data de Nascimento</label>
        <input type="date" class="form-control" name="customer['birthdate']">
      </div>
    </div>
    
    <div class="row">
      <div class="form-group col-md-5">
        <label for="campo1">Endereço</label>
        <input type="text" maxlength="255" class="form-control" name="customer['address']">
      </div>

      <div class="form-group col-md-3">
        <label for="campo2">Bairro</label>
        <input type="text" maxlength="100" class="form-control" name="customer['hood']">
      </div>
      
      <div class="form-group col-md-2">
        <label for="campo3" >CEP</label>
        <input type="text" maxlength="8" class="form-control" name="customer['zip_code']">
      </div>
      
      <div class="form-group col-md-2">
        <label for="campo3">Data de Cadastro</label>
        <input type="date" class="form-control" name="customer['created']" disabled>
      </div>
    </div>
    
    <div class="row">
      <div class="form-group col-md-5">
        <label for="campo1">Município</label>
        <input type="text" maxlength="100" class="form-control" name="customer['city']">
      </div>
      
      <div class="form-group col-md-2">
        <label for="campo2">Telefone</label>
        <input type="text" maxlength="11" class="form-control" name="customer['phone']">
      </div>
      
      <div class="form-group col-md-2">
        <label for="campo3" >Celular</label>
        <input type="text" maxlength="11" class="form-control" name="customer['mobile']">
      </div>
      
      <div class="form-group col-md-1">
        <label for="campo3" >UF</label>
        <input type="text" maxlength="2" class="form-control" name="customer['state']">
      </div>
      
      <div class="form-group col-md-2">
        <label for="campo3">Inscrição Estadual</label>
        <input type="text" maxlength="15" class="form-control" name="customer['ie']">
      </div>
      
    
    <div id="actions" class="row mt-2">
      <div class="col-md-12">
        <button type="submit" class="btn btn-secondary"> <i class="fa-solid fa-sd-card"></i> Salvar</button>
        <a href="index.php" class="btn btn-light"> <i class="fa-solid fa-xmark"></i> Cancelar</a>
      </div>
    </div>
  </form>

<?php include(FOOTER_TEMPLATE); ?>
</body>
</html>