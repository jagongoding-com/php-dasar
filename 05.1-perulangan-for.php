<?php

for ($i = 0; $i < 100; $i++) {
    echo "Saya berjanji tidak akan mengulangi <br>";
}

echo "<hr>";

# inisialisasi variabel tidak harus dari angka 0
for ($i = 1; $i <= 10; $i++) {
    echo "Perulangan ke-{$i} <br>";
}

echo "<hr>";

for ($x = 1; $x < 11; $x++) {
    echo "Nilai x = {$x} <br>";
}

echo "<hr>";

for ($i = 2; $i < 100; $i += 2) {
    echo "Nilai i = {$i} <br>";
}

echo "<hr>";

for ($i = 10; $i > 0; $i--) {
    echo "Nilai i = {$i} <br>";
}

echo "<hr>";

# kode program ini akan menampilkan * dalam bentuk persegi
# dengan ukuran 5x5
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "* ";
    }

    echo "<br>";
}

echo "<hr>";

$listMahasiswa = ['Nurul Huda', 'Wahid Abdullah', 'Elmo Bachtiar'];

for ($i = 0; $i < count($listMahasiswa); $i++) {
    echo "Nama: {$listMahasiswa[$i]} <br>";
}

echo "<hr>";

# inisialisasi variabel tidak harus dari angka 0
for ($i = 1; $i <= 50; $i++) {
    if ($i % 10 === 0) {
      continue; # skip perulangan jika nilai $i habis dibagi 10
    }
    
    echo "Perulangan ke-{$i} <br>";

    if ($i > 40) {
      break; # hentikan perulangan jika $i lebih dari 20
    }
}