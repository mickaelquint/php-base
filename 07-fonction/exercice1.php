<?php
// 1. Créer une fonction calculant le carré d'un nombre

function square($number){
    $numberc = $number*$number;
    echo $numberc;

}
echo square(5);
echo '<br/>';


   




// 2. Créer une fonction calculant l'aire d'un rectangle et une fonction pour celle d'un cercle
 function aireRectangle($nb1,$nb2){
     $nbt=$nb1*$nb2;
     echo $nbt;
 }

echo aireRectangle(10, 5); // 50
echo '<br/>';


function aireCercle($r){
    $pi=3.14;
    $nba=$r*$r*$pi;
    echo $nba;
}

echo aireCercle(10); // 314,15
echo '<br/>';





// 3. Créer une fonction calculant le prix TTC d'un prix HT. Nous aurons besoin de 2 paramètres, le prix HT et le taux.

function convertirHTversTTC($price, $rate, $withTax = true) {
    if ($withTax) {
        // le return arrête la fonction
        return $price * (1 + $rate / 100);
    }
    return $price / (1 + $rate / 100);
}

echo convertirHTversTTC(10, 20); // 10 euros HT -> 12 euros TTC



// 4. Ajouter un 3ème paramètre à cette fonction permettant de l'utiliser dans les 2 sens (HT vers TTC ou TTC vers HT)
echo convertirHTversTTC(10, 20, false); // 12 euros TTC -> 12 euros HT
