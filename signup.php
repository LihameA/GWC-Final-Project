<?php
<!doctype html>
 <html>
 <head>
  <title> Final Project</title>
 <link href="FinalPrjoect.css" rel= "stylesheet"/>
  <?php require 'FinalProject.php' ?>
 <script src= "FinalProject.js"></script>
 <script>
function validate(){
 x = document.forms["myform"]["fname"].value;
 if( x = " "){
alert("Name must be filled out");
return False;
 }
}
</script>
</head>
<body background= >
<form name="myForm" action= "Project1.html" onsubmit="return validate()" method="post">
  <div class="container">   <!-- creating the boxes using container witch is ab element in div -->
  <div class="main">
  <center><h1>Unitool<h1><center>
  <h2>Login Form Validation</h2>
  <form id="form_id" method="post" name="myform">

  <label> First name:</label>
  <h3><input type="text" name="First name" value=name..><h3>
  <label>Last name: </label>
  <h3><input type="text" name="Last name" value=name..><h3>
  <label>User Name :</label>
  <input type="text" user="username" id="username"/>
  <label>Password :</label>
  <input type="password" name="password" id="password"/>
  <input type="submit" value="submit"><link onclick=href="Project1.html"/>   <!-- accessing user input by calling the id back-->
  </form>
  </div>
  </div>
  </body>
  </html>
