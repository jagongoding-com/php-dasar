<?php

$listMahasiswa = ['Nurul Huda', 'Wahid Abdullah', 'Elmo Bachtiar'];

foreach ($listMahasiswa as $mahasiswa) {
    echo "Nama : {$mahasiswa} <br>";
}

echo "<hr>";

foreach ($listMahasiswa as $key => $mahasiswa) {
    echo "[{$key}] Nama : {$mahasiswa} <br>";
}