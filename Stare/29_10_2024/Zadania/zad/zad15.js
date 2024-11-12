let godzina = new Date().getHours();
let poraDnia;

if (godzina >= 6 && godzina < 12) {
    poraDnia = 'Rano';
} else if (godzina >= 12 && godzina < 18) {
    poraDnia = 'Południe';
} else if (godzina >= 18 && godzina < 24) {
    poraDnia = 'Wieczór';
} else {
    poraDnia = 'Noc';
}

document.write(`Aktualna pora dnia: ${poraDnia}`);
