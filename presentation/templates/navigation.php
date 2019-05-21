<div id="header" class="header-limiter">
	<div id="logo">
        <a href="/home">Duck
            <span>You!</span>
        </a>
        </div>
	<div id="links">
        <a href="/home">Home</a>
		<a href="/shop">Shop</a>
        <a href="/about">About</a>
        <a href="/faq">FAQ</a>
        <a href="/contact">Contact</a>
    </div>
    <?php
        if(isset($_SESSION['user_id']))
        {
            echo '<h1 id="logoutBtn"><a href="/logout"><i class="fas fa-door-open"></i></a></h1>';
              
            if(isset($_SESSION['userRank']) && ($_SESSION['userRank']) == 1 || ($_SESSION['userRank'] == 2))
            {
                echo '<h1 id="loginBtn"><a href="/dashboard"><i class="fas fa-user-alt"></i></a></h1>';
            }

            else
            {
                echo '<h1 id="loginBtn"><a href="/userDashboard"><i class="fas fa-user-alt"></i></a></h1>';
            }
        }

        if(!isset($_SESSION['user_id']))
        {
            echo '<h1 id="loginBtn">
            <a href="/login">
                <i class="fas fa-user-alt"></i>
            </a>
        </h1>';
        }

    ?>



    



    <h1 id="cartBtn">
        <a href="/cart">
        <i class="fas fa-shopping-cart"></i>
        </a>
    </h1>
</div>

    


