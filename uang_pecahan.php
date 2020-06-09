<?php
$jumlahuang=$_POST['jumlahuang'];
$pecahan=$_POST['pecahan'];
$hasil=($jumlahuang-($jumlahuang%$pecahan))/$pecahan;
$rupiah=number_format($pecahan,2,',','.');
echo "Jumlah Rp. ".$rupiah.";".$hasil.": </br>";
?>