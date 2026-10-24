<?php

class Mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $nilai;

    public function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo "Grade : " . $this->tentukanGrade() . "<br>";
    }

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
}

$mhs1 = new Mahasiswa();

$mhs1->nim = "23001";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->nilai = 85;

$mhs1->tampilkanData();

?>