<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estilizando Formularios</title>
    <link rel="stylesheet" href="assets/css/estilo7.css">
</head>

<body>
    <div class="centralizar">
    <h2>Formulário</h2>

<fieldset>
    <legend>Detalhes de contato</legend>
    <div>
        <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
    </div>
    <div>
        <label for="email">E-mail:</label>
            <input type="text" name="email" id="email">
    </div>
    <div>
        <label for="url">URL:</label>
            <input type="text" name="url" id="url">
    </div>
</fieldset>
<fieldset>
    <legend>Comentarios</legend>
    <div>
        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" id="mensagem" ></textarea>
    </div>
</fieldset>
<fieldset>
    <legend>Precisa de ajuda?</legend>
    <div>
        <label>
               Sim <input type="radio" class="radio"  name="lembrar" id="sim">
        
        </label>
    </div>
    <div>
        <label>
               Não <input type="radio" class="radio" name="lembrar" id="nao">
        
        </label>
    </div>

</fieldset>
<button type="button">
<a href="https://blog.emania.com.br/wp-content/uploads/2016/02/direitos-autorais-e-de-imagem.jpg" download="Manga">Baixe!</a>
</button>

    </div>

</body>

</html>