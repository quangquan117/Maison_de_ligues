document.addEventListener("DOMContentLoaded",()=>{
    console.log("here");
    let input = document.getElementsByTagName("input")[5];
    let traitement;
    let warning = document.querySelector(".warning");

    traitement = (e)=>{
        e.preventDefault()
        let User = {
            nom:document.getElementsByTagName("input")[0].value,
            prenom:document.getElementsByTagName("input")[1].value,
            email:document.getElementsByTagName("input")[2].value,
            password:document.getElementsByTagName("input")[3].value,
            c_password:document.getElementsByTagName("input")[4].value,
        }
        if (!User.nom || !User.prenom || !User.email || !User.password || !User.c_password){
            warning.style.display="block";
            warning.classList.add("warning");
            warning.classList.remove("success");
            warning.textContent ="Champs vides: remplir les champs!";
        }
        else if (User.password != User.c_password) {
            warning.style.display="block";
            warning.classList.add("warning");
            warning.classList.remove("success");
            warning.textContent ="Vos mots de passe sont différent!";
        }
        else{
            warning.style.display="block";
            warning.classList.add("success");
            warning.classList.remove("warning");
            warning.textContent ="Vous etes enregistré";
            sessionStorage.setItem("prenom", User.nom);
            localStorage.setItem("nom", User.prenom);
            localStorage.setItem("email", User.email);
            localStorage.setItem("password", User.password);
            localStorage.setItem("c_password", User.c_password);
            console.log(User.nom);
            console.log(User.prenom);
            console.log(User.email);
            console.log(User.password);
            console.log(User.c_password);
        }
    }
    input.addEventListener("click", traitement);
})