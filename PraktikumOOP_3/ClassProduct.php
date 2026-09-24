<?php

class Product {

    public $nama;
    public $harga;
    public $kagetori;


    public function __construct($nama, $harga, $kategori){
        $this->nama = $nama;
        $this->harga = $harga;  
        $this->kategori = $kategori; 

    }

    public function getInfo(){
        return "Produk : ". $this->nama . " | Harga : Rp". $this->harga. " | Kategori : ". $this->kategori;

    }

    public function applyDiskon($persen){
        $nilaiDiskon = $this->harga* ($persen / 100);
        $this->harga-=$nilaiDiskon;
        return "Diskon " . $persen . " % diterapkan!";

    }



}

$produk1 = new Product("Laptop LOQ ESSENTIAL", 20000000, "Elektronik");
$produk2 = new Product ("Kursi Gaming", 500000, "Furniture");

echo $produk1->getInfo() . "<br>";
echo $produk1->applyDiskon(20) . "<br>";
echo $produk1->getInfo() . "<br><br>";

echo $produk2->getInfo() . "<br>";
echo $produk2->applyDiskon(50) . "<br>";
echo $produk2->getInfo() . "<br><br>";

?>