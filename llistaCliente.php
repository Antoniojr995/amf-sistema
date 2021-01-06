<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>	AMF Sistemas </title>
		<meta id="viewport" name="viewport" content="width="width=device-width, user-scalable="no">
		<link rel="stylesheet" type="text/css" href="assets/estilo.css" />
	</head>
<?php
$id=$_POST['id'];
require_once('conexao.php');
$sql = "SELECT * FROM cliente WHERE ID=".$id;
$cliente = $conn->query($sql);
$sql2 = "SELECT PID FROM cliente RIGHT JOIN produtos ON produtos.Cliente_ID=cliente.ID WHERE cliente.ID=".$id;
$pids = $conn->query($sql2);
$produtos=[];
foreach ($pids as $pid) {
	$sql3 = "SELECT * FROM produtos WHERE PID=".$pid['PID'];
	$p = $conn->query($sql3);
	array_push($produtos, $p);
}
?>
	<body>
		<div class="topo">
			<div class="topointerior">
				<div class="logomarca">
					<header>Desenvolvimento de Sistemas e Suporte Técnico</header>
				</div>
			</div>	
		</div>	
		<div class="banner">
			<div class="bannerinterior">
				<div class="banneresquerda">
					<div class="frase2" class="card" style="margin-top: 180px; height: 500px; width: 700px; height: 600px; margin-left: 225px">
                        <div class="box-parent-login">
                            <div class="well bg-white box-login">
                                <h1 class="ls-login-logo" style="margin-top: 20px; margin-left: 250px">Lista de cliente</h1>
                                <div class="col-12" style="background-color: #292929;color: #ffffff;">
									<div class="card-body">
									    <table class="table table-hover">
									        <thead>
									            <tr style="color:#ffffff;">
												<h3><b >Cliente</b></h3>
									                <th>Nome</th>
									                <th>Endereço</th>
									                <th>Email</th>
									                <th>Telefone</th>
									                <th></th>
									                </tr>
											</thead>
											<tbody style="color:#ffffff;">
											<?php foreach($cliente as $dado):?>
			                                <tr>
			                                    <td><?=$dado['nome']?></td>
			                                    <td><?=$dado['endereco']?></td>
			                                    <td><?=$dado['email']?></td>
			                                    <td><?=$dado['telefone']?></td>
			                                </tr>
			                            	<?php endforeach;?>
											</tbody>
									    </table>
									    <table class="table table-hover">
									        <thead>
									            <tr style="color:#ffffff;">
												<h3><b >Produto</b></h3>
									                <th>Nome</th>
									                <th>Especificação</th>
									                <th>Quantidade</th>
									                <th>Valor</th>
									                </tr>
											</thead>
											<tbody style="color:#ffffff;">
											<?php foreach($produtos as $produto):?>
												<?php foreach($produto as $p):?>
					                                <tr>
					                                    <td><?=$p['nome']?></td>
					                                    <td><?=$p['espesificacao']?></td>
					                                    <td><?=$p['quantidade']?></td>
					                                    <td>R$<?=$p['valor']?></td>
					                                </tr>
			                                	<?php endforeach;?>
			                                <?php endforeach;?>
											</tbody>
									    </table>
									</div>
								</div>

                            </div>
                        </div>
                    </div>
			</div>
		</div>
		<div class="rodape">
			André Freitas (84) 9 9850-9021 - Todos os direitos reservados
		</div>
	</body>

</html>