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
    // Recebe a variavel de segundos de um form e converte para minutos, horas, dias, semanas, dividindo cada variavel pela anterior
    $segundos = $_REQUEST['segundos'] ?? 0;
    $minutos = intdiv($segundos, 60);
    $horas = intdiv($minutos, 60);
    $dias = intdiv($horas, 24);
    $semanas = intdiv($dias, 7);

    // Outra forma de chegar ao mesmo resultado e a seguinte
    /*  1 min equivalem a 60 seg
        1 hora equivalem a 60 min, 60 min equivalem a 3_600 seg
        1 dia equivalem a 24 horas, 24 horas equivalem a 1_440 min, 1_440 min equivalem a 86_400 seg
        1 semana equivalem a 7 dias, 7 dias equivalem a 168 horas, 168 horas equivalem a 10_080 min, 10_080 min equivalem a 604_800 seg
        */
    $sobra = $segundos;
    // Total de Semanas
    $semana = (int)($sobra / 604_800);
    $sobra = $sobra % 604_800;
    // Total de Dias
    $dia = (int)($sobra / 86_400);
    $sobra = $sobra % 86_400;
    // Total de Horas
    $hora = (int)($sobra / 3_600);
    $sobra = $sobra % 3_600;
    // Total de Minutos
    $minuto = (int)($sobra / 60);
    $sobra = $sobra % 60;
    // Total de Segundos
    $segundo = $sobra;
    ?>
    <main>
        <h2>Calculadora de Tempo</h2>
        <!-- Formulario recebe o valor de segundos e repassa para o servidor usando PHP -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?= $segundos ?>" min="0" step="1" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>
            Analisando o valor que você digitou, <strong><?= number_format($segundos, 0, ",", ".") ?> segundos </strong> equivalem a um total de:
        <ul>
            <!-- Mostra o resultado na tela em forma de lista calculando o resto de cada variavel -->
            <li><?= $semanas % 7 ?> semanas</li>
            <li><?= $dias % 7 ?> dias</li>
            <li><?= $horas % 24 ?> horas</li>
            <li><?= $minutos % 60 ?> minutos</li>
            <li><?= $segundos % 60 ?> segundos</li>
        </ul>
        </p>
    </section>
</body>
</html>