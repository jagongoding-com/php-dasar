<?php

$i = 0;

# perulangan ini akan dilakukan selama nilai $i kurang dari 20.
while ($i < 20) {
  echo "Perulangan ke-{$i} <br>";

  $i++;
}

echo "<hr>";

# kita mulai dari angka 1
$i = 1;

# perulangan akan dilakukan selama variabel $i bukan kelipatan 3
while ($i % 3 !== 0) {
    echo "Nilai i = {$i} <br>";

    # ubah nilai $i secara random dari angka 1-100
    $i = rand(1, 100);
}

echo "<hr>";

# kita mulai dari angka 1
$i = 1;

# perulangan akan dilakukan selama variabel $i bukan kelipatan 3
while ($i % 3 !== 0) {
    if ($i % 5 === 0) {
      # skip ke perulangan selanjutnya jika $i adalah kelipatan 5
      # jangan lupa di-random dulu agar tidak terjadi perulangan tanpa batas
      $i = rand(1, 500);
      continue; 
    }

    echo "Nilai i = {$i} <br>";

    if ($i > 50 && $i < 60) {
        break; # jika $i bernilai lebih dari 50 dan kurang dari 60 maka stop paksa
    }

    # ubah nilai $i secara random dari angka 1-500
    $i = rand(1, 500);
}