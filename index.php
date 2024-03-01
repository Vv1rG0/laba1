<title>lab1</title>
<?php
$a=5;
$b=12;
$c=7.5;
$d=True;
$f=False;
$stroka1="hello ";
$stroka2="world ";
$stroka3="Polarshinov ";
echo "$a";
echo "<br>";
echo "$b";
echo "<br>";
echo "$c";
echo "<br>";
echo "$d";
echo "<br>";
echo "$f";
echo "<br>";
echo "$stroka1";
echo "$stroka2";
echo "<br>";
echo "$stroka1";
echo "$stroka3";
echo "<br>";
echo ($a + $b);
echo "<br>";
echo ($b - $c);
?>

<p>Date Today:</p>
<?php 
echo date('l, F jS Y.');
echo "<hr>";
?>

<p>Date Today:</p>
<?php 
echo date('l, d M Y.');
echo "<hr>";
?>

<p>Date Today:</p>
<?php 
echo date('D, d.m.Y.');
echo "<hr>";
?>

<p>Date Today:</p>
<?php 
echo date('D, d/m/Y.');
echo "<hr>";
?>

<p>Date Today:</p>
<?php 
echo date('D, j F Y.');
echo "<hr>";
?>

<p>Date Today:</p>
<?php 
echo date('l, F jS G:i.');
echo "<hr>";
?>