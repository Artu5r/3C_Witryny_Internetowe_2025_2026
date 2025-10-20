let day = prompt("Podaj dzień: ");
switch (day) {
    case "poniedziałek":
        document.write("Dziś jest poniedziałek.");
        break;
    case "wtorek":
        document.write("Dziś jest wtorek.");
        break;
    case "środa":
        document.write("Dziś jest środa.");
        break;
    case "czwartek":
        document.write("Dziś jest czwartek.");
        break;
    case "piątek":
        document.write("Dziś jest piątek.");
        break;
    case "sobota":
        document.write("Dziś jest sobota.");
        break;
    case "niedziela":
        document.write("Dziś jest niedziela.");
        break;
    default:
        document.write("Niepoprawny dzień tygodnia");
}