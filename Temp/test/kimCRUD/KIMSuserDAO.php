<?php

function createUser()
{
    require_once (__DIR__ . "/business/db/dbcon2.php");
    if (isset($_POST['submit']))
    {
        $userEmail = $_POST['userEmail'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $userPass = $_POST['userPass'];
        $userRank = $_POST['userRank'];

        $dbCon = dbCon($user, $pass);
        $query = $dbCon->prepare("INSERT INTO users (`userEmail`, `userPass`, `firstName`, `lastName`, `userRank`) VALUES ('$userEmail', '$userPass', '$firstName', '$lastName',  '$userRank')");
        $query->execute();
        header("Location: /backend2.php?status=added");
    }
    else
        {
            header("Location: /backend2.php?status=0");
        }
}



function readUser()
{
    ?>
    <head>
        <meta charset="UTF-8">
        <title>Contact</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </head>
    <?php
    require_once (__DIR__ . "/../business/dbcon.php");
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
                                echo '<td><a href="editEntry.php?ID='.$getUser['id'].'" class="waves-effect waves-light btn" ">Edit</a></td>';
                                echo '<td><a href="deleteEntry.php?ID='.$getUser['id'].'" class="waves-effect waves-light btn red" onclick="return confirm(\'Delete! are you sure?\')">Delete</a></td>';
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
    <?php
}



function updateUser()
{
    require_once ("business/dbcon.php");
    if (isset($_POST['entryID']) && isset($_POST['submit']))
    {
        $userEmail = $_POST['userEmail'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $userPass = $_POST['userPass'];
        $userRank = $_POST['userRank'];
        $dbCon = dbCon($user, $pass);
        $query = $dbCon->prepare("UPDATE users SET `userEmail`='$userName', `firstName`='$firstName', `lastName`='$lastName', `userPass`='$userPass', `userRank`='$userRank' WHERE ID=$entryID");
        $query->execute();
        header("Location: /backend2.php?status=updated&ID=$entryID");
    }
    else
        {
            header("Location: presentation/backend/backend2.php?status=0");
        }
}



function deleteUser() {
    require_once ("business/dbcon.php");
    if (isset($_GET['ID'])) {
        $entryID = $_GET['ID'];
        $dbCon = dbCon($user, $pass);
        $query = $dbCon->prepare("DELETE FROM users WHERE id=$entryID");
        $query->execute();
        header("Location: presentation/backend/backend2.php?status=deleted&ID=$entryID");
    }
    else
    {
        header("Location: /presentation/backend/backend2.php?status=0");
    }
}