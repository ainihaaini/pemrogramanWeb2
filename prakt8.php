<?php

class Buku
{
    // Property
    public $kode;
    public $judul;
    public $penulis;
    public $tahun;

    // Method
    public function tampilkanData()
    {
        echo "Kode Buku : " . $this->kode . "<br>";
        echo "Judul : " . $this->judul . "<br>";
        echo "Penulis : " . $this->penulis . "<br>";
        echo "Tahun Terbit : " . $this->tahun . "<br>";
    }
}

$buku1 = new Buku();

// Isi property
$buku1->kode = "001";
$buku1->judul = "Pemrograman Web";
$buku1->penulis = "Andi";
$buku1->tahun = 2024;

// Tampilkan data
$buku1->tampilkanData();

?>