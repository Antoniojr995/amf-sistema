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
                    <img src="images/Logofinal.png"/>
                </div>
                <div class="bannerdireita">
                    <div class="frase1">
                        Atualizar cliente
                    </div>
                </div>
            </div>
        </div>
        <main>
            <div class="box-parent-login">
                <div class="well bg-white box-login">
                    <form action="atualizarClien.php" method="POST" >
                                    <fieldset>
                                        <div class="form-group ls-login-user" style="margin-top: 20px">
                                            <label for="userLogin">Nome</label>
                                            <input class="form-control ls-login-bg-user input-lg" id="nome" type="text" aria-label="Usuário" placeholder="Informe o seu nome completo"style=" background: #E6E8FA" name="nome">
                                        </div>
                        
                                        <div class="form-group ls-login-password">
                                            <label for="senha">E-mail</label>
                                            <input class="form-control ls-login-bg-password input-lg" id="email" type="text" aria-label="E-mail" placeholder="mail@mail.com"style=" background: #E6E8FA" name="email">
                                        </div>
                                        <div class="form-group ls-login-password">
                                            <label for="senha">Telefone</label>
                                            <input class="form-control ls-login-bg-password input-lg" id="telefone" type="text" aria-label="telefone" placeholder="(xx) x xxxx-xxxx"style=" background: #E6E8FA"name="telefone">
                                        </div>
                                        
                                        <div class="form-group ls-login-password">
                                            <label for="senha">Endereço</label>
                                            <input class="form-control ls-login-bg-password input-lg" id="endereco" type="text" aria-label="Endereço" placeholder="Informe o seu Endereço, Ex: Rua das Ruas"style=" background: #E6E8FA"name="endereco">
                                        </div>
                                        <div>
                                            OS<br>
                                            <textarea name="comentarios" id="comentarios" name="comentario"></textarea>
                                        </div>                
                                        <a href="index.php" class="ls-login-forgot">Voltar para a página de login</a><br>

                                        <input type='text' value="<?=$id?>" style='display: none;' name='id'> 
                                        <input type="submit" value="Salvar" class="btn btn-success btn-lg" style=" margin-left: 200px; width: 300px; ">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
        </main>
		<div class="rodape">
			André Freitas (84) 9 9850-9021 - Todos os direitos reservados
		</div>
	</body>

</html>