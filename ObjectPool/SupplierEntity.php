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

    public function setkodeSupplier($kodeSupplier)
    {
        $this->kodeSupplier = $kodeSupplier;
    }

    public function getnamaSupplier()
    {
        return $this->namaSupplier;
    }

    public function setnamaSupplier($namaSupplier)
    {
        $this->namaSupplier = $namaSupplier;
    }

    public function getalamatSupplier()
    {
        return $this->alamatSupplier;
    }

    public function setalamatSupplier($alamatSupplier)
    {
        $this->alamatSupplier = $alamatSupplier;
    }

}