<!-- 

Author: Gabriel Ribeiro Schmitt
Data: 18/07/2017

-->
<h1>Cadastrar Empresa</h1>

<?php 
	if ( @$_REQUEST["res"] == "ok" )
		{ 
?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  Cadastro realizado com sucesso!
</div>

<?php 
		} 
?>

<form action="index.php?page=salvar&acao=cadastrar-empresa" method="POST">
	<div class="form-group">
		<label>Nome</label>
		<input type="text" name="nome_empresa" class="form-control" />
		<label>CNPJ</label>
		<input type="text" name="CNPJ" class="form-control" />
		<label>Area de atuação</label>
		<input type="text" name="area_atuacao" class="form-control" />
		<br>
		<button type="submit" class="btn btn-primary">Cadastrar</button>
	</div>
</form>

<h1>Empresas Cadastradas</h1>
<table class="table table-bordered table-condensed table-primary table-striped table-hover">
	<tr>
		<th>#</th>
		<th>Nome</th>
		<th>CNPJ</th>
		<th>Area de atuação</th>
	</tr>
	<?php
		$sql = "SELECT * FROM empresa";
		
		$result = $conn->query($sql);
		
		if ( $result->num_rows > 0 )
		{
			while ( $row = $result->fetch_assoc() )
			{
				print "<tr>";
				print "<td>".$row["id_empresa"]."</td>";
				print "<td>".$row["nome_empresa"]."</td>";
				print "<td>".$row["CNPJ"]."</td>";
				print "<td>".$row["area_atuacao"]."</td>";
				print "</tr>";
			}
		}
		else
		{
			print "Não encontrou resultados";
		}
	?>
</table>











