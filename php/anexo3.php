<?php 

$valorAliquotaNominal = (float) str_replace(',', '.', $_POST['aliquota-nominal']);
$valorRBAs = (float) str_replace(',', '.', $_POST['rba']);
$valorDeducao = (float) str_replace(',', '.', $_POST['deducao']);
$valorFaturamentoMensal = (float) str_replace(',', '.', $_POST['faturamento-mensal']);

$aliquota = 0;
$das = 0;

$valorAliquotaNominalDec = $valorAliquotaNominal / 100; // Convertendo a alíquota nominal de porcentagem para decimal
$aliquota = (($valorRBAs * $valorAliquotaNominalDec) - $valorDeducao)/ $valorRBAs;
$das = $aliquota * $valorFaturamentoMensal;



echo "<h1>Calculadora de DAS</h1>"; 

echo "<h2>Resultado</h2>";
echo "R$ " . number_format($das, 2, ',', '.') . "<br>";


//MOSTRAR VALORES 
//echo $valorAliquotaNominal . "<br>";
//echo $valorRBAs . "<br>";
//echo $valorDeducao . "<br>";
//echo $valorFaturamentoMensal . "<br>";

?>  