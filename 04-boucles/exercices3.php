<?php
/*
*afficher les tables de multiplication de 0 à 10 */

echo '1*1=1';
echo '1*1=2';
echo '1*1=3';
echo '1*1=4';
echo '1*1=5';
echo '1*1=6';
echo '1*1=7';
echo '1*1=8';
echo '1*1=9';
echo '1*1=10';

for ($i = 1; $i <= 10; $i++)
{
    Echo 'Table de multiplication de '.$i.'<br>';
    for ($j = 1; $j <= 10; $j++)
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
    }
}
/**
 * Carré de table de multiplication
 */
echo PHP_EOL; // Equivaut à un retour chariot
echo '<table align="center" border="1" style="border-collapse: collapse">'.PHP_EOL;
// Légende du tableau
echo '<thead><tr>';
echo '<td align="center" style="width: 20px; background-color: lightgrey">x</td>';
for ($z = 0; $z <= 20; $z++) {
    $color = ($z % 2) ? 'lightgrey' : 'white';
    /* // Le code ci-dessus est un ternaire, il est
    // équivalent au code suivant :
    if ($z % 2) {
        // Pair
        $color = 'lightgrey';
    } else {
        // Pas pair
        $color = 'white';
    } */
    echo '<td align="center" style="width: 20px; background-color: '.$color.'">'.$z.'</td>';
}
echo '</tr></thead>';
for ($i = 0; $i <= 20; $i++) {
    $color = ($i % 2) ? 'lightgrey' : 'white';
    $direction = ($color === 'lightgrey') ? 1 : 0; // Sens du background color
    echo "\t<tr>"; // "\t" génére une tabulation
    echo '<td align="center" style="width: 20px; background-color: '.$color.'">'.$i.'</td>';
    for ($j = 0; $j <= 20; $j++) {
        $color = ($j % 2 === $direction) ? 'lightgrey' : 'white';
        $color = ($i === $j) ? 'grey' : $color; // Gris foncé sur le carré
        echo '<td align="center" style="width: 20px; background-color: '.$color.'">'.$i * $j.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>

<!-- <table>
    <tr>
        <td>x</td>
        <td>0</td>
        <td>1</td>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td>1</td>
        <td>0</td>
        <td>1</td>
    </tr>
</table> -->





<?php

function table($nbr, $nbr2)
{
    $table = '<table border="1">';
    for ($a=1; $a <= $nbr; $a++) {
        $table .= '<tr>';
        for ($b=1; $b <= $nbr2 ; $b++) {
            $table .= '<td>'.$a*$b.'</td>';
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    return $table;
}
 
// echo table(10, 10);
?>