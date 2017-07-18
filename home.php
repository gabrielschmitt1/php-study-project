<div class="jumbotron text-center">
  <h1>Sistema de Vagas</h1>
  <p>O site de vagas mais completo que você já conheceu!</p> 
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <h3>Vagas disponiveis</h3>
     	<table class="table table-bordered table-condensed table-primary table-striped table-hover">
			<tr>
				<th>Função</th>
				<th>Descrição</th>
				<th>Empresa</th>
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
									print "<td>".$row["funcao_vaga"]."</td>";
									print "<td>".$row["descricao_vaga"]."</td>";
									print "<td>".$row["nome_empresa"]."</td>";
							print "</tr>";
							/*
							print "<p>";
							print $row["nome_empresa"].", 
								  <b>".$row["nome_vaga"]."</b>.
								     ".$row["local_vaga"].".
								     ".$row["descricao_vaga"].". 
								     ".$row["funcao_vaga"].".";			
							print "</p>";
							*/
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
    </div>
    <div class="col-sm-4">
     	<div class="card" style="width: 20rem;">
  			<img class="card-img-top" src="images/a.jpg" alt="Card image cap">
  				<div class="card-block">
    				<h4 class="card-title">Dicas para curriculos</h4>
   					 <p class="card-text">Neste topico selecionamos algumas dicas que podem ajudar na montagem do curriculo</p>
    				<a href="https://www.nube.com.br/estudantes/dicas/curriculo" class="btn btn-primary">Ir até o link</a>
  				</div>
		</div>
    </div>
  </div>
</div>
