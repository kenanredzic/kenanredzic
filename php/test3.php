<?php
    $tekst = "abcde";
    $broj = 12345;
    $decimalni = 123.45;
    $niz = ['a','b','c','d','e'];

    # Ispis tipova podataka i njihovih vrijednosti
    var_dump($tekst);
    echo "<br>";
    var_dump($broj);
    echo "<br>";
    var_dump($decimalni);
    echo "<br>";
    var_dump($niz);

    #print_r() - Ispis niza ili objekta
    echo "<br>";
    print_r($niz);
    echo "<br>";
    
    # printf() - Evaluacija / interpolacija primjenljivih u tekst

    $x = 13;
    $y = 15;
    $z = 25;
    $c = 42;
    printf("Ostalo je jos %s dana...", $x);
    printf("Ostalo je jos %s dana, do mog %s. rodjendana!", $x, $x);
    printf("Prva %s, Druga: %s<br>", $x, $y);
    printf("Ja imam %b godina.",$z);
    printf("Ovo je karakter %c, nastao od broja %s", $c, $c);

?>
