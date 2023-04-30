<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas v2.0</h1>
        <?php 
        //Cotacao vinda da API do Banco Central
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $final = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $final .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];

        //Quanto o usuario tem
        $real = $_REQUEST["real"];
       
        $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
        
        
        //Equivalencia em dolar
        $conv = $real / $cotacao;

        //Mostra o resultado
        echo "<br>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $conv,"USD") . "*</strong ><p><em>*Utilizando dados do ";
        ?>
            <em><a href="https://www.bcb.gov.br/" target="_blank" rel="external">Banco Central do Brasil</a></p>
            
            <p>
            <button onclick="javascript:history.go(-1)">Voltar</button>
            </p>
    </main>
    
</body>
</html>