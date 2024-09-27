<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Descobrindo Sua Idade</title>
</head>
<body>
    <main>
        <h1>Quantos anos voce tem?</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="Nasano">Em que ano voce nasceu?</label>
            <input type="number" name="Nasano" id="ano">
            <label for="ano">Em que ano estamos? (Estamos considerando que estamos em <?= date('Y')?>)</label>
            <input type="number" name="ano" placeholder="<?=date('Y')?>">
            <input type="submit" value="Calcular idade">
        </form>
    </main>

    <section>
        <h1>Descobrindo sua idade</h1>
        <?php 
            $anoNas = $_GET["Nasano"];
            $anoAtual = $_GET["ano"] ?? date('Y');

            $idadeAtual = $anoNas - $anoAtual;

            echo "No ano de $anoAtual voce vai fazer $idadeAtual"

        ?>
    </section>
</body>
</html>