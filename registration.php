<?php
 include ('connect.php');

    if($_SERVER["REQUEST_METHOD"]=="POST"){
       $Name=$_POST["name"];
       $Email=$_POST["email"];
       $Password=$_POST["password"];
        $Phoneno=$_POST["phone"];
      
       $qry1="INSERT INTO `data`(`Name`,`Email`, `Password`, `Phoneno`) VALUES ('$Name','$Email','$Password','$Phoneno')";
       $res1=mysqli_query($conn,$qry1);
    }
    else{
       
        echo " failed ";
    }
    mysqli_close($conn);
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration form</title>

</head>
<body>
     <form method="POST" action="">
    <label><h2>Registration form</h2></label><br><br>
    <label for="name"><strong>Name</strong>:</label><br>
     <input type="text"  id="userid" name="name" required><br><br>
     <label for="email"><strong>Email</strong>:</label><br>
     <input type="email"  id="mailid" name="email"><br><br>
     
     <label for="password"><strong>Password</strong>:</label><br>
     <input type="password" id="pass" name="password" required><br><br>
     <label for="phoneno"><strong>Phoneno</strong>:</label><br>
     
     <input type="text" id="phoneno" name="phone" pattern="[0-9]{10}"  required><br><br>
  
     <input type="submit" value="Submit" id="submit">
    </form>
</body>
</html>