<?php

class Produk{
    protected $nama;
    protected $merek;
    protected $harga;

    public function __construct($nama, $merek, $harga) {
        $this->nama = $nama;
        $this->merek = $merek;

        if(!is_numeric($harga) || $harga<=0){
            throw new Exception("Harga tidak valid! harus berupa angka lebih dari 0.");
        }
        $this->harga = $harga;
    }

    public function getInfo(){
        return "Merek: " . $this->merek . "<br>" .
                "Harga : Rp " . number_format($this->harga, 0, '.', '.');

    }
}

class Makanan extends Produk{
    private $tanggalKadaluarsa;

    public function __construct($nama, $merek, $harga, $tanggalKadaluarsa){
        parent:: __construct($nama, $merek, $harga);
        $this->tanggalKadaluarsa = $tanggalKadaluarsa;

    }

    public function cekKadaluarsa(){
        $hariIni = date('Y-m-d');
        return($this->tanggalKadaluarsa < $hariIni) ? " Kadaluarsa " :" Segar ";
    }

    public function getInfo(){
        return "Produk Makanan - " . $this->nama. "<br>". 
                parent::getInfo(). "<br>" . 
                "Tanggal Kadaluarsa: " . $this->tanggalKadaluarsa. "<br>". 
                "Status: " . $this->cekKadaluarsa();


    }
}

class Elektronik extends Produk{
    private $garansi;

    public function __construct($nama, $merek, $harga, $garansi){
    parent::__construct($nama, $merek, $harga);
    $this->garansi= $garansi;
    }

    public function getInfo(){
        return "Produk Elektronik - " . $this->nama. "<br>". 
                parent::getInfo(). "<br>".
                "Garansi : " . $this->garansi . " bulan";
    }

}

try{
    $makanan = new Makanan("Mie Instan", "Indomie", 3500, "2026-06-06");
    echo $makanan->getInfo(). "<br><br>";

    $makanan = new Makanan("Mie Instan", "Indomie", 3500, "2027-06-06");
    echo $makanan->getInfo(). "<br><br>";

    $elektronik = new Elektronik ("Smart Tv", "Xiaomi", 5000000, 12);
    echo $elektronik->getInfo(). "<br>";
}catch(Exception $e){
    echo "Error:" . $e->getMessage();

}
?>

