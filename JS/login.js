function login(){
    var user
    var password
    user = document.getElementById("username").value;
    password = document.getElementById("password").value;

    if ( user == "Incap" && password == "1234"){
        alert("Iniciaste sesión!")
    }else{
        alert("Contraseña o nombre de usuario incorrecto")
    }
}