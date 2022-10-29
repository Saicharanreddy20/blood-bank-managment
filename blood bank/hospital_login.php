<html>
    <body>
    <?php
// define variables and set to empty values
$nameErr =$hospital_idErr = $user_nameErr = $passwordErr = $donor_idErr = "";
$name = $hospital_id = $user_name = $password = $donor_id =  "";
$name1 = $hospital_id1 = $user_name1 = $password1 = $donor_id1  ="";

    ///////hospital_id start
    
    
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (empty($_POST["hospital_id"])) {
    $donor_idErr = "hospital_id is required";
  } else {
    $hospital_id = test_input($_POST["hospital_id"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9 ]*$/",$hospital_id)) {
      $nameErr = "Only number and white space allowed"; 
    }else
    	$hospital_id1 = $_POST["hospital_id"];
  }echo "<br>";
  ///  hospital_id over
    
    
    ///user_name start
    
  if (empty($_POST["user_name"])) {
    $user_nameErr = "name is required";
  } else {
    $user_name = test_input($_POST["user_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$user_name)) {
      $user_nameErr = "Only letters and white space allowed"; 
    }else
    	$user_name1 = $_POST["user_name"];
  }echo "<br>";

  /// user_name over
    
    
    /// password start
    

  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
    // check if password contains only contains letters
    	$password1 = $_POST["password"];
       if (!preg_match("/^[a-zA-Z]*$/",$password)) {
      $passwordErr = "Only letters allowed"; 
    }else
    	$password = $_POST["password"];
  }
  	echo "<br>";
/// passwordis over
    
    
  
/// donor_id start
    
  	if (empty($_POST["donor_id"])) {
    $donor_idErr = "donor_id is required";
  } else {
    $donor_id = test_input($_POST["donor_id"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9 ]*$/",$donor_id)) {
      $donor_idErr = "Only  numbers and white space allowed"; 
    } 
    	else  $donor_id1= $_POST["donor_id"];
  }
    echo "<br>";
    /// donor_id end
    
    
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

////connection

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
////
$sql = "INSERT INTO hospital_login
VALUES ($hospital_id1,'$user_name1','$password1',$donor_id1)";
if ($conn->query($sql) === TRUE) {
    include 'hospital_login data store.html';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close()

?>
</body>
</html>
