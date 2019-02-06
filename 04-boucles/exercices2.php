<?php

echo "<h2>étoiles</h2>";

for($i = 10; $i>0;$i--){
    echo '🌟';
}


echo "<h2>étoilescarré</h2>";
for($i = 10; $i > 0; $i--){
    for($j=10;$j>0;$j--){
        echo '🌟';
    }
    echo '<br/>';
}



echo "<h2>triangle rectangle</h2>";

for($i = 10 ;$i >0 ; $i--){
    for($j = $i ; $j >0; $j--){
        echo '🌟';
    }
    echo '<br/>';
}
