<?php

abstract class Produk 
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

	
    public function getInfo(){
		return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
	}
}
