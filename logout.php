<?php
  session_start();
  // destroy the session
  session_destroy();

  header("Location: homepage.php"); //go to student view
  exit;
 ?>
