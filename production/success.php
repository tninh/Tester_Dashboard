<?php
  session_start();
  $username = $_SESSION['user'];
  //echo $username;
  $id = filter_input(INPUT_GET, "id");
  //echo $id;
  require_once("config.php");
  $conn = getPDOConnection();
  echo $query = "UPDATE `user` set `proj_id` = '$id' WHERE username = '$username'";
  $data = $conn -> query($query);
  header("Location: home.php");

?>
