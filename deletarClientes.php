<?php
	$host = 'localhost';
	$senha = 'Jp102030';
	$usuario = 'postgres';
	$port = '5432';
	$dbname = 'SITE';
	
	
	try{
		
		$conexao = new PDO("pgsql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname, $usuario, $senha);
		
		}catch(PDOException $e) {
			
            echo $mensagem_formulario = "Erro ao conectar ao banco de dados! Erro: " . $e->getMessage();
                }	
				
	
	$sql3 = "DELETE FROM CLIENTES WHERE ID_CLIENTE = ?";
	
	try{
		$stmt = $conexao->prepare($sql3);
		$stmt->execute([$_POST['id_cliente']]);
		header('Location:listarClientes.php');
		
	}catch(PDOException $e){
		echo $mensagem_formulario = "Erro ao deletar cliente! Erro: " . $e->getMessage();
		
	}
	
?>

	
	
	