<?php
session_start();

// initializing variables
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chestionare";
$db = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db($db,'proiect');
var_dump($_POST);
// REGISTER USER
  // receive all input values from the form
  $nume=$_POST['nume'];
  $prenume=$_POST['prenume'];
  $email = $_POST['email'];
  $password_1 = hash("sha256",$_POST['password']);
  // header('location:register.php');
  // if (empty($nume)) { array_push($errors, "Numele este necesar"); }
  // if (empty($email)) { array_push($errors, "Email-ul este necesar "); }
  // if (empty($password_1)) { array_push($errors, "Parola este necesara"); }
  // echo '1';

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  // $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  // $result = mysqli_query($db, $user_check_query);
  // $user = mysqli_fetch_assoc($result);
  //   if ($user['email'] === $email) {
  //     array_push($errors, "Email-ul exista deja");
  //   }
  // }
  $s ="SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($db,$s);
  $numar =mysqli_num_rows($result);
  // Finally, register user if there are no errors in the form
  if ($numar==1) {
    echo "Email already taken";
    ;//encrypt the password before saving in the database
  // 	$query = "INSERT INTO users (`nume`,`prenume`, `email`,`password`) 
  // 			  VALUES('$nume','$prenume' '$email', '$password_1')";
  // 	mysqli_query($db, $query);
  //  echo 'You are now registered succesfully';
  // 	header('location: login.php');
 }
 else{
   $sql = "INSERT INTO `users`(`nume`, `prenume`, `email`,`password`,`role_id`) VALUES ('$nume','$prenume','$email','$password_1',1)";
   $rez=mysqli_query($db,$sql);
   echo "Registration succesfully";
   header('location:login.php');
 }
 ?>