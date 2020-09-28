<?php


class Game extends Produk implements InfoProduk
{
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain){

		parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);
		
		$this->waktuMain = $waktuMain;

	}

	public function getInfoProduk(){
		return "Game : ". $this->getInfo() ." ~ {$this->waktuMain} jam.";
	}

	
}