<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $numeroCalcular = $_GET['num'] ?? 0;
                $antecessor = $numeroCalcular - 1;
                $sucessor = $numeroCalcular + 1;
                
                echo "O numero escolhido é $numeroCalcular";
                echo "<br>O seu antecessor é $antecessor";
                echo "<br>O seu sucessor é $sucessor";
            ?>
        </p>
    </main>
</body>
</html>