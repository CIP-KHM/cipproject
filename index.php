<?php
// Start the session
session_start();
      $ip="192.168.1.1";
      $mac = shell_exec('arp '.$ip.' | awk \'{print $4}\'');
      if(!isset($_SESSION["mac"]) && !isset($_SESSION["uname"])) {

      }
      else
      {
        echo '<script type="text/javascript">
                 window.location = "/php/menu.php"
            </script>';
      }
?>
<html>
<head>
	<title>DB using php</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
        body{
    font-family: 'Roboto', sans-serif;
}
  </style>
  <script>
    $(function(){
    $("#pass").each(function(index,input) {
        var $input = $(input);
        $('<label class="showpasswordlabel"/>').append(
            $("<br><input type='checkbox' class='showpasswordcheckbox' />").click(function() {  
                var change = $(this).is(":checked") ? "text" : "password";
                var rep = $("<input readonly='readonly' type='" + change + "' />")
                    .attr("id", $input.attr("id"))
                    .attr("name", $input.attr("name"))
                    .attr('class', $input.attr('class'))
                    .val($input.val())
                    .insertBefore($input);
                $input.remove();
                $input = rep;
             })
        ).append($("<span/>").text(" Show password")).insertAfter($input);
    });
});
  </script>
</head>
<body>
	<div class="container">
  <div class="jumbotron">
    <h1>Token Management</h1>
      <p class="visible-xs">Token system.!!!</p>
	  <p class="visible-sm">Token management system.!!!</p>
	  <p class="visible-md">Token management system for customers.!!!</p>
	  <p class="visible-lg">Token management system for ease of use for customers.!!!</p>
  </div>     
  	<form class="form-horizontal" role="form" action="insert.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Customer Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="email" placeholder="Enter Name" required>
      </div>
    </div>
    
     <?php
    $uname = bin2hex(openssl_random_pseudo_bytes(4));
    $pwd = bin2hex(openssl_random_pseudo_bytes(5));
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "token";
    echo "<div class=\"form-group\">
          <label class=\"control-label col-sm-2\" for=\"name\">Username:</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" class=\"form-control\" name=\"name\" value=\"$uname\" placeholder=\"Enter username\" readonly=\"readonly\">
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label col-sm-2\" for=\"pwd\">Password:</label>
          <div class=\"col-sm-10\">          
            <input type=\"password\" id= \"pass\" class=\"form-control\" name=\"password\" value=\"$pwd\" placeholder=\"Enter password\" readonly=\"readonly\">
          </div>
        </div>";
  ?>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-info" value="Submit">
      </div>
    </div>
  </form>
    <div class="alert alert-info">
  <strong>Info!</strong> Username and password are generated randomnly for future logins.!!!
</div>
</div>
	</body>
</html>
