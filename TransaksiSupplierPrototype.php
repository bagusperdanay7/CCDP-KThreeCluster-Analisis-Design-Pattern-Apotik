<?php
class TransaksiSupplierPrototype
{
    private $kodeNota;
    private $tanggalTransaksi;
    private $namaSupplier;
    private $namaBarang;
    private $jumlahBarang;
    private $hargaBarang;
    private $totalHarga;
    private $kategoriSupplier;

    // public function __construct($kodeNota, $tanggalTransaksi, $namaSupplier, $namaBarang, $jumlahBarang, $hargaBarang, $totalHarga, $kategoriSupplier)
    // {
    //     $this->kodeNota = $kodeNota;
    //     $this->tanggalTransaksi = $tanggalTransaksi;
    //     $this->namaSupplier = $namaSupplier;
    //     $this->namaBarang = $namaBarang;
    //     $this->jumlahBarang = $jumlahBarang;
    //     $this->hargaBarang = $hargaBarang;
    //     $this->totalHarga = $totalHarga;
    //     $this->kategoriSupplier = $kategoriSupplier;
    // }

    public function getKodeNota()
    {
        return $this->kodeNota;
    }

    public function getTanggalTransaksi()
    {
        return $this->tanggalTransaksi;
    }

    public function getNamaSupplier()
    {
        return $this->namaSupplier;
    }

    public function getnamaBarang()
    {
        return $this->namaBarang;
    }

    public function getJumlahBarang()
    {
        return $this->jumlahBarang;
    }

    public function getHargaBarang()
    {
        return $this->hargaBarang;
    }

    public function getTotalHarga()
    {
        return $this->totalHarga;
    }

    public function getkategoriSupplier()
    {
        return $this->kategoriSupplier;
    }

    public function setKodeNota($kodeNota)
    {
        $this->kodeNota = $kodeNota;
        return $this;
    }

    public function setTanggalTransaksi($tanggalTransaksi)
    {
        $this->tanggalTransaksi = $tanggalTransaksi;
        return $this;
    }

    public function setNamaSupplier($namaSupplier)
    {
        $this->namaSupplier = $namaSupplier;
        return $this;
    }

    public function setnamaBarang($namaBarang)
    {
        $this->namaBarang = $namaBarang;
        return $this;
    }

    public function setHargaBarang($hargaBarang)
    {
        $this->hargaBarang = $hargaBarang;
        return $this;
    }

    public function setJumlahBarang($jumlahBarang)
    {
        $this->jumlahBarang = $jumlahBarang;
        return $this;
    }

    public function setTotalHarga($totalHarga)
    {
        $this->totalHarga = $totalHarga;
        return $this;
    }

    public function setkategoriSupplier($kategoriSupplier)
    {
        $this->kategoriSupplier = $kategoriSupplier;
        return $this;
    }

    public function clone()
    {
        return clone $this;
    }
}

class TransaksiSupplier1 extends TransaksiSupplierPrototype
{
    public function __construct()
    {
        $this->setkategoriSupplier("Perusahaan");
    }
}

class TransaksiSupplier2 extends TransaksiSupplierPrototype
{
    public function __construct()
    {
        $this->setkategoriSupplier("Perorangan");
    }
}
