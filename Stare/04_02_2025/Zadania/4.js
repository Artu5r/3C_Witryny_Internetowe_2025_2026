function maksimum(a, b, c){
if(a > b)
    if(a > c)
        console.log("najwieksza = " + a);
    else
        console.log("najwieksza = " + c);
else
    if(b > c)
        console.log("najwieksza = " + b);
    else
        console.log("najwieksza = " + c);
}
let a = prompt();
let b = prompt();
let c = prompt();
maksimum(a, b, c);