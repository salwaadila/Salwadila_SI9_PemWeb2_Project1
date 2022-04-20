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
    <title>Form Pasien-BMI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="content-wrapper">
    <div class='container'>
                <form class='form-horizontal p-5' action="halamanBMI.php" method="POST">
                    <div class='text-center'>
                    <h3 class='mb-5'>FORM ISIAN BMI</h3>
                    </div>
                    <!-------->
                    <div class="form-group row ">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pasien</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name='nama_lengkap' placeholder="Nama Pasien">
                        </div>
                    </div>
                    <!----> 
                    <div class="form-group row ">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Periksa</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name='tanggalperiksa' placeholder="Tanggal Periksa">
                        </div>
                    </div>
                    <!----> 
                    <div class="form-group row ">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Pasien</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name='kodepasien' placeholder="Kode Pasien">
                        </div>
                    </div>
                    <!----> 
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Berat Badan</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputPassword3" name='berat' placeholder="Berat Badan">
                        </div>
                    </div>
                    <!----> 
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tinggi Badan</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputPassword3" name='tinggi' placeholder="Tinggi Badan">
                        </div>
                    </div>
                    <!---->
                    <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="Perempuan" value="perempuan" checked>
                        <label class="form-check-label" for="Perempuan">
                            Perempuan
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="Laki-laki" value="laki-laki">
                        <label class="form-check-label" for="Laki-laki">
                            Laki-Laki 
                        </label>
                        </div>
                    </div>
                    </div>
                    <br>
                    <!---->
                    <div class="text-center">
                <input class="btn" type="submit" style="color:white; background-color:grey;" value="Submit" name="proses"/>
            </div>

                </form>

    </div>
</div>
</body>
</html>

<?php
include_once 'footer.php';
?>