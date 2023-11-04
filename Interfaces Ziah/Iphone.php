<?php

include_once "Handphone.php";

Class Iphone implements Handphone{

    public function powerOn(){
        echo "Power On";
    }

    public function powerOff(){
        echo "Power Off";
    }

    public function volumeUp(){
        echo "Volume Up";
    }

    public function volumeDown(){
        echo "Volume Down";
    }
}

?>