<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
      <?php 
      $cotação = 4.99;

      $real = $_REQUEST["din"] ?? 0;

      $dólar = $real / $cotação;

      $padrão  = numfmt_creat("pt_BR", NumberFormatter::CURRENCY);

      echo "Seus" . numfmt_format_currency($padrão, $real, "BRL") . "equivalem a" . numfmt_format_currency($padrão, $dólar, "USD");
      
      ?>
 <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>