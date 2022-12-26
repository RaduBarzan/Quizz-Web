<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzes</title>
    <link rel="stylesheet" href="./style2.css" />
</head>

<body>

    <?php
        require_once "./header.php"
    ?>
        <br>
        <div class="grid-container images aspect border_radius">
            <div><a href="./quiz_geografie.php"><span></span></a><img src="./img/geografie.png" alt="Geography"><br> Geografie</div>
            <div><a href="./quiz_istorie.php"><span></span></a><img src="./img/istorie.jpg" alt="History"><br> Istorie</div>
            <div><a href="./quiz_romana.php"><span></span></a><img src="./img/romana.jpg" alt="Limba si Literatura Romana"><br> Limba si Literatura Romana</div>
            <div><a href="./quiz_sport.php"><span></span></a><img src="./img/sport.jpg" alt="Sport"><br> Sport</div>
            <div><a href="./quiz_stiinta.php"><span></span></a><img src="./img/stiinta.jpg" alt="Science"><br> Stiinta</div>
            <div><a href="./quiz_arta.php"><span></span></a><img src="./img/arta.jpg" alt="Art"><br> Arta</div>
            <div><a href="./quiz_mate.php"><span></span></a><img src="./img/mate.jpg" alt="Math"><br> Matematica</div>
            <div><a href="./quiz_fizica.php"><span></span></a><img src="./img/fizica.jpg" alt="Physics"><br> Fizica</div>
        </div>

        <?php
            require_once "./footer.php"
    ?>

</body>

</html>