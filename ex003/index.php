<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    // 0x = hexadecimal, 0b = binário, 0 = Octal
    // $num = 0x1A;
    // $num = 0b1011;
    // $num = 010;
    // echo "O valor da variável é $num";
    
    // $v = "Gustavo";
    // var_dump($v);
    
    // $v = 300;
    // var_dump($v);

    // $v = 5e3; (mesma coisa de 5 x 10 elevado a 3)
    // var_dump($v);

    // $num = (int) "950";  //coerção ou cast
    // var_dump($num) 

    // $casado = false;
    //var_dump($casado);
    // print "O valor para casado é $casado";  // não vai mostrar nada pois false (boleano) é vazio ou zero e o 
    //                                         // valor  true = 1
    // $vet = [6, 2.5, "Maria", 3, false];
    // var_dump($vet);

    class Pessoa {
        private string $nome;
    }
    $p = new Pessoa;
    var_dump($p);




    ?>
    
</body>
</html>