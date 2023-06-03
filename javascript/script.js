let body = document.querySelector("body")
let image = document.getElementById("pimage")
let boutton = document.getElementById("boutton")
let bouttonsubmit = document.getElementById("ok")
let connexion = document.getElementById("connexion")
let co = document.getElementById("co")
let inscrip = document.getElementById("inscrip")
let butok = document.getElementById("ok")
let titelu = document.getElementById("titel")
let oui = document.getElementById("oui")
let non = document.getElementById("non")


titelu.addEventListener("click", () => {
    document.location.href="http://localhost:3000/Delivery/W-PHP-501-PAR-1-1-mymeetic-mehdi1.zenati/php/index.php";
})

oui.addEventListener("click", () => {
    alert("hop la c dans l'panier champion")
})
non.addEventListener("click", () => {
    alert("à la poubelle le laideron")
})

boutton.addEventListener("click", () => {
    image.innerHTML = '<img src="../assets/3_200x.webp"><h5>Votre photo a bien été téléchargée !</h5>';
})
function ShowMessage() {
    alert("Adresse mail déjà utilisée");
}
function ShowMessagex() {
    alert("binvnu dan meul barak");
    document.location.href="http://localhost:3000/Delivery/W-PHP-501-PAR-1-1-mymeetic-mehdi1.zenati/php/oifjqsuodiepgqihpiequghpiuqerohmikgulykrtneklgrdtnsren.php";
}
function ShowMessagey() {
    alert("ton compte il exist po lo");
}

function arachetoi(){
    document.location.href="http://localhost:3000/Delivery/W-PHP-501-PAR-1-1-mymeetic-mehdi1.zenati/php/connex.php";

}

