<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/stil.css">
    <script src="javascript/script.js"></script>
</head>
<body>
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
    <h1>
    <?php  if($_SESSION['korisnik']->ime != null){ 
        $ime = $_SESSION['korisnik']->ime;
        echo "Dobrodosao $ime"; 
        } ?></h1>
<table border="1">
        <thead>
        <tr>
            <th>Naziv proizvoda</th>
            <th>Cena prozivodas</th>
            <th>Kolicina</th>
        </tr>
        </thead>
        <tbody>
        <?php
                foreach($palacinke as $pl): 
                    $kolicina = 0;
                    foreach($korpa as $artikal){
                        if($artikal == $pl){
                            $kolicina += 1;
                        }
                }
                if($kolicina == 0){
                    continue;
                }  
            ?>
            <tr>
                <td><?php echo $pl['naziv']; ?></td>
                <td><?php echo $pl['cena']; ?></td>
                <td><?php echo $kolicina;?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td>Ukupno</td>
                <td><?php echo $ukupno; ?></td>
                <td><?php echo count($_SESSION['korpa']);?></td>
            </tr>
        </tfoot>
    </table>
    <form action="" method="post">
        <p>
          <a href="?naruci">Nastavi sa kupovinom</a>
          <input type="submit" name="submit" value="Isprazni">
          <input type="submit" name="submit" value="Naruci">
        </p>
    </form>
    <br>
    <h2>Prothodne narudzbine</h2>
    <table id="prethodneNarudzbine" class="table table-hover table-striped" border="1">
                <thead class="thead">
                    <tr>
                        <th scope="col">Palacinka</th>
                        <th scope="col">Kolicina</th>
                        <th scope="col">Datum</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($_SESSION['prethodnaNarudzbine'] as $red):
                    ?>
                        <tr>
                            <td><?php echo $red->palacinka ?></td>
                            <td><?php echo $red->kolicina ?></td>
                            <td><?php echo $red->datum ?></td>
                        </tr>
                <?php
                    endforeach;
                ?>

                </tbody>
            </table>
</body>
</html>