<?php
session_start();
    require_once("servidor.php");
    if(!empty($_SESSION['mensagem']));{
    echo $_SESSION ['mensagem'];
    unset ($_SESSION['mensagem']);
    }
?> 
<html>
<header>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Teste leilão</title>
</header>

<body>
    <div class="produto">
    <form action="listar.php" method="get" accept-charset="uft-8">
        <label>Codigo Produto </label><br>
        <input type="number" id=codigo name=codigo> <br>
        <label>Descrição Produto </label><br>
        <input type="descricao" id=descricao name=descricao> <br><br>
        <input type="submit" value="Enviar" name=enviar onclick="javascript: location.href='listar.php';"><br><br>
    </form>
    </div>
</body>

</html>