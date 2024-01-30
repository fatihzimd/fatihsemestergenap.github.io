<?php
//contoh array
$cars = array("Ferrary", "Lamborghini Aventador", "Audi");
$negara = ["Singapore", "Indonesia", "Jepang"];
$kota = array("Singapurna", "Indramayu", "Jepara");

//menampilkan array
echo "I Like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "." ;
echo"<br>";
var_dump($negara);
echo"<br>";
print_r($kota);


//menambahkan array
var_dump($kota);
$kota[] = "Bogor";
echo"<br>";
var_dump($kota);
$kota[4] = "Jayapura";
echo"<br>";
var_dump($kota);

?>
