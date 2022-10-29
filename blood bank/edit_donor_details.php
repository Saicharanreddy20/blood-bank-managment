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

if(isset($_GET["del_id"])){

    $d=$_GET["del_id"];
    
    $query = mysqli_query($conn,"SELECT * FROM donar_details WHERE donor_id=$d");
    $row = mysqli_fetch_assoc($query);   
}




$conn->close();
?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
        <style> 
            
    
            input{
                font-size: x-large;
                box-shadow: 2px 2px 4px black;
                border:none;
            }

            
</style>
        <title>donor details</title>
    </head>
    <body background="b.jpg">
        <img src="5.gif" alt="Flowers in Chania" style="float:left" width="180" height="180">
        <form action="edit_donor.php" method="POST">
            <center><font size="6"><font color="yellow">DONOR DETAILS</font></font></center>
       <table>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <input type="hidden" name="donor_id" value=<?php echo $row['donor_id'];?> required>
   <tr>
       <td><font style="font-family:courier;"><font size="5"><font color="yellow"><h4 style="text-align:center;"> Name:</h4></font></font></font></td>
    <td><input type="text" name="name" value=<?php echo $row['name'];?> required></td>
   </tr>
<tr>
    <td><font style="font-family:courier;"><font size="5"><font color="yellow"><h4 style="text-align:center;">Blood Group :</h4></font></font></font></td>
    <td><input type="text" name="blood_group" value=<?php echo $row['blood_group'];?> required></td>
   </tr>
     <tr>
         <td><font style="font-family:courier;"><font size="5"><font color="yellow"><h4 style="text-align:center;">Age:</h4></font></font></font></td>
    <td><input type="number" name="age" value=<?php echo $row['age'];?> required></td>
   </tr>
<tr>
    <td><font style="font-family:courier;"><font size="5"><font color="yellow"><h4 style="text-align:center;">Phone:</h4></font></font></font></td>
    <td><input type="number" name="phn" value=<?php echo $row['phn'];?> required></td>
   </tr>
    </table><br><br>
            <tr>
                <a href="admin1.html" class="btn btn-primary">Home</a>
                 <button type="submit" value="Submit"  name="btn_sub" class="btn btn-primary" >submit</button>
                
                </tr>
        </form>
    </body>
</html>