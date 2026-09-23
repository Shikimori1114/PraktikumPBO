<?php

class Mobil{

    //properti
    private $merek;
    private $warna;
    private $kecepatan;


    //constructor
    public function __construct($merek, $warna, $kecepatan){

        $this->merek = $merek;
        $this->warna = $warna;
        $this->kecepatan = $kecepatan;
    }

    //method getMerek
    public function getMerek(){
        return  $this->merek; 
    }

    //method jalankan
    public function getWarna(){
        return $this->warna;

    }

    //method berhenti
    public function getKecepatan(){
        return $this->kecepatan;

    }

    public function setKecepatan($kecepatan){
        if ($kecepatan <0){
            throw new Exception("Kecepatan tidak boleh negatif!");  
        }
        if ($kecepatan >200){
            throw new Exception ("Kecepatan maksimal 200km/jam!");
        }
        $this->kecepatan = $kecepatan;
    }

    public function setWarna($warna){
        $warna = trim($warna);
        if (empty($warna)){
            throw new Exception ("Warna tidak boleh kosong!");   
        }
        if (strlen($warna)){
            throw new Exception ("Warna minimal 3 karakter!");

        }
        $this->warna = $warna;

    }

    public function getInfo() {
        return "Mobil " . $this->merek . " berwarna " . $this->warna . " dengan kecepatan " . $this->kecepatan . "km/jam";
    }

    public function jalankan() {
        return "Mobil " . $this->merek . " Berjalan";
    }

    public function berhenti() {
        return "Mobil " . $this->merek . " Berhenti";
    }

}
try{
//inisialisasi objek
$Mobil1 = new Mobil ("Toyota", "Abu-abu", 100);
$Mobil2 = new Mobil ("Ferrari", "Merah", 150);
$Mobil3 = new Mobil ("Civic", "Putih", 200);

//output program
    echo $Mobil1->getInfo() . "<br>";
    echo $Mobil1->jalankan(). "<br>";
    echo $Mobil2->getInfo() . "<br>";
    echo $Mobil2->jalankan(). "<br>";
    echo $Mobil3->getInfo() . "<br>";
    echo $Mobil3->jalankan(). "<br><br>";

    echo "<b>Uji Coba Validasi Error:</b><br>";
    $Mobil1->setKecepatan(250);
   
}catch (Exception $e) {
    echo "<span style='color:red;'><b>Error:</b> " . $e->getMessage() . "</span><br>";
}


?>