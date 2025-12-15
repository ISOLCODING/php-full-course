<!-- belajar macam macam variabel php -->
<?php
// variabel adalah tempat menyimpan data
$nama = "Andi"; // string
$food = "Nasi Goreng"; // string
$umur = 25; // integer
$tinggi = 175.5; // float
$menikah = false; // boolean
$hobi = array("Membaca", "Bersepeda", "Bermain Musik"); // array
$alamat = null; // null

// menampilkan variabel
echo "haloo {$nama}, saya suka makan {$food} saya berumur {$umur} tahun, tinggi saya {$tinggi} cm. Apakah saya sudah menikah? " . ($menikah ? "Ya" : "Tidak") . ". Hobi saya adalah: " . implode(", ", $hobi) . ". Alamat saya: " . ($alamat ?? "Belum diisi") . ".";