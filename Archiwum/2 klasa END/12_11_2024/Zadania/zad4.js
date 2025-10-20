const liczba = parseInt(prompt("Podaj liczbę, dla której chcesz wyświetlić tabliczkę mnożenia:"));
if (!isNaN(liczba)) {
    for (let i = 1; i <= 10; i++) {
        console.log(`${liczba} x ${i} = ${liczba * i}`);
    }
} else {
    console.log("Podano nieprawidłową liczbę!");
}
