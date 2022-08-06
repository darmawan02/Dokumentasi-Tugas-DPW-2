<?php

echo "Animal<br>";
echo "<hr>";

class kucing{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$kucing = new kucing;
$kucing->nama = "jery";
$kucing->jumlah_kaki = "4";
$kucing->bisa_terbang ="tidak";
$kucing->suara = "Meong";

echo "kucing <br>";
echo "Nama : $kucing->nama <br>";
echo "jumlah_kaki : $kucing->jumlah_kaki <br>";
echo "bisa_terbang : $kucing->bisa_terbang <br>";
echo "suara : $kucing->suara <br>";
echo "<hr>";

class Anjing{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$anjing = new anjing;
$anjing->nama = "tomo";
$anjing->jumlah_kaki = "4";
$anjing->bisa_terbang ="tidak";
$anjing->suara = "Guk - guk";

echo "anjing <br>";
echo "Nama : $anjing->nama <br>";
echo "jumlah_kaki : $anjing->jumlah_kaki <br>";
echo "bisa_terbang : $anjing->bisa_terbang <br>";
echo "suara : $anjing->suara <br>";
echo "<hr>";

class Elang{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$elang = new elang;
$elang->nama = "yanto";
$elang->jumlah_kaki = "2";
$elang->bisa_terbang ="bisa";
$elang->suara = "miiiippppp";

echo "elang <br>";
echo "Nama : $elang->nama <br>";
echo "jumlah_kaki : $elang->jumlah_kaki <br>";
echo "bisa_terbang : $elang->bisa_terbang <br>";
echo "suara : $elang->suara <br>";
echo "<hr>";

class Angsa{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$angsa = new angsa;
$angsa->nama = "yanti";
$angsa->jumlah_kaki = "2";
$angsa->bisa_terbang ="tidak";
$angsa->suara = "kwak - kwak";

echo "angsa <br>";
echo "Nama : $angsa->nama <br>";
echo "jumlah_kaki : $angsa->jumlah_kaki <br>";
echo "bisa_terbang : $angsa->bisa_terbang <br>";
echo "suara : $angsa->suara <br>";
echo "<hr>";


