<?php
/*
File: szamol.php
Author: Sangare Fantha Felisha
Copyright: 2022, Sangare Fantha Felisha
Group: Szoft I N
Date: 2022-05-25
Github: https://github.com/fe-ktch/
Licenc: GNU GPL
*/

echo file_get_contents('templates/head.html');
echo file_get_contents('templates/nav.html');

$tomeg = $_GET['tomeg'];
$magassag = $_GET['magassag'];

$testtomeg = $tomeg / ($magassag * $magassag);

$page = file_get_contents('templates/szamol.html');

$page = str_replace('{{ testtomeg }}', $testtomeg, $page );

echo $page;

echo file_get_contents('templates/foot.html');
