<?php

$servername = "localhost";
$username = "chinonso";
$password = "chinonso";
$db = "interner";
// Create connection

  //connection to the sever and database
  $conn = new mysqli($servername, $username, $password, $db);


  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
    $name = $_POST['name'];
    $pswd = $_POST['pswd'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob= $_POST['dob'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $job = $_POST['job'];
    $duration = $_POST['duration'];
    $school = $_POST['school'];
    $location = $_POST['location'];
    $course = $_POST['course'];
    $gpa = $_POST['gpa'];
    $scale = $_POST['scale'];

    $sql = " INSERT INTO details SET

            name =' $name',
            pswd = '$pswd',
            gender = '$gender',
            email = '$email',
            phone = '$phone',
            dob = '$dob',
            state = '$state',
            city = '$city',
            job = '$job',
            duration = '$duration',
            school = '$school',
            location = '$location',
            course = '$course',
            gpa = '$gpa',
            scale = '$scale'
        ";

$result =  mysqli_query($conn,$sql);



  header("Refresh:1; url=signin.html");





?>
