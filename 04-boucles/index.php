<?php

/**
 * les boucles 
 * 
 * présentation
 */

 //for
 echo '<h2> la boucle for </h2>';

 for($i = 0;$i < 10 ; $i++){
     echo $i ;
 }
 echo '<br/>';

 //foreach
 
 echo '<h2> la boucle for </h2>';

 $student = ['mickael','baptiste','gregory','thomas'];
 foreach($student as $index => $value){
     echo $index .' : '. $value .'<br/>';
 }



 //while
 echo '<h2> la boucle while </h2>';
 

 $i = 0;
 while($i<10){
     echo $i++;
 }


 //do ... while 
 echo '<h2> la boucle do ... while </h2>';

 $i = 10;
 do{
     echo $i++;
 } while ($i < 10);