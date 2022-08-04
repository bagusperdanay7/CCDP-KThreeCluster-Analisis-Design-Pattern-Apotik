<?php

class SupplierPool
{
    private $namaSupplier  = 'dina';
    private $kodeSupplier  ;
    private $alamatSupplier = 'bandung';

    public function getSupplier()
    {
        
        $supplier = new SupplierEntity($this->kodeSupplier, $this->namaSupplier, $this->alamatSupplier);
        return $supplier;
    }

    public function release(SupplierEntity $supplier)
    {
        $kodeSupplier = $supplier->getkodeSupplier();
        echo ($kodeSupplier);
        $this->namaSupplier = $supplier;
    }
}