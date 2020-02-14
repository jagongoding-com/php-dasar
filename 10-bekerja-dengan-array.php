<?php

# asosiatif array
$listBuah = [
  '0' => 'Anggur',
  '1' => 'Jeruk',
  '2' => 'Naga',
  '3' => 'Duku'
];

var_dump(array_values($listBuah));

echo "<hr>";

$mahasiswa = "Andi Budi Deni Edwin Fajar Hendra";
var_dump(explode(" ", $mahasiswa));

echo "<hr>";

$mahasiswa = ['Huda', 'Lendis', 'Elmo'];

echo implode(" ", $mahasiswa) . "<br>"; // Huda Lendis Elmo
echo implode("*", $mahasiswa) . "<br>"; // Huda*Lendis*Elmo
echo implode(",", $mahasiswa) . "<br>"; // Huda,Lendis,Elmo
echo implode(", ", $mahasiswa) . "<br>"; // Huda, Lendis, Elmo
echo implode(" wkwk ", $mahasiswa) . "<br>"; // Huda wkwk Lendis wkwk Elmo

echo "<hr>";

$distroLinux = ['Ubuntu', 'Arch Linux', 'Elementary OS'];

var_dump(array_search('Arch Linux', $distroLinux));
// 1

$mahasiswa = [
  'nama' => 'Lendis Fabri',
  'asal' => 'Lamongan',
  'status_pernikahan' => 'Belum menikah',
  'kewarganegaraan' => 'Indonesia'
];

var_dump(array_search('Lamongan', $mahasiswa));
// 'asal'

echo "<hr>";

$nilaiSiswa = [
  ['nama' => 'Andi', 'nilai' => 80],
  ['nama' => 'Budi', 'nilai' => 40],
  ['nama' => 'Candra', 'nilai' => 20],
  ['nama' => 'Denis', 'nilai' => 70],
  ['nama' => 'Fabrian', 'nilai' => 100],
  ['nama' => 'Gunawan', 'nilai' => 90],
  ['nama' => 'Hendra', 'nilai' => 30],
  ['nama' => 'Ian', 'nilai' => 75],
];

# nilai yang kurang dari atau sama dengan 30
$nilai30Kebawah = array_filter($nilaiSiswa, function ($item) {
  return $item['nilai'] <= 30;
});

# nilai yang lebih dari 80
$nilaiYangLebihDari80 = array_filter($nilaiSiswa, function ($item) {
  return $item['nilai'] <= 30;
});

# kita juga bisa menggunakan fungsi panah
$nilaiDiatas30Dan80Kebawah = array_filter($nilaiSiswa, fn($item) => $item['nilai'] > 30 and $item['nilai'] <= 80);

echo "<h3 style='color: red'>Nilai 30 kebawah</h3>";

foreach ($nilai30Kebawah as $item) {
  echo "Nama: {$item['nama']} <br>";
  echo "Nilai: {$item['nilai']} <br><br>";
}

echo "<h3 style='color: red'>Nilai lebih dari 80</h3>";

foreach ($nilaiYangLebihDari80 as $item) {
  echo "Nama: {$item['nama']} <br>";
  echo "Nilai: {$item['nilai']} <br><br>";
}

echo "<h3 style='color: red'>Nilai dari 31 sampai 80</h3>";

foreach ($nilaiDiatas30Dan80Kebawah as $item) {
  echo "Nama: {$item['nama']} <br>";
  echo "Nilai: {$item['nilai']} <br><br>";
}