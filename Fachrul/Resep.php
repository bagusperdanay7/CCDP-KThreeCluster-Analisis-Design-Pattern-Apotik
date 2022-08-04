<?php

class Resep {
    private $namaObat;
    private $namaPasien;

    public function __construct($namaObat, $namaPasien)
    {
        $this->namaObat = $namaObat;
        $this->namaPasien = $namaPasien;
    }
}