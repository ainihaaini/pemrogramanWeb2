<?php

class Mahasiswa {

public $nama;

public function setNama($nama){
    $this->nama=$nama;
}

public function getNama() {
    return $this->nama;
}
}

$mhs1->setNama("Andi");

echo $mhs1->getNama();

?>