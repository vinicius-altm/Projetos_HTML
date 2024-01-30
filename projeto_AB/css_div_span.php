
<!DOCTYPE html>
<html>
	<head>
		<title>Div e Span</title>
		<meta charset="utf-8">

		<style type="text/css">
			
			#topo {
				background: blue;
			}
			
			#conteudo {
				background: red;
			}

			#rodape {
				background: green;
			}

			.produto {
				background: gray;
				margin: 10px;
			}

			.azul{
				color: blue;
			}

		</style>

	</head>
	<body>

		<div id="topo">
			
			<img src="assets/images/amazon.png" width="200">
			<ul>
				<li>Home</li>
				<li>Produtos</li>
				<li>Contato</li>
			</ul>

		</div>

		<div id="conteudo">
			
			<div class="produto">
				Produto 1
			</div>

			<div class="produto">
				Produto 2
			</div>

			<div class="produto">
				Produto 3
			</div>

		</div>

		<div id="rodape">
			
			Todos os <span class="azul"> direitos</span> reservados

		</div>

	</body>
</html>