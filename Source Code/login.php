<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Page</title>
    <link rel="stylesheet" href="logstyle.css">
</head>
<body>
    <div class="whole">
    <div class="container">
    <h1>Login</h1>
    <form id="loginform">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required oninput="validateInput()"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required oninput="validateInput()"><br><br>
        <input type="button" id="log" value="Login" onclick="login()">
    </form>

    <p id="error-message"></p>
    </div>
    </div>
    <script src="login.js"></script>
</body>
</html>

