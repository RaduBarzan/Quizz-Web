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
           <form action="register_script.php" method="post">
               <br>
               Prenume:<br><input type="text" name="prenume"><br> 
               Nume:<br><input type="text" name="nume"> <br>
               Email:<br> <input type="email" name="email"><br>
               Password:<br> <input type="password" name="password"><br>    
            <input type="submit" class="nebunie" value="Register" name="Register">
           </form>
            <form action="login.php">
                <input type="submit" class="nebunie" value="Already have an account" name="Already_account">
            </form>
            <br>
        </div>
    </div>
       <?php
        require_once "./footer.php"
    ?>
</body>
</html>