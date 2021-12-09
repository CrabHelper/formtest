<?php

if(isset($_POST['submit'])) {
  
  //defining variables
  $name = $_POST['name'];
  $email = $_POST['email'];
  $list = $_POST['list'];
  
  //write the message
  $fp = fopen('lists.txt', 'a');//opens file in append mode
  fwrite($fp, 'name ' . $name);
  fclose($fp);
  
echo "File appended successfully";
  
}

?>