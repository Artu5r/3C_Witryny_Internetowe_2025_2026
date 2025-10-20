function wyswietl()
{
    let liczby = [
        document.getElementById('num1').value,
        document.getElementById('num2').value,
        document.getElementById('num3').value,
        document.getElementById('num4').value,
        document.getElementById('num5').value,
    ];
    document.getElementById('tab').innerText = "Tablica: " + liczby.join(", ")
}