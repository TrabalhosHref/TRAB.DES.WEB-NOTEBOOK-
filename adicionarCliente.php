<?php
	define('HOST', 'localhost');
    define('PORT', '5432');
    define('DBNAME', 'SITE');
    define('USER', 'postgres');
    define('PASSWORD', 'Jp102030');
	
                try {
                    $conexao = new PDO("pgsql:host=" . HOST . ";port=" . PORT . ";dbname=" . DBNAME, USER, PASSWORD);
                   
				}catch(PDOException $e) {
                    echo $mensagem_formulario = "Erro ao conectar ao banco de dados! Erro: " . $e->getMessage();
                }	
				
    $sql1 = "INSERT INTO CLIENTES(NOME_CLIENTE,EMAIL,DUVIDA,TELEFONE) VALUES (? , ? , ? , ?)";
   
        try {
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$duvida = $_POST['duvida'];
			$telefone = $_POST['telefone'];
			
			$stmt = $conexao->prepare($sql1);
            $stmt->execute([$nome,$email,$duvida,$telefone]);
			header('Location:contatos.html');
			
        } catch (PDOException $e) {
            echo $mensagem_formulario = "Erro ao executar cadastro! Erro: " . $e->getMessage();
        }
		?>


	


