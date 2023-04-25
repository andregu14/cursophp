<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Aleatorio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <h1>Trabalhando com numeros aleatorios</h1>
        <p>Gerando um numero aleatorio entre 0 e 100...
        <br>
        <?php 
        $num = rand(0, 100);
        echo "O valor gerado foi <strong>$num</strong>";
        ?>
        <p>
        <input type="button" value="Gerar outro" onClick="window.location.reload()">
        </p>
    </section>
    </p>

</body>

</html>