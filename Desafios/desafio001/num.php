<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php
            // comentario PHP
            $numero = $_GET["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "O numero escolhido foi <strong> $numero </strong>";
        ?>
        <br><?php echo "O seu antecessor e $antecessor"?>
        <br><?php echo "O seu sucessor e $sucessor"?>
        
        <button onclick="javascript:history.go(-1)">Voltar</button>

    </main>
</body>
</html>