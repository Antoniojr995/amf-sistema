<?php 
require_once('conexao.php');
$pid=$_POST['pid'];

$sql = "DELETE FROM produtos WHERE PID=".$pid;

if ($conn->query($sql) === TRUE) {
	echo "cadastro atualizado";
	header('Location: '.'home.html');

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
msqli_close($conn);

 ?>