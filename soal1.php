<?php
    $hj = 15000;
    $bd = 6;
    $pd = 5;
    $hd = 2000;
    $dj = 6;
    $uj = ($bd*$pd)*$hj;
    $ud = $dj*$hd;
    $hasil = $uj+$ud;

    echo "Harga Jambu : Rp. ".$hj;
    echo "<br> Banyak Jambu : ".($bd*$pd)."kg";
    echo "<br> Uang Hasil Penjualan Dus : Rp.".($dj*$hd);
    echo "<br> Uang Hasil Penjualan Jambu : Rp.".$uj;
    echo "<br> Uang hasil penjualan : Rp. ".$hasil;
?>