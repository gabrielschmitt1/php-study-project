<?php
	switch ( @$_REQUEST["acao"] )
	{
		case "empresa":
			
			$sql = "DELETE FROM empresa WHERE id_empresa=".$_REQUEST["id_empresa"];
			
			$result = $conn->query($sql);
			
			if ( $result )
			{
				print "<script>
							alert('Excluiu com sucesso!');
					   </script>";
				print "<script>
							location.href='?page=editar-empresa';
					   </script>";
			}
			else
			{
				print "Não foi possível editar!";
			}
		break;

		case "vaga":

			$sql = "DELETE FROM vaga WHERE id_vaga=".$_REQUEST["id_vaga"];
			
			$result = $conn->query($sql);
			
			if ( $result )
			{
				print "<script>
							alert('Excluiu com sucesso!');
					   </script>";
				print "<script>
							location.href='?page=editar-vaga';
					   </script>";
			}
			else
			{
				print "Não foi possível editar!";
			}			

		break;
	}
?>












