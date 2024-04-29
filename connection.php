<?php 
      $email = $_POST['email'];
      $password = $_POST['password'];

      $conn = new mysqli('localhost','root','','task');
      if ($conn->connect_error)
      {
         die("Failed to connect:".$conn->connect_error);
      }
      else{
         $stmt = $conn->prepare("Insert into login(email,password)
         value(?,?)");
         $stmt->bind_param("ss",$email,$password);
         $stmt->execute();
         echo "Login Successfully...";
         $stmt->close();
         $conn->close();
      }
?>