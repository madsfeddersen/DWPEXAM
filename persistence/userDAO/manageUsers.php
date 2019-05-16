<head>
    <meta charset="UTF-8">
    <title>Manage Users</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/presentation/css/dashboard.css">     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<?php
require (__DIR__ . "/../../business/dbcon.php");
$dbCon = dbCon($user, $pass);
$query = $dbCon->prepare("SELECT * FROM users");
$query->execute();
$getUsers = $query->fetchAll();
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
            <table class="highlight">
                <thead>
                <tr>
                    <th>UserID</th>
                    <th>Email</th>
                    <th>Full Name</th>
                    <th>Rank</th>
                    <th style="padding-left: 10px;">Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    
                    <?php
                        foreach ($getUsers as $getUser) {
                            echo "<tr>";
                            echo "<td>". $getUser['id']."</td>";
                            echo "<td>". $getUser['userEmail']."</td>";
                            echo "<td>". $getUser['firstName']. " " .$getUser['lastName']."</td>";    
                            echo "<td>";
                            if ($getUser['userRank']==1){
                                echo '<img src="/../../presentation/img/owner.png" alt="lvl 1" height="40px">';
                            }
                            elseif ($getUser['userRank']==2){
                                echo '<img src="/../../presentation/img/admin.png" alt="lvl 2" height="40px">';
                            }
                            elseif ($getUser['userRank']==3){
                                echo '<img src="/../../presentation/img/user.png" alt="lvl 3" height="40px">';
                            }
                            echo "</td>";
                            echo '<td><a href="/../../persistence/userDAO/editEntry.php?ID='.$getUser['id'].'" class="btn dashboard" ">Edit</a></td>';
                            echo '<td><a href="/../../persistence/userDAO/deleteEntry.php?ID='.$getUser['id'].'" class="btn red" onclick="return confirm(\'Delete! are you sure?\')">Delete</a></td>';
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
        <h3>Add new user to the database</h3>
        <form class="col s12" name="contact" method="post" action="/../../persistence/userDAO/addEntry.php">
             <div class="row">
                <div class="input-field col s12">
                    <input id="userEmail" name="userEmail" type="email" class="validate" required="" aria-required="true">
                    <label for="userEmail">E-Mail</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="userPass" name="userPass" type="password" class="validate" required="" aria-required="true">
                    <label for="userPass">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="firstName" name="firstName" type="text" class="validate" required="" aria-required="true">
                    <label for="firstName">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="lastName" name="lastName" type="text" class="validate" required="" aria-required="true">
                    <label for="lastName">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea name="userRank" id="text" class="materialize-textarea" required="" aria-required="true"></textarea>
                    <label for="userRank">Rank 1 to 3</label>
                </div>
            </div>
            <button class="btn dashboard" type="submit" name="submit">
                Add user
            </button>
        </form>
    </div>
</div>
