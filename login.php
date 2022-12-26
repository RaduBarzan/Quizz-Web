<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
    <div class="container bg border_rad"> 
        <div class="log_in text-size">
           <form action="login_script.php" method="post">
               <br>
                Email:<br> <input type="email" name="email"><br>
               Password:<br> <input type="password" name="password"><br> 
            <input type="submit" class="nebunie" value="Login" name="Login">
            </form>
            <form action="register.php" method="post">
               <input type="submit" class="nebunie" value="Back to register" name="Back to Register">
           </form>
           <br>
        </div>
    </div>
       <?php
        require_once "./footer.php"
    ?>
</body>
</html>