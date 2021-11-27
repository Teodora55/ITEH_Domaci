<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" type="text/css" href="css/stil4.css">
</head>
<body>
    <div id="vrh">
        <h1>Svet palacinki</h1>
        <img src="slike/palacinke.png" height="80" width="80" >
    </div>
    <div id="meni">
            <a href="?pocetna">Naslovna</a>
            <a href="?naruci">Poruci gotove palačinke</a>
            <a href="?kontakt">Kontakt</a>
            <a href="?korpa">Korpa</a>
    </div>
    <div id="glavni">
        <div> 
           <div id="tel"> 
               <img src="slike/telefon.jpg" onmouseover="onMouseOver()" onmouseout="onMouseOut()" height="50px" width="50px" id="sl">
            <p>011/393-67-55</p>
        </div>
            <div id="adresa">
                <img src="slike/adresa.png" onmouseover="onMouseOver1()" onmouseout="onMouseOut1()" height="50px" width="50px" id="sl1">
                <p>Bulevar kralja Aleksandra 84</p>
            </div>
           <div id="mejl">
            <img src="slike/mejl.png" onmouseover="onMouseOver2()" onmouseout="onMouseOut2()" height="50" width="50" id="sl2">
            <p>svetpalacinki@gmail.com</p>
           </div>
        </div>

        <h3>Gde se nalazimo?</h3>

        <img src="slike/googleMaps.PNG" height="400px" width="700px" id="mapa">

        <div id="forma">
            <form name="forma">
                <div>
                  <h3>Prijavi se na nasu mejling listu!</h3>
              </div>
                <div>
                  <input type="text" id="ime" placeholder="Ime" required>
                  <input type="text" id="mejl" placeholder="Email adresa" required>
                </div>
                <div>
                 <button type="button" onclick = "handleButtonClick()" >Pretplati se</button>
                </div>
            </form>
        </div>
    </div>
    <script src="javascript/script4.js"></script>
</body>
</html>