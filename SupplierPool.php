<?php

class SupplierPool
{
    private $supplierSibuk = [];
    private $supplierFree = [];
    private $names = ['Kimia Farma', 'Maju Jaya Indonesia', 'Tresno Joyo'];
    private $alamat = ['Jl. Raya Cikarang', 'Jl. Raya Bandung', 'Jl. Raya Jakarta'];

    public function getSupplier()
    {
        if (count($this->supplierFree) == 0) {
            $kodeSupplier = count($this->supplierSibuk) + count($this->supplierFree) + 1;

            $randomName = array_rand($this->names, 1);
            $randAlamat = array_rand($this->alamat, 1);

            $supplier = new SupplierEntity($kodeSupplier, $this->names[$randomName], $this->alamat[$randAlamat]);
        } else
            $supplier = array_pop($this->supplierFree);

        $this->supplierSibuk[$supplier->getkodeSupplier()] = $supplier;

        return $supplier;
    }

    public function release(SupplierEntity $supplier)
    {
        $id = $supplier->getkodeSupplier();

        if (isset($this->supplierSibuk[$id])) {
            unset($this->supplierSibuk[$id]);

            $this->supplierFree[$id] = $supplier;
        }
    }
}
