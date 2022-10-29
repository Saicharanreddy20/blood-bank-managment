<html>
    <body>
    <?php
// define variables and set to empty values
$nameErr = $idErr = $nameErr = $phoneErr = $sexErr = $blood_idErr = "";
$name = $id = $name = $phone = $sex = $blood_id = "";
$name1 = $id1 = $name1 = $phone1 = $sex1  = $blood_id1 = "";

    ///////id start
    
    
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (empty($_POST["id"])) {
    $donor_idErr = "id is required";
  } else {
    $id = test_input($_POST["id"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[ 0-9 ]*$/",$id)) {
      $nameErr = "Only numbers are allowed"; 
    }else
    	$id1 = $_POST["id"];
  }echo "<br>";
  ///  id over
    
    
    ///name start
    
  if (empty($_POST["name"])) {
    $nameErr = "name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-z A-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }else
    	$name1 = $_POST["name"];
  }echo "<br>";

  /// name over
    
    
    /// phone start
    

  if (empty($_POST["phone"])) {
    $phoneErr = "phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if phone contains only contains letters
    	$phone1 = $_POST["phone"];
       if (!preg_match("/^[ 0-9 ]*$/",$phone)) {
      $phoneErr = "Only numbers allowed"; 
    }else
    	$phone = $_POST["phone"];
  }
  	echo "<br>";
/// phoneis over
    
    
  
/// sex start
    
  	if (empty($_POST["sex"])) {
    $sexErr = "sex is required";
  } else {
    $sex = test_input($_POST["sex"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[ a-z A-Z ]*$/",$sex)) {
      $sexErr = "Only  alphabets and white space allowed"; 
    } 
    	else  $sex1= $_POST["sex"];
  }
    echo "<br>";
    /// sex end
    
    
    /// blood id start
    
  	if (empty($_POST["blood_id"])) {
    $blood_idErr = "blood_id is required";
  } else {
    $blood_id = test_input($_POST["blood_id"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[ 0-9 ]*$/",$blood_id)) {
      $blood_idErr = "Only  numbers and white space allowed"; 
    } 
    	else  $blood_id1= $_POST["blood_id"];
  }
    echo "<br>";
    
    /// blood_id end
    
    
    
    
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
$sql = "INSERT INTO requestor
VALUES ('$id1','$name1',$phone1,'$sex1',$blood_id)";
if ($conn->query($sql) === TRUE) {
   include 'requestor data store.html';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close()

?>
</body>
</html>
