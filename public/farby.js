class Tema {
    constructor() {
        console.log("constructor");
        this.reload();
        setInterval(() => this.reload(), 3000);
    }

    async getNastavenia(){
        try {
            console.log("getNastavenia");
            let response = await fetch('?c=nastavenia&a=getFarby');

            let data = await response.json();

            jQuery.each(data, function(stlpec, hodnota) {
                if(hodnota !== "" && stlpec != "id" && stlpec != "id_user"){
                    if (stlpec == "farba") {
                        document.documentElement.style.setProperty('--color', hodnota);
                    } else if (stlpec == "farbaZobraz") {
                        document.documentElement.style.setProperty('--colorHover', hodnota);
                    } else if (stlpec == "pozadie") {
                        document.documentElement.style.setProperty('--background', hodnota);
                    } else if (stlpec == "hlavicka") {
                        document.documentElement.style.setProperty('--header', hodnota);
                    }
                }
            });
        } catch (e) {
            console.error(e.message);
        }
    }

    reload(){
        this.getNastavenia();

    }

}

document.addEventListener('DOMContentLoaded',() =>{
    var tema = new Tema();
    console.log("DOMContentLoaded");
});