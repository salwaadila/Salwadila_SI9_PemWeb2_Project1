<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa | Salwadila</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="content-wrapper">
<form class="form-horizontal" method="POST" action="nilai_siswa.php">
    <div class="container mt-3">
    <div class="mb-3 bg-secondary p-2 text-dark bg-opacity-10"><h2>Form Nilai Siswa</div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="ddp">Dasar Dasar Pemrograman</option>
        <option value="pw">Pemrograman Web</option>
        <option value="bd">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas" class="col-4 col-form-label">Nilai Tugas Praktikum</label> 
    <div class="col-8">
      <input id="tugas" name="tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
  <div class="offset-4 col-8">
      <input class="btn btn-primary" name="simpan" type="submit" value="Simpan">
    </div>
  </div>
</div>
</form>

<?php
$proses= $_POST['simpan'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];

if(!empty($proses)) {
echo 'Proses : '.$proses;
echo '<br/>Nama : '.$nama;
echo '<br/>Mata Kuliah : '.$matkul;
echo '<br/>Nilai UTS : '.$uts;
echo '<br/>Nilai UAS : '.$uas;
echo '<br/>Nilai Tugas Praktikum : '.$tugas;
}

//UTS
if ($uts >=0 and $uts <=35) {
    echo "<br> Nilai Anda : $uts <br>"; 
    echo "Grade : E";
    echo "<br> Sangat Kurang";
} else if ($uts >=36 and $uts <=55) {
    echo "<br> Nilai Anda : $uts <br>";
    echo "Grade : D";
    echo "<br> Kurang";
} else if ($uts >=56 and $uts <=69) {
    echo "<br>Nilai Anda : $uts <br>";
    echo "Grade : C";
    echo "<br> Cukup";
} else if ($uts >=70 and $uts <=84) {
    echo "<br>Nilai Anda : $uts <br>";
    echo "Grade : B";
    echo "<br> Memuaskan";
} else if ($uts >=85 and $uts <=100) {
    echo "<br>Nilai Anda : $uts <br>";
    echo "Grade : A";
    echo "<br> Sangat Memuaskan";
} else if ($uts >=0 and $uts >=100) {
    echo "<br>Nilai Anda : $uts <br>";
    echo "Grade : I";
    echo "<br> Tidak Ada";}

//UAS
if ($uas >=0 and $uas <=35) {
    echo "<br> Nilai Anda : $uas <br>"; 
    echo "Grade : E";
    echo "<br> Sangat Kurang";
} else if ($uas >=36 and $uas <=55) {
    echo "<br> Nilai Anda : $uas <br>";
    echo "Grade : D";
    echo "<br> Kurang";
} else if ($uas >=56 and $uas <=69) {
    echo "<br>Nilai Anda : $uas <br>";
    echo "Grade : C";
    echo "<br> Cukup";
} else if ($uas >=70 and $uas <=84) {
    echo "<br>Nilai Anda : $uas <br>";
    echo "Grade : B";
    echo "<br> Memuaskan";
} else if ($uas >=85 and $uas <=100) {
    echo "<br>Nilai Anda : $uas <br>";
    echo "Grade : A";
    echo "<br> Sangat Memuaskan";
} else if ($uas >=0 and $uas >=100) {
    echo "<br>Nilai Anda : $uas <br>";
    echo "Grade : I";
    echo "<br> Tidak Ada";}

//tugas
if ($tugas >=0 and $tugas <=35) {
    echo "<br> Nilai Anda : $tugas <br>"; 
    echo "Grade : E";
    echo "<br> Sangat Kurang";
} else if ($tugas >=36 and $tugas <=55) {
    echo "<br> Nilai Anda : $tugas <br>";
    echo "Grade : D";
    echo "<br> Kurang";
} else if ($tugas >=56 and $tugas <=69) {
    echo "<br>Nilai Anda : $tugas <br>";
    echo "Grade : C";
    echo "<br> Cukup";
} else if ($tugas >=70 and $tugas <=84) {
    echo "<br>Nilai Anda : $tugas <br>";
    echo "Grade : B ";
    echo "<br> Memuaskan";
} else if ($tugas >=85 and $tugas <=100) {
    echo "<br>Nilai Anda : $tugas <br>";
    echo "Grade : A";
    echo "<br> Sangat Memuaskan";
} else if ($tugas >=0 and $tugas >=100) {
    echo "<br>Nilai Anda : $tugas <br>";
    echo "Grade : I";
    echo "<br> Tidak Ada";} 
?>
</div>
</body>
</html>

<?php
include_once 'footer.php';
?>