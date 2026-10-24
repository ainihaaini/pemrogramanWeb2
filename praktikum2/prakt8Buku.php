<?php

class Buku
{
    public $kode;
    public $judul;
    public $penulis;
    public $tahun;

    public function tampilkanData()
    {
        echo "Kode Buku : " . $this->kode . "<br>";
        echo "Judul : " . $this->judul . "<br>";
        echo "Penulis : " . $this->penulis . "<br>";
        echo "Tahun Terbit : " . $this->tahun . "<br>";
    }
}

$buku1 = new Buku();

$buku1->kode = "B001";
$buku1->judul = "Pemrograman";
$buku1->penulis = "Andi Setiawan";
$buku1->tahun = 2024;

$buku1->tampilkanData();

?>