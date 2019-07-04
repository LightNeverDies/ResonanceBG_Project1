<header>
    <div class="header-top">
        <img class="logo" src="images/logo/pandalogo.png">
        <div class="util-nav-middle"></div>
        <div class="util-nav-right">
            <div></div>
            <div class="account-tray">
                <span class="account-icon"><a href="sign.php">Sign In</a></span>
            </div>
            <div class="shopping-cart">
                <span class="cart-icon"><a href="cart.php">Cart</a></span>
            </div>
            <div class="lang-bar" is-dropdown-active="false">
                <span class="code2" title="English" target-lang="uk-en">EN</span>
                <ul class="lang-dropdown">
                    <?php require_once('includes/lang_tray.php'); ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <nav class="nav-bar-wrapper">
            <span class="mobile-nav-btn">&#9776;</span> 
            <ul class="nav-bar" is-active="false">
                <li class="nav-btn home-btn"><a href="index.php" class="nav-btn-txt home-btn-txt">Home</a></li>
                <li class="nav-btn hosting-btn"><a href="hosting.php" class="nav-btn-txt hosting-btn-txt">Hosting</a></li>
                <li class="nav-btn about-btn"><a href="about.php" class="nav-btn-txt about-btn-txt">About</a></li>                     
            </ul>
        </nav>
    </div>
    <div class="header-mid">test</div>
</header>