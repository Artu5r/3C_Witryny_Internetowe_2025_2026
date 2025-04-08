function sredn() {
    let liczby = [
        parseFloat(document.getElementById("num1").value),
        parseFloat(document.getElementById("num2").value),
        parseFloat(document.getElementById("num3").value),
        parseFloat(document.getElementById("num4").value),
        parseFloat(document.getElementById("num5").value)
    ]; 

    let suma = 0;
    for(let i =0 ; i < liczby.length; i++){
        suma += liczby[i];
    }
    
    let srednia = suma / liczby.length;
    document.getElementById("wynik").innerText = "Średnia " + srednia;
}
