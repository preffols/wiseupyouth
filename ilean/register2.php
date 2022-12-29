<?php 
require 'config/config.php';

require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VC</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="shortcut icon" type="image/png" href="assets/images/background/graduation.png">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
</head>

<body>
    
<div id="first">
    
                <form action="register.php" method="POST" id="register-form">
                    <h2>SIGN UP FORM FOR E-LEAN : WISE UP YOUTH</h2>
                    <input type="text" name="reg_fname" placeholder="First name" value="<?php 
                                                                                        if (isset($_SESSION['reg_fname'])) {
                                                                                            echo $_SESSION['reg_fname'];
                                                                                        } ?>" required>

                    <br>

                    <?php if (in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; ?>

                    <input type="text" name="reg_lname" placeholder="Last name" value="<?php 
                                                                                        if (isset($_SESSION['reg_lname'])) {
                                                                                            echo $_SESSION['reg_lname'];
                                                                                        } ?>" required>
                    <br>

                    <input type="email" name="reg_email" placeholder="Email" value="<?php 
                                                                                    if (isset($_SESSION['reg_email'])) {
                                                                                        echo $_SESSION['reg_email'];
                                                                                    } ?>" required>
                    <br>

                    <input type="email" name="reg_email2" placeholder="Confirm email" value="<?php 
                                                                                                if (isset($_SESSION['reg_email2'])) {
                                                                                                    echo $_SESSION['reg_email2'];
                                                                                                } ?>" required>
                    <br>

                    <?php if (in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>";
                    else if (in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
                    else if (in_array("Email do not match<br>", $error_array)) echo "Email do not match<br>"; ?>

                    <input type="password" name="reg_password" placeholder="Password" required>
                    <br>
                    <input type="password" name="reg_password2" placeholder="Confirm password" required>
                    <br>

                    <?php if (in_array("Your password do not match<br>", $error_array)) echo "Your password do not match<br>"; ?>

                    <input type="submit" name="register_button" id="button" value="Register">
                    <br>
                    <br>
                    <?php if (in_array("<span style = 'color: #14C800;'> You're all set! Go ahead and login! </span> <br>", $error_array)) echo "<span style = 'color: #14C800;'> You're all set! Go ahead and login! </span> <br>"; ?>


                    <a href="#" id="signin" class="signin">Already have an account? Sign In</a>

                </form>
            </div>

        </div>
    </div>
    <script>
        const landingPage = document.querySelector('.landing');
        const landingBtn = document.querySelector('#landing-btn');
        landingBtn.addEventListener('click', () => {
            landingPage.classList.add('animated', 'slideOutUp');
        });

        $(document).ready(function() {
   
        //on click signup, hide login and show registration form
        $("#signup").click(function()  {
            $("#first").slideUp("slow", function(){
                $("#second").slideDown("slow");
                });
            });
            //on click signup, hide registertion form and login form
                $("#signin").click(function() {
                    $("#second").slideUp("slow", function(){
                        $("#first").slideDown("slow");
                });
            });

        });
 
    </script>
</body>

</html> 