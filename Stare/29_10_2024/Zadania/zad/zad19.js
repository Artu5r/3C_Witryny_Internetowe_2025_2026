let liczba = 15;
let komunikat;

if (liczba % 3 === 0 && liczba % 5 === 0) {
    komunikat = 'Liczba jest podzielna przez 3 i 5';
} else if (liczba % 3 === 0) {
    komunikat = 'Liczba jest podzielna przez 3';
} else if (liczba % 5 === 0) {
    komunikat = 'Liczba jest podzielna przez 5';
} else {
    komunikat = 'Liczba nie jest podzielna ani przez 3, ani przez 5';
}

document.write(komunikat);
