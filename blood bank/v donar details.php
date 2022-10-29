<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
<style>
    table {
        border-collapse:collapse;
        width: 90%;
    }
td{
        text-align: center;
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
                        <th><font style="font-family:courier;"><font size="4"><center>Donor Id</center></font></font></th>
                        <th><font style="font-family:courier;"><font size="4"><center>Name</center></font></font></th>
                     <th><font style="font-family:courier;"><font size="4"><center>Blood Group</center></font></font></th>
                        <th><font style="font-family:courier;"><font size="4"><center>Age</center></font></font></th>
                        <th><font style="font-family:courier;"><font size="4"><center>Phone</center></font></font></th>
					      	    	    <th></th>
					      	    	    <th></th>
					          		</tr>
								</thead>
					          	<tbody >
					          		<?php
										$sql="CALL `BBP`();";
										$result = $conn->query($sql);
							            if($result->num_rows > 0){
							              while($row = $result->fetch_assoc()){
							              	echo "<tr>";
							                echo "<td>".$row["donor_id"]."</td>";
							                echo "<td>".$row["name"]."</td>";
							                echo "<td>".$row["blood_group"]."</td>";
							                echo "<td>".$row["age"]."</td>";
                                            echo "<td>".$row["phn"]."</td>";
                                              
							                echo "</tr>";
							              }
							            }
									?>
					          	</tbody> 
      						</table>
      						<a href="admin1.html" class="btn btn-primary">HOME</a>
                            <a href="del.php" class="btn btn-primary">delete</a>
						</div>
	<div class="col-md 3"></div>
</body>
</html>
