<?php
include_once "Mahasiswa.php";

class MahasiswaD4PM implements Mahasiswa {
    public string $nama;

    public function berjalan(): void {
        echo $this->nama . " berjalan dengan cepat";
    }

    public function berbicara(): void {
        echo $this->nama . " berbicara dengan percaya diri";
    }
}
?>
