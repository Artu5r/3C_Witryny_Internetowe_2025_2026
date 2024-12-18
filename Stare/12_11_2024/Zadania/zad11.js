const liczba = parseInt(prompt("Podaj liczbę:"));
console.log(`Dzielniki liczby ${liczba}:`);
for (let i = 1; i <= liczba; i++) {
    if (liczba % i === 0) {
        console.log(i);
    }
}
