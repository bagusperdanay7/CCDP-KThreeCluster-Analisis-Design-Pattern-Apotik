<?php

class Dokter {
    private $nama;
    private $kode;
    function __construct($kode_in, $nama_in) {
      $this->nama = $nama_in;
      $this->kode  = $kode_in;
    }
    function getNama() {return $this->nama;}
    function getKode() {return $this->kode;}
    function getNamaAndKode() {
      return $this->getKode() . '  ' . $this->getNama();
    }
}

class DokterList {
    private $dokters = array();
    private $dokterCount = 0;
    public function __construct() {
    }
    public function getDokterCount() {
      return $this->dokterCount;
    }
    private function setDokterCount($newCount) {
      $this->dokterCount = $newCount;
    }
    public function getDokter($dokterNumberToGet) {
      if ( (is_numeric($dokterNumberToGet)) && 
           ($dokterNumberToGet <= $this->getDokterCount())) {
           return $this->dokters[$dokterNumberToGet];
         } else {
           return NULL;
         }
    }
    public function addDokter(Dokter $dokter_in) {
      $this->setDokterCount($this->getDokterCount() + 1);
      $this->dokters[$this->getDokterCount()] = $dokter_in;
      return $this->getDokterCount();
    }
    public function removeDokter(Dokter $dokter_in) {
      $counter = 0;
      while (++$counter <= $this->getDokterCount()) {
        if ($dokter_in->getNamaAndKode() == 
          $this->dokters[$counter]->getNamaAndKode())
          {
            for ($x = $counter; $x < $this->getDokterCount(); $x++) {
              $this->dokters[$x] = $this->dokters[$x + 1];
          }
          $this->setDokterCount($this->getDokterCount() - 1);
        }
      }
      return $this->getDokterCount();
    }
}

class DokterListIterator {
    protected $dokterList;
    protected $currentDokter = 0;

    public function __construct(DokterList $dokterList_in) {
      $this->dokterList = $dokterList_in;
    }
    public function getCurrentDokter() {
      if (($this->currentDokter > 0) && 
          ($this->dokterList->getDokterCount() >= $this->currentDokter)) {
        return $this->dokterList->getDokter($this->currentDokter);
      }
    }
    public function getNextDokter() {
      if ($this->hasNextDokter()) {
        return $this->dokterList->getDokter(++$this->currentDokter);
      } else {
        return NULL;
      }
    }
    public function hasNextDokter() {
      if ($this->dokterList->getDokterCount() > $this->currentDokter) {
        return TRUE;
      } else {
        return FALSE;
      }
    }
}

class DokterListReverseIterator extends DokterListIterator {
    public function __construct(DokterList $dokterList_in) {
      $this->dokterList = $dokterList_in;
      $this->currentDokter = $this->dokterList->getDokterCount() + 1;
    }
    public function getNextDokter() {
      if ($this->hasNextDokter()) {
        return $this->dokterList->getDokter(--$this->currentDokter);
      } else {
        return NULL;
      }
    }
    public function hasNextDokter() {
      if (1 < $this->currentDokter) {
        return TRUE;
      } else {
        return FALSE;
      }
    }
}


  writeln('DAFTAR DOKTER');
  writeln('');
 
  $firstDokter = new Dokter('Dadang Kornelo', 'Spesialis Jantung');
  $secondDokter = new Dokter('Pipah', 'Spesialis Gangguan Jiwa');
  $thirdDokter = new Dokter('Indri Laya', 'Spesialis Mata');

  $dokters = new DokterList();
  $dokters->addDokter($firstDokter);
  $dokters->addDokter($secondDokter);
  $dokters->addDokter($thirdDokter);
 
  writeln('Iterator');
 
  $doktersIterator = new DokterListIterator($dokters);

  while ($doktersIterator->hasNextDokter()) {
    $dokter = $doktersIterator->getNextDokter();
    writeln('Nama Dokter:');
    writeln($dokter->getNamaAndKode());
    writeln('');
  }
 
  $dokter = $doktersIterator->getCurrentDokter();
  writeln('Nama Dokter:');
  writeln($dokter->getNamaAndKode());
  writeln('');  

  writeln('Reverse Iterator');

  $doktersReverseIterator = new DokterListReverseIterator($dokters);

  while ($doktersReverseIterator->hasNextDokter()) {
    $dokter = $doktersReverseIterator->getNextDokter();
    writeln('Nama Dokter:');
    writeln($dokter->getNamaAndKode());
    writeln('');
  }
 
  $dokter = $doktersReverseIterator->getCurrentDokter();
  writeln('Nama Dokter :');
  writeln($dokter->getNamaAndKode());
  writeln('');

 
 
  function writeln($line_in) {
    echo $line_in."<br/>";
  }

?>