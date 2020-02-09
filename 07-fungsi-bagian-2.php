<?php

function hitungVolumeBalok (float $p, float $l, float $t) : float {
  return $p * $l * $t;
}

# hasil kembalian function langsung di-echo
echo hitungVolumeBalok(5, 20, 10) . "<br>";
# hasil kembalian function disimpan dalam variabel
$volume = hitungVolumeBalok(10, 2, 7);
# hasil kembalian function dijadikan parameter untuk function yang lain
var_dump(hitungVolumeBalok(10, 10, 10));

echo "<hr>";

$namaLengkap = function ($namaDepan, $namaBelakang) {
  return "{$namaDepan} {$namaBelakang}";
};

echo $namaLengkap("Nurul", "Huda");

echo "<br>";

/**
 * Fungsi ini untuk melakukan foreach pada setiap item pada array.
 * Lalu parameter ke-2 adalah fungsi anonim untuk menangani item array
 * tersebut mau diapakan
 */
function tampilkanArray (array $array, callable $fungsiEchoer) {
  foreach ($array as $key => $item) {
    /**
     * di sini kita tidak tahu fungsi anonim ini tugasnya seperti apa
     * karena ia tergantung fungsi yang dilemparkan sebagai parameter
     */
    $fungsiEchoer($key, $item, count($array));
  }
}

/**
 * kita bikin satu variabel array berisi kumpulan nama mahasiswa
 */
$listMahasiswa = ['Nurul Huda', 'Wahid Abdullah', 'Lendis Fabri'];

/**
 * kita panggil fungsi tampilkanArray()
 * kita passing variabel $listMahasiswa dan satu fungsi anonim
 * yang akan menangani setiap item dari array
 */
tampilkanArray($listMahasiswa, function ($key, $nama) {
  echo "{$key} - Bung {$nama} <br>";
});

/** 
 * kita panggil lagi fungsi tampilkanArray dengan
 * fungsi anonim yang berbeda. 
 */
tampilkanArray($listMahasiswa, function ($key, $nama, $panjangArray) {
  echo "{$nama}";

  if ($key < $panjangArray - 1) {
    echo " - ";
  }
});

echo "<hr>";

$faktor = 10;
$himpunanAsli = [1, 2, 3, 4];
$himpunanKelipatan10 = array_map(function ($n) use ($faktor) {
  return $n * $faktor;
}, $himpunanAsli);

var_dump($himpunanAsli);
echo "<br>";
var_dump($himpunanKelipatan10);

echo "<hr>";

$faktor = 10;
$himpunanAsli = [1, 2, 3, 4];
$himpunanKelipatan10 = array_map(fn($n) => $n * $faktor, $himpunanAsli);

var_dump($himpunanAsli);
echo "<br>";
var_dump($himpunanKelipatan10);