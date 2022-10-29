<html>
<body>
    <?php
// define variables and set to empty values
$nameErr = $blood_idErr = $blood_groupErr =  "";
$name = $blood_id = $blood_group =  "";
$name1 = $blood_id1 = $blood_group1 =  "";

    ///////id start
    
    
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (empty($_POST["blood_id"])) {
    $blood_idErr = "blood_id is required";
  } else {
    $blood_id = test_input($_POST["blood_id"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[ 0-9 ]*$/",$blood_id)) {
      $blood_idErr = "Only numbers and white space allowed"; 
    }else
    	$blood_id1 = $_POST["blood_id"];
  }echo "<br>";
  ///  id over
    
    
    ///name start
    
  if (empty($_POST["blood_group"])) {
    $blood_groupErr = "blood_group is required";
  } else {
    $blood_group = test_input($_POST["blood_group"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[ a-z A-Z + - ]*$/",$blood_group)) {
      $blood_groupErr = "Only letters and white space allowed"; 
    }else
    	$blood_group1 = $_POST["blood_group"];
  }echo "<br>";

  /// name over
    
    
    
    
    
    
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
$sql = "INSERT INTO blood_details
VALUES ($blood_id1,'$blood_group1')";
if ($conn->query($sql) === TRUE) {
    include 'blood details data store.html';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close()

?>
</body>
</html>
