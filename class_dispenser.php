<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<div class="content-wrapper">
<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function __construct($vol, $hargasegelas, $volumegelas, $namaminuman){
        $this->volume = $vol;
        $this->hargaSegelas = $hargasegelas;
        $this->volumeGelas = $volumegelas;
        $this->namaMinuman = $namaminuman;
    }
    public function pembeli(){
        echo "Volume : ".$this->volume. "<br> Harga Segelas : ".$this->hargaSegelas. "<br> Volume Gelas : ".$this->volumeGelas. "<br> Nama Minuman : ".$this->namaMinuman;
    }
    public function getJumlah(){
        return $this->volume - $this->volumeGelas * $this->hargaSegelas;
    }
}

$pembeli1 = new Dispenser("60000","5000","1","Minuman Soda");
$pembeli1->pembeli();
echo "<br> Jumlah Pembelian : ".$pembeli1->getJumlah();
echo "<hr>";
$pembeli2 = new Dispenser("50000","8000","2","Minuman Buah");
$pembeli2->pembeli();
echo "<br> Jumlah Pembelian : ".$pembeli2->getJumlah();
?>
</div>
<?php
include_once 'footer.php';
?>