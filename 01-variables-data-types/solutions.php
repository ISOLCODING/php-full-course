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
