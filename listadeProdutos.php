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
$sql = "SELECT * FROM produtos LEFT JOIN cliente ON produtos.Cliente_ID=cliente.ID";
$produtos = $conn->query($sql);
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
                                <h1 class="ls-login-logo" style="margin-top: 20px; margin-left: 250px">lista de Produtos</h1>
                                <div class="card col-8" style="background-color: #292929;color: #ffffff; margin-top: 150px;">
									<div class="card-body">
									    <table class="table table-hover">
									        <thead>
									            <tr style="color:#ffffff;">
													<h3><b >Produto</b></h3>
													<th>Cliente</th>
									                <th>Nome</th>
									                <th>Especificação</th>
									                <th>Quantidade</th>
									                <th>Valor (R$)</th>
									            </tr>
											</thead>
											<tbody style="color:#ffffff;">
											<?php foreach($produtos as $p):?>
					                            <tr>
					                            	<td><?php if($p['nome']){
					                            		echo $p['nome'];
					                            	}else{
					                            		echo "Empresa";
					                            	}?></td>
					                                <td><?=$p['pnome']?></td>
					                                <td><?=$p['espesificacao']?></td>
					                                <td><?=$p['quantidade']?></td>
					                                <td><?=$p['valor']?></td>
					                                <td>
					                                    <form role="form" action="deletarProduto.php" method="POST" >
					                                    	<input type='text' value="<?=$p['PID']?>" style='display: none;' name='pid'>
					                                    	<input type="submit" value="apagar produto" class="btn btn-success btn-lg">
					                                    </form>
					                                </td>
					                            </tr>
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