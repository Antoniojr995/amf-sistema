<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>	AMF Sistemas </title>
		<meta id="viewport" name="viewport" content="width="width=device-width, user-scalable="no">
		<link rel="stylesheet" type="text/css" href="assets/estilo.css" />
	</head>
<?php
require_once('conexao.php');
$sql = "SELECT * FROM cliente";

$clientes = $conn->query($sql);
?>
	<body>
		<div class="topo">
			<div class="topointerior">
				<div class="logomarca">
					<header>Desenvolvimento de Sistemas e Suporte Técnico</header>
				</div>
					<div class="menu">
						<ul>
							<li><a href="ccadrastro.html">cadratra cliente</a></li>
							<li><a href="cadrastra_produto.html">cadratra Produtos</a></li>
							<li><a href="listadeProdutos.php">Produtos</a></li>
							<li><a href="listadeCliente.php">clientes</a></li>
						</ul>
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
                                <div class="card col-8" style="background-color: #292929;color: #ffffff; margin-left: 200px; height: 70vh; width: 100vh; margin-top: 150px;">
									<div class="card-body">
									    <table class="table table-hover">
									        <thead>
									            <tr style="color:#ffffff;">
												<h3><b style="margin-top: 20px; margin-bottom: 40px ; margin-left: 400px; font-size: 30px; margin-bottom: 20px;">cliente</b></h3>
									                <th>Nome</th>
											</thead>
											<tbody style="color:#ffffff;">
											<?php foreach($clientes as $cliente) { ?>
			                                <tr>
			                                    <td> 
			                                    	<form role="form" action="cadrastra_produto_by_cliente.php" method="POST" ><?=$cliente['nome']?><input type='text' value="<?=$cliente['ID']?>" style='display: none;' name='id'><input type="submit" value="cadrastra produto" class="btn btn-success btn-lg" style=" margin-left: 200px; width: 300px; "></form>
			                                  
			                                   		<form role="form" action="llistaCliente.php" method="POST"><input type='text' value="<?=$cliente['ID']?>" style='display: none;' name='id'><input type="submit" value="mostra lista do  cliente" class="btn btn-success btn-lg" name="a" style=" margin-left: 200px; width: 300px; "></form>

			                                   		<form role="form" action="atualizarCliente.php" method="POST"><input type='text' value="<?=$cliente['ID']?>" style='display: none;' name='id'><input type="submit" value="atualizar cliente" class="btn btn-success btn-lg" name="a" style=" margin-left: 200px; width: 300px; "></form>
			                                    </td>

			                                    <!--<td><?=$cliente['endereco']?></td>
			                                    <td><?=$cliente['email']?></td>
			                                    <td><?=$cliente['telefone']?></td>1--->
			                                </tr>
			                                <?php } ?>
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