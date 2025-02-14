function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username === "admin" && password === "admin123") {
        window.location.href= "user.php";
    } else {
        document.getElementById("error-message").textContent = "Invalid username or password. Please try again.";
    }
}

function validateInput() {
    var usernameInput = document.getElementById("username");
    var passwordInput = document.getElementById("password");

    if (usernameInput.value && passwordInput.value) {
        
        document.getElementById("log").removeAttribute("disabled");
    } else {
        
        document.getElementById("log").setAttribute("disabled", "disabled");
    }
}
