const liczba = parseInt(prompt("Podaj liczbę:"));
console.log(`Liczby nieparzyste mniejsze od ${liczba}:`);
for (let i = 1; i < liczba; i += 2) {
    console.log(i);
}
