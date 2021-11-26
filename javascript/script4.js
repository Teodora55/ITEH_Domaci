
function handleButtonClick(){
    let ime = document.getElementById("ime");
    let mejl = document.getElementById("mejl");
    if(ime.length < 3 || mejl.length < 8){
        alert("Morate oba polja da popunite!")
    }
    else{
    console.log(ime.value);
    console.log(mejl.value);
    alert("Uspesno ste se prijavili na nasu mejling listu");
    }
}

function onMouseOver(){
    let slika = document.getElementById("sl");
    slika.style.width = "70px";
    slika.style.height = "70px";
}

function onMouseOver1(){
    let slika = document.getElementById("sl1");
    slika.style.width = "70px";
    slika.style.height = "70px";
}

function onMouseOver2(){
    let slika = document.getElementById("sl2");
    slika.style.width = "70px";
    slika.style.height = "70px";
}

function onMouseOut(){
    let slika = document.getElementById("sl");
    slika.style.width = "50px";
    slika.style.height = "50px";
}

function onMouseOut1(){
    let slika = document.getElementById("sl1");
    slika.style.width = "50px";
    slika.style.height = "50px";
}

function onMouseOut2(){
    let slika = document.getElementById("sl2");
    slika.style.width = "50px";
    slika.style.height = "50px";
}