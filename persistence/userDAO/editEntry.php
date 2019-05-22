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
    $query = $dbCon->prepare("SELECT * FROM users WHERE id=$entryID");
    $query->execute();
    $getUsers = $query->fetchAll();
?>

<div class="container">
    <br>
    <button class="btn grey dashboard"><a href="/dashboard">Back to dashboard</a>
    </button>
    <br>
        <p>Editing user #<?php echo $getUsers[0][0] . ' with Email: ' . $getUsers[0][1];?>
        </p>
        <form class="col s12" name="contact" method="POST" action="/../../persistence/userDAO/updateEntry.php">
        <div class="row">
                <div class="input-field col s12">
                    <input id="userEmail" name="userEmail" type="email" value="<?php echo $getUsers[0][1]; ?>" class="validate" required="" aria-required="true">
                    <label for="userEmail">E-mail</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="userPass" name="userPass" type="password" value="<?php echo $getUsers[0][2]; ?>" class="validate" required="" aria-required="true">
                    <label for="userPass">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="firstName" name="firstName" type="text" value="<?php echo $getUsers[0][3]; ?>" class="validate" required="" aria-required="true">
                    <label for="firstName">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="lastName" name="lastName" type="text" value="<?php echo $getUsers[0][4]; ?>" class="validate" required="" aria-required="true">
                    <label for="lastName">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="userRank" id="userRank" type="text" value="<?php echo $getUsers[0][5]; ?>" class="materialize-textarea" required="" aria-required="true"></textarea>
                    <label for="userRank">Rank 1 - 3</label>
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
        header("Location: manageUsers.php?status=0");
    }
?>