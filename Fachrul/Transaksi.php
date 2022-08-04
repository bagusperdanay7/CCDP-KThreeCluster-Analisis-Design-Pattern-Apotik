<?php

class Transaksi {
    private $namaPembeli;
    private $namaObat;
    private $jenisObat;
    private $hargaObat;
    private $jumlahBeli;
    private $diskon;
    private $totalBayar;

    public function setNamaPembeli($namaPembeli){
        $this->namaPembeli = $namaPembeli;
        return $this;
    }

    public function getNamaPembeli(){
        return $this->namaPembeli;
    }

    public function setNamaObat($namaObat){
        $this->namaObat = $namaObat;
        return $this;
    }

    public function getNamaObat(){
        return $this->namaObat;
    }

    public function setJenisObat($jenisObat){
        $this->jenisObat = $jenisObat;
        return $this;
    }

    public function getJenisObat(){
        return $this->jenisObat;
    }

    public function setHargaObat($hargaObat){
        $this->hargaObat = $hargaObat;
        return $this;
    }

    public function getHargaObat(){
        return $this->hargaObat;
    }

    public function setJumlahBeli($jumlahBeli){
        $this->jumlahBeli = $jumlahBeli;
        return $this;
    }

    public function getJumlahBeli(){
        return $this->jumlahBeli;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
        return $this;
    }

    public function getDiskon(){
        return $this->diskon;
    }

    
    public function setTotalBayar($totalBayar){
        $this->totalBayar = $totalBayar;
        return $this;
    }

    public function getTotalBayar(){
        return $this->totalBayar;
    }

    
}


interface DiskonObat {
    public function hitungDiskon(Transaksi $transaksi);
}


class ObatAnak implements DiskonObat{
    const diskonObatAnak = 0.5;
    public function hitungDiskon(Transaksi $transaksi){
                return $transaksi->getHargaObat() * self::diskonObatAnak;
    }
}



class ObatDewasa implements DiskonObat{
    const diskonObatDewasa = 0.1;
    public function hitungDiskon(Transaksi $transaksi){
        return $transaksi->getHargaObat() * self::diskonObatDewasa;
    }
}


class NewContext {
    private DiskonObat $diskonObat;

    public function __construct(DiskonObat $diskonObat){
        $this->diskonObat = $diskonObat;
    }

    public function hitungDiskon(Transaksi $transaksi){
        $potongan = $this->diskonObat->hitungDiskon($transaksi);
        $transaksi->setDiskon($potongan);
    }
    
}


// $transaksi = new Transaksi;
// $transaksi->setNamaPembeli("Asep aja")
//     ->setNamaObat("Anak Konidin")
//     ->setHargaObat(100)
//     ->setJenisObat("Anak");

// switch($transaksi->getJenisObat()){
//     case "Anak":
//         $str = new ObatAnak;
//         break;
//     case "Dewasa":
//         $str = new ObatDewasa;
//         break;
//     default:
//     echo "Tidak diketahui";
// };

// $context2 = new NewContext($str);
// $context2->hitungDiskon($transaksi);

// echo $transaksi->getHargaObat()."<br>";
// echo $transaksi->getDiskon();

// $transaksi->setTotalBayar($transaksi->getHargaObat() + $transaksi->getDiskon());

// echo $transaksi->getTotalBayar();


?>