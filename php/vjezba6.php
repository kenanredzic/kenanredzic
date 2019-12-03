<?php
$trenutna_godina = date("Y");
$godina_rodjenja = 1984;

$broj_godina = $trenutna_godina - $godina_rodjenja;
echo "Korisnik ima " . $broj_godina . " godina!";
echo "<br><br>";
//Funkcija print
echo print("Hello");

echo "<br><br>";
//Jednostruki i dvostruki navodnici
$varijabla = "25";
echo "Ja imam " . $varijabla . " godina!";
echo 'Ja imam ' . $varijabla . ' godina!';
//Dvostruki interpoliraju varijable, jednostruki ne
echo 'Ja imam $varijabla godina';
echo 'Ja imam $varijabla godina';

echo "Ja imam [$varijabla] godina!";
echo 'Ja imam [$varijabla] godina!';

echo "Ja imam {$varijabla} godina!";
echo 'Ja imam {$varijabla} godina!';
?>