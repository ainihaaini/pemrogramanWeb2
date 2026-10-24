<?php

class Kendaraan
{
    public $nomor;
    public $merk;
    public $jenis;

    public function tampilkanData()
    {
        echo "Nomor Kendaraan : " . $this->nomor . "<br>";
        echo "Merk : " . $this->merk . "<br>";
        echo "Jenis : " . $this->jenis . "<br>";
    }

    public function statusKendaraan()
    {
        echo "Status : Kendaraan tersedia<br>";
    }
}

class Pelanggan
{
    public $id;
    public $nama;
    public $alamat;

    public function tampilkanData()
    {
        echo "ID Pelanggan : " . $this->id . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Alamat : " . $this->alamat . "<br>";
    }

    public function sewaKendaraan()
    {
        echo "Pelanggan menyewa kendaraan<br>";
    }
}

// Object Kendaraan 1
$kendaraan1 = new Kendaraan();

$kendaraan1->nomor = "K001";
$kendaraan1->merk = "Honda";
$kendaraan1->jenis = "Motor";

// Object Pelanggan 1
$pelanggan1 = new Pelanggan();

$pelanggan1->id = "P001";
$pelanggan1->nama = "Andi";
$pelanggan1->alamat = "Mojosari";

// Menampilkan data
echo "<h3>Data Kendaraan</h3>";
$kendaraan1->tampilkanData();
$kendaraan1->statusKendaraan();

echo "<h3>Data Pelanggan</h3>";
$pelanggan1->tampilkanData();
$pelanggan1->sewaKendaraan();

?>