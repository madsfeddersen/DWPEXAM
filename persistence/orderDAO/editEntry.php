<head>
    <meta charset="UTF-8">
    <title>Edit entry</title>
    <link rel="stylesheet" href="/presentation/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<?php
    session_start();

    $userEmail = $_SESSION['userName'];

    if (isset($_GET['ID'])) {
        $entryID = $_GET['ID'];

    require (__DIR__ . "/../../business/dbcon2.php");  
    $dbCon2 = dbCon2();
    $query = $dbCon2->prepare("SELECT * FROM orders WHERE email = '$userEmail'");
    $query->execute();
    $getOrder = $query->fetchAll();
?>

<div class="container">
    <br>
    <button class="btn grey dashboard"><a href="/dashboard">Back to dashboard</a>
    </button>
    <br>
        <p>Editing order number: <?php echo $getOrder[0][0] . ' from user: ' . $getOrder[0][1];?>
        </p>
        <form class="col s12" name="contact" method="POST" action="/../../persistence/orderDAO/updateEntry.php">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="shop_name" name="shop_name" type="text" value="<?php echo $getOrder[0][1]; ?>" class="validate" required="" aria-required="true">
                        <label for="shop_name">Full Name</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="street_address" name="street_address" type="text" value="<?php echo $getOrder[0][2]; ?>" class="validate" required="" aria-required="true">
                        <label for="street_address">Email</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="zipcode" name="zipcode" type="text" value="<?php echo $getOrder[0][3]; ?>" class="validate" required="" aria-required="true">
                        <label for="zipcode">Shipping Adress</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="phone" name="phone" type="text" value="<?php echo $getOrder[0][4]; ?>" class="validate" required="" aria-required="true">
                        <label for="phone">City</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" name="email" type="text" value="<?php echo $getOrder[0][5]; ?>" class="validate" required="" aria-required="true">
                        <label for="email">Zip</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="opening_hours" name="opening_hours" type="text" value="<?php echo $getOrder[0][6]; ?>" class="validate" required="" aria-required="true">
                        <label for="opening_hours">Product name</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="daily_product" name="daily_product" type="text" value="<?php echo $getOrder[0][7]; ?>" class="validate" required="" aria-required="true">
                        <label for="daily_product">Quantity</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="news" name="news" type="text" value="<?php echo $getOrder[0][8]; ?>" class="validate" required="" aria-required="true">
                        <label for="news">Price</label>
                    </div>
            <input type="hidden" name="entryID" value="<?php echo $entryID; ?>">
            <button class="btn white black-text dashboard" type="submit" name="submit">
                Update Order
            </button>
        </form>
    </div>
</div>

<?php
    }
    else
    {
        header("Location: manageOrders.php?status=0");
    }
?>