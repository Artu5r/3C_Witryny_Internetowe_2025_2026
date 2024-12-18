let liczby = [];
for (let i = 0; i < 5; i++) {
    liczby.push(parseInt(prompt(`Podaj liczbę ${i + 1}:`)));
}
max = Math.max(...liczby);
console.log("Największa liczba to:", max);
