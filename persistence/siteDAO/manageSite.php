<head>
    <!-- Materialize css and js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<?php
require (__DIR__ . "/../../business/dbcon.php");
$dbCon = dbCon();
$query = $dbCon->prepare("SELECT * FROM duck_shop");
$query->execute();
$getDucks = $query->fetchAll();
?>

<div class="container">
<br>
<a href="/dashboard" class="btn dashboard">Back to dashboard</a>
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
        <table class="highlight striped centered">
            <thead>
            <tr class="tablerow">
                <th>ID</th>
                <th>Shop Name</th>
                <th>Address</th>
                <th>Zipcode</th>
                <th>Phone</th>
                <th>Inquiry Email</th>
                <th>Opening Hours</th>
                <th>Duck of the day (ID)</th>
                <th>News</th>
                <th>Shop Description</th>
            </tr>
            </thead>
            <tbody class="tablebody">
                <?php
                    foreach ($getDucks as $info)
                    {
                        echo "<tr>";
                        echo "<td>". $info['id']."</td>";
                        echo "<td>". $info['shop_name']."</td>";
                        echo "<td>". $info['street_address']."</td>";
                        echo "<td>". $info['zipcode']."</td>";
                        echo "<td>". $info['phone']."</td>";
                        echo "<td>". $info['email']."</td>";
                        echo "<td>". $info['opening_hours']."</td>";
                        echo "<td>". $info['daily_product']."</td>";
                        echo "<td>". $info['news']."</td>";
                        echo "<td>". $info['shop_description']."</td>";
                        echo "<td>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo '<td><a href="/../../persistence/siteDAO/editEntry.php?ID='.$info['id'].'" class="btn dashboard" ">Edit</a></td>';
                        //echo '<td><a href="/../../persistence/siteDAO/deleteEntry.php?ID='.$info['id'].'" class="btn red dashboard" onclick="return confirm(\'Delete! are you sure?\')">Delete</a></td>';
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
    <!--<h3>Add a new shop to DB</h3>
    <form class="col s12" name="contact" method="post" action="/../../persistence/siteDAO/addEntry.php">
        <div class="row">
            <div class="input-field col s12">
                <input id="shop_name" name="shop_name" type="text" value="<?php //echo $getDucks[0][1]; ?>" class="validate" required="" aria-required="true">
                <label for="shop_name">Shop Name</label>
            </div>
            <div class="input-field col s12">
                <input id="street_address" name="street_address" type="text" class="validate" required="" aria-required="true">
                <label for="street_address">Address</label>
            </div>
            <div class="input-field col s12">
                <input id="zipcode" name="zipcode" type="text" class="validate" required="" aria-required="true">
                <label for="zipcode">Zipcode</label>
            </div>
            <div class="input-field col s12">
                <input id="phone" name="phone" type="text" class="validate" required="" aria-required="true">
                <label for="phone">Phone</label>
            </div>
            <div class="input-field col s12">
                <input id="email" name="email" type="text" class="validate" required="" aria-required="true">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input id="opening_hours" name="opening_hours" type="text" class="validate" required="" aria-required="true">
                <label for="opening_hours">Openening Hours</label>
            </div>
            <div class="input-field col s12">
                <input id="daily_product" name="daily_product" type="text" class="validate" required="" aria-required="true">
                <label for="daily_product">Daily product</label>
            </div>
            <div class="input-field col s12">
                <input id="news" name="news" type="text" class="validate" required="" aria-required="true">
                <label for="news">News</label>
            </div>
            <div class="input-field col s12">
                <input id="shop_description" name="shop_description" type="text" class="validate" required="" aria-required="true">
                <label for="shop_description">Shop Description</label>
            </div>
        </div>
        <button class="btn dashboard" type="submit" name="submit">
            Add shop
        </button>
    </form>-->
</div>
