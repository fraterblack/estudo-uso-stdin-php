<?php

$value1 = 0;
$value2 = 0;
$aOperator = null;
$balance = 0;

// show them a message to enter their name
echo "---------------" . PHP_EOL;
echo "BCK Calculadora" . PHP_EOL;
echo "---------------" . PHP_EOL . PHP_EOL;

echo "Valor 1: " . PHP_EOL;
$value1 = getNumber();

echo "Operacao (+, -, *, /): " . PHP_EOL;
$aOperator = getAOperator();

echo "Valor 2: " . PHP_EOL;
$value2 = getNumber();

//Result
echo 'O resultado da operacao (' . $value1 . $aOperator . $value2 . ') e\': ' . result($value1, $value2, $aOperator) . PHP_EOL;


function getNumber() {
    $input = fgets (STDIN, 128);
    $input = rtrim ($input);

    return $input;
}

function getAOperator() {
    $input = fgets (STDIN, 128);
    $input = rtrim ($input);

    //Até que um operador válido seja informado, não prossegue o processamento
    if ($input == '-' || $input == '+' || $input == '*' || $input == '/') {
        return $input;
    } else {
        echo "Informe uma das operacoes va'lidas (+, -, *, /)" . PHP_EOL;
        return getAOperator();
    }
}

function result($value1, $value2, $aOperator) {
    $result = "return $value1$aOperator$value2;";
    return eval($result);
}