<?php
if(isset($_POST['name']) && isset($_POST['last'])){    #Function put in place to check submissions
  $name= $_POST['name'];        #Creating variables to store the info that is put into name, and last name input box
  $last= $_POST['last'];         
#Test echo: $name;
#Test echo: '<br>' 
#Test ech:$last;
?>

<form action="FinalPrjoect.php" method="POST">
    First name: <h3><input type="text" name="First name" value=name..><h3><br>
    Last name: <h3><input type="text" name="Last name" value=name..><h3><br>
    <input type="hidden" name="form_submitted" value="1"/>

  <input type="submit" value="Submit">

