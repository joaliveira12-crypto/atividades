<?php 
$aprovados = 0;
$alunos = [
   (object)["kaua", "nota" => 60],
   (object)["Joao gabriel", "nota"=> 50],
   (object)["matheus", "nota" => 80],
   (object)["diego", "nota" =>100]
];

foreach ($alunos as $alunos) {
    if ($alunos -> nota >=80) {

     $aprovados ++;
    }
}
echo "total de aprovados: $aprovados";