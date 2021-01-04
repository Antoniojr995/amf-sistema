<?php
require_once('conexao.php');
$nome=$_POST["nome"];
$email=$_POST["email"];
$telefone=$_POST["telefone"];
$endereco=$_POST["endereco"];

$sql = "INSERT INTO cliente (nome, email, endereco, telefone) VALUES ('".$nome."','".$email."','".$endereco."','".$telefone."')";

if ($conn->query($sql) === TRUE) {
  header('Location: '.'index.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
msqli_close($conn);

$a[0] = new Cliente($nome, $email, $telefone, $endereco);
 

class Cliente {
	public $nome;
	public $email;
	public $telefone;
	public $endereco;
	
	function __construct($nome, $email, $telefone, $endereco) {
		$this->nome =$nome;
		$this->email = $email;
		$this->telefone = $telefone;
		$this->endereco = $endereco;
	}

	public function getnome() {
		return $this->nome;
	}
	public function setnome($n) {
		$this->nome=$n;
	}
	public function getemail() {
		return $this->email;
	}
	public function setemail($e) {
		$this->email=$e;
	}
	public function gettelefone() {
		return $this->telefone;
	}
	public function settelefone($t) {
		$this->telefone=$t;
	}
	public function getendereco() {
		return $this->endereco;
	}
	public function setendereco($e) {
		$this->endereco = $e;
	}

	public function cadastroPessoa() {
		echo "a pessoa {$this->getnome} do enderoço {$this->enderoço}esta cadrastrada.";
	}

	public function salvar() {}

}


?>

	