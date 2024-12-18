const number = parseInt(prompt("Podaj liczbę:"));
console.log(`Tabliczka dzielenia dla liczby ${number}:`);
for (let i = 1; i <= 10; i++) {
    console.log(`${number} ÷ ${i} = ${(number / i).toFixed(2)}`);
}