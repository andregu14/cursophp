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
    $num1 = $_POST['num1'] ?? 0;
    if ($num1 == null){
        $num1 = 0;
    }

    function rac ($a){
        $a = $a ** (1/3);
        return $a;
    }

    
    
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="num1">Número:</label>
        <input type="number" name="num1" id="num1" value="<?=$num1?>">
        <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Analisando o <strong>número <?=number_format($num1,0, ",")?></strong>, temos:<br>
        <ul>
        <li>A sua raiz quadrada é: <strong><?=number_format(sqrt($num1), 3 ,",", ".")?></strong></li>
        <li>A sua raiz cubica é: <strong><?=number_format(pow($num1,1.0/3.0), 3, ",", ".")?></strong></li>
        <li><?= rac($num1)?></li>
        </ul>
        </p>
    </section>

</body>
</html>