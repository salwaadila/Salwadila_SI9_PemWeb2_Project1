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
    <title>Form Belanja | Salwadila</title>
</head>
<body>
<div class="content-wrapper">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
<h3 class="mx-3 my-3">Belanja Online</h3><hr>
<form method="POST">
  <div class="form-group row mx-3">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row mx-3">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="televisi"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row mx-3">
    <label for="jumlah beli" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah beli" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row mx-3">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>
</div>
<?php
$proses = $_POST['proses'];
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

  if(!empty($proses)) {
    echo 'Proses : '.$proses;
    echo '<br/>Customer : '.$customer;
    echo '<br/>Produk : '.$produk;
    echo '<br/>Jumlah : '.$jumlah;
  }
  if($produk == "mesincuci"){
    echo "<br> Total Belanja Anda : $produk <br> Rp. ";
    echo 3800000*$jumlah;
  } elseif($produk == "tv"){
    echo "<br> Total Belanja Anda : $produk <br>Rp. ";
    echo 4200000*$jumlah;
  } elseif($produk == "kulkas"){
    echo "<br> Total Belanja Anda : $produk <br> Rp. ";
    echo 3100000*$jumlah;}
?>
</div>
</body>
</html>
<?php
include_once 'footer.php';
?>