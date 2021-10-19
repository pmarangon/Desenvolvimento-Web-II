<?php
require_once('dados_banco.php');
$conn=mysqli($servername, $username,$password,$dbnane)
if($conn->connect_error){
	die("connetion failed : ",conn->connect_error);
}
$sql= "DELETE FROM  tipo  WHERE tipoid=3";
if ($conn->query($sql)===TRUE) {
	echo"Usuário apagado com sucesso";
} else{
	echo"Erro ao tentar apagar registro: " .$conn->error
}

mysqli_close($conn);

?>