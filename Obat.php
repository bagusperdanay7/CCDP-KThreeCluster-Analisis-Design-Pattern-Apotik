<?php 
 
class Obat {
    
    private $namaObat;
    private $jenisObat;
    private $deskripsi;

    public function __construct($namaObat, $jenisObat,$deskripsi){
        $this->namaObat = $namaObat;
        $this->jenisObat = $jenisObat;
        $this->deskripsi = $deskripsi;
    }

    public function getNamaObat(){
        return $this->namaObat;
    }

    public function getJenisObat(){
        return $this->jenisObat;
    }

    public function getDeskripsi(){
        return $this->deskripsi;
    }



}


class ObatBuilder {

    private $namaObat = "";
    private $jenisObat ="";
    private $deskripsi ="";
 
    public function setNamaObat($namaObat){
        $this->namaObat = $namaObat;
        return $this;
    }

    public function setJenisObat($jenisObat){
        $this->jenisObat = $jenisObat;
        return $this;
    }

    public function setDeskripsi($deskripsi){
        $this->deskripsi = $deskripsi;
        return $this;
    }

    

    public function build():Obat {
        $obat = new Obat($this->namaObat,$this->jenisObat,$this->deskripsi);
        return $obat;
    }

}


// $cars = array();

// // $avansa = (new ObatBuilder2())
// //     ->setNamaObat('Bodrex')
// //     ->setJenisObat('Anak')
// //     ->setDeskripsi("baik untuk anak")
// //     ->build();

// array_push($cars,$avansa);



// echo $avansa->getNamaObat();

?>