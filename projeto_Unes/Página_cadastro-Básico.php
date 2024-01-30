<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
</head>

<!--
<style>
    input[type="submit"]{
        width: 150px;
        position: absolute;
        left:50px;

    }
-->
</style>

<body>
    <h2>Cadastre-se</h2>
    <form action="">
        <label for="login">Login: </label>
        <input type="text" name="login">
        <br>
        <label for="sexo">Sexo:</label>
        <br>
        <input type="radio" name="sexo" id="F" value="F">Feminino
        <br>
        <input type="radio" name="sexo" id="M" value="M">Masculino
        <br>
        <label for="interesses">Interesses</label>
        <br>
        <input type="checkbox" name="interesses" value="futebol">Futebol
        <input type="checkbox" name="interesses" value="games">Games
        <input type="checkbox" name="interesses" value="informatica">informática
        <br>
        <label for="estado">Estado</label>
        <select name="estado" id="uf">
            <option value="SP">São Paulo</option>
            <option value="RJ">Rio De janeiro</option>
            <option value="SC">Santa Catarina</option>
        </select>
        <br>
        <label for="obs">Observações</label><br>
        <textarea name="obs" id="obs" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Cadastrar">

    </form>
</body>

</html>