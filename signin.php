<!DOCTYPE html>  
<html>  
<head>  
    <title>Sign Up Page</title>  
</head>  
<body>  

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Grofits</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
   
      <li><a href="#">About us</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Training
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">PHP</a></li>
          <li><a href="#">PYTHON</a></li>
          <li><a href="#">Java</a></li>
	<li><a href="#">Databases</a></li>
         <li><a href="#">javascript</a></li>
        <li><a href="#">C#</a></li>
        </ul>
      </li>
      <li><a href="#">Contact us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="<?php echo base_url()."index.php/Main/signin"; ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
    <h1>Sign In</h1>  
  
    <?php  
  
    echo form_open('Main/savingdata');  
  
    echo validation_errors();  
    
    echo "<p>Username:"; 
    
    echo form_input('username');
    
    echo "</p>";  
  
    echo "<p>Password:";  
    echo form_password('password');  
    echo "</p>";  
  
    echo "<p>Confirm Password:";  
    echo form_password('cpassword');  
    echo "</p>";  
  
    echo "<p>";  
    echo form_submit('signin_submit', 'Sign In');  
    echo "</p>";  
  
    echo form_close();  
  
    ?>  
  
</body>  
</html>  