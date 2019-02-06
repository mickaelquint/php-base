<?php

echo '<h3>exo1</h3>';

for($i=10;$i > 0 ; $i--){
    echo $i.'-';
}


echo '<h3>exo2</h3>';

for($i = 0 ; $i <= 100 ; $i++){
    if($i %2 == 0 ){
        echo $i.'-';
    }
}


echo '<h3>exo3</h3>';

$number1=$clonenumber1=200;
$number2=$clonenumber2=30;
$result=0;
    while($result==0){
        if($number1>$number2){
            $number1=$number1-$number2;
        } else {
                $number2=$number2-$number1;
            }
            
            if($number2==0){
                $result=$number1;
            }
        

    }
echo "le pgcd de $clonenumber1 et $clonenumber2 est $result";
//ou gmp_gcd (200,30);

echo '<h3>exo4</h3>';


