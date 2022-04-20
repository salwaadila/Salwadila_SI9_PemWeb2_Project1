<?php
 function kelulusan($_nilai) {
    if ($_nilai > 55 ){
        return 'LULUS';
    }else {
        return 'TIDAK LULUS';
    }
}
?>

<?php
// letakan di paling atas file
require_once 'libfungsi.php';

// kode lainnya logik program anda
// $_nilai = total nilai

    $hasil_ujian = kelulusan($_nilai)
    echo 'DINYATAKAN '. $hasil_ujian;
?>

<?php

 function kelulusan($_nilai) {
 // isi fungsi kelulusan
 }
 function grade($_nilai) {
 // isi fungsi grade

 }

 function predikat($_grade) // argumen nya E,D,C,B,A
 {
 // isi fungsi predikat
 }
?>