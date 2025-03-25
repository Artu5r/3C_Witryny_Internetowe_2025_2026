let oceny = [5,3,1,4,2];
let ocenytTekst = oceny.map(ocena => {
    if(ocena == 5) return "Bardzo dobry";
    if(ocena == 4) return "Dobry";
    if(ocena == 3) return "dostateczny";
    if(ocena == 2) return "dopuszczajacy";
    if(ocena == 1) return "niedostateczny";
});

console.log("oceny liczbowe: ", oceny);
console.log("oceny telstowe: ", ocenytTekst);
