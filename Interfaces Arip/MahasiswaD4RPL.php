<?php
include_once "Mahasiswa.php";

class MahasiswaD4RPL implements Mahasiswa {
    public string $nama;

    public function berjalan(): void {
        echo $this->nama . " Mahasiswa prodi D4RPL berjalan dengan santai";
    }

    public function berbicara(): void {
        echo $this->nama . " Mahasiswa prodi berbicara dengan penuh kharisma";
    }
}
?>