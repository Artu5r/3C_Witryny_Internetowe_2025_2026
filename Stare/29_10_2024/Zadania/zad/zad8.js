let age = prompt("Podaj wiek: ");
let kategoria;

if (age < 13) {
    kategoria = 'dziecko';
} else if (age < 20) {
    kategoria = 'nastolatek';
} else if (age < 65) {
    kategoria = 'dorosły';
} else {
    kategoria = 'senior';
}

document.write(`Kategoria wiekowa: ${kategoria}`);
