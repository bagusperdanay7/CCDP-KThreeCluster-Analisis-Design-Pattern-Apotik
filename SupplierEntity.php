<?php

class SupplierEntity
{
    private $kodeSupplier;
    private $namaSupplier;
    private $alamatSupplier;

    public function __construct($kodeSupplier, $namaSupplier, $alamatSupplier)
    {
        $this->kodeSupplier = $kodeSupplier;
        $this->namaSupplier = $namaSupplier;
        $this->alamatSupplier = $alamatSupplier;
    }

    public function getkodeSupplier()
    {
        return $this->kodeSupplier;
    }

    public function getnamaSupplier()
    {
        return $this->namaSupplier;
    }

    public function getalamatSupplier()
    {
        return $this->alamatSupplier;
    }
}
