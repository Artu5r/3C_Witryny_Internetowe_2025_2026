function znajdzNajwiekszaLiczbe() {
    let liczby = [
        document.getElementById("num1").value,
        document.getElementById("num2").value,
        document.getElementById("num3").value,
        document.getElementById("num4").value,
        document.getElementById("num5").value
    ]

    let najwieksza = liczby[0];

    for (let i = 0 ; i < liczby.length ; i++){
        if (liczby[i] > najwieksza){
            najwieksza = liczby[i];
        }
    }
    document.getElementById("wynik").innerText = "Najwieksza " + najwieksza;
}