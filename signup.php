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
  <h2>Javascript Login Form Validation</h2>
  <form id="form_id" method="post" name="myform">
  <label>User Name :</label>
  <input type="text" name="username" id="username"/>
  <label>Password :</label>
  <input type="password" name="password" id="password"/>
  <input type="submit" value="submit"><link onclick=href="Project1.html"/>   <!-- accessing user input by calling the id back-->
  </form>
  </div>
  </div>
  </body>
  </html>
