let age = 18;
if(age >= 18)
{
    console.log("Jesteś pełnoletni.");
}

//////////////

let age2 = 18;
if(age2 >= 18)
{
    console.log("Jesteś pełnoletni.");
} else{
    console.log("Jesteś nie pełnoletni.");
}

//////////////

let score = 85;
if(score >= 90){
    console.log("Ocena: A")
} else if(score >= 80){
    console.log("Ocena: B")
} else if(score >= 70){
    console.log("Ocena: C")
} else{
    console.log("Ocena: D lub nizsza");
}

//////////////

let day = "poniedziałek";
switch (day) {
    case "poniedziałek":
        console.log("Dziś jest poniedziałek.");
        break;
    case "wtorek":
        console.log("Dziś jest wtorek.");
        break;
    default:
        console.log("To nie jest poniedziałek ani wtorek.");
}

//////////////

let age3 = 19;
let status = (age3 >= 18) ? "pelnoletni" : "niepelnoletni";
console.log(status);