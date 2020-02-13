<?php

function tampilkanAngka (int $jumlah, int $indeks = 1) {
  echo "<strong style='color: green'>
    Sebelum memanggil diri sendiri [{$indeks}]
  </strong><br>";
 
  # panggil diri sendiri selama $indeks <= $jumlah
  if ($indeks < $jumlah) {
    tampilkanAngka($jumlah, $indeks + 1);
  } else {
    echo "<strong style='color: red'>
      Proses terakhir.
    </strong><br>";
  }

  echo "<strong style='color: blue'>
    Sebelum memanggil diri sendiri [{$indeks}]
  </strong><br>";
}

tampilkanAngka(5);

echo "<hr>";

function faktorial ($n) {
  if ($n > 2) {
    return $n * faktorial($n - 1);
  } else {
    return $n;
  }
}

$hasil = faktorial(5);
echo $hasil;

echo "<hr>";

function tampilkanMenuBertingkat (array $menu) {
  echo "<ul>";
  foreach ($menu as $key => $item) {
    echo "<li>{$item['nama']}</li>";

    # periksa apakah ia memiliki atribut subMenu
    # dan apakah attribut tersebut memiliki isi
    if (@$item['subMenu'] && count($item['subMenu'])) {
      # jika ia panggil diri sendiri
      tampilkanMenuBertingkat($item['subMenu']);
    }
  }
  echo "</ul>";
}

$menu = [
  [
    "nama" => "Beranda"
  ],
  [
    "nama" => "Berita",
    "subMenu" => [
      [
        "nama" => "Olahraga",
        "subMenu" => [
          [
            "nama" => "Bola"
          ],
          [
            "nama" => "Bulu Tangkis"
          ]
        ]
      ],
      [
        "nama" => "Politik"
      ],
      [
        "nama" => "Manca Negara"
      ]
    ]
  ],
  [
    "nama" => "Tentang"
  ],
  [
    "nama" => "Kontak"
  ],
];

tampilkanMenuBertingkat($menu);