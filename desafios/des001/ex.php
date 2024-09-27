<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado do Antecessor ou Sucessor</title>
</head>
<body>
    <section>
        <h1>Resultado Final</h1>
        <p>
            <?php
                //Resgatando o dado fornecido pelo usuario
                $num = $_GET["numero"] ?? 0;
            
                //Manipulando o dado fornecido pelo usuario
                $Snum = $num + 1;
                $Anum = $num - 1;
            
                //Mostrando o resultado para o usuario
                echo "O numero fornecido pelo usuario é: $num.";
                echo "<br> O numero <strong>Sucessor</strong> é: $Snum.";
                echo "<br> O numero <strong>Antecessor</strong> é: $Anum."
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </section>
</body>
</html>