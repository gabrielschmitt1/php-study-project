<?php 
	if ( @$_REQUEST["res"] == "ok" )
		{ 
?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  Cadastrado com sucesso!
</div>

<?php 
		} 
?>

<h1>Vagas Cadastradas</h1>
<table class="table table-bordered table-condensed table-primary table-striped table-hover">
	<tr>
		<th>#</th>
		<th>Empresa</th>
		<th>Nome da Vaga</th>
		<th>Local</th>
		<th>Descrição</th>
		<th>Função</th>
		<th>Ações</th>
	</tr>
	<?php
		$sql = "SELECT * FROM vaga l
				INNER JOIN empresa e ON l.empresa_id_empresa = e.id_empresa";
		
		$result = $conn->query($sql);
		
		if (isset($result->num_rows) > 0)
		{
			while ( $row = $result->fetch_assoc() )
			{
				print "<tr>";
					print "<td>".$row["id_vaga"]."</td>";
					print "<td>".$row["nome_empresa"]."</td>";
					print "<td>".$row["nome_vaga"]."</td>";
					print "<td>".$row["local_vaga"]."</td>";
					print "<td>".$row["descricao_vaga"]."</td>";
					print "<td>".$row["funcao_vaga"]."</td>";
					print "<td><a href='?page=form-editar-vaga&id_vaga=".$row["id_vaga"]."' class='btn btn-primary'>Editar</a>
					<a href='#' 
					onclick=\"if ( confirm('Tem certeza que deseja excluir?') )
						  	{
						  		   location.href='?page=excluir&acao=vaga&id_vaga=".$row["id_vaga"]."'
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
			print "<div class='alert alert-danger'>
						Não há nenhum resultado!
				   </div>";
		}
	?>
</table>









