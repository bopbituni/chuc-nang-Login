<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .login {
        height: 180px;
        width: 300px;
        margin: 0;
        padding: 10px;
        border: 1px solid black;
        background: brown;
    }

    .login input {
        padding: 5px;
        margin: 5px;
    }
</style>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = trim($_POST["password"]);

    if ($username === "admin" && $password === "admin") {
        echo "<h2>Welcome <span style='color: aqua'>" .$username. "</span> to website</h2>";
    } else {
        echo "<h2><span style='color: aqua'>Login Error</span></h2>";
    }
}
?>
<form method="post">
    <div class="login">
        <h2>Login :</h2>
        <input type="text" name="username" size="30" placeholder="Username"/>
        <input type="password" name="password" size="30" placeholder="Password"/>
        <input type="submit" value="Sign In"/>
    </div>
</form>

</body>
</html>
