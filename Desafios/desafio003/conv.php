<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas v1.0</h1>
        <?php 
        $real = $_GET["real"] ?? 0;
        $dolar = 5.06;
        $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
        
        
        
        $conv = $real / $dolar;
        
            echo "<br>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $conv,"USD") . "</strong > dolares.<p>Utilizando a cotacao do dolar de " . numfmt_format_currency($padrao, $dolar,"USD") . ".</p>";
        ?>
        <p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
        </p>
    </main>
    
</body>
</html>