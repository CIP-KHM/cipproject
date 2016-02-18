<?php
session_start();


$ip="192.168.1.1";
$mac = shell_exec('arp '.$ip.' | awk \'{print $4}\'');
if(!isset($_SESSION["mac"]) && !isset($_SESSION["uname"])) {

	echo '<script type="text/javascript">
         window.location = "/php/index.php"
    </script>';
}


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
$sql = "SELECT * FROM menucard";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
	echo " 
			<head>
			  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
			  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
			  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
			  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
			  <script>
			  $(document).ready(function(){
		        $('#example tbody').on( 'click', 'td', function () {
		            var data=$(this).closest('tr').find('#qty').val();
		            var x=$('#example thead tr th').eq($(this).index()).html().trim();
		           	if(x==\"Minus\")
		           	{
		            	if(data==0)
		            		$(this).closest('tr').find('#qty').val(data);
		            	else
		            		$(this).closest('tr').find('#qty').val(--data);
		            }
		            else if(x==\"Add\")
		            	$(this).closest('tr').find('#qty').val(++data);
		        	});
		    	});
  			</script>
  			<style>
  				input[type=\"text\"], select{
				    width:75%;
				    box-sizing: border-box;
				}
				body{
    font-family: 'Roboto', sans-serif;
  			</style>
			</head>
			<body>

			<div class=\"container\">
			  <div class=\"jumbotron\">
			    <h1>Menu Card</h1>      
			    <p>List of foods we provide.!!!</p>
			  </div>   
			  <div class=\"table-responsive\">          
			  <table class=\"table\" id=\"example\">
			    <thead>
			      <tr>
			        <th>Food Name</th>
			        <th>Time Taken</th>
			        <th>Cost(per piece)</th>
			        <th>Minus</th>
			        <th>No. of items</th>		     			      
			        <th>Add</th>
			      </tr>
			    </thead>
			    ";
     while($row = $result->fetch_assoc()) {

     	if( ($row["choice"] == 0))
     	{
     		echo "
			    <tbody>
			      <tr class=\"danger\">
			        <td>".$row["food"]."</td>
			        <td>".$row["time"]."</td>
			        <td>".$row["cost"]."</td>
		    		<td><button type=\"button\" class=\"btn btn-danger disabled\" field=\"quantity\">-</button></td>
		    		<td><input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"0\" id=\"qty\" /></td>
		    		<td><button type=\"button\" class=\"btn btn-success disabled\" field=\"quantity\" >+</button></td>
        			
			      </tr>
			    </tbody>
         ";
     	}
     	else
     	{
         echo "
			    <tbody>
			      <tr class=\"success\" onclick=\"plus(this)\">
			        <td>".$row["food"]."</td>
			        <td>".$row["time"]."</td>
			        <td>".$row["cost"]."</td>
		    		<td><button type=\"button\" class=\"btn btn-danger\" field=\"quantity\">-</button></td>
		    		<td><input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"0\" id=\"qty\" /></td>
		    		<td><button type=\"button\" class=\"btn btn-success\" field=\"quantity\">+</button></td>
			      </tr>
			    </tbody>
         ";
         }


     }
     echo "</table>
			    </div> 
			    <form class=\"form-horizontal\" role=\"form\" action=\"displayorder.php\" method=\"post\">
			    <input type=\"submit\" class=\"btn btn-success\" value=\"Confirm Order\">
			    <input type=\"submit\" class=\"btn btn-danger\" value=\"Cancel Order\" formaction=\"index.php\">
			    </form>
			    
			 </div>
			 </body>";
} else {
     echo "0 results";
}

$conn->close();
?>
