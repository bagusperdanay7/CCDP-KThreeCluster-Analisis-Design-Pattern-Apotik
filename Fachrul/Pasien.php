<?php

class Pasien {
    private $namapasien;
    private $jenisKelamin;
    private $tempatLahir;
    private $TanggalLahir;

    public function __construct($namapasien, $jenisKelamin, $tempatLahir, $TanggalLahir)
    {
        $this->$namapasien = $namapasien;
        $this->$jenisKelamin = $jenisKelamin;
        $this->$tempatLahir = $$empatLahir;
        $this->$TanggalLahir = $TanggalLahir;
    }

    public function getNamaPasien(){
        return $this->namapasien;
    }

    public function getJenisKelamin(){
        return $this->namapasien;
    }
    
    public function getTempatLahir(){
        return $this->namapasien;
    }

    public function getTanggalLahir(){
        return $this->namapasien;
    }
}