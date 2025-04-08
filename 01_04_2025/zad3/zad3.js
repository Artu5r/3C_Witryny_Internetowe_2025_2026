function wyswietl()
{
    let zwierzeta = [
        document.getElementById('num1').value,
        document.getElementById('num2').value,
        document.getElementById('num3').value,
        document.getElementById('num4').value,
        document.getElementById('num5').value,
    ];
    document.getElementById('tab').innerText = "Tablica: " + zwierzeta.join(", ");
    document.writeln("Tablica: " + zwierzeta.join(", "));
}