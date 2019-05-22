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
    $query = $dbCon->prepare("SELECT * FROM products WHERE id=$entryID");
    $query->execute();
    $getProducts = $query->fetchAll();
?>

<div class="container">
    <br>
    <button class="btn grey dashboard"><a href="/dashboard">Back to dashboard</a>
    </button>
    <br>
        <p>Editing product #<?php echo $getProducts[0][0] . ' with name: ' . $getProducts[0][1] . ' Duck';?>
        </p>
        <form class="col s12" name="contact" method="POST" action="/../../persistence/productDAO/updateEntry.php">
        <div class="row">
                <div class="input-field col s12">
                    <input id="name" name="name" type="text" value="<?php echo $getProducts[0][1]; ?>" class="validate" required="" aria-required="true">
                    <label for="name">Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="code" name="code" type="text" value="<?php echo $getProducts[0][2]; ?>" class="validate" required="" aria-required="true">
                    <label for="code">Code</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="price" name="price" type="text" value="<?php echo $getProducts[0][3]; ?>" class="validate" required="" aria-required="true">
                    <label for="price">Price</label>
                </div>
                <div class="input-field col s12">
                    <input id="description" name="description" type="text" value="<?php echo $getProducts[0][4]; ?>" class="validate" required="" aria-required="true">
                    <label for="description">Description</label>
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
        header("Location: manageProducts.php?status=0");
    }
?>