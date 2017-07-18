<?php 
	if (@$_REQUEST["res"]=="ok")
		{ 
?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <p>Editou com sucesso!</p>
</div>

<?php 
		}
?>

<h1>Empresas Cadastradas</h1>
<table class="table table-bordered table-condensed table-primary table-striped table-hover">
	<tr>
		<th>#</th>
		<th>Nome</th>
		<th>CNPJ</th>
		<th>Area de Atuacao</th>
		<th>Ações</th>
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
				print "<td>
				<a href='?page=form-editar-empresa&id_empresa=".$row["id_empresa"]."' class='btn btn-primary'>Editar</a>
				<a href='#' 
				onclick=\"
				if ( confirm('Tem certeza que deseja excluir?') )
				{
					location.href='?page=excluir&acao=empresa&id_empresa=".$row["id_empresa"]."'
				}
				else
				{
					false;
				}
				\" class='btn btn-danger'>Excluir</a>
				</td>";
				print "</tr>";
			}
		}
		else
		{
			print "Não encontrou resultados";
		}
	?>
</table>











