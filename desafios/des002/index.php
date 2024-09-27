<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de numero aleatorio</title>
</head>
<body>
    <section>
        <h1>Trabalhando com numeros Aleatorios</h1>
        <p>Gerando um numero aleatorios entre 0 a 100...</p>
        <?php 
            //Criando a variavel que contem um numero aleatorio de 0 a 100
            $Gnum = mt_rand(0, 100);

            //Exibindo resultado do numero aleatorio para o usuario
            echo "O valor gerado foi <strong>$Gnum</strong>"; 
        ?>
        <button onclick="javascript:window.location.reload()">Gerar outro</button>
    </section>
</body>
</html>