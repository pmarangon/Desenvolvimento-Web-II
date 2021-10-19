<?php
if (isset($_POST['acao'])){
		try {
		  $pdo = new PDO('mysql:host=localhost; dbname=sportsup', 'root', '');
		  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			if(!$pdo){
       die('Erro ao criar a conexão');
   		}

		  $stmt = $pdo->prepare("INSERT INTO tipo (usuario,idade,modalidade) VALUES(:usuario,:idade,:modalidade)");
      $stmt->bindParam(":usuario", $_POST['usuario'] , PDO::PARAM_STR);
      $stmt->bindParam(":idade", $_POST['idade'] , PDO::PARAM_STR);
      $stmt->bindParam(":modalidade", $_POST['modalidade'] , PDO::PARAM_STR);
      $executa = $stmt->execute();

       if($executa){
           echo 'Dados inseridos com sucesso';
       }
       else{
           echo 'Erro ao inserir os dados';
			 }
		} catch(PDOException $e) {
		  echo 'Error: ' . $e->getMessage();
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Banco </title>
  <link rel="stylesheet" href="style.css">


</head>
<body>
<h1> Modalidade Preferida </h1>
<img src="heart-rate.png" alt="Imagem não encontrada" width="100" height="100">
	<form method="post">
		<input type="text" name='usuario' placeholder="Digite seu usuário" required/><br/>
		<input type="text" name='idade' placeholder= "Quantos anos você tem?" required/><br/>
		<input type="text" name='modalidade'  placeholder= "Modalidade preferida" required/> <img src="teamwork.png" alt="Time" width="auto" height="auto">
<br/>
		<input type="button" class="button" value="Enviar!">
	</form>



        <a href="cadastro.php" class="btn btn-primary">Usuários cadastrados</a>
        <a href="delete.php" class="btn btn-primary">Deletar último registro</a>
</body>
</html>
