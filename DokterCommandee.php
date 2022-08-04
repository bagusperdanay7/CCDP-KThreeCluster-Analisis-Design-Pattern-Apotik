<?php

class DokterCommandee
{
    private $idDokter;
    private $namaDokter;
    private $alamatDokter;
    private $namaPasien;

    public function __construct($idDokter, $namaDokter, $alamatDokter, $namaPasien)
    {
        $this->setIdDokter($idDokter);
        $this->setNamaDokter($namaDokter);
        $this->setAlamatDokter($alamatDokter);
        $this->setNamaPasien($namaPasien);
    }

    function getIdDokter()
    {
        return $this->idDokter;
    }

    function setIdDokter($idDokter)
    {
        $this->idDokter = $idDokter;
    }

    function getNamaDokter()
    {
        return $this->namaDokter;
    }

    function setNamaDokter($namaDokter)
    {
        $this->namaDokter = $namaDokter;
    }

    function getAlamatDokter()
    {
        return $this->alamatDokter;
    }

    function setAlamatDokter($alamatDokter)
    {
        $this->alamatDokter = $alamatDokter;
    }

    function getNamaPasien()
    {
        return $this->namaPasien;
    }

    function setNamaPasien($namaPasien)
    {
        $this->namaPasien = $namaPasien;
    }

    function setStarsOn()
    {
        $this->setNamaDokter(Str_replace(' ', '*', $this->getNamaDokter()));
        $this->setNamaPasien(Str_replace(' ', '*', $this->getNamaPasien()));
    }

    function setStarsOff()
    {
        $this->setNamaDokter(Str_replace('*', ' ', $this->getNamaDokter()));
        $this->setNamaPasien(Str_replace('*', ' ', $this->getNamaPasien()));
    }

    function getDokterdanPasien()
    {
        return $this->getNamaPasien() . ' diperiksa oleh ' . $this->getNamaDokter();
    }
}

abstract class DokterCommand
{
    protected $dokterComandee;
    function __construct($dokterComandee_in)
    {
        $this->dokterComandee = $dokterComandee_in;
    }

    abstract function execute();
}

class DokterStarsOnCommand extends DokterCommand
{
    function execute()
    {
        $this->dokterComandee->setStarsOn();
    }
}

class DokterStarsOffCommand extends DokterCommand
{
    function execute()
    {
        $this->dokterComandee->setStarsOff();
    }
}
