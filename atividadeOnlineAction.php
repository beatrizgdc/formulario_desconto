<!DOCTYPE html>
<html lang="pt-BR">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <title>Resultado</title>
</head>

<body>

<div class="w3-container w3-teal">

<?php
 $valor = $_POST['txtValorCompra'];
 $pag = $_POST['cmbPag'];
 $porc;

 if ($pag ="cartaoCredito") {
 	$porc = 8;

 } elseif ($pag = "boleto") {
 	$porc = 10;

 } elseif ($pag = "deposito") {
    
 }
  echo
"".$_POST['txtNome']."! <br> ";
 echo "Você terá ".$porc."% de desconto, resultara no valor de R$ ".($porc
* $valor / 100)."<br>"; echo "Sua compra será de: R$ ".($valor -
$porc * $valor / 100)."<br>"; 
?>

</div>
</body>
</html>
