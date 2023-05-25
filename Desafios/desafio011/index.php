<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        input#porcentagem {
            padding: 0px;
            margin: 1px;
        }
    </style>
</head>
<body>
    <?php 
        $preco = $_REQUEST['preco'] ?? '0';
        $porcentagem = $_REQUEST['porcentagem'] ?? '0';
    ?>
    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do produto (R$):</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">
            <label for="porcentagem">Qual será o percentual de reajuste? (<span id="p">?</span>%)</label>
            <div class="slidecontainer">
                <input type="range" min="0" max="100" id="porcentagem" name="porcentagem" step="1" value="<?=$porcentagem?>" oninput="mudaValor()">
            </div>
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
        $valor = ($porcentagem / 100) * $preco;
        $novoValor = $valor + $preco;
        echo "O produto que custava R\$" . number_format($preco,2,",",".") . ", com <strong> $porcentagem% de aumento </strong> vai passar a custar <strong> R\$" .number_format($novoValor,2,",",".") . " </strong> a partir de agora."
        ?>
    </section>
    <script>
        mudaValor()

        function mudaValor() {
            p.innerText = porcentagem.value
        }
    </script>
</body>
</html>