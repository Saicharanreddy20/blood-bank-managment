<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
<style>
    table {
        border-collapse: collapse;
        width: 90%;
    }
td{
        text-align: left;
        padding: 8px;
        border: 2px solid black;
    }
    tr:nth-child(even){background-color: gainsboro; color: black}
    th{background-color: red; color: black;
    }
    </style>


</head>
<body  background="b.jpg">
    <center><body text="WHITE">>
	<div class="row">
	<div class="col-md 3">	</div>

<div class="sm 9">

	<?php $servername="localhost";
            $username="root";
            $password="";
            $dbname="blood bank";

            $conn = new mysqli($servername,$username,$password,$dbname);

            if($conn->connect_error){
              echo "<script>";
              echo "M.toast({html: 'Unable to connect to db !!!!!!', classes: 'rounded'})";
              echo "</script>";
              die("connection failed".$conn->connect_err);
            }
?>
    <font size="6"><font color="yellow">Donor Details</font></font>
						<div style="height: 62vh; overflow-y:scroll;">
							<table class="highlight" border="0.1">
								<thead>
									<tr>
                                        <th><font style="font-family:courier;"><font size="4">Hospital ID</font></font></th>
                                        <th><font style="font-family:courier;"><font size="4">Donor ID</font></font></th>
                                        <th><font style="font-family:courier;"><font size="4">Quantity</font></font></th>
                                         
					      	    	    <th></th>
					      	    	    <th></th>
					          		</tr>
								</thead>
					          	<tbody >
					          		<?php
										$sql="SELECT * FROM blood_inventory;";
										$result = $conn->query($sql);
							            if($result->num_rows > 0){
							              while($row = $result->fetch_assoc()){
							              	echo "<tr>";
							                echo "<td>".$row["hospital_id"]."</td>";
							                echo "<td>".$row["blood_id"]."</td>";
							                echo "<td>".$row["qty"]."</td>";
							               
                                              
							                echo "</tr>";
							              }
							            }
									?>
					          	</tbody> 
      						</table>
      						<a href="admin1.html" class="btn btn-primary">HOME</a>
						</div>
	<div class="col-md 3"></div>
</body>
</html>
