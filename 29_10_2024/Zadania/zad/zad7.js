let examScore = 85;
let ocena;

if (examScore >= 90) {
    grade = 'A';
} else if (examScore >= 80) {
    grade = 'B';
} else if (examScore >= 70) {
    grade = 'C';
} else if (examScore >= 60) {
    grade = 'D';
}
document.write(`Ocena: ${grade}`);
