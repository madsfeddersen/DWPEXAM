<head>
    <meta charset="UTF-8">
    <title>Contact</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<?php
require (__DIR__ . "/../../business/dbcon.php");

$dbCon = dbCon($user, $pass);
$query = $dbCon->prepare("SELECT * FROM users");
$query->execute();
$getUsers = $query->fetchAll();
//var_dump($getUsers);
?>


<div class="container">

    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == "deleted") {
            echo "The entry " . $_GET['ID'] . " has been successfully deleted!";
            echo "<script>M.toast({html: 'Deleted!'})</script>";
        } elseif ($_GET['status'] == "updated") {
            echo "The entry " . $_GET['ID'] . " has been successfully Updated!";
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
    <a href="/dashboard" class="btn blue left">Back to dashboard</a>
        <div class="row">
            <table class="highlight">
                <thead>
                <tr>
                    <th>UserID</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Rank</th>
                    <th>Edit</th>
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
                                echo '<img src="/presentation/img/lvl1.png" alt="lvl 1" height="40px">';
                            }
                            elseif ($getUser['userRank']==2){
                                echo '<img src="/presentation/img/lvl2.png" alt="lvl 2" height="40px">';
                            }
                            elseif ($getUser['userRank']==3){
                                echo '<img src="/presentation/img/lvl3.png" alt="lvl 3" height="40px">';
                            }
                            echo "</td>";
                            echo '<td><a href="presentation/backend/editEntry.php?ID='.$getUser['id'].'" class="waves-effect waves-light btn" ">Edit</a></td>';
                            echo '<td><a href="presentation/backend/deleteEntry.php?ID='.$getUser['id'].'" class="waves-effect waves-light btn red" onclick="return confirm(\'Delete! are you sure?\')">Delete</a></td>';
                            echo "</tr>";
                        }
                    ?>

                </tbody>
            </table>
        </div>
        <hr>

        <br><br>
        <h3>Add new user to DB!</h3>

        <form class="col s12" name="contact" method="post" action="addEntry.php">
            
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

            <button class="btn waves-effect waves-light" type="submit" name="submit">
                Add
            </button>

        </form>
    </div>
</div>
