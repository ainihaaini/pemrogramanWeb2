<?php

class Mahasiswa
{
    // Property
    public $nim;
    public $nama;
    public $prodi;
    public $nilai;

    // Method untuk menentukan grade
    public function tentukanGrade()
    {
        if ($this->nilai >= 80) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }

    // Method untuk menampilkan data
    public function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo "Grade : " . $this->tentukanGrade() . "<br>";
    }
}

// Membuat object mahasiswa
$mhs1 = new Mahasiswa();

// Mengisi property
$mhs1->nim = "23001";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->nilai = 85;

// Menampilkan data
$mhs1->tampilkanData();

?>