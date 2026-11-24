<?php

$filas=4;
$columnas=3;

$MatrizA=array();
$MatrizB=array();
$MatrizC=array();
$MatrizD=array();

$valorA=50;
$valorB=10;

for ($i=0; $i<$filas; $i++){
	for ($j=0; $j<$columnas; $j++){
	$MatrizA[$i][$j]=$valorA;
	$MatrizB[$i][$j]=$valorB;
	$MatrizC[$i][$j]=$MatrizA[$i][$j]-$MatrizB[$i][$j];
	$MatrizD[$i][$j]=$MatrizC*15;
	}
}