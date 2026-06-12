<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Cryptronix Gadgets Dashboard</title>

<style>

body{
margin:0;
font-family:Arial;
background:#0a0f18;
color:white;
}

.sidebar{
width:250px;
height:100vh;
background:#111827;
position:fixed;
left:0;
top:0;
}

.logo{
padding:20px;
font-size:22px;
font-weight:bold;
text-align:center;
border-bottom:1px solid #222;
}

.menu a{
display:block;
padding:15px 20px;
color:white;
text-decoration:none;
}

.menu a:hover{
background:#1f2937;
}

.main{
margin-left:250px;
padding:30px;
}

.card{
background:#111827;
padding:20px;
border-radius:15px;
display:inline-block;
width:250px;
margin:10px;
box-shadow:0 0 15px rgba(0,150,255,.2);
}

</style>

</head>

<body>

<div class="sidebar">

<div class="logo">
Cryptronix Gadgets
</div>

<div class="menu">

<a href="#">Dashboard</a>
<a href="#">Products</a>
<a href="#">Customers</a>
<a href="#">Invoices</a>
<a href="#">Reports</a>
<a href="#">Settings</a>

</div>

</div>

<div class="main">

<h1>Dashboard</h1>

<div class="card">
<h3>Total Products</h3>
<p>0</p>
</div>

<div class="card">
<h3>Total Customers</h3>
<p>0</p>
</div>

<div class="card">
<h3>Total Invoices</h3>
<p>0</p>
</div>

</div>

</body>
</html>
