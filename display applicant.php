<?php 
// check if the form is submitted
	// 1. Create a new connection to the server and to the database
	$connection = mysqli_connect('localhost', 'root', '','sdf_database');

	// 2. Test if the connection works
	if($connection === false){
		die("An error has occured: " . mysqli_connect_error());
	}
	$result = mysqli_query($connection,"SELECT * FROM applicant");
?>
<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" type="text/css" href="style.css">
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table border="1">
  
  <tr>
    <td>first name</td>
    <td>last name</td>
    <td>gender</td>
    <td>date_of_birth</td>
    <td>highest_academic_level</td>
    <td>province</td>
    <td>district</td>
    <td>sector</td>
    <td>cell</td>
    <td>email</td>
    <td>password</td>
    <td>learning_option_id</td>

  </tr>
  <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["date_of_birth"]; ?></td>
    <td><?php echo $row["highest_academic_level"]; ?></td>
    <td><?php echo $row["province"]; ?></td>
    <td><?php echo $row["district"]; ?></td>
    <td><?php echo $row["sector"]; ?></td>
    <td><?php echo $row["cell"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["password"]; ?></td>
    <td><?php echo $row["learning_option_id"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
 </html>