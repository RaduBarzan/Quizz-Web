<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./style2.css" />
</head>

<body>

    <?php
        require_once "./header.php"
    ?>
        <?php
    $errors= $_GET;
    if(!empty($errors)){
        foreach($errors as $error){
            echo "<p>$error</p>";
        }
    }
?>
            <div class="grid-container-contact">
                <div class="pozitie border_rad">
                <form action="./proccessor.php" method="post">
                    <label>Nume:</label> <br>
                    <input type="text" name="nume" placeholder="Nume"> <br> <br>
                    <label>Email:</label> <br>
                    <input type="email" name="email" placeholder="Email"> <br> <br>
                    <label>Mesaj:</label> <br>
                    <textarea name="mesaj" cols="50" rows="10" class="no_resize"></textarea> <br><br>
                    <input type="submit" name="submit" value="Contacteaza-ne" class="text-size border_rad"> <br>
                </form>
                </div>
            </div>

            <?php
            require_once "./footer.php"
    ?>

</body>

</html>