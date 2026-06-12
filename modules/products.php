<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Products</title>
<style>
body{
    background:#0a0f18;
    color:white;
    font-family:Arial;
    padding:20px;
}
table{
    width:100%;
    border-collapse:collapse;
}
th,td{
    padding:12px;
    border:1px solid #333;
}
button{
    background:#009dff;
    color:white;
    border:none;
    padding:10px 15px;
    cursor:pointer;
}
</style>
</head>
<body>

<h1>Products</h1>

<button>Add Product</button>

<table>
<tr>
<th>ID</th>
<th>Product Name</th>
<th>Price</th>
<th>Stock</th>
</tr>

<tr>
<td>1</td>
<td>Sample Product</td>
<td>৳1000</td>
<td>10</td>
</tr>

</table>

</body>
</html>
