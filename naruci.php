<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poruci gotove proizvode</title>
    <link rel="stylesheet" type="text/css" href="css/stil3.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div>
        <div id="vrh">
            <h1>Svet palačinki</h1>
            <img src="slike/palacinke.png" height="80" width="80" >
        </div>
        <div id="meni">
            <a href="?pocetna">Naslovna</a>
            <a href="?naruci">Poruci gotove palačinke</a>
            <a href="?kontakt">Kontakt</a>
            <a href="?korpa">Korpa</a>
            <a href="?log">Korisnik</a>
        </div>
        <h3>Odaberi svoju palačinku:</h3>
        <div id="glavni">
        <?php foreach ($palacinke as $pl): ?>
            <div class="pal">
                 <img src="<?php echo $pl['slika']?>" height="300" width="500">
                <label for="palacinka1">
                    <b><?php echo $pl['naziv']?></b><?php echo $pl['opis']?></label>
                    <form action="" method = "post">
                     <input type="hidden" name="id" value="<?php echo $pl['id'];?>"/>
                     <input type="submit" name="submit" value="Poruci"/>
                    </form>
            </div>
            <?php endforeach ?>
        <!-- <div id="forma">
            <form>
                <label for="ime">Ime:</label>
                <input type="text" id="ime"/><br>
                <label for="prezime">Prezime:</label>
                <input type="text" id="prezime"/><br>
                <label for="adresa">Adresa:</label>
                <input type="text" id="adresa"/><br>
                <label for="brojTelefona">Broj telefona:</label>
                <input type="text" id="brojTelefona"/><br>
            </form>   -->
        <!-- </div>
        <button id="prikazi" class="ui-state-default ui-corner-all">Prikazi formu za unos podataka</button> 
        <button type="button" id="brisi">Obrisi sve unete podatke </button>
        <button type="button" id="dugme" value="Poruci">Zavrsi porudzbinu</button> -->
    </div>
    
<!-- <script src="javascript/script3.js"></script> -->
</body>
</html>