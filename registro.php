<?php
$file = 'C:/Users/Vaio/Documents/Github/gerador-de-mensagens/registro.php';

readfile($file);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <style>
        body{
            background-color: rgb(50, 50, 75);
            color: white;


        }
        * {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
<div style="padding: 100px; border-radius: 35px; text-align:center;background-color: rgb(60, 50, 100);">
    <?php
        $nome = $_GET['username'] ?? 'fulano de tal';
        $mensagem = $_GET['msg'] ?? 'sem mensagem aqui lol';

        echo "<h1>$nome diz...</h1>";
        echo "<p>$mensagem</p>";
        echo "<div style='background-color: rgba(0, 0, 0, 0.36); border-radius: 10px; width: 100px;'><a href='./index.html'><h2>Voltar</h2></a></div>";
    ?>
</div>
</body>
</html>
