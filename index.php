<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>

<!--
 Server


https://localhost/practice/index.php ? 

fname=Mahbub+Rashid &
lname=Tonoy &
email=mrmahbubtonoy%40gmail.com &
pwd=123456789


-->

  
<form action="index.php" method="POST" >
 <input type="text" placeholder="First Name" name="fname" /><br/>
 <input type="text" placeholder="Last Name" name="lname" /><br/>
 <input type="email" placeholder="Email" name="email" /><br/>
 <input type="password" placeholder="Password" name="pwd" /><br/>
 <input type="submit" value="Submit" />
</form>

<?php


 if(isset($_POST['fname'])) {
  
  echo "<br/>";
  echo "First Name: " . $_POST['fname'] . "<br/>";
  echo "Last Name: " . $_POST['lname'] . "<br/>";
  echo "Email: " . $_POST['email'] . "<br/>";
  // echo "Password: " . $_POST['pwd'] . "<br/>";
  
 }

?>


</body>
</html>