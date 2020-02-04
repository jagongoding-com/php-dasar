<!DOCTYPE html>
<html>
<head>
  <title>Operator</title>
</head>
<body>
  <h1>Belajar Operator PHP</h1>

  <h2>Operator Aritmatika</h2>

  <?php

  $a = 5;
  $b = 10;

  # operator aritmatika standar
  echo "{$a} + {$b} = " . ($a + $b) . " <br>";
  echo "{$a} - {$b} = " . ($a - $b) . " <br>";
  echo "{$a} * {$b} = " . ($a * $b) . " <br>";
  echo "{$a} / {$b} = " . ($a / $b) . " <br>";

  # modulus
  echo "{$a} % {$b} = " . ($a % $b) . " <br>";
  # eksponensial
  echo "{$a} ** {$b} = " . ($a ** $b) . " <br>";
  # negasi
  echo "-a = " . (-$a) . " <br>";

  ?>

  <h2>Operator Penugasan</h2>

  <?php
  $nilaiMatematika = 8;
  $rataRata = (10 + 7 + $nilaiMatematika) / 3;

  $namaDepan = "Nurul";
  $namaLengkap = "{$namaDepan} Huda";

  $a = 5;
  $a += 10; # sama dengan $a = $a + 10;
  echo var_dump($a) . "<br>";

  $a -= 20; # sama dengan $a = $a - 20;
  echo var_dump($a) . "<br>";

  $a *= 100; # sama dengan $a = $a * 100;
  echo var_dump($a) . "<br>";

  $a /= 10; # sama dengan $a = $a / 10;
  echo var_dump($a) . "<br>";

  ?>

  <h2>Operator Perbandingan</h2>

  <?php

  $nilai = 90;
  # membanding variabel
  $lulus = $nilai > 80;

  echo "{$nilai} > 80 = ";
  var_dump($lulus);
  echo "<br>";

  # membandingkan langsung angka
  echo "3 >= 3 = ";
  var_dump(3 >= 3);
  echo "<br>";

  echo "3 < 6 = ";
  var_dump(3 < 6);
  echo "<br>";

  echo "5 <= 3 = ";
  var_dump(5 <= 3);
  echo "<br>";


  # anda juga bisa membandingkan antar 2 string
  echo "'a' < 'b' = ";
  var_dump('a' < 'b');
  echo '<br>';

  echo "'abc' < 'b' = ";
  var_dump('abc' < 'b');
  echo '<br>';
  ?>

  <h2>Operator Perbandingan Equal dan Identik</h2>
  <?php

  var_dump(10 == "10");
  echo "<br>";

  var_dump(10 === "10");
  echo "<br>";

  var_dump(10 === 10);
  echo "<br>";

  var_dump(10 != "10");
  echo "<br>";

  var_dump(10 !== "10");
  echo "<br>";

  var_dump(10 <> "10");
  echo "<br>";
  ?>

  <h2>Operator Logika</h2>

  <?php
  $a = true && true; # -> true
  $b = true and false; # -> false
  $c = false && false; # -> false
  $d = true || false; # -> false

  # ekspresi berikut akan diselesaikan dari kiri ke kanan
  $e = true && false && false;

  # ekspresi yang berada di dalam kurung diselesaikan lebih dulu
  $f = "a" === "a" && ((3 > 5) or 3 + 5 >= 7);

  $g = !true;
  $h = !(true && !false);

  # var_dump semua variabel di atas untuk melihat hasilnya
  var_dump($a); echo "<br>";
  var_dump($b); echo "<br>";
  var_dump($c); echo "<br>";
  var_dump($d); echo "<br>";
  var_dump($e); echo "<br>";
  var_dump($f); echo "<br>";
  var_dump($g); echo "<br>";
  var_dump($h); echo "<br>";
  ?>

  <h2>Operator Increment dan Decrement</h2>
  <?php
  /**
   * Increment
   */
  $a = 1;
  echo "a = {$a} <br>";
  $a++;
  echo "a = {$a} <br>";
  $a++;
  echo "a = {$a} <br>";

  # isi dari variabel $a dimasukkan lebih dulu ke variabel $b
  # lalu variabel $a menambah dirinya sendiri dengan angka 1
  $b = $a++;
  echo "b = {$b} <br>";
  echo "a = {$a} <br>";

  /**
   * Decrement
   */
  $a--;
  echo "a = {$a} <br>";
  $a--;
  echo "a = {$a} <br>";

  $b = $a--;
  echo "b = {$b} <br>";
  echo "a = {$a} <br>";

  $a = 5;
  --$a;

  # variabel $a menambah dirinya sendiri dengan angka 1
  # lalu hasil terbaru tersebut akan dimasukkan ke variabel $b
  $b = --$a;
  # begitu juga yang $c.
  $c = ++$b;
  ?>
</body>
</html>