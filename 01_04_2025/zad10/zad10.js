function sprawdz10() {
    let liczby = [
        parseFloat(document.getElementById("num1").value),
        parseFloat(document.getElementById("num2").value),
        parseFloat(document.getElementById("num3").value),
        parseFloat(document.getElementById("num4").value),
        parseFloat(document.getElementById("num5").value)
    ]; 
    let znaleziono = false;
    for (let i =0 ; i< liczby.length ; i++){
        if(liczby[i] === 10) {
            znaleziono = true;
            break;
        }
    }

    if(znaleziono) {
        document.getElementById("wynik").innerText = "Znaleziono ";
    } else {
        document.getElementById("wynik").innerText = "Nie znaleziono";
    }
}