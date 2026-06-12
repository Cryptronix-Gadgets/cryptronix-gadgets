<?php
session_start();
require_once 'config/database.php';

$error = "";

if(isset($_POST['login'])){

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute([$email]);

    $user = $stmt->fetch();

    if($user && password_verify($password,$user['password'])){
        $_SESSION['admin'] = $user['id'];
        header("Location: dashboard.php");
        exit;
    }else{
        $error = "Invalid Email or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Cryptronix Gadgets Login</title>
<meta charset="utf-8">

<style>

body{
    background:#0b0f18;
    font-family:Arial;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.card{
    width:380px;
    background:#121826;
    padding:30px;
    border-radius:15px;
    color:white;
    box-shadow:0 0 25px rgba(0,150,255,.3);
}

input{
    width:100%;
    padding:12px;
    margin-top:10px;
    border:none;
    border-radius:8px;
}

button{
    width:100%;
    padding:12px;
    margin-top:15px;
    background:#009dff;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
}

h2{
    text-align:center;
}

.error{
    color:red;
    margin-top:10px;
}
</style>

</head>
<body>

<div class="card">

<h2>Cryptronix Gadgets</h2>

<form method="POST">

<input type="email" name="email" placeholder="Admin Email" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

</form>

<div class="error">
<?= $error ?>
</div>

</div>

</body>
</html>
