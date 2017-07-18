<h1>Editar Vaga</h1>

<?php
	$sql = "SELECT * FROM vaga l
			INNER JOIN empresa e
			ON e.id_empresa = l.empresa_id_empresa
			WHERE id_vaga=".$_REQUEST["id_vaga"];
			
	$result = $conn->query($sql);
	
	if ( $result->num_rows > 0 )
	{
		while ( $row = $result->fetch_assoc() )
		{
		
?>
<form action="index.php?page=salvar-editar&acao=editar-vaga&id_vaga=<?php print $row["id_vaga"]; ?>" method="POST">
	<div class="form-group">
		<div class="form-group">
			<label>Nome da Empresa</label>
			<select name="empresa_id_empresa" class="form-control">
				<option value="<?php print $row["id_empresa"]; ?>">
					<?php 
						print $row["nome_empresa"]; 
					?>
				</option>
			<?php
				
				$sql2 = "SELECT * FROM empresa";
				
				$result2 = $conn->query($sql2);
				
				if ( $result2->num_rows > 0 )
				{
					while ( $row2 = $result2->fetch_assoc() )
					{
						$id = $row2["id_empresa"];
						$nome = $row2["nome_empresa"];
						
						print "<option value='$id'>
									$nome
							   </option>";
					}
				}
				else
				{
					print "Não encontrou resultados";
				}
			?>
			</select>
		</div>
		<div class="form-group">
			<label>Nome da vaga</label>
			<input type="text" name="nome_vaga" class="form-control" value="<?php print $row["nome_vaga"]; ?>" />
		</div>
		<div class="form-group">
			<label>Local</label>
			<input type="text" name="local_vaga" class="form-control" value="<?php print $row["local_vaga"]; ?>" />
		</div>
		<div class="form-group">
			<label>descrição</label>
			<input type="text" name="descricao_vaga" class="form-control" value="<?php print $row["descricao_vaga"]; ?>" />
		</div>
		<div class="form-group">
			<label>Funcao</label>
			<input type="text" name="funcao_vaga" class="form-control" value="<?php print $row["funcao_vaga"]; ?>" />
		</div>
			<br>
			<button type="submit" class="btn btn-primary">Editar</button>
		</div>
	</div>
</form>
<?php
		
		}//fim do while
	}
	else
	{
		print "Não foi possível exibir resultados";
	}
?>









