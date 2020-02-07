<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jago Ngoding: Belajar Logika Percabangan PHP</title>
</head>
<body>
  <h1>Belajar Logika Percabangan PHP</h1>

  <h2>Penggunaan IF</h2>

  <h3>Contoh Sederhana If</h3>
  <?php
  $lulus = true;

  echo 'Memeriksa variable $lulus <br>';

  if ($lulus) {
    echo "Variabel lulus bernilai true <br>";
  }

  ?>

  <h3>Menggunakan Else</h3>

  <?php

  $nilai = 60;

  echo 'Memeriksa variable $nilai <br>';
  echo "Nilai: {$nilai} <br>";

  if ($nilai >= 70) {
    echo "Selamat, siswa !";
  } else {
    echo "Mohon maaf, siswa tidak lulus!";
  }

  echo "<br>";
  ?>

  <h3>Menggunakan else if</h3>
  <?php

  $nilai = 60;

  echo 'Memeriksa variable $nilai <br>';
  echo "Nilai: {$nilai} <br>";

  if ($nilai >= 85) {
    echo "Sangat mengesankan!";
  } elseif ($nilai >= 70) {
    echo "Selamat anda lulus!";
  } else {
    echo "Jangan menyerah, anda pasti bisa!";
  }

  echo "<br>";
  ?>

  <h3>Contoh kasus predikat nilai</h3>

  <?php

  $nilai = 80;

  echo "Nilai: {$nilai} <br>";

  if ($nilai >= 85 and $nilai <= 100) {
    echo "Predikat: A";
  } elseif ($nilai >= 75) {
    echo "Predikat: B";
  } elseif ($nilai >= 60) {
    echo "Predikat: C";
  } elseif ($nilai >= 50) {
    echo "Predikat: D";
  } elseif ($nilai >= 0) {
    echo "Predikat: E";
  } else {
    echo "Nilai tidak valid.";
  }

  echo "<br>"; # untuk ganti membuat baris baru pada HTML
  ?>

  <h2>Hal-Hal yang dianggap true atau dianggap false</h2>

  <?php
  $nilai = 0;
  if ($nilai) {
    echo "nilai: {$nilai} dianggap true";
  } else {
    echo "nilai: {$nilai} dianggap false";
  }
  echo "<br>";

  $nama = "";

  if ($nama) {
    echo "dianggap true";
  } else {
    echo "dianggap false";
  }

  echo "<br>";

  $nilai = null;

  if ($nilai) {
    echo "dianggap true";
  } else {
    echo "dianggap false";
  }
  
  echo "<br>";

  if (@$namaLengkap) {
    echo "Jika variabel namaLengkap telah didefinisikan sebelumnya dan ia bukan 0 atau string kosong atau null";
  } else {
    echo "Jika variabel namaLengkap tidak pernah didefinisikan sebelumnya. Tanda @ membuatnya bernilai NULL jika belum didefinisikan sebelumnya";
  }
  ?>

  <h2>Percabangan Switch Case</h2>

  <?php

  $url = '/about';

  switch ($url) {
    case '/':
      echo 'Selamat datang di dashboard.';
      break;
    case '/about':
      echo 'Selamat datang di halaman about.';
      break;
    case '/contact':
      echo 'Selamat datang di halaman kontak.';
      break;
    default:
      echo 'Maaf halaman yang anda cari tidak ditemukan.';
  }

  echo '<br>';

  ?>

  <h3>Switch Case tanpa break</h3>

  <?php

  $url = '/about';

  switch ($url) {
    case '/':
      echo 'Selamat datang di dashboard.';
    case '/about':
      echo 'Selamat datang di halaman about.';
    case '/contact':
      echo 'Selamat datang di halaman kontak.';
    default:
      echo 'Maaf halaman yang anda cari tidak ditemukan.';
  }

  echo '<br>';
  ?>

  <h2>Percabangan dengan Ternary</h2>

  <?php
  echo $nilai > 70 ? "Selamat, anda lulus!" : "Mohon maaf, anda harus mengulang";
  echo "<br>";
  ?>

  Menggunakan tanda ?: <br>
  <?php
  echo @$namaPeserta ?: "Nama tidak diisi";
  ?>
</body>
</html>