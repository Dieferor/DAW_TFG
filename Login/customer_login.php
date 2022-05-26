<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
    session_start();
    include("../include/db.php");
    include("../include/functions.php");

    if(!isset($_SESSION['customer_email'])){
?>
<body>

    <div class="main">
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="login.php">
                        <h2 class="form-title">Acceso</h2>                       
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="email" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="contraseña" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Login" />
                        </div>
                    </form>
                    <p class="loginhere">
                        ¿Aún no tienes cuenta de usuario? <a href="./customer_signUp.php" class="loginhere-link">Crear cuenta</a>
                    </p>
                    <p class="goback">
                       <a href="../index.php" class="goback-link">Volver atrás</a>
                    </p>
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>

<?php } 
    else{
        echo "<script>window.open('customer_menu.php','_self')</script>";
    }
?>