<?php
	switch(@$_REQUEST["acao"])
	{
		case "cadastrar-empresa":
		
			$nome = $_REQUEST["nome_empresa"]; 
			$CNPJ = $_REQUEST["CNPJ"];
			$area = $_REQUEST["area_atuacao"];
			
			$sql = "INSERT INTO empresa (nome_empresa, CNPJ, area_atuacao) VALUES ('$nome', '$CNPJ', '$area')";
			
			$result = $conn->query($sql);
			
			if ( $result )
			{				
				print "<script>
							location.href='?page=cadastrar-empresa&res=ok';
				      </script>";
			} 
			else
			{
				print "Não foi possível cadastrar!";
			}			
		break;

		case "cadastrar-vaga":
			
			$empresa = $_REQUEST["empresa_id_empresa"];
			$nome1 = $_REQUEST["nome_vaga"];
			$local1 = $_REQUEST["local_vaga"];
			$descricao = $_REQUEST["descricao_vaga"];
			$funcao = $_REQUEST["funcao_vaga"];
			
			$sql = "INSERT INTO vaga (empresa_id_empresa, nome_vaga, local_vaga, descricao_vaga, funcao_vaga) VALUES ('$empresa', '$nome1', '$local1', '$descricao', '$funcao')";
			
			$result = $conn->query($sql);
			
			if ( $result )
			{
				print "<script>
							location.href='?page=cadastrar-vaga&res=ok';
					   </script>";
			}
			else
			{
				print "Não foi possível cadastrar";
			}
		break;
	}
?>












