<?php 

class ObatBuilder2 {
    private $namaObat;
    private $jenisObat;
    private $deskripsi;
    public function __construct($namaObat,$jenisObat,$deskripsi){
        
        $this->namaObat = $namaObat;
        $this->jenisObat = $jenisObat;
        $this->deskripsi = $deskripsi;
    }


    public function setNamaObat($namaObat){
        $this->namaObat = $namaObat;
        
    }

    public function setJenisObat($jenisObat){
        $this->jenisObat = $jenisObat;
        
    }

    public function setDeskripsi($deskripsi){
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

?>