<?php

interface Bentuk{
    public function hitungLuas();

}
class Persegi implements Bentuk {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas(){
        return $this->sisi * $this->sisi;

    }

    public function getSisi(){
        return $this->sisi;

    }

}

class Lingkaran implements Bentuk {
    private $radius;
    const PHI =3.14;

    public function __construct($radius) {
        $this->radius = $radius;

    }

    public function hitungLuas(){
        return self::PHI *$this->radius * $this->radius;

    }

    public function getRadius(){
        return $this->radius;

    }

}
$arrayBentuk = [
    new Persegi(5),
    new Lingkaran(7)
];

foreach ($arrayBentuk as $bentuk) {
    if ($bentuk instanceof Persegi){
        echo "Luas Persegi (sisi =" . $bentuk->getSisi() . "): " . $bentuk->hitungLuas() . "<br>";
    }elseif ($bentuk instanceof Lingkaran) {
        echo "Luas Lingkaran (Radius =" . $bentuk->getRadius(). "):" . $bentuk->hitungLuas(). "<br>";
    }

}
?>