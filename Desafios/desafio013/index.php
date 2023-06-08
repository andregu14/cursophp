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
    // Recebe o valor do formulario para saque e calcula as notas necessarias
    $dinheiro = $_REQUEST['dinheiro'] ?? 0;
    $nota100 = intdiv($dinheiro, 100);
    $nota50 = intdiv($dinheiro % 100, 50);
    $nota10 = intdiv($dinheiro % 50, 10);
    $nota5 = intdiv($dinheiro % 10, 5);
    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <!-- Formulario recebe o valor a ser sacado com um step de 5 em 5 -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dinheiro">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="dinheiro" id="dinheiro" value="<?= $dinheiro ?>" step="5" required min="5">
            <p><em style="font-size: 0.9em;">*Notas disponíveis: R$100, R$50, R$10 e R$5</em></p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?= number_format($dinheiro, 2, ",", ".") ?> realizado</h2>
        <p>
            O caixa eletrônico vai te entregar as seguintes notas:
        <ul>
            <!-- Mostra o resultado na tela em forma de lista -->
            <li><img src="https://www.bcb.gov.br/novasnotas/assets/img/section/100/100_front.jpg" alt="nota de R$100" width="110" height="50"> x<?= $nota100 ?></li><br>
            <li><img src="https://www.bcb.gov.br/novasnotas/assets/img/section/50/50_front.jpg" alt="nota de R$50" width="105" height="50"> x<?= $nota50 ?></li><br>
            <li><img src="https://www.bcb.gov.br/novasnotas/assets/img/section/10/10_front.jpg" alt="nota de R$10" width="100" height="50"> x<?= $nota10 ?></li><br>
            <li><img src="https://www.bcb.gov.br/novasnotas/assets/img/section/5/5_front.jpg" alt="nota de R$5" width="95" height="50"> x<?= $nota5 ?></li><br>
        </ul>
        </p>
    </section>
</body>

</html>