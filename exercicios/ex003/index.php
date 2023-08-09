<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    // 0x = hexadecimal 0b = binario 0 = octal
     //  $num = 0x1A;
      // echo "O valor da variável é $num";

     // $v = 300;
      // var_dump($v);

     // $num = 3e2; //3 x 10(2)
     // echo "O valor e $num"
     // var_dump($num);

    // $num = (int) "950";
     // var_dump($num);

    // $casado = false;
     //print "O valor para casado é $casado";

    // $vet = [6, 2, 9,  3, false, 5];
    // var_dump($vet);

    class pessoa {
        private string $nome;
    }
    
    $p = new pessoa;
    var_dump($p)
    ?>
</body>
</html>