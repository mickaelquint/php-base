<?php

$seconds=date('s');//renvoie 00,01 ou 54
echo date("l d F Y");
echo',il est ';
echo date('H\hi\e\t');
echo $seconds . 'seconde';
echo($seconds > 1) ? 's': '';