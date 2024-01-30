<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
</head>
<!--table header/th-->
<!--table row/tr-->
<!--table data/td-->
<!--colspan: largura da coluna-->
<!--rowspan: largura da linha-->


<body>
    <h1>Tabela de preços</h1>
    <table border="2" width="100%">

        <tr>
            <th> 
                Código
            </th>
            <th>
                Produto
            </th>
            <th>
                Marca
            </th>
            <th>
                Preço
            </th>
        </tr>

        <tr>
            <td> 
                0001
            </td>
            <td>
                Notebook 
            </td>
            <td>
                DELL 
            </td>
            <td>
                R$ 2.500
            </td>
        </tr>
        <tr>
            <td rowspan="2">Desconto</td>
            <td colspan="2">Cupom 1</td>
            <td>Valor: R$10</td>
        </tr>
        <tr>
            <td colspan="2">Cupom 2</td>
            <td>Valor: R$15</td>
        </tr>
        <tr>
           <td>Total:</td>
           <td colspan="3">R$ 2.475,00</td>
        </tr>

        

    </table>
</body>

</html>