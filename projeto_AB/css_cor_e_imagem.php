
<!DOCTYPE html>
<html>
	<head>
		<title>Cor e imagem de fundo</title>
		<meta charset="utf-8">

		<style type="text/css">
			
			/*
			.fundo {
				background-color: blue;
			}*/

			h1 {
				/*background-image: url('imagens/yoshi.png');

				/* repeat-x, repeat-y, no-repeat, repeat */
				background-repeat: repeat-x;

				/*scrool , fixed*/
				background-attachment: scroll;

				/* 
				primeiro valor: left, center, right 
				segundo valor: top, center, bottom 
				*/
				background-position: center center;
			}

			.fundo{
				background: blue url('imagens/yoshi.png') repeat-x scroll top ;
			}
			
		</style>

	</head>
	<body class="fundo">

		<h1>
			Conteúdo de título 1 <br>
		</h1>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at tortor a orci sodales efficitur ac quis augue. Ut ultricies nec diam in dignissim. Donec suscipit egestas sem.</p>

		<br><br><br><br><br><br>
		<br><br><br><br><br><br>
		<br><br><br><br><br><br>

		<br><br><br><br><br><br>
		<br><br><br><br><br><br>
		<br><br><br><br><br><br>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at tortor a orci sodales efficitur ac quis augue. Ut ultricies nec diam in dignissim. Donec suscipit egestas sem.</p>
		

	</body>

</html>