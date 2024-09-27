<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de moeda v2.0</title>
</head>
<body>
    <section>
        <h1>Conversor de moeda v2.0</h1>
        <?php
            //Pegando o valor que o usuario forneceu
            $Reais = $_GET["numero"];

            //Convertendo o valor para US$
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio. '\'&@dataFinalCotacao=\'' . $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $total = $Reais / $cotacao;
            
            //Exibindo o valor convertido para o usuario
            echo "O valor fornecido convertido é: US\$" . number_format($total, 2, ",", ".");
        
        

        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </section>
</body>
</html>