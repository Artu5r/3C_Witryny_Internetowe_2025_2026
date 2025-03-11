function showTable(){
    const wyb = document.getElementById("wyb").value;
    document.getElementById("t1").classList.add("hid");
    document.getElementById("t2").classList.add("hid");

    if(wyb === "t1"){
        document.getElementById("t1").classList.remove("hid");
    }
    else if(wyb === "t2"){
        document.getElementById("t2").classList.remove("hid");
    }
}