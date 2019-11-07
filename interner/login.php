<?php

session_start();

$servername = "localhost";
$username = "chinonso";
$password = "chinonso";
$db = "interner";
// Create connection

  //connection to the sever and database
  $conn = new mysqli($servername, $username, $password, $db);


  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }    // code...
  $email = $_POST['email'];
  $pswd = $_POST['pswd'];



    $sql =  "SELECT * FROM details WHERE email='$email' AND pswd='$pswd'";
    $result =  mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) == 1){
      //code to fetch the details of user unpon login so it can be used in in userpage
      $fetch = mysqli_fetch_array($result);
      $_SESSION['name'] = $fetch['name'];
        $_SESSION['email'] = $fetch['email'];
          $_SESSION['phone'] = $fetch['phone'];
            $_SESSION['dob'] = $fetch['dob'];
              $_SESSION['school'] = $fetch['school'];
                $_SESSION['course'] = $fetch['course'];
                $_SESSION['city'] = $fetch['city'];
     header("Refresh:1; url=dashboard.php");
      echo "welcome";
    }else {
      echo "bounce out";
      header("Refresh:100; url=signin.html");
      echo "Input the correct username and password";
    }

  ?>
