<head>
    <!-- Materialize css and js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<?php

$currentUser = $_SESSION['user_id'];

require (__DIR__ . "/../../business/dbcon.php");
$dbCon = dbCon();
$query = $dbCon->prepare("SELECT * FROM users WHERE id = '$currentUser'");
$query->execute();
$getUsers = $query->fetchAll();
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
                <tr>
                    <th>UserID</th>
                    <th>Email</th>
                    <th>Full Name</th>
                    <th>Rank</th>
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
        
    </div>
</div>
