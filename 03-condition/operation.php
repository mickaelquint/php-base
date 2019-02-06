<?php
$chiffre = 15 ;
$chiffr = 5 ;
$chiff = 8 ;


 $resultat1= $chiffre+ $chiffr + $chiff ;
 $resultat2= $chiffre *($chiffr-$chiff) ;
 $resultat3= 'division par 0 impossible';

 //si le nb est diff de 0 on fait le calcul
 if($chiffre !== 0){
    $resultat3 = ($chiff-$chiffr )/$chiffre;

 }

echo  $chiffre. '+'. $chiffr.'+'. $chiff. '='.$resultat1.'<br/>';
echo "$chiffre *( $chiffr - $chiff)=$resultat2 <br/>";
echo "($chiff-$chiffr)/$chiffre=$resultat3 <br/>";


if($resultat1<20||$resultat2<20||$resultat3 <20 ){
    echo 'une des opération renvoie moins de 20';
}
