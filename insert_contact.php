<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $stmt = $con->prepare("INSERT INTO github (full_name, email, phone, message) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $_POST['full_name'], $_POST['email'], $_POST['phone'], $_POST['message']);

  if ($stmt->execute()) {
    echo "Message sent successfully!";
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
  $con->close();
}
