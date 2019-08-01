<?php
    $jtama = 1;

     $jtoni = 0.5;
     $jtiniTama = 14;
     $jtiniToni = 34;

     echo "Umur Tama = $jtama X<br>";
     echo "Umur Toni = $jtoni X<br>";
     echo "Umur Toni + Umur Tini = $jtiniToni<br>";
     echo "$jtoni + $jtama X - $jtiniTama = $jtiniToni<br>";
     $x = $jtama + $jtoni;
     $y = $jtiniTama + $jtiniToni;
     $z = $y/$x;
     echo "$x X = $jtiniTama + $jtiniToni<br>";
     echo "$x X = $y<br>";
     echo "X = $y : $x = $z <br>";
     echo "Umur Tama = $z <br>";
     $tini = $z - $jtiniTama;
     echo "Umur Tini = $tini <br>";
?>