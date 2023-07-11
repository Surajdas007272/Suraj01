<!DOCTYPE html>
<html>
<head>
    <title>ET&T Apply Form</title>
    <style>
        body{
            background-color:#000000;
        }
        lable{
            color:#ffffff;
        }
        #N1{
            border-style:solid;
            border-radius:40px;
            text-align:center;
            border-color:#6500ff;
        }
        #E2{
            border-style:solid;
            border-radius:40px;
            text-align:center;
            border-color:#6500ff;
        }
        #M3{
            border-style:solid;
            border-radius:40px;
            text-align:center;
            border-color:#6500ff;
        }
        #Submit{
            background-color:#6500ff;
            color:#ffffff;
            border-radius:40px;
            width:340px;
            height:40px;
        }
    </style>
</head>
<body>
    <form action="inputforetandt.php" method="POST">
   <lable>Name:</lable><input type="username" name="name" autofill="off" required placeholder="Your FullName" id="N1"><br><br>
   <lable>Email:</lable><input type="email" name="email" autofill="off" required placeholder="Enter Your Gmail or email" id="E2"><br><br>
   <lable>Mobile Number:</lable><input type="number" name="tel" autofill="off" placeholder="Your Mobile Number" required id="M3"><br><br>
   <input type="SUBMIT" value="SUBMIT" id="Submit" name="submit">
   </form>
</body>
</html>
<?php
{
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$mobilenumber = strip_tags($_POST['tel']);
$conn= new mysqli('localhost:3306','root','root','My first database');
if($conn->connect_error){
    echo"conn->connect_error";
    die("connection failed:".$conn->connect_error);
}else{
  $stmt=$conn->prepare("insert into `ET&T`(`name`,`email`,`mobile number`)values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$mobilenumber);
    $execval=$stmt->execute();
    echo $execval;
    echo"submited";
    $stmt->close();
    $conn->close();
    }
}
?>
