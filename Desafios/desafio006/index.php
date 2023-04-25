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
        $num2 = $_GET['num2'] ?? 1;
        while ($num2 == 0) {
            $num2 = 1;
        }

        $divint = intdiv($num1, $num2);
        $resto = $num1 % $num2;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="num1">Dividendo</label>
            <input type="number" name="num1" id="num1" min="0" value="<?=$num1?>">
            <label for="num2">Divisor</label>
            <input type="number" name="num2" id="num2" min="1" value="<?=$num2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da divisão</h2>
        <table class="divisao">
            <tr>
                <td><?=$num1?></td>
                <td><?=$num2?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$divint?></td>
            </tr>
        </table>
    </section>
    
</body>
</html>