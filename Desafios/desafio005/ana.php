<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisando o numero</h1>
        <?php
        
        $num = $_GET["num"] ?? 0;
        $num_int = intval($num);
        $num_float = $num - $num_int;
        

        echo "O numero digitado foi <strong>" . number_format($num,3,",",".") . "</strong>";
        echo "<p>A parte inteira do numero e <strong>" . number_format($num_int,0,"",".") . "</strong>";
        echo "<br>A parte fracionada do numero e <strong>". number_format($num_float,3,",")  ."</strong></p>";

        ?>
        <p><button onclick="javascript:history.go(-1)">Voltar</button></p>
    </main>
    
</body>
</html>