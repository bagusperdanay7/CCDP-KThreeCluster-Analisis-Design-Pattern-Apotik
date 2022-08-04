<?php

class Petugas {
    private $namapetugas;
    private $bagian;
    private $shift;

    public function __construct($namapetugas, $bagian, $shift)
    {
        $this->$namapetugas = $namapetugas;
        $this->$bagian = $bagian;
        $this->$shift = $$shift;
    }

    public function getNamaPasien(){
        return $this->namapetugas;
    }

    public function getBagian(){
        return $this->bagian;
    }
    
    public function getShift(){
        return $this->shift;
    }
}