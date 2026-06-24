<?php 
$aprovados = 0;
$reprovados = 0;
$alunos = [

   (object)["kaua", "nota" => 60],
   (object)["Joao gabriel", "nota"=> 50],
   (object)["matheus", "nota" => 80],
   (object)["diego", "nota" =>70],
   (object)["paulo", "nota" =>100]
];

foreach ($alunos as $alunos) {
    if ($alunos -> nota >=80) {

     $aprovados ++;
    } else {
    $reprovados ++;
    }
   
} 
echo " aprovados: " . $aprovados ."<br>";
echo "reprovados: " . $reprovados ;

?>