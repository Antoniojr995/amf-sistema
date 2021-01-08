<!DOCTYPE html>
<?php
$id = $_POST['id'];
?>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>	AMF Sistemas </title>
		<meta id="viewport" name="viewport" content="width="width=device-width, user-scalable="no">
		<link rel="stylesheet" type="text/css" href="assets/estilo.css" />
	</head>
	
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
                                <h1 class="ls-login-logo" style="margin-top: 20px; margin-left: 250px">cadrastar Produto</h1>
                                <form role="form" action="cadrastra_produto.php" method="POST" >
                                    <fieldset>
                                        <div class="form-group ls-login-user" style="margin-top: 20px">
                                            <label for="userLogin">Nome</label>
                                            <input class="form-control ls-login-bg-user input-lg" id="nome" type="text" aria-label="Usuário" placeholder="Informe o seu nome "style=" background: #E6E8FA" name="nome">
                                        </div>
                        
                                        <div class="form-group ls-login-password">
                                            <label for="senha">especificação</label>
                                            <input class="form-control ls-login-bg-password input-lg" id="especificação" type="text" aria-label="especificação" placeholder="especificação"style=" background: #E6E8FA" name="espe">
                                        </div>
                                        <div class="form-group ls-login-password">
                                            <label for="senha">valor</label>
                                            <input class="form-control ls-login-bg-password input-lg" id="valor" type="text" aria-label="valor" placeholder="0,00"style=" background: #E6E8FA"name="valor">
                                        </div>
                                        
                                        <div class="form-group ls-login-password">
                                            <label for="senha">Quantidade</label>
                                            <input class="form-control ls-login-bg-password input-lg" id="endereco" type="text" aria-label="Endereço" placeholder="Quantidades do produto"style=" background: #E6E8FA"name="quantidade">
                                        </div>
			                            <div class="form-group ls-login-password">
                                            <label for="senha">Nº seria</label>
                                            <input class="form-control ls-login-bg-password input-lg" id="endereco" type="text" aria-label="Endereço" placeholder="Informe o numero do produto"style=" background: #E6E8FA"name="ns">
                                        </div>          
                        				<a href="index.html" class="ls-login-forgot">Voltar para a página inicial</a><br>
                                        <input type='text' value="<?=$id?>" style='display: none;' name='id'>
                                        <input type="submit" value="Salvar" class="btn btn-success btn-lg" style=" margin-left: 200px; width: 300px; ">
                                    </fieldset>
                                </form>
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