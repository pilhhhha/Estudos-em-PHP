<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>testes de tipos primitivos</h1>
    <?php
        const PULA_LINHA = "<br>";

        // 0x = hexadecimal 0b = binário e 0 = octal
        $numOctal = 010;
        echo "A variavel numOctal = 010";
        echo PULA_LINHA;
        echo "O valor da variável é $numOctal";
        echo PULA_LINHA;
        
        // variavel comum
        $variavel = 300;
        echo "A variavel variavel = 300";
        echo PULA_LINHA;
        var_dump($variavel);
        echo PULA_LINHA;

        // 3 x 10(2) coerção (int)
        $num = (int) 3e2;
        echo "A variavel num = (int) 3e2";
        echo PULA_LINHA;
        echo "O valor do numero coerção é $num";
        echo PULA_LINHA;

        $casado = false;
        echo "A variavel casado = false";
        echo PULA_LINHA;
        var_dump($casado);
        echo "O valor para casado é $casado";

        $vet = [2, "joao", 2.5, 3, false];
        echo PULA_LINHA;
        echo "A variavel vet = [2," . "joao" . ", 2.5, 3, false]";
        var_dump($vet);
        echo PULA_LINHA;

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>