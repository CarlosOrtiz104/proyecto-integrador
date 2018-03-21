<?php
/*PUNTO 5. == Utilizando un ​do/while​ realizar un programa que tire la moneda hasta que se obtenga ​cara​ (el número 1). Al final del programa imprimir cuantos tiros de moneda llevó. */
$a = 0;
$tiradas = 0;
do {
  $numero = rand(0,1);
  if ($numero == 1) {
    $a++;
  }
  $tiradas++;
} while ($a < 5);

echo "$a<br>";
echo $tiradas;
echo "<br>";
echo "<br>";
/*PUNTO 6 == Definir un ​array​ con 5 strings que sean nombres. Recorrer este array para imprimir cada uno de los nombres en pantalla.
a. Resolver este problema con un ​for​.
b. Resolver este problema con ​while​.
c. Resolver este problema con un ​do/while​.*/

$nombres = [
  "juan",
  "martin",
  "lucas",
  "mike",
  "bort"
];

for ($i=0; $i < count($nombres) ; $i++) {
  echo "$nombres[$i]<br>";
}
echo "<br>";
echo "<br>";

$counter = -1;
while ($counter < count($nombres)) {
  $counter++;
  echo "$nombres[$counter]<br>";
}

$counter = -1;

do {
  $counter++;
  echo "$nombres[$counter]<br>";
} while ($counter < count($nombres));

/*PUNTO 7.== Definir un ​array​ con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir todos los números. La ejecución debe terminarse si alguno de los números encontrados es un 5 (Se debe imprimir “Se encontró un 5!”)
a. Resolver este problema con un ​for​.
b. Resolver este problema con un ​while​.
c. Resolver este problema con un ​do/while​*/
//(PUNTO A)========================================================
$aleatorios = [2,6,7,9,3,1,0,4,5,8];

for ($i=0; $i < count($aleatorios) ; $i++) {
  echo "$aleatorios[$i] <br>";
  if($aleatorios[$i] == 5) {
    echo "Se ha encontrado un 5, tio!";
    break;
  }
}
echo "<br>";
echo "<br>";
//(PUNTO B)========================================================
$contador = -1;
while ($contador <= count($aleatorios)) {
  $contador++;
  echo "$aleatorios[$contador]<br>";
  if($aleatorios[$contador] == 5){
    echo "Se ha encontrado un 5, tio!";
    break;
  }
}
echo "<br>";
echo "<br>";
//(PUNTO C)========================================================
$contador = -1;
do {
  $contador++;
  echo "$aleatorios[$contador]<br>";
  if($aleatorios[$contador] == 5){
    echo "Se ha encontrado un 5, tio!";
    break;
  }
} while ($contador <= count($aleatorios));





















echo "<br>";
