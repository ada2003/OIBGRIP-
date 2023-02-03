<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "feedback";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO form_data (name, email, message)
  VALUES ('$name', '$email', '$message')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
 
  $conn->close();
  $_POST['name'] = '';
  $_POST['email'] = '';
  $_POST['message'] = '';
  header("Location: http://localhost/Potfolio/index.php");
  exit;
}
