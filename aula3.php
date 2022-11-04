<!DOCTYPE html>
<html lang="pt-BR">
</html>
    <head>
        <!-- <meta http-equiv="refresh" content="1"> -->
    </head>


<?php
// "/* */" //comentário de bloco
// "//" comentário de linha
// "#" comentário de linha

// início - declaração de variáveis
date_default_timezone_set('America/Sao_Paulo');
$nome = "Helen";
$data_nasc = date('2004/05/07');
echo($nome." - ".$data_nasc);
echo('<br>');
$hoje = date('d-m-y H:i:s');
echo($hoje);
echo('<br>');
/*
$date = date_create('2000-01-01', timezone_open('America/Sao_Paulo'));
echo date_format($date, 'Y-m-d H:i:sP') . "\n";
echo('<br>');
date_timezone_set($date, timezone_open('Pacific/Chatham'));
echo date_format($date, 'Y-m-d H:i:sP') . "\n";
*/
$valor = 78.98;
$idade = 32;
$teste = true;
// final - declaração de variáveis




//declaração e uso de matrizes
$alunos = array();
$alunos[0] = "Maria";
$alunos[1] = "João";
$nota = array(9,8,7,4);
print_r($nota);
echo("<br>");
$pontos = array('José'=> '11', 'Lucas'=>'5', 'Jean'=>'9');
print_r($pontos);
echo("<br>");


// estrutura de decisão
if(!$idade>=30){
    echo("Aluno em lista para classifição");
}
$a = 1; $b = 15;
if($a > $b){
    echo("O valor '$a' é maior que '$b'");
}elseif($a < $b){
    echo("O valor '$a' é menor que '$b'");
}else{
    echo("O valor '$a' é igual a '$b'");
}
echo("<br>");
$n = 9;

// estrutura de repetição
// WHILE é quando eu não conheço o limite do código
// FOR é quando  conheço

echo("<br>");
while ($a < 11) {
    echo($n. ' x '.$a." = ".($a*$n)."<br>");
    $a = $a +1;
}
echo("<br>");
for ($i=0; $i < 11; $i++) {
    echo($n.' x '.$i." = ".($i*$n)."<br>");
echo("<br>");
$nota = array(9,8,7,4);

}for ($i=0; $i < 4; $i++) {
    echo($nota[$i]);
    echo("<br>");
}
?>





