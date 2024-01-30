<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Pagina Inicial</title>

</head>

<body>
    <div class="principal">
        <img src="assets/images/capa.png" alt="capa">

        <div class="menu">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                |
                <li>
                    <a href="biografia.php">Biografia</a>
                </li>
                |
                <li>
                    <a href="campanha.php">Campanha Publicitária</a>
                </li>
                |
                <li>
                    <a href="contato.php">Contato</a>
                </li>
            </ul>
        </div>

        <div class="conteudo-home">

            <h1>Contato por e-mail</h1>
            <div>
                <strong> <label for="e-mail">E-mail:</label> </strong>
                <input type="e-mail" placeholder="Digite seu e-mail">
            </div>
            <br>
            <div>
                <strong><label for="assunto">Assunto:</label> </strong>
                <input type="text" placeholder="Digite o assunto"><br>
                <br>
                <strong><label for="motivo">Motivo:</label></strong> <br>
                <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Digite o motivo do contato"></textarea>
            </div>
            <button type="button">Enviar</button>
        </div>
        <footer>
        <h4>Todos os direitos reservados</h4>
        <h6>Por: Vinicius A.</h6>
    </footer>
    </div>
    <!--Fim conteudo-->
  

</body>

</html>