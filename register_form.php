<?php
session_start();
$errors = array();
$conn = mysqli_connect('localhost','root','root123','food_ordering');
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }

 if(isset($_POST['send'])){
    $name = $_POST['name'];
    $phone = (int) $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $user_check_query = "SELECT * FROM users WHERE email='$email' OR phone='$phone' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['phone'] === $phone) {
            array_push($errors, "Phone already exists");
        }
    
        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
      }

    if (count($errors) == 0) {
    $request = "INSERT INTO users(name, email, password, phone) VALUES ('$name','$email','$password',$phone)";

    mysqli_query($conn, $request);
    header('location:index.php');
    }
 }
mysqli_close($conn);
?>