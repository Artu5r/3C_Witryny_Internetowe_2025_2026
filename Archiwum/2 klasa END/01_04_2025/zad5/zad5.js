function aktualizujWyswietlenie() {
    document.getElementById("wynik").innerText = "Tablica: " + zwierzeta.join(", ");
}

function wyswietl() {
     zwierzeta = [
        document.getElementById("zwierze1").value,
        document.getElementById("zwierze2").value,
        document.getElementById("zwierze3").value,
        document.getElementById("zwierze4").value,
        document.getElementById("zwierze5").value
    ];
    aktualizujWyswietlenie();
}

function odwrocTablice() {
    if (zwierzeta.length > 0) {
        zwierzeta.reverse();
        aktualizujWyswietlenie();
    }
}