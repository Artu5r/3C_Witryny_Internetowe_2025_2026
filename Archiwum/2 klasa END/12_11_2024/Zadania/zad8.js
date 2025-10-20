const liczba = parseInt(prompt("Podaj liczbę do obliczenia silni:"));
let silnia = 1;
for (let i = 1; i <= liczba; i++) {
    silnia *= i;
}
console.log(`Silnia liczby ${liczba} wynosi: ${silnia}`);
