<!DOCTYPE html>
<html>
    <head>
        <title>Resonance Services</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/scss/main.css"/>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="/libs/jquery-3.4.1.min.js"><\/script>');</script>
    </head>
    <body>
       <div class="main-wrapper">
            <header>
                <!--Include Header and Navigation-->
               <?php include("header.php") ?>
            </header>
            <main>

                  <!--SignUp Form-->
                  <div class="signup-box">
                    <div class="left-box">
                        <h3>Already have an account?</h3>
                        <button class="signIn"> <a href="#">Sign In</a> </button>
                        
                      <div class="box">
                        <h1>Create an account</h1>
                        <form method="Post" >
                            <input type="text" name="username" placeholder="Username" required>
                            <input type="email" name="e_address" placeholder="Email Address" required>
                            <input type="password" id="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                            <input type="password" id="confirm_password" name="retypepassword" placeholder="Retype Password" required>
                            <input type="submit" name="signup-button" value="Sign Up">
                            <label class="fgp" href="#">Forgot Password?<label>
                        </form>
                        </div>
                        </div>
                        <div class="right-box">
                            <span class="signinwith"></span>
                            <button class="social facebook"> Log in with Facebook </button>
                            <button class="social twitter"> Log in with Twitter </button>
                            <button class="social google"> Log in with Google + </button>
                        </div>
                        <div class="or">OR</div>
                  </div>
                    <!--End Form-->

                    <!--Sign In Form-->
                    <div class="signin-box">
                        <div class="center-box">
                            <form method="Post">
                                <input type="email" placeholder="email">
                                <input type="password" placeholder="password">
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                                <input type="submit" name="signin" value="Sign In">             
                            </form>
                            <div class="bottom-box">
                            </div>  
                        <div>
                    </div>
                    <!--End Form-->

                    <!--Forgot Password in Form-->
                    <div class="forgot_password">
                        <div class="left-box">
                            <form method="Post">
                            <input type="email" name="e_address" placeholder="Email Address">
                            <input type="password" id="password" name="password" placeholder="Password">
                            </form>
                        </div>
                    </div>
                    <!--End Form-->

            </main>
            <footer>
            </footer>
       </div>
       <script src="scripts/lang-bar.js"></script>
       <script src="scripts/check_password.js"></script>
       <script src="scripts/change_form.js"></script>
    </body>
</html>