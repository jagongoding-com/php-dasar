<?php

echo "Baris\nbaru <br>"; # ini hanya bekerja di console, tidak di HTML
echo 'Baris\nbaru <br>'; # ditampilkan apa adanya, \n tidak direplace dg sesuatu

echo "Halo\rDunia <br>"; # Halo Dunia
echo 'Halo\rDunia <br>'; # Halo\rDunia

echo "<pre>Halo\tDunia!</pre>"; # Halo	Dunia!
echo '<pre>Halo\tDunia!</pre>'; # Halo\tDunia!

echo "Katakanlah \"Tidak pada narkoba!\" <br>"; # Katakanlah "Tidak pada narkoba!"
echo 'Katakanlah \'Tidak pada narkoba!\' <br>'; # Katakanlah 'Tidak pada narkoba!'

echo "<hr>";

$i = 5;

echo "Hasil akhir: " . $i + 3 . "<br>";
echo "Hasil akhir: " . ($i + 3);

echo "<hr>";

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem reprehenderit nobis veritatis commodi fugiat molestias impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum quisquam? Quos impedit eum nulla optio.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";

# dari indeks 0 sampai sepanjang 150 karakter
echo "<p>" . substr($loremIpsum, 0, 150) . "</p>";
# dari indeks 30 sampai sepanjang 150 karakter
echo "<p>" . substr($loremIpsum, 30, 150) . "</p>";
# dari indeks 100 sampai habis
echo "<p>" . substr($loremIpsum, 100) . "</p>";
# abmil 100 karakter terakhir
echo "<p>" . substr($loremIpsum, -100) . "</p>";

echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
echo "<hr>";

$pesan = "saya sudah makan";

echo strrev($pesan) . "<br>";

$pesanPerKata = explode(" ", $pesan);

$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);

$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";

echo "<hr>";

$judulBerita = "Microsoft membeli github";

echo strpos($judulBerita, "github") . "<br>"; # 18
echo strpos($judulBerita, "Github") . "<br>"; # kosong
echo stripos($judulBerita, "Github") . "<br>"; # 18

echo "Judul asli: {$judulBerita} <br>";
echo "Judul baru: " . str_replace("membeli", "menjual", $judulBerita) . "<br>";;