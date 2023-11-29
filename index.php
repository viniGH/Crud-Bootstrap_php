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
    include("functions.php");
    index();
    include(HEADER_TEMPLATE); 
?>

<header class="mt-3">
	<div class="row">
		<div class="col-sm-6">
			<h2>Clientes</h2>
		</div>
		<div class="col-sm-6 text-end h2">
	    	<a class="btn btn-secondary" href="add.php"><i class="fa-solid fa-user-plus"></i> Novo Cliente</a>
	    	<a class="btn btn-light" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

	<?php if (!empty($_SESSION['message'])) : ?>
				<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php clear_messages(); ?>
			<?php endif; ?>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th width="30%">Nome</th>
		<th>CPF/CNPJ</th>
		<th>Telefone</th>
		<th>Atualizado em</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($customers) : ?>
<?php foreach ($customers as $customer) : ?>
	<tr>
		<td><?php echo $customer['id']; ?></td>
		<td><?php echo $customer['name']; ?></td>
		<td><?php echo formatacpf($customer['cpf_cnpj']); ?></td>
		<td><?php echo formatatel($customer['phone']); ?></td>
		<td><?php echo formatadata( $customer['modified'], "d/m/Y - H:i:s"); ?></td>
		<td class="actions text-start">
			<a href="view.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-light"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-secondary"><i class="fa-solid fa-file-pen"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#delete-modal" 
					data-customer="<?php echo $customer['id']; ?>">
						<i class="fa fa-trash"></i> Excluir
					</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<?php 
	include('modal.php');
	include(FOOTER_TEMPLATE); 
?>
</body>
</html>