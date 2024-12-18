const numbers = [];
for (let i = 0; i < 10; i++) {
    const num = parseInt(prompt(`Podaj liczbę ${i + 1} z 10:`));
    numbers.push(num);
}

const greaterThanFive = numbers.filter(num => num > 5);
console.log("Liczby większe niż 5 to:", greaterThanFive);
