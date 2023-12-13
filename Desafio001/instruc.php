<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 01 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
        $numero = $_GET["numero"] ?? "escreva um número!"; // ?? operador de coalescencia nula
        echo "O número escolhido foi <strong>$numero</strong>";
        echo "<p>O seu sucessor é " . $numero+1;
        echo "<p>O seu antecessor é " . $numero-1;
        ?>
        <p>
            <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
        </p>
    </main>
    
    
</body>
</html>