<html>
    <body>
    <?php
// define variables and set to empty values
$nameErr = $hospital_idErr = $blood_idErr = $qtyErr =  "";
$name = $hospital_id = $blood_id = $qty =  "";
$name1 = $hospital_id1 = $blood_id1 = $qty1  = "";

    ///////hospital_id start
    
    
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (empty($_POST["hospital_id"])) {
    $hospital_idErr = "hospital_id is required";
  } else {
    $hospital_id = test_input($_POST["hospital_id"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[ 0-9 ]*$/",$hospital_id)) {
      $hospital_idErr = "Only numbers are allowed"; 
    }else
    	$hospital_id1 = $_POST["hospital_id"];
  }echo "<br>";
  ///hospital_id over
    
    
    ///blood_id start
    
  if (empty($_POST["blood_id"])) {
    $blood_idErr = "blood_id is required";
  } else {
    $blood_id = test_input($_POST["blood_id"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[ 0-9 ]*$/",$blood_id)) {
      $blood_idErr = "Only numbers and are allowed"; 
    }else
    	$blood_id1 = $_POST["blood_id"];
  }echo "<br>";

  /// blood_id over
    
    
    /// qty start
    

  if (empty($_POST["qty"])) {
    $qtyErr = "quantity is required";
  } else {
    $qty = test_input($_POST["qty"]);
    // check if phone contains only contains letters
    	$qty1 = $_POST["qty"];
       if (!preg_match("/^[ 0-9 ]*$/",$qty)) {
      $qtyErr = "Only numbers allowed"; 
    }else
    	$qty = $_POST["qty"];
  }
  	echo "<br>";

    /// qty is over
    

    
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
$sql = "INSERT INTO blood_inventory
VALUES ($hospital_id1,$blood_id1,$qty1)";
if ($conn->query($sql) === TRUE) {
    include 'blood inventory data store.html';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close()

?>
</body>
</html>
