<?php
require_once (__DIR__ . "/../../persistence/userDAO.php");
?>



  <div class='container'>
    <div class='header'>
      <img class="headerImg" src="includes/images/phpmysql.png" width="25%" alt="">
      <h4>Database CRUD example</h4>
    </div>
    <br/>
    <form id="userForm" method="POST" action="business/handleUser.php?action=create">
      <input type="hidden" id='userID' name="userID" value="">
      <div class="input-field">
        <label for="userEmail">Email</label>
        <input type="text" id='userEmail' name="userEmail"/>
      </div>
      <br/>
      <div class="input-field">
        <label for="UserPass">Password</label>
        <input type="password" id='userPass' name="userPass"/>
      </div>
      <br/>
      <div class="input-field">
        <label for="firstName">First name</label>
        <input type="text" id='firstName' name="firstName"/>
      </div>
      <br/>
      <div class="input-field">
        <label for="lastName">Last name</label>
        <input type="text" id='lastName' name="lastName"/>
      </div>
      <br/>
      <div class="input-field">
        <label for="userRank">Rank 1-3</label>
        <input type="text" id='userRank' name="userRank"/>
      </div>



      <br/>
      <button class="waves-effect waves-light btn" type='submit'>Add / Update Review</button>
    </form>
    <br>
    <br>
    <br>
      <ul id='reviews'>
           <?php readUser(); ?>
      </ul>
  </div>

  <script type="text/javascript" src="includes/js/app.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>


