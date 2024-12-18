for (let i = 2; i <= 30; i++) {
    let isFirst = true;
    for (let j = 2; j <= Math.sqrt(i); j++) {
        if (i % j === 0) {
            isFirst = false;
            break;
        }
    }
    if (isFirst) {
        console.log(`${i} jest liczbą pierwszą`);
    }
}
