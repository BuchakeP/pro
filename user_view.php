<!doctype html>
<html>
 <head>
  
 </head>
 <body>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
.vl {
  border-left: 1px solid gray;
  height: 100%;
  position:fixed;
  left: 6%;
  
 
}
</style>

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
       
         <li>php</li>
        <li>java</li>
<li>python</li>
        </ul>
      </li>
      <li><a href="#">Contact us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <?php  $sdata=$this->session->all_userdata();?>
      <li><h4 style="color:white">welcome <?php// echo $sdata['username']; ?></h4></li>
      <li><a href='<?php echo base_url()."index.php/Main/logout"; ?>'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="vl"></div>
<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  
</div>
<div class="w3-sidebar w3-bar-block w3-cyan w3-xmedium" style="width:76px;top:19%;">
 <br><br><br> <a href="#" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a> 
  <hr>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-search"></i></a>  <hr> 
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>  <hr>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-globe"></i></a> <hr>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-trash"></i></a>  <hr>
</div>


<div class=" vl w3-sidebar w3-bar-block w3-cyan w3-card w3-animate-left" style="display:none" id="mySidebar">
  ` <button class="w3-bar-item  w3-button w3-large"
  onclick="w3_close()"><i style="color:red;float:right;"class="fa fa-close"></i></button>
 <a href="#" class="w3-bar-item w3-medium w3-button">Link 1</a>    <hr>
  <a href="#" class="w3-bar-item w3-medium w3-button">Link 2</a> <hr> 
  <a href="#" class="w3-bar-item w3-medium w3-button">Link 3</a> <hr> 
   <a href="#" class="w3-bar-item w3-medium w3-button">Link 4</a> <hr>
    <a href="#" class="w3-bar-item w3-medium w3-button">Link 5</a>
</div>
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "10%";
  document.getElementById("mySidebar").style.width = "15%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'inline-block';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "5%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

<div style="padding-left:10%"id="main">

</div>

  

  <!-- User details -->
  <div style="margin-left:20%;margin-top:10%">
    Select course : <select id='sel_user'>
     <?php 
     foreach($users as $user){
	echo "<option value='".$user['skill']."' >".$user['skill']."</option>";
     }
     ?>
  </select><br>
<div class="well well-lg">

   Course name : <span id='suname'></span><br/>
  Instructor name: <span id='sname'></span><br/>
   Course fees : <span id='semail'></span><br/>
  Duration : <span id='dure'></span><br/>
  </div>

  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type='text/javascript'>
  $(document).ready(function(){
 
   $('#sel_user').change(function(){
    var skill = $(this).val();
    $.ajax({
     url:'<?=base_url()?>index.php/User/userDetails',
     method: 'post',
     data: {skill: skill},
     dataType: 'json',
     success: function(response){
       var len = response.length;
       $('#suname,#sname,#semail,#dure').text('');
       if(len > 0){
         // Read values
         var uname = response[0].skill;
         var name = response[0].instructor;
         var email = response[0].price;
         var dur = response[0].duration;
         $('#suname').text(uname);
         $('#sname').text(name);
         $('#semail').text(email);
         $('#dure').text(dur);
       }
 
     }
   });
  });
 });
 </script>
 </body>
</html>
