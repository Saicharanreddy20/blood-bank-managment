<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood bank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
    $id = $_POST['donor_id'];
    $name =$_POST['name'];
    $bg =$_POST['blood_group'];
    $age = $_POST['age'];
    $phn = $_POST['phn'];

        $sql = " UPDATE donar_details SET `name` = '$name',`blood_group` = '$bg',`age` = '$age', `phn` = '$phn' WHERE `donor_id` = '$id' ";
      
        if(mysqli_query($conn,$sql))
            header('Location:v_donar_details.php');
        else 
            echo "Error updating record: " . $conn->error;
    
 
$conn->close();
?>