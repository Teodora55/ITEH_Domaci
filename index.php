<?php
    $palacinke = array(
        array(
            'id'=>1,
            'naziv'=>'Integralna palačinka',
            'cena'=>300,
            'slika' => 'slike/dzem1.jpg',
            'opis'=>'<br><br><br>
            Integralne palačinke su sjajnog ukusa, ne opterećuju nas suvišnim kalorijskim unosom,<br>
            daju mogućnost da na najukusniji način unesemo vlakna u ishranu. Podrazumevaju<br> kombinaciju više vrsta
            zdravog brašna, te tako dobijamo čitav spektar nutrijenata koji<br> unosimo kroz jedan obrok.'
        ),
        array(
            'id'=>2,
            'naziv'=>'Čokoladna palačinka',
            'cena'=>300,
            'slika' => 'slike/cokoladna3.png',
            'opis'=>'</b><br><br><br>
            Od svih vrsta palačinki u našem su podneblju najpopularnije su one s čokoladom. Bilo <br>da 
            su namazane namazom od čokolade ili je testo napravljeno s kakaom čokoladne<br> palačinke
            su omiljena poslastica i dece i odraslih.
            Ukoliko voliš Nutellu, Plazmu i<br> sladoled onda je naša čokoladna palačinka pravi izbor za tebe!'
        ),
        array(
            'id'=>3,
            'naziv'=>'Proteinska palačinka',
            'cena'=>350,
            'slika' => 'slike/palacinka27.jpg',
            'opis'=>'<br><br><br>
            Ukoliko u ishrani izbegavate proste ugljene hidrate, trenirate i potreban vam je dodatni<br> unos
             proteina, proteinske palačinke su sjajan slatkiš koji se sprema od jaja i jagode i<br> peče na
              standardan način. Začinjene cimetom, predstavljaju pravo malo slatko uživanje. <br>Isprobajte 
              i bogate proteinske palačinke s posnim sirom, koje vas sigurno neće ostaviti<br> ravnodušnim.'
        ),
        array(
            'id'=>4,
            'naziv'=>'Božićna palačinka',
            'cena'=>400,
            'slika' => 'slike/bozicna11.png',
            'opis'=>'<br><br><br>
            Božićna palačinka je specijalna vrsta palačinke koju smo osmislili povodom predstojećih<br>
            novogodišnjih praznika. Miris cimeta i đumbira je ono što ovu palačinku čini tako posebnom.<br>
            Ispunjena medom i posuta najfinijim šećerom, ova palačinka će vas neodoljivo podsetiti na <br>ukus
            božićnih kolačića koje svi volimo.'
        ),
        array(
            'id'=>5,
            'naziv'=>'Ljubavna palačinka',
            'cena'=>350,
            'slika' => 'slike/ljubavna11.png',
            'opis'=>'<br><br><br>
            Ljubavna palačinka je zapravo japankse sufle palačinke sa jagodom.
            Japanske sufle palačinke su<br> meke, vazdušaste i slatke. Osim toga što se tope u ustima, možete se igrati i nadevima.
            Japanci<br> su se setili da dva dezerta spoje u jedan i tako su nastale sufle palačinke. Odmah ćete ih prepoznati <br>po 
            izgledu, a iako se za pripremu koriste slični sastojci kao i za američke palačinke ipak postoji jedan <br>detalj
            koji ih razlikuje od svih ostalih verzija. Naime, dok se palačinke "peku" Japanci teflon poklope s <br>poklopcem 
            i one se u stvari "kuvaju".'
        )
        );


session_start();
if(!isset($_SESSION['korpa'])){
    $_SESSION['korpa'] = array();
}


if(isset($_POST["submit"]) && $_POST["submit"]=="Poruci"){
    $_SESSION['korpa'][]=$_POST["id"];
    header('location: ?naruci');
    exit();
}

if(isset($_POST['submit']) && $_POST['submit']=='Isprazni'){
    $_SESSION['korpa']=array();
    header('location: ?korpa');
    exit();
}



if(isset($_GET["naruci"])){
    include "naruci.php";
    exit();
}
if(isset($_GET["kontakt"])){
    include "kontakt.php";
    exit();
}
if(isset($_GET["korpa"])){
    $korpa = array();
    $ukupno = 0;
    foreach($_SESSION['korpa'] as $id){
            foreach($palacinke as $pl){
                if($pl['id'] == $id){
                    $korpa[] = $pl;
                    $ukupno += $pl['cena'];
                    break;
                }
            }      
    }
    include "korpa.php";
    exit();
}

include "pocetna.php";



?>