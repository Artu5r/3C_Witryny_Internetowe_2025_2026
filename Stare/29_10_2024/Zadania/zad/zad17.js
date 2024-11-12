let num1 = 10;
let num2 = 5;
let operator = '+';
let wynik;

if (operator === '+') {
    wynik = num1 + num2;
} else if (operator === '-') {
    wynik = num1 - num2;
} else if (operator === '*') {
    wynik = num1 * num2;
} else if (operator === '/') {
    wynik = num1 / num2;
} else {
    wynik = 'Nieznany operator';
}

document.write(`Wynik: ${wynik}`);
