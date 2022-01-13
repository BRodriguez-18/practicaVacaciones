<?php

include('../db.php');

if (isset($_POST['save'])) {
  $name = $_POST['name'];
  $description = $_POST['description'];
  $query = "INSERT INTO categorias(name, description) VALUES ('$name', '$description')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: ../index.php');

}

?>