<h1>Editar Empresa</h1>

<?php 
	if ( @$_REQUEST["res"]=="ok" )
	{ 
?>

	<div class="alert alert-success alert-dismissible fade show" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  		</button>
  		Editado com sucesso!
	</div>

<?php 
	} //fim do if de resposta

	$sql = "SELECT * FROM empresa WHERE id_empresa = ".$_REQUEST["id_empresa"];
	
	$result = $conn->query($sql);
	
	if ( $result->num_rows > 0 )
	{
		while ( $row = $result->fetch_assoc() ) 
		{
?>

<form action="index.php?page=salvar-editar&acao=editar-empresa&id_empresa=<?php print $row["id_empresa"]; ?>" method="POST">
	<div class="form-group">
		<label>Nome</label>
		<input type="text" name="nome_empresa" class="form-control" value="<?php print $row["nome_empresa"]; ?>" />
		<label>CNPJ</label>
		<input type="text" name="CNPJ" class="form-control" value="<?php print $row["CNPJ"]; ?>" />
		<label>Area de atuacao</label>
		<input type="text" name="area_atuacao" class="form-control" value="<?php print $row["area_atuacao"]; ?>" />
		<br>
		<button type="submit" class="btn btn-primary">Editar</button>
	</div>
</form>

<?php
		} //fim do while
	}
	else
	{
		print "Não encontrou resultado.";
	}
?>






