
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
.vl {
  border-left: 2px solid gray;
  height: 500px;
  position:fixed;
  left: 12%;
  
 
}
</style>

<div class="vl"></div>
<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  
</div>
<div class="w3-sidebar w3-bar-block  w3-xmedium" style="width:73px;top:48px;">
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a> 
  <hr>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-search"></i></a>  <hr> 
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>  <hr>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-globe"></i></a> <hr>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-trash"></i></a>  <hr>
</div>


<div class=" vl w3-sidebar w3-bar-block  w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item  w3-button w3-xxlarge"
  onclick="w3_close()"><i style="float:right"class="fas fa-chevron-left"></i></button>
  <a href="#" class="w3-bar-item w3-medium w3-button">Link 1</a>    <hr>
  <a href="#" class="w3-bar-item w3-medium w3-button">Link 2</a> <hr> 
  <a href="#" class="w3-bar-item w3-medium w3-button">Link 3</a> <hr> 
   <a href="#" class="w3-bar-item w3-medium w3-button">Link 4</a> <hr>
    <a href="#" class="w3-bar-item w3-medium w3-button">Link 5</a>
</div>

<div id="main">





<div class="w3-container">
<p>In this example, the sidebar is hidden (style="display:none")</p>
<p>It is shown when you click on the menu icon in the top left corner.</p>
<p>When it is opened, it shifts the page content to the right.</p>
<p>We use JavaScript to add a 25% left margin to the div element with id="main" when this happens. The value "25%" matches the width of the sidebar.</p>
</div>

</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "35%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Grofits</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
   
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
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

  Welcome <?php echo $this->session->userdata('user'); ?>   
<br>  
    <?php echo anchor('Login/logout', 'Logout'); ?>  
  

<?php //foreach($user as $us):?>
<h1 style="color:red;"><?php //echo $us['skill'];?></h1>
<?php// endforeach?>