function checkLogin() {

    let username = document.getElementById("login-username").value;
    if(localStorage.getItem(username) != undefined)
    {
        let textfield_password = document.getElementById("login-password").value
        let fetched_user = JSON.parse(localStorage.getItem(username))


        if (fetched_user.password == textfield_password) {
            alert("Hi " + fetched_user.username)
        } else {
            alert("Incorrect password")
        }

    } else {
        alert("Username does not exist.")
    }
}

function login() {
    if (sessionStorage.signedInUsername != undefined) {
        let userObject = JSON.parse(localStorage[sessionStorage.signedInUsername])
        document.getElementById("signin").innerHTML = userObject.username + ", Signed In";
        document.getElementById("register").innerHTML = "Logout";
        document.getElementById("register").hidden = false;
    }
}