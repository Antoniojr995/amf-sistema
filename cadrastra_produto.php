<?php  
require_once('conexao.php');
$nome=$_POST["nome"];
$espe=$_POST["espe"];
$valor=$_POST["valor"];
$quantidade=$_POST["quantidade"];
$ns=$_POST["ns"];
$aux=str_replace(',','.',$valor);
$valor=floatval($aux);
$sql = "INSERT INTO produtos (nome, espesificacao, valor, quantidade, comentario, OB ) VALUES ('".$nome."','".$espe."','".$valor."','".$quantidade."','','".$ns."')";

if ($conn->query($sql) === TRUE) {
  header('Location: '.'index.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
msqli_close($conn);

$a[0] = new Produto($nome, $especificação, $valor, $Quantidade);
 

class Produto {
	public $nome;
	public $especificação;
	public $valor;
	public $Quantidade;
	public $os;
	
	function __construct($nome, $especificação, $valor, $Quantidade) {
		$this->nome =$nome;
		$this->especificação = $especificação;
		$this->valor = $valor;
		$this->Quantidade = $Quantidade;
	}

	public function getnome() {
		return $this->nome;
	}
	public function setnome($n) {
		$this->nome=$n;
	}
	public function getespecificação() {
		return $this->especificação;
	}
	public function setespecificação($e) {
		$this->especificação=$e;
	}
	public function getvalor() {
		return $this->valor;
	}
	public function setvalor($t) {
		$this->valor=$t;
	}
	public function getQuantidade() {
		return $this->Quantidade;
	}
	public function setQuantidade($e) {
		$this->Quantidade = $e;
	}

	public function cadastroPessoa() {
		echo "a pessoa {$this->getnome} do enderoço {$this->enderoço}esta cadrastrada.";
	}

	public function salvar() {}

}


?>

	