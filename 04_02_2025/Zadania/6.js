function czyPierwsza(a){
    isPrime = true;
    for (let i = 2; i <= a / 2; i++) {
        if (a % i === 0) {
          isPrime = false;
          break;
        }
    }
    if (isPrime)
        console.log(a + " jest liczba pierwsza")
    else
        console.log(a + " nie jest liczba pierwsza")
}
czyPierwsza(prompt());