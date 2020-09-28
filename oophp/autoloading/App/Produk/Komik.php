<?php


class Komik extends Produk implements InfoProduk
{
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman){

		parent::__construct($judul, $penulis, $penerbit, $harga, $jmlHalaman);

		$this->jmlHalaman = $jmlHalaman;

	}

	public function getInfoProduk(){
		return "Komik : ". $this->getInfo() ." - {$this->jmlHalaman} Halaman.";
	}
}