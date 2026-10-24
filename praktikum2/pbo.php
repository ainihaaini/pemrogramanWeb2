<?php

class Mahasiswa
{
    public $nama;

    public function tampilkanNama()
    {
        echo $this->nama;
    }
}

$mhs = new Mahasiswa();

$mhs->nama = "Andi";

$mhs->tampilkanNama();

?>