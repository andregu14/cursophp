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
    $num1 = $_GET['num1'] ?? "";
    $peso1 = $_GET['peso1'] ?? "1";
    $num2 = $_GET['num2'] ?? "";
    $peso2 = $_GET['peso2'] ?? "1";
    

    $media_simp = (intval($num1) + intval($num2)) / 2;
    $media_pond = ((intval($num1) * intval($peso1)) + (intval($num2) * intval($peso2))) / (intval($peso1) + intval($peso2));
    
    ?>
    <main>
        <h2>Médias Aritméticas</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num1">1º Valor:</label>
        <input type="number" name="num1" id="num1" value="<?=$num1?>" step="0.01" required>
        <label for="peso1">1º Peso:</label>
        <input type="number" name="peso1" id="peso1" value="<?=$peso1?>" required min="1">
        <label for="num2">2º Valor:</label>
        <input type="number" name="num2" id="num2" value="<?=$num2?>" step="0.01" required>
        <label for="peso2">2º Peso:</label>
        <input type="number" name="peso2" id="peso2" value="<?=$peso2?>" required min="1">
        <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$num1 . " e " . $num2?>:
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($media_simp, 2, ",")?>. </li>
            <li>A <strong>Média Aritmética Ponderada</strong> considerando os pesos <?=$peso1 . " e " . $peso2?> é igual a <?=number_format($media_pond, 2, "," , ".") ?>.
            </li>
        </ul>
        </p>
    </section>
</body>
</html>