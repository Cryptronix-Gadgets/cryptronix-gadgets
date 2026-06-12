<?php
include('../includes/header.php');
?>

<h2>Add Product</h2>

<form method="POST">

    <label>Product Name</label><br>
    <input type="text" name="product_name"><br><br>

    <label>SKU</label><br>
    <input type="text" name="sku"><br><br>

    <label>Category</label><br>
    <input type="text" name="category"><br><br>

    <label>Purchase Price</label><br>
    <input type="number" step="0.01" name="purchase_price"><br><br>

    <label>Selling Price</label><br>
    <input type="number" step="0.01" name="selling_price"><br><br>

    <label>Stock</label><br>
    <input type="number" name="stock"><br><br>

    <button type="submit">Save Product</button>

</form>

<?php
include('../includes/footer.php');
?>
