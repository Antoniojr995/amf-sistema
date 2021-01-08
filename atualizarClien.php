<?php 
require_once('conexao.php');
$nome=$_POST["nome"];
$email=$_POST["email"];
$telefone=$_POST["telefone"];
$endereco=$_POST["endereco"];
$id=$_POST['id'];

$sql = "UPDATE cliente SET nome='".$nome."', email='".$email."', endereco='".$endereco."' , telefone='".$telefone."' WHERE ID = ".$id;

if ($conn->query($sql) === TRUE) {
	echo "cadastro atualizado";
	header('Location: '.'home.html');

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
msqli_close($conn);

 ?>