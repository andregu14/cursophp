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
    $segundos = $_REQUEST['segundos'] ?? 0;
    $minutos = intdiv($segundos, 60);
    $horas = intdiv($minutos, 60);
    $dias = intdiv($horas, 24);
    $semanas = intdiv($dias, 7);
    
    ?>
    <main>
        <h2>Calculadora de Tempo</h2>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?=$segundos?>">
            <input type="submit" value="Calcular">
            </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>
            Analisando o valor que você digitou, <strong><?=number_format($segundos,0,".",".")?> segundos </strong> equivalem a um total de:
                <ul>
                    <li><?=$semanas % 7?> semanas</li>
                    <li><?=$dias % 7?> dias</li>
                    <li><?=$horas % 24?> horas</li>
                    <li><?=$minutos % 60?> minutos</li>
                    <li><?=$segundos % 60?> segundos</li>
                    
                </ul>

        </p>
    </section>
</body>
</html>