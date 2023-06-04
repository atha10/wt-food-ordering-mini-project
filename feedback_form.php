<?php
session_start();
$errors = array();
$conn = mysqli_connect('localhost','root','root123','food_ordering');
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }

 if(isset($_POST['send'])){
    $rating = (int) $_POST['rating'];
    $comment = $_POST['comment'];
    $user_id = $_SESSION['user_id'];

    $user_check_query = "SELECT * FROM feedback WHERE user_id='$user_id' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['user_id'] === $user_id) {
            array_push($errors, "Rating already exists");
            header('location:feedback.php');
        }
      }

    if (count($errors) == 0) {
    $request = "INSERT INTO feedback(user_id, rating, comment) VALUES ($user_id,$rating,'$comment')";

    mysqli_query($conn, $request);
    header('location:index.php');
    }
 }
mysqli_close($conn);
?>