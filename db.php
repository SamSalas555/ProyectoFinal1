<?php
  $conn =  mysqli_connect(
    'localhost',
    'root',
    '',
    'cendi'
  );

  if(isset($conn)){
    echo 'Database connection succes';
  }
?>

