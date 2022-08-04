<?php
class Data{

    private $nama;
    private $diskon;
    private $harga;
    private $total;

    public function setNama($nama){
        $this->nama = $nama;
        return $this;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
        return $this;
    }

    public function getDiskon(){
        return $this->diskon;
    }

    public function setHarga($harga){
        $this->harga = $harga;
        return $this;
    }

    public function getHarga(){
        return $this->harga;
    }

    public function setTotal($total){
        $this->total = $total;
        return $this;
    }

    public function getTotal(){
        return $this->total;
    }
}

interface Diskon {
    public function hitungDiskon(Data $data);
}

// class Sabun implements Diskon {

//     $diskonSabun = 0.4;

//     public function hitungDiskon(Data $data)
//     {
//         return $data->getDiskon * $this->diskonSabun;
//     }
// }

class Sabun implements Diskon {
    const diskonSabun = 0.5;
    public function hitungDiskon(Data $data){
        return $data->getHarga() * self::diskonSabun;
    }
}

class Makanan implements Diskon{
    const diskonMakanan = 0.1;
    public function hitungDiskon(Data $data){
        return $data->getHarga() * self::diskonMakanan;
    }
}


class Context {
    private Diskon $diskon;

    public function __construct(Diskon $diskon){
        $this->diskon = $diskon;
    }

    public function hitungDiskon(Data $data){
        $potongan = $this->diskon->hitungDiskon($data);
        $data->setDiskon($potongan);
    }
    
}


$data = new Data;
$data->setNama("Makanan")
    ->setHarga(100);

switch($data->getNama()){
    case "Sabun":
        $str = new Sabun;
        break;
    case "Makanan":
        $str = new Makanan;
        break;
    default:
    echo "Tidak diketahui";
};


$context = new Context($str);
$context->hitungDiskon($data);

$h = $data->getHarga();
$d = $data->getDiskon();

$hasil = $h - $d;

$data->setTotal($hasil);
echo $data->getHarga() - $data->getDiskon()."<br>";
echo $data->getDiskon() ."<br>";
echo $data->getTotal();

?>