<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analizador de Numero Real</title>
</head>
<body>
    <section>
        <h1>Analizador de Numero Real</h1>
        <?php 
            // Pegando o numero fornecido pelo úsuario
            $num = $_GET["numero"];
            // Informando ao úsuario o numero a ser analizado
            echo "O numero <strong>$num</strong> fornecido pelo usuario vai ser analizado";
            // Coletando parte inteira e parte fracionada do numero fornecido
            $int = (int) $num;
            $fra = $num - $int;
            // Mostrando o numero analizado para o usuario
            echo "<ul> <li> Parte inteira do numero fornecido: <strong>$int</strong> </li> <li> Parte fracionada do numero fornecido: <strong>$fra</strong> </ul>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>