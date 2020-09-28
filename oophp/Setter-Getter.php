<?php
class Produk 
{
	private $judul, $penulis, $penerbit, $harga,$diskon =0;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
	{
		 $this->judul = $judul;
		 $this->penulis = $penulis;
		 $this->penerbit = $penerbit;
		 $this->harga = $harga;
	}

#region Judul
	public function setJudul($judul){
		$this->judul = $judul;
	}

	public function getJudul(){
		return $this->judul;
	}
#endregion
 
#region Penulis
	public function setPenulis($penulis){
		$this->penulis = $penulis;
	}

	public function getPenulis(){
		return $this->penulis;
	}
#endregion
	
#region Penerbit
	public function setPenerbit($penerbit){
		$this->penerbit = $penerbit;
	}

	public function getPenerbit(){
		return $this->penerbit;
	}
#endregion

#region Diskon
	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	public function getDiskon(){
		return $this->diskon;
	}
#endregion

#region Harga
	public function setHarga($harga){
		$this->harga = $harga;
	}

	public function getHarga(){
		return $this->harga - ($this->harga * $this->diskon / 100);
	}
#endregion

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk(){
		return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
	}
}

class Komik extends Produk
{
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman){

		parent::__construct($judul, $penulis, $penerbit, $harga, $jmlHalaman);

		$this->jmlHalaman = $jmlHalaman;

	}

	public function getInfoProduk(){
		return "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
	}
}

class Game extends Produk
{
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain){

		parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);
		
		$this->waktuMain = $waktuMain;

	}

	public function getInfoProduk(){
		return "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} jam.";
	}

	
}





class CetakInfoProduk
{
	public function cetak(Produk $produk){
		$str = " {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})"; 
		return $str;
	}
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

echo "<hr>";

$produk2->setDiskon(10);
echo $produk2->getHarga();
?>