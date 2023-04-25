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
    $num = $_REQUEST['num'] ?? 0;
    $num100 = intdiv($num, 100);
    $num50 = intdiv($num % 100, 50); 
    $num10 = intdiv($num % 50, 10);
    $num5 = intdiv($num % 10, 5);
    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="num">Qual valor você deseja sacar? (R$)*</label>
        <input type="number" name="num" id="num" value="<?=$num?>" step="5">
        <p><em>*Notas disponíveis: R$100, R$50, R$10 e R$5</p></em>
        <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?=number_format($num,2,",",".")?> realizado</h2>
        <p>
            O caixa eletrônico vai te entregar as seguintes notas:
            <ul>
                <li><img src="https://www.bcb.gov.br/novasnotas/assets/img/section/100/100_front.jpg" alt="R$100" width="110" height="50"> x<?=$num100?></li><br>
                <li><img src="https://www.bcb.gov.br/novasnotas/assets/img/section/50/50_front.jpg" alt="R$50" width="105" height="50"> x<?=$num50?></li><br>
                <li><img src="https://www.bcb.gov.br/novasnotas/assets/img/section/10/10_front.jpg" alt="R$10" width="100" height="50"> x<?=$num10?></li><br>
                <li><img src="https://www.bcb.gov.br/novasnotas/assets/img/section/5/5_front.jpg" alt="R$5" width="95" height="50"> x<?=$num5?></li><br>
            </ul>
        </p>
    </section>
</body>
</html>