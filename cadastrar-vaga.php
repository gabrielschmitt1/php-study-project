<h1>Cadastrar Vaga</h1>

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
<form action="index.php?page=salvar&acao=cadastrar-vaga" method="POST">
	<div class="row">
		<div class="col-sm-12"
			<div class="form-group">
				<div class="form-group">
					<label>Nome da Empresa</label>
					<select name="empresa_id_empresa" class="form-control">
					<?php
						$sql = "SELECT * FROM empresa";
			
						$result = $conn->query($sql);
			
						$qtd = $result->num_rows;
			
						if ( $qtd > 0 ) 
						{
							while ( $row = $result->fetch_assoc() )
							{
								print "<option value='".$row["id_empresa"]."'>".$row["nome_empresa"]."</option>";
							}
						}
						else
						{
							print "Não Encontrou resultado";
						}
					?>
					</select>
				</div>
				<div class="form-group">
					<label>Nome da Vaga</label>
					<input type="text" name="nome_vaga" class="form-control" />
				</div>
				<div class="form-group">
					<label>local</label>
					<input type="text" name="local_vaga" class="form-control" />
				</div>
				<div class="form-group">
					<label>Descrição</label>
					<input type="text" name="descricao_vaga" class="form-control" />
				</div>
				<div class="form-group">
					<label>Funcao</label>
					<input type="text" name="funcao_vaga" class="form-control" />
				</div>
					<br>
					<button type="submit" class="btn btn-primary">Cadastar</button>
				</div>
			</div>
		</div>
	</div>
</form>
<h1>Vagas Cadastradas</h1>
<table class="table table-bordered table-condensed table-primary table-striped table-hover">
	<tr>
		<th>#</th>
		<th>Empresa</th>
		<th>Nome da Vaga</th>
		<th>Local</th>
		<th>Descrição</th>
		<th>Funcao</th>
	</tr>
	<?php
		$sql = "SELECT * FROM vaga l
				INNER JOIN empresa e ON l.empresa_id_empresa = e.id_empresa";
		
		$result = $conn->query($sql);
		
		if ( $result->num_rows > 0 )
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









