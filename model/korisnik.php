<?php

class Korisnik{
    public $id;
    public $username;
    public $password;
    public $ime;
    public $prezime;
    public $email;
    public $brojtelefona;


    

    public function __construct($id=null, $username=null, $password=null, $ime=null, $prezime=null, $email=null, $brojtelefona=null){
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->email = $email;
        $this->brojtelefona = $brojtelefona;
    }

    public static function logIn($username, $password,mysqli $conn){
        $query = "select * from korisnik where username='$username' and password='$password'";
        return $conn->query($query);
    }

    public static function add(Korisnik $korisnik,mysqli $conn){
        $query = "insert into korisnik(username, password, ime, prezime, email, brojtelefona) values('$korisnik->username',
       ' $korisnik->password','$korisnik->ime','$korisnik->prezime','$korisnik->email','$korisnik->brojtelefona')";
        return $conn->query($query);
    }

}

?>