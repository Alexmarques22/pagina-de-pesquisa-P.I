<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina pesquisar-venda</title>
    <link rel="stylesheet" href="pesquisar-venda.css">
</head>
<body>
    
</body>
</html>

<?php


$textoLabel = "PESQUISAR VENDA <br>";


?>

<form method="post" action="processar_formulario.php">
    <label for="lebel"><?php echo $textoLabel; ?></label>
    

    
    <br>
    
    <small>CODIGO DO PRODUTO.</small><br>
    <input type="nember" name="codigo" placeholder="Digite o Codigo Do Produto" required>

    

</form>

</body>
</html>