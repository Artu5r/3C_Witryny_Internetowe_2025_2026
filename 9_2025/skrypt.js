function wykonane(btn){
    btn.parentElement.style.textDecoration= "line-through";
}

function dodaj(){
    let pole = document.getElementById("pole");
    let tekst = pole.value.trim();
    if (tekst !== ""){
        let li = document.createElement("li")
        li.innerHTML = tekst + ' <button onclick="wykonane(this)">Wykonane</button>';

        document.getElementById("lista").appendChild(li);
        pole.value = "";
    }
}