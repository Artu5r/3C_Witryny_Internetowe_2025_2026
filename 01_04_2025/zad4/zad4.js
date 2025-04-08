function sortuj() {
    let liczby = [
        document.getElementById("num1").value,
        document.getElementById("num2").value,
        document.getElementById("num3").value,
        document.getElementById("num4").value,
        document.getElementById("num5").value,
        document.getElementById("num6").value,
        document.getElementById("num7").value,
        document.getElementById("num8").value,
        document.getElementById("num9").value,
        document.getElementById("num10").value
    ];

    for(let i=0; i < liczby.length ; i++) {
        for (let j =0; j < liczby.length ; j++){
            if(liczby[j] > liczby[j + 1]) {
                let temp = liczby[j];
                liczby[j]=liczby[j+1];
                liczby[j+1]=temp;
            }
        }
    }
    document.getElementById("wynik").innerText = "Tablica: " + liczby.join(", ");
}