<?php
$filas = 3;
$columnas = 3;

$matrizA = array();
$matrizB = array();
$matrizC = array();

$valorA = 100;
$valorB = 500;

// 1. Llenar las matrices y sumar
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $matrizA[$i][$j] = $valorA;
        $matrizB[$i][$j] = $valorB;
        $matrizC[$i][$j] = $matrizA[$i][$j] + $matrizB[$i][$j];
        
        $valorA = $valorA + 10;
        $valorB = $valorB + 20;
    }
}

// 2. Imprimir Matriz A
echo "<h3>Matriz A</h3>";
echo "<table border='1'>";
for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $columnas; $j++) {
        echo "<td>" . $matrizA[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// 3. Imprimir Matriz B
echo "<h3>Matriz B</h3>";
echo "<table border='1'>";
for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $columnas; $j++) {
        echo "<td>" . $matrizB[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// 4. Imprimir Matriz C
echo "<h3>Matriz C (Suma)</h3>";
echo "<table border='1'>";
for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $columnas; $j++) {
        echo "<td>" . $matrizC[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>