<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "token";

$uname = $_POST['email'];
$name = $_POST['name'];
$pass = $_POST['password'];


echo " 		<html>
			<head>
			  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
			  <meta http-equiv=\"refresh\" content=\"3;url=/php/menu.php\" />
			  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
			  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
			  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
			</head>
			<body>";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("<div class=\"alert alert-danger\">
  			<strong>Failure: </strong>" . $conn->connect_error . "!!!</div>");
} 

$sql = "INSERT INTO customers (name, email, password) VALUES ('$name', '$uname', '$pass')";
if ($conn->query($sql) === TRUE) {
	echo "
		<div class=\"alert alert-info\">
		  <strong>Info!</strong> Hello '$uname' .!!!
		</div>";

    echo "<div class=\"alert alert-success\">
  			<strong>Success!</strong> You can order your items.!!!
		</div>";
} else {

	echo "Error: " . $sql;
}
echo "</body>
	</html>";
$conn->close();

?>
