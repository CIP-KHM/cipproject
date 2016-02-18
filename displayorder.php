<?php
session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "token";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
echo " 		<html>
			<head>
			  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
			  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
			  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
			  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
			</head>
			<body>";
echo "<div class=\"alert alert-info\">
  <strong>Update!</strong> Your Orders will be displayed here.!!!!!!
</div>";
echo "
				<form class=\"form-horizontal\" role=\"form\" action=\"logout.php\" method=\"post\">
			    	<input type=\"submit\" class=\"btn btn-danger\" value=\"Logout\"\">
			    </form>
";

$conn->close();
?>
