<?php
require_once (__DIR__ . "/../../business/dbcon.php");
if (isset($_GET['ID'])) {
?>

<head>
    <meta charset="UTF-8">
    <title>Edit entry</title>
    <link rel="stylesheet" href="/presentation/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<?php
    $entryID = $_GET['ID'];
    $dbCon = dbCon();
    $query = $dbCon->prepare("SELECT * FROM duck_shop WHERE id=$entryID");
    $query->execute();
    $getDucks = $query->fetchAll();
?>

<div class="container">
    <br>
    <button class="btn grey dashboard"><a href="/dashboard">Back to dashboard</a>
    </button>
    <br>
        <p>Editing site #<?php echo $getDucks[0][0] . ' with shop name: ' . $getDucks[0][1];?>
        </p>
        <form class="col s12" name="contact" method="POST" action="/../../persistence/siteDAO/updateEntry.php">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="shop_name" name="shop_name" type="text" value="<?php echo $getDucks[0][1]; ?>" class="validate" required="" aria-required="true">
                        <label for="shop_name">Shop Name</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="street_address" name="street_address" type="text" value="<?php echo $getDucks[0][2]; ?>" class="validate" required="" aria-required="true">
                        <label for="street_address">Address</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="zipcode" name="zipcode" type="text" value="<?php echo $getDucks[0][3]; ?>" class="validate" required="" aria-required="true">
                        <label for="zipcode">Zipcode</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="phone" name="phone" type="text" value="<?php echo $getDucks[0][4]; ?>" class="validate" required="" aria-required="true">
                        <label for="phone">Phone</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" name="email" type="text" value="<?php echo $getDucks[0][5]; ?>" class="validate" required="" aria-required="true">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="opening_hours" name="opening_hours" type="text" value="<?php echo $getDucks[0][6]; ?>" class="validate" required="" aria-required="true">
                        <label for="opening_hours">Openening Hours</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="daily_product" name="daily_product" type="text" value="<?php echo $getDucks[0][7]; ?>" class="validate" required="" aria-required="true">
                        <label for="daily_product">Duck of the day</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="news" name="news" type="text" value="<?php echo $getDucks[0][8]; ?>" class="validate" required="" aria-required="true">
                        <label for="news">News</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="shop_description" name="shop_description" type="text" value="<?php echo $getDucks[0][9]; ?>" class="validate" required="" aria-required="true">
                        <label for="shop_description">Shop Description</label>
                    </div>
                </div>
            <input type="hidden" name="entryID" value="<?php echo $entryID; ?>">
            <button class="btn white black-text dashboard" type="submit" name="submit">
                Update
            </button>
        </form>
    </div>
</div>

<?php
    }
    else
    {
        header("Location: manageSite.php?status=0");
    }
?>