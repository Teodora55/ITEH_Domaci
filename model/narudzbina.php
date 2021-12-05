<?php

class Narudzbina{
    public $palacinka;
    public $kolicina;
    public $idkorisnika;
    public $datum;


    public function __construct($palacinka=null, $kolicina=null, $idkorisnika=null, $datum=null){
        $this->palacinka = $palacinka;
        $this->kolicina = $kolicina;
        $this->idkorisnika = $idkorisnika;
        $this->datum = $datum;
    }

    public static function getByIdKorisnika($id,mysqli $conn){
        $query = "select * from narudzbina where idkorisnika=$id";
        $rezultat = $conn->query($query);
        $myArray=array();
        if($rezultat){
            while($red=$rezultat->fetch_object()){
                $myArray[] = $red;
            }
        }
        return $myArray;
    }

    public static function add(Narudzbina $narudzbina,mysqli $conn){
        $query = "insert into narudzbina(palacinka, kolicina, idkorisnika, datum) values('$narudzbina->palacinka',
        $narudzbina->kolicina,$narudzbina->idkorisnika,'$narudzbina->datum')";
        return $conn->query($query);
    }

}

?>