<?php
declare(strict_types=1);
echo"<h1>Sprint 1. Tema 3. Nivell 3</h1>";

echo "<h2>Exercici 1. Array_map() per retornar cub</h2>";

$enters = [2,3,5,11];
$cub = array_map((fn($num)=>$num * $num),$enters);
print_r($cub);


echo "<h2>Exercici 2. Array_filter() per generar array de strings amb nombre parell de caracters</h2>";

$paraules = array ("dissabte", "tempesta", "pesetes", "cavall", "monedes");

$paraulesParells = array_filter($paraules, function ($paraula) {
    if (strlen($paraula) % 2 == 0) 
     return true;
}
);
var_dump($paraulesParells);

echo "<h2>Exercici 3. array_reduce() per calcular suma de primers d'un array d'enters</h2>";

$numeros = [3,5,7,11,14,26,31];
//anade los primos a $primos 
$primos = array_filter($numeros, function($n) {
    $primo = true;
    for ($i=2; (($i < $n) && ($primo == true)); $i++) {
        if ($n % $i == 0) {
            $primo = false;
        }
    }
    return $primo;
} 
);
print_r($primos);
$sumaPrimos= array_reduce($primos, fn($acum, $primo) => $acum + $primo);
echo "<p>La suma dels nombres primers és $sumaPrimos</p>";
?>