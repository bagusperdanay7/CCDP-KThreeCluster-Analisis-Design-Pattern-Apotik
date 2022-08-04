<?php

class Pasien {
    private $namapasien;
    private $jenisKelamin;
    private $tempatLahir;
	const BR = '<br/>';

    public function __construct($namapasien, $jenisKelamin, $tempatLahir)
    {
        $this->namapasien = $namapasien;
        $this->jenisKelamin = $jenisKelamin;
        $this->tempatLahir = $tempatLahir;
    }

    public function getDataPasien(){
        return $this->namapasien .'-'. $this->jenisKelamin .'-'. $this->tempatLahir.self::BR;
    }
}

	class PasienAbstract {
		public static function create($namapasien, $jenisKelamin, $tempatLahir){
			return new Pasien($namapasien, $jenisKelamin, $tempatLahir);
		}
	}

$pasien1 = PasienAbstract::create('Fachrul','Laki-Laki','Bandung');
$pasien2 = PasienAbstract::create('Una','Perempuan','Surabaya');

echo $pasien1->getDataPasien();
echo $pasien2->getDataPasien();