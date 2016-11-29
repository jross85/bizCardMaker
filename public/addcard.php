 <?php include("../layout/header.php"); ?>
 <?php require_once("../includes/db_connection.php"); ?>
<?php
function add_new_card() {
  if (isset($_POST['submit'])) {
    global $connection;

    //Create a database connection
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $phone_number = mysqli_real_escape_string($connection, $_POST['phone_number']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);

    //run query
    $query = "INSERT INTO cards(name, title, phone_number, email, gender";
    $query .= ") VALUES('$name', '$title', '$phone_number', '$email', '$gender')";

    $insert_result = mysqli_query($connection, $query);
    echo "<h2>Success! New Card Created.</h2>";
    //header("Refresh:2;url=" . "main.php");

  } else {
    echo "<h2>No Card Created</h2>";
  }

  return $insert_result;

}

add_new_card();


 ?>
