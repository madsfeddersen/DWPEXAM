<head>
    <meta charset="UTF-8">
    <title>Manage Users</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/presentation/css/dashboard.css">     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>


    <br>
    <h1 class="page-title page-title-register" >
        Register
    </h1>
    <h4 class="page-title page-sub-title-register">
        Already registered? Click <a href="/login">here</a> to login.
    </h4>
    <br>

    <div class="container">

   
    
    <div class="row">    
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