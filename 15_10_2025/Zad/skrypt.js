function zamowienie() {
    let ksztalt = document.getElementById("ksztalt").value;
    let r = document.getElementById("r").value;
    let g = document.getElementById("g").value;
    let b = document.getElementById("b").value;
    let napis = "Twoje zamówienie to cukierek ";
    let kolor = "rgb(" + r + "," + g + "," + b + ")";
    if (ksztalt == 1) {
        napis += "cytryna";
    }
    else if (ksztalt == 2) {
        napis += "liść";
    }
    else if (ksztalt == 3) {
        napis += "banan";
    }
    else {
        napis += "inny";
    }
    document.getElementById("wynik").innerHTML = napis;
    document.getElementById("kolor").style.backgroundColor = kolor;
}