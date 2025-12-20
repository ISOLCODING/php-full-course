<?php
// ==========================================
// SOLUSI LATIHAN: VARIABLES & DATA TYPES
// ==========================================

// kasus 1 Logika tukar nilai (swapping)
echo "=== Kasus 1: Tukar Nilai ===\n";

$shift_budi = 
"pagi";
$shift_andri = "malam";

echo "Sebelum ditukar: Budi = {$shift_budi}, Andri = {$shift_andri}\n";

// proses tukar nilai( membutuhkan variabel sementara)
$shift_sementara = $shift_budi;
$shift_budi = $shift_andri;
$shift_andri = $shift_sementara;
echo "Sesudah ditukar: Budi = {$shift_budi}, Andri = {$shift_andri}\n\n";

// -- KASUS 2 : KALKULASI GAJI BERSIH (SETELAH PAJAK)
echo "=== Kasus 2: Kalkulasi Gaji Bersih ===\n";

define("PAJAK", 0.05); // konstanta pajak 5%
define("UPAH_LEMBUR_PER_JAM", 200000); // konstanta upah lembur per jam

// INPUT DATA
$nama_karyawan = "Siti";
$gaji_pokok = 5000000; // gaji pokok per bulan
$jam_lembur = 5; // jam lembur dalam sebulan
$punya_cicilan = true; // apakah karyawan punya cicilan
$cicilan_per_bulan = 500000; // jumlah cicilan per bulan
// PROSES KALKULASI
$total_lembur = $jam_lembur * UPAH_LEMBUR_PER_JAM;
$gaji_kotor = $gaji_pokok + $total_lembur;
$pajak_dipotong = $gaji_kotor * PAJAK;
$gaji_bersih = $gaji_kotor - $pajak_dipotong;
if ($punya_cicilan) {
    $gaji_bersih -= $cicilan_per_bulan;
}
// 4. Format Rupiah
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}
$gaji_bersih_terformat = formatRupiah($gaji_bersih);
$nama_karyawan .= " - Gaji Bersih: {$gaji_bersih_terformat}";

// OUTPUT HASIL KALKULASI
echo "Nama Karyawan: {$nama_karyawan}\n";
echo "Gaji Pokok   : " . formatRupiah($gaji_pokok) . "\n";
echo "Total Lembur : " . formatRupiah($total_lembur)
. " (untuk {$jam_lembur} jam)\n";
echo "Gaji Kotor   : " . formatRupiah($gaji_kotor) . "\n";
echo "Pajak (5%)   : " . formatRupiah($pajak_dipotong) . "\n";
if ($punya_cicilan) {
    echo "Cicilan      : " . formatRupiah($cicilan_per_bulan) . "\n";
}
echo "Gaji Bersih  : " . $gaji_bersih_terformat . "\n";
