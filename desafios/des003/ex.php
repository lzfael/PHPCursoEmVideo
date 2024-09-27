<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de moeda v1.0</title>
</head>
<body>
    <section>
        <h1>Conversor de moeda v1.0</h1>
        <?php
            //Pegando o valor que o usuario forneceu
            $Reais = $_GET["numero"];

            //Convertendo o valor para US$
            $total = $Reais / 5.45;
            
            //Exibindo o valor convertido para o usuario
            echo "O valor fornecido convertido é: US\$" . number_format($total, 2, ",", ".");
        
        

        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </section>
</body>
</html>