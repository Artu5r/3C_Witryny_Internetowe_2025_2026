let score = prompt("Podaj wynik w %: "); 

if (score >= 90) {
    document.write('Wybitny');
} else if (score >= 75) {
    document.write('Dobry');
} else if (score >= 50) {
    document.write('Przeciętny');
} else {
    document.write('Słaby');
}
