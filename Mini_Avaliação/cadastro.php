<?php
require_once('dados_banco.php');
$conn=mysqli($servername, $username,$passwor, $bnane)
if($conn->connect_error){
	die("connetion failed : ",conn->connect_error);
}
$sql= "SELECT tipo_ID,usuario,idade, modalidade FROM tipo;
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) >0){
	while($row = mysqli_fetch_assoc($result])){
	echo "id: " - . $row["tipoID"]. "Usuario: " . $row["Usuario"]. "" .$row["Idade"]. $row["Modalidade"]
	}

mysqli_close($conn)


?> 