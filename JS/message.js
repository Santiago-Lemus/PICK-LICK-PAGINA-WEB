function send(){
    let user = document.getElementById("mess_name")
    let email = document.getElementById("mess_email")

    if(user == null || email == null){
        alert("Por favor, llenar los datos necesarios")
    }else{
        alert("Gracias por tu mensaje! Pronto lo responderemos")
    }
}