<?php
include "Hewan.php";

class Harimau implements Hewan{
    public string $jenis;

    public function berjalan(): void {
        echo $this->jenis . " berjalan dengan lambat";
    }

    public function makan(): void {
        echo $this->jenis . " makan makanan yang ada";
    }
}
?>
