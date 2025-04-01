function wyswietl()
{
    let liczby = [12,31,135,16,246];
    let dodane = [
        document.getElementById('num').value,
    ]
    liczby.push(dodane)
    document.getElementById('tab').innerText = "Tablica: " + liczby.join(", ")
}