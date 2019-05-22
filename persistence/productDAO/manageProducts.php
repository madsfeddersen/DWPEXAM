<?php

?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/presentation/css/dashboard.css">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<h3>Product CRUD</h3>

<div class="row">
    <a href="/dashboard" class="btn grey black-text dashboard">Back to dashboard</a>
</div>


<?php
require (__DIR__ . "/../../business/dbcon.php");
$dbCon = dbCon();
$query = $dbCon->prepare("SELECT * FROM products");
$query->execute();
$getProducts = $query->fetchAll();
?>

    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == "deleted") {
            echo "The entry " . $_GET['ID'] . " has been successfully deleted!";
            echo "<script>M.toast({html: 'Deleted!'})</script>";
        } elseif ($_GET['status'] == "updated") {
            echo "The entry " . $_GET['ID'] . " has been successfully updated!";
            echo "<script>M.toast({html: 'Updated!'})</script>";
        } elseif ($_GET['status'] == "added") {
            echo "The new entry has been successfully added!";
            echo "<script>M.toast({html: 'Added!'})</script>";
        } elseif ($_GET['status'] == 0) {
            echo "Forbidden access - redirected to home!";
            echo "<script>M.toast({html: 'Access denied!'})</script>";
        }
    }
    ?>
    
    <div class="row" style="width: 80%;">
        <div class="row">
            <table class="highlight striped centered responsive-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    
                    <?php
                        foreach ($getProducts as $product) {
                            echo "<tr>";
                            echo "<td>". $product['id'] ."</td>";
                            echo "<td>". $product['name'] ."</td>";
                            echo "<td>". $product['code'] ."</td>";    
                            echo "<td>". "IMG"."</td>"; 
                            echo "<td>". $product['price'] ."</td>"; 
                            echo "<td>Description</td>";  
                            echo "</td>";
                            
                            echo '<td><a href="/../../persistence/productDAO/editEntry.php?ID='.$product['id'].'" class="btn grey black-text dashboard" ">Edit</a></td>';
                            echo '<td><a href="/../../persistence/productDAO/deleteEntry.php?ID='.$product['id'].'" class="btn red" onclick="return confirm(\'Delete! are you sure?\')">Delete</a></td>';
                            echo "</tr>";
                        }
                    ?>

                </tbody>
            </table>
        </div>
        <hr>
        <br>
        <br>
        <br>
        <h3>Add new product to the database</h3>
        <form class="col s12" name="contact" method="post" action="/../../persistence/productDAO/addEntry.php">
             <div class="row">
                <div class="input-field col s12">
                    <input id="name" name="name" type="text" class="validate" required="" aria-required="true">
                    <label for="name">Product name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="code" name="code" type="text" class="validate" required="" aria-required="true">
                    <label for="code">Code</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="price" name="price" type="text" class="validate" required="" aria-required="true">
                    <label for="price">Price</label>
                </div>
                <div class="input-field col s6">
                    <input id="description" name="description" type="text" class="validate" required="" aria-required="true">
                    <label for="description">Description</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea name="image" id="image" class="materialize-textarea" required="" aria-required="true"></textarea>
                    <label for="image">Image</label>
                </div>
            </div>
            <button class="btn grey black-text dashboard" type="submit" name="submit">
                Add product
            </button>
        </form>
    </div>
</div>
