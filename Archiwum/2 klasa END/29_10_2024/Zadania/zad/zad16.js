let miesiac = prompt("Podaj nr miesiąca: ")
let nazwaMiesiaca;

if (miesiac === 1) {
    nazwaMiesiaca = "Styczeń";
} else if (miesiac === 2) {
    nazwaMiesiaca = "Luty";
} else if (miesiac === 3) {
    nazwaMiesiaca = "Marzec";
} else if (miesiac === 4) {
    nazwaMiesiaca = "Kwiecień";
} else if (miesiac === 5) {
    nazwaMiesiaca = "Maj";
} else if (miesiac === 6) {
    nazwaMiesiaca = "Czerwiec";
} else if (miesiac === 7) {
    nazwaMiesiaca = "Lipiec";
} else if (miesiac === 8) {
    nazwaMiesiaca = "Sierpień";
} else if (miesiac === 9) {
    nazwaMiesiaca = "Wrzesień";
} else if (miesiac === 10) {
    nazwaMiesiaca = "Październik";
} else if (miesiac === 11) {
    nazwaMiesiaca = "Listopad";
} else if (miesiac === 12) {
    nazwaMiesiaca = "Grudzień";
} else {
    nazwaMiesiaca = 'Nieznany miesiąc';
}

document.write(`Aktualny miesiąc: ${nazwaMiesiaca}`);
