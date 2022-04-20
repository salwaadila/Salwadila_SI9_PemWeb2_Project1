<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<div class="content-wrapper">
<?php
class bMIPasien {
    public $tanggalperiksa;
    public $kodepasien;
    public $nama;
    public $berat;
    public $tinggi;
    public $umur;
    public $jenis_kelamin;
    public $BMIres;
    public $BMIstatus = '';

    function __construct($tanggalperiksa, $kodepasien, $nama, $berat, $tinggi, $jenis_kelamin, $umur)
    {
        $this->tanggalperiksa = $tanggalperiksa;
        $this->kodepasien = $kodepasien;
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->umur = $umur;
    }

    public function hasilBMI() {
        $this->tinggi = $this->tinggi / 100;
        $this->BMIres = $this->berat / ($this->tinggi * $this->tinggi);
        return $this->BMIres;
    }

    public function statusBMI() {
        if($this->BMIres < 18.5) {
            return $this->BMIstatus = 'Kekurangan berat badan';
        } else if ($this->BMIres >= 18.5 && $this->BMIres <= 24.9) {
            return $this->BMIstatus = 'Berat Normal';
        } else if ($this->BMIres >= 25.0 && $this->BMIres <= 29.9) {
            return $this->BMIstatus = 'Kelebihan berat badan';
        } else {
            return $this->BMIstatus = 'Kegemukan (Obesitas)';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<?php 
        if(isset($_POST['proses'])) {
            $tanggalperiksa = $_POST['tanggalperiksa'];
            $kodepasien = $_POST['kodepasien'];
            $nama = $_POST['nama_lengkap'];
            $berat = $_POST['berat'];
            $tinggi = $_POST['tinggi'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $umur = $_POST['umur'];
            $pasien1 = new BMIPasien("17 Agustus 2021", "PU123", "Aji Ramadhan","80", "175","laki-laki","26.122448979592","Kelebihan Berat Badan");
            $pasien2 = new BMIPasien("25 Agustus 2021", "PU456", "Rudi Mahsyanih","75", "170","laki-laki","25.951557093426","Kelebihan Berat Badan");
            $pasien3 = new BMIPasien($tanggalperiksa, $kodepasien, $nama, $berat, $tinggi, $jenis_kelamin, $umur);
            $ar_pasien = [$pasien1, $pasien2, $pasien3];
        }
            ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Tanggal Periksa</th>
      <th scope="col">Kode Pasien</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Gender</th>
      <th scope="col">Berat (kg)</th>
      <th scope="col">Tinggi (cm)</th>
      <th scope="col">Nilai BMI</th>
      <th scope="col">Status BMI</th>
    </tr>
  </thead>
  <tbody>
    <?php
            $nomor=1;
            foreach($ar_pasien as $obj){
        ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$obj->tanggalperiksa?></td>
                <td><?=$obj->kodepasien?></td>
                <td><?=$obj->nama?></td>
                <td><?=$obj->jenis_kelamin?></td>
                <td><?=$obj->berat?></td>
                <td><?=$obj->tinggi?></td>
                <td><?=$obj->hasilBMI()?></td>
                <td><?=$obj->statusBMI()?></td>
                
            </tr>

            <?php
            $nomor++;
            }
                ?>
    
  </tbody>
</table>
</body>
</html>
</div>
<?php
include_once 'footer.php';
?>