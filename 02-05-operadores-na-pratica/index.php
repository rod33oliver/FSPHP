<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

$sessionOne = 200;
$sessionTwo = 500;
$extraSession = '500';
$newSession = 'Olá, mundo!';
$oldSession = 400.2;
$sessionTree = [
	"pós incremento" => $sessionOne++,
	"res incremento" => $sessionOne,
	"pré incremento" => ++$sessionOne,
	"pós decremento" => $sessionTwo--,
	"rest decremento" => $sessionTwo,
	"pré decremento" => --$sessionTwo,
]; 
var_dump ($sessionTree);

/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$compOne = "Strin";
$compTwo = [
	"comp == session" => $compOne == $sessionOne,
	"Sessions iguais" => $sessionOne !== $sessionTwo,
	"compara sessions" => $oldSession !== $sessionOne,
	"Verifica diferença" => $sessionTwo <> $sessionOne,
	"Verifica maior" => $sessionOne < $oldSession,
	"Spaceship" => $sessionOne <=> $sessionTree
];
var_dump($compTwo);

echo "<p></p> O resultado de $compOne é igual ao $sessionOne <p></p> ";


var_dump ($oldSession);

/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);

$var1 = true;
$var2 = false;
$var3 = false;
$var4 = true;
$var5 = true;
$exit = [

 "verdadeiros" => $var1 and $var5, 
 "um ou outro é verd" => $var3 or $var1,
 "um ou outro é verd, mas não ambos" => $var5 xor $var1,
 "verdadeiro se a variável não for verdadeira" => !$var2,
 "verdadeiro se um e o outro é verd"  => $var3 && $var1,
  "verdadeiro se um ou outro é verd"  => $var3 || $var1

];
var_dump($exit);



/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

$sessionOne 
$somatorios [
	"Conversão para int ou float" => +$sessionOne
];
var_dump($somatorios);