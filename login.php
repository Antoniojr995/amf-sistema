<?php  
require_once('conexao.php');
$ok = 0;
$nome=$_POST['usuario'];
$senha= $_POST['senha'];
$sql = "SELECT * FROM adminer";
$result=$conn->query($sql);
while($row = $result->fetch_assoc()) {
	if ($row['nome']===$nome && $row['senha']===$senha) {
		$ok=1;
	}
}
if($ok){
	header('Location: '.'index.html');
}else{
	header('Location: '.'login.html');
}
?>