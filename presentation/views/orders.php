<head>
    <!-- Materialize css and js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<?php
require (__DIR__ . "/../../business/dbcon2.php");

$userID = $_SESSION['user_id'];

$dbCon = dbCon2();
$query = $dbCon->prepare("SELECT * FROM orders WHERE orders.user_id='$userID'");
$query->execute();
$getOrder = $query->fetchAll();

?>

<div class="container">
<br>
<a href="/userDashboard" class="btn dashboard">Back to dashboard</a>
<br>
<br>
<br>

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
    
<div class="row">
    <div class="row">
        <table class="highlight">
            <thead>
            <tr class="tablerow">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Zip</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Size</th>
                <th>Color</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody class="tablebody">
                <?php
                    foreach ($getOrder as $info)
                    {
                        echo "<tr>";
                        echo "<td>". $info['id']."</td>";
                        echo "<td>". $info['fullname']."</td>";
                        echo "<td>". $info['orderEmail']."</td>";
                        echo "<td>". $info['shipping_address']."</td>";
                        echo "<td>". $info['city']."</td>";
                        echo "<td>". $info['zip']."</td>";
                        echo "<td>". $info['productname']."</td>";
                        echo "<td>". $info['quantity']."</td>";
                        echo "<td>". $info['size']."</td>";
                        echo "<td>". $info['color']."</td>";
                        echo "<td>". $info['price']."</td>";
                        echo "<td>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <hr>    
</div>
