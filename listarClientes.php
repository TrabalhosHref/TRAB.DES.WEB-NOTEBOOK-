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
				
			
	$sql1 = "SELECT * FROM CLIENTES";
	try{
	$stmt = $conexao->prepare($sql1);
	$stmt->execute();
	}catch(PDOException $e) {
	
	echo $mensagem_formulario = "Erro ao listar clientes!" . $e->getMessage();
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Encantos das Cortinas</title>
	<link rel = "stylesheet" href = "listaClientes_custom.css"><!SINALIZANDO QUE É UMA "FOLHA DE ESTILO" E DEPOIS O CAMINHO ATÉ O ARQUIVO.CSS->
	<link rel="icon" href="https://trabalhoshref.github.io/mostruario-imagens/LOGO_ENCANTO_DAS_CORTINAS.ico" type="image/x-icon"><!ÍCONE DA PÁGINA->
	<meta charset = "UTF-8"><!FORMATAÇÃO DE CARACTERES->
	<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
	
</head>
<body>
	<header>
	<img id = "logo" src = "https://trabalhoshref.github.io/mostruario-imagens/LOGO_ENCANTO_DAS_CORTINAS_3.png">
	</header>
	<nav><!MENU DE NAVEGAÇÃO DA PÁGINA->
		<a href = "cortinas_loja.html">Início</a>
		<a href = "produtos.html">Produtos</a>
		<a href = "sobrenos.html">Sobre nós</a>
		<a href = "contatos.html">Contato</a>
	</nav><!AQUI TERMINA O LAYOUT PARA AS OUTRAS PÁGINAS!->
	
	
	

	<?php
	echo "<table id = 'tabela' border = '2'>";
	echo "<style>
		#tabela{
		background-color:white;
		padding-left:0px;
		position:relative;
		top:5px;
		left:200px;
		width: 1009px;
       
	}
		fieldset{
			background-color:white;
			font-weight:bold;
			position: relative;
			top:25px;
			left:350px;
			width:550px;
		}
	</style>";
		echo "<tr>";
		
		echo "<th>ID do cliente</th>";
		echo "<th>Nome Cliente</th>";
		echo "<th>Email</th>";
		echo "<th>Telefone</th>";
		echo "<th>Dúvida</th>";
		echo "</tr>";
		
	while( $resultadoConsulta = $stmt->fetch(PDO::FETCH_ASSOC)){
		
	
		echo "<tr>";
		
		echo "<td>" . $resultadoConsulta['id_cliente']. "</td>";
		echo "<td>" . $resultadoConsulta['nome_cliente'] . "</td>";
		echo "<td>" . $resultadoConsulta['email'] . "</td>";
		echo "<td>" . $resultadoConsulta['telefone'] . "</td>";
		echo "<td>" . $resultadoConsulta['duvida']."</td>";
		echo "</tr>";
		
		
	}
	echo "</table>";
	?>
	
	<form action = "deletarClientes.php" method = "post">
		<fieldset id = "id_cliente">
			<label for = "id_cliente">ID do cliente:</label>
			<input type = "number" required placeholder="Id do cliente a ser deletado." name = "id_cliente">
			
		</fieldset>
		<button type = "submit" class = "botao_contatos" id= "botao">Deletar</button>
	</form>
	


</body>
</html>