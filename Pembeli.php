<?php


interface ComponenPembeli {
    public function getNamaPembeli();
    public function getAlamat();
    public function getJumlahBeli();
}


class Pembeli implements ComponenPembeli {
    private $namaPembeli;
    private $alamat;
    private $jumlahBeli;

    public function __construct($namaPembeli,$alamat,$jumlahBeli)
    {
        $this->namaPembeli = $namaPembeli;
        $this->alamat = $alamat;
        $this->jumlahBeli = $jumlahBeli;
    }

    public function getNamaPembeli()
    {
        return $this->namaPembeli;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }

    public function getJumlahBeli()
    {
        return $this->jumlahBeli;
    }

}




?>