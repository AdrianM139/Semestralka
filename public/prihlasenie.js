class Prihlasenie {
    constructor() {

    }

    async odoslatUdaje(){


        var login = document.getElementById("name").value;
        var password = document.getElementById("password").value;

        console.log(login+" "+password);

        if(!password) document.getElementById("err_login").innerHTML = "prosím zadajte heslo";
        if(!login) document.getElementById("err_login").innerHTML = "prosím zadajte meno";

        if(!login || !password) return;

        var formData = new FormData();
        formData.append("name", login);
        formData.append("password", password);

        var response = await fetch('?c=prihlasenie&a=login',{
            method: 'POST',
            body: formData
        });

        let data = await response.json();

        if(data.err) document.getElementById("err_login").innerHTML = data.err;
        else window.location.replace("http://localhost/Semestralka/index.php?c=prispevky");
    }
}

let prihlasenie;

document.addEventListener('DOMContentLoaded',() =>{
    prihlasenie = new Prihlasenie();
});