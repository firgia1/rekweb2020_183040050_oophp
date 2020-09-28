<?php
class Produk 
{
	public $judul, $penulis, $penerbit, $harga,$jmlHalaman, $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
	{
		 $this->judul = $judul;
		 $this->penulis = $penulis;
		 $this->penerbit = $penerbit;
		 $this->harga = $harga;
		 $this->jmlHalaman = $jmlHalaman;
		 $this->waktuMain = $waktuMain; 
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

class Komik extends Produk
{
	public function getInfoProduk(){
		return "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
	}
}

class Game extends Produk
{
	public function getInfoProduk(){
		return "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} jam.";
	}
}





class CetakInfoProduk
{
	public function cetak(Produk $produk){
		$str = " {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})"; 
		return $str;
	}
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100,0);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000,0,50);

echo "Komik : " . $produk1->getInfoProduk();
echo "<br>";
echo "Game  : " . $produk2->getInfoProduk();
?>