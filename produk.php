<?php
class produk {

    public $namaProduk ;
    public $jenisProduk;
    public $jumlahPProduk;
    public $stok;
    public $pembelian;

    public function stockAkhirProduk (){
        $this->stok = ($this ->stok - $this->pembelian);
        return $this->stok;
    }

}

$panggilProduk = new Produk ();
$panggilProduk->stok =50;
$panggilProduk->pembelian = 10;
echo $panggilProduk->stockAkhirProduk();
