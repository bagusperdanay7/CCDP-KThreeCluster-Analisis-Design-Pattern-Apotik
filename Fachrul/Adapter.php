<?php

class Resep {
    public function ResepDokter($rd){
        echo "Tampilkan Resep...";
    }
}

interface DataResepAdapter {
    public function post($rd);
}

class ResepAdapter implements DataResepAdapter {
    private $resep;

    public function __construct(Resep $resep){
        $this->resep = $resep;
    }

    public function post($rd){
        $this->resep->ResepDokter($rd);
    }
}

function getResepDoktor(){
    return "Ini Resep";
}

$resep = new ResepAdapter(new Resep());
$rd = getResepDokter();
$resep->post($rd)