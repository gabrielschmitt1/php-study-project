<?php
	switch(@$_REQUEST["acao"])
	{
		case "editar-empresa":
		
			$nome = $_REQUEST["nome_empresa"];
			$cnpj = $_REQUEST["CNPJ"];
			$area = $_REQUEST["area_atuacao"];
			
			$sql = "UPDATE empresa SET nome_empresa='$nome', CNPJ='$cnpj', area_atuacao='$area' 
			WHERE id_empresa=".$_REQUEST["id_empresa"];
			
			$result = $conn->query($sql);
			
			if ( $result )
			{				
				print "<script>
							location.href='?page=editar-empresa&res=ok';
					   </script>";
			}
			else
			{
				print "Não foi possível editar!";
			}	
		break;

		case "editar-vaga":
			
			$empresa = $_REQUEST["empresa_id_empresa"];
			$nome = $_REQUEST["nome_vaga"];
			$local = $_REQUEST["local_vaga"];
			$descricao = $_REQUEST["descricao_vaga"];
			$funcao = $_REQUEST["funcao_vaga"];
			
			$sql = "UPDATE vaga SET empresa_id_empresa=$empresa, nome_vaga='$nome', local_vaga='$local', descricao_vaga='$descricao', funcao_vaga='$funcao' WHERE id_vaga=".$_REQUEST["id_vaga"];
			
			$result = $conn->query($sql);
			
			if ( $result )
			{
				print "<script>
							location.href='?page=editar-vaga&res=ok';
					   </script>";
			}
			else
			{
				print "Não foi possível editar";
			}
		break;
	}
?>s












