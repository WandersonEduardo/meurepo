<?php 

$nome1 = $_POST["PrimeiroNome"];
$nome2 = $_POST["SegundoNome"];
$nome3 = $_POST["TerceiroNome"];
$nome4 = $_POST["QuartoNome"];
$nome5 = $_POST["QuintoNome"];

echo "O primeiro nome é:" .$nome1;
echo "<br>O segundo nome é:" .$nome2;
echo "<br>O terceiro nome é:" .$nome3;
echo "<br>O quarto nome é:" .$nome4;
echo "<br>O quinto nome é:" .$nome5;
// trocando os valores de a por b através de uma outra variável de 
$a = $nome5;
$b = $nome4;
$c = $nome3;
$d = $nome2;
$e = $nome1;
echo "<br><br>";
echo ":: VALORES TROCADOS ::<br><br>";
echo "O primeiro nome é: " . $a; 
echo "<br>O segundo nome é: " .$b;
echo "<br>O terceiro nome é: " .$c;
echo "<br>O quarto nome é: " .$d;
echo "<br>O quinto nome é: " .$e;

?>