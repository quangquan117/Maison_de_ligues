document.addEventListener("DOMContentLoaded",()=>{
    console.log("here");
    let input = document.getElementsByTagName("input")[3];
    let traitement;
    let warning = document.querySelector(".warning");

    traitement = (e)=>{
        e.preventDefault()
        let User = {
            nom:document.getElementsByTagName("input")[0].value,
            prenom:document.getElementsByTagName("input")[1].value,
            email:document.getElementsByTagName("input")[2].value,
            ville:document.getElementById("Ville").value,
            pays:document.getElementById("Pays").value,
        }
        if (!User.nom || !User.prenom || !User.email){
            warning.style.display="block";
            warning.classList.add("warning")
            warning.classList.remove("success")
            warning.textContent ="Champs vides: remplir les champs!"
        }
        else{
            sessionStorage.setItem("prenom", User.nom);
            localStorage.setItem("nom", User.prenom);
            localStorage.setItem("email", User.email);
            localStorage.setItem("ville", User.ville);
            localStorage.setItem("pays", User.pays);
            console.log(User.nom);
            console.log(User.prenom);
            console.log(User.email);
            console.log(User.ville);
            console.log(User.pays);
        }
    }
    input.addEventListener("click", traitement);
})