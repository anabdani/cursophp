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
     $início = date("m-d-Y", strtotime("-8 days"));
     $fim = date("m-d-Y");
     $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'08-14-2023\'&@dataFinalCotacao=\'08-21-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

     $dados = json_decode(file_get_contents($url), true);

    // var_dump($dados);

     $cotação = $dados["value"][0]["cotacaoCompra"];


      $real = $_REQUEST["din"] ?? 0;

      $dólar = $real / $cotação;

      $padrão  = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

      echo "Seus" . numfmt_format_currency($padrão, $real, "BRL") . "equivalem a" . numfmt_format_currency($padrão, $dólar, "USD");
      
      ?>
 <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>