<?php 
$aprovados = 0;
$cadidatos = [
   (object)["Joao", "nota" => 80],
   (object)["Joao gabriel", "nota"=> 50],
   (object)["kelvin lucas","nota" => 100],
   (object)["lucas", "nota"=> 70]
];

foreach ($cadidatos as $cadidatos) {
    if ($cadidatos -> nota >=70) {

     $aprovados++;
    }
}
echo "total de aprovados: $aprovados";