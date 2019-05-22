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

    require (__DIR__ . "/../../business/dbcon.php");  
    $dbCon = dbCon();
    $query = $dbCon->prepare("SELECT * FROM orders WHERE email = '$userEmail'");
    $query->execute();
    $getOrder = $query->fetchAll();
?>

<div class="container">
    <br>
    <button class="btn grey dashboard"><a href="/dashboard">Back to dashboard</a>
    </button>
    <br>
        <p>Editing shipping details for order: <?php echo $getOrder[0][0] . ' from user: ' . $getOrder[0][1];?>
        </p>
        <form class="col s12" name="contact" method="POST" action="/../../persistence/orderDAO/updateEntry.php">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="shipping _adress" name="shipping _adress" type="text" value="<?php echo $getOrder[0][4]; ?>" class="validate" required="" aria-required="true">
                        <label for="shipping _adress">Shipping Adress</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="city" name="city" type="text" value="<?php echo $getOrder[0][5]; ?>" class="validate" required="" aria-required="true">
                        <label for="city">City</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="zip" name="zip" type="text" value="<?php echo $getOrder[0][6]; ?>" class="validate" required="" aria-required="true">
                        <label for="zip">Zip</label>
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