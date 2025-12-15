<?php
// 1. Pemasukan
$gaji_bulanan = 4000000;

$pengeluaran = [
    "belanja_sembako" => 1500000,
    "peralatan_mandi" => 300000
];

// 3. Proses Hitung (Aritmatika)
$total_pengeluaran = array_sum($pengeluaran);
$sisa_gaji = $gaji_bulanan - $total_pengeluaran;
$belanja_sembako = $pengeluaran["belanja_sembako"];
$peralatan_mandi = $pengeluaran["peralatan_mandi"];
$token_listrik = 250000;
$kuota_internet = 150000;


// 4. Format ke Rupiah

$gaji_rp     = "Rp " . number_format($gaji_bulanan, 0, ',', '.');
$keluar_rp   = "Rp " . number_format($total_pengeluaran, 0, ',', '.');
$sisa_rp     = "Rp " . number_format($sisa_gaji, 0, ',', '.');

// 5. Tampilkan Hasil
echo "=== Rincian Gaji Bulan Ini ===\n";
echo "Gaji Awal          : " . $gaji_rp . "\n";
echo "------------------------------\n";
echo "Belanja Sembako    : Rp " . number_format($belanja_sembako, 0, ',', '.') . "\n";
echo "Peralatan Mandi    : Rp " . number_format($peralatan_mandi, 0, ',', '.') . "\n";
echo "Listrik & Internet : Rp " . number_format($token_listrik + $kuota_internet, 0, ',', '.') . "\n";
echo "------------------------------\n";
echo "Total Pengeluaran  : " . $keluar_rp . "\n";
echo "Sisa Gaji          : " . $sisa_rp;
?>