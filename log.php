<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stil.css">
    <title>Document</title>
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
<div class="login-form">
        <div class="main-div">
            <form method="POST" action="#">
                <div class="container">
                    <label class="username">Korisnicko ime</label>
                    <input type="text" name="username" class="form-control"  required>
                    <br><br>
                    <label for="password">Lozinka</label>
                    <input type="password" name="password" class="form-control" required>
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit">Prijavi se</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>