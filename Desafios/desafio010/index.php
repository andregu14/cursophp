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
        $ano = $_REQUEST['ano'] ?? 2000;
        $ano2 = $_REQUEST['ano2'] ?? date("Y");
        // calcula anos
        $valor = intval($ano2) - intval($ano);
    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="ano">Em que ano você nasceu?</label>
        <input type="number" name="ano" id="ano" value="<?=$ano?>" required min="1" max="<?= date("Y") - 1?>">
        <label for="ano2">Quer saber sua idade em que ano?(atualmente estamos em <strong><?=date("Y")?></strong>)</label>
        <input type="number" name="ano2" id="ano2" value="<?=$ano2?>" required min="1">
        <input type="submit" value="Qual será minha idade?">
        </form>

    </main>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$ano?> tera <strong><?=$valor?> anos</strong> no ano <?=$ano2?>!
        
        </p>
    </section>
</body>
</html>