<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $num1 = $_GET['num1'] ?? 0;
    if ($num1 == null){
        $num1 = 0;
    }
    $sal_min = 1_380.60;
    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="num1">Salário (R$):</label>
        <input type="number" name="num1" id="num1" step="0.01" value="<?=$num1?>">
        <p style="text-decoration: underline; font-size: 12px;"> <em>*Considerando o salário mínimo</em> de <strong> R$<?=number_format($sal_min, 2, ",", ".")?></strong></p>
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Quem recebe um salário de R$ <?= number_format($num1, 2, ",", ".")?> ganha <strong><?=intdiv($num1, $sal_min)?> salários mínimos</strong> + <br>R$  <?=number_format(($num1 % $sal_min) + $num1 - intval($num1), 2, "," , ".")?>.</p>
    </section>
    
</body>
</html>