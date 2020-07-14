<html>
<body>
 
<?php
$servername = "localhost";
$username = "indocowo_youssef";
$password = "Admin@123";
$dbname = "indocowo_espace";
$name = $_POST['username'];
$pass = $_POST['pass'];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection : " . mysqli_connect_error());
}



 $sql ="SELECT *
  FROM users
   WHERE username = '$name' and password='$pass';";


 $result=mysqli_query($conn, $sql);
 $count = mysqli_num_rows($result);
 
 
 
   if($count ==0){ //0 is going to be replaced by the number of available tables
    echo "Sorry username may not be registered or password is incorrect"
    ."<br/><br/> <a href='javascript:history.back()'><button>Try again</button></a>" ;
    }
 
 
  if($count >=1){ //0 is going to be replaced by the number of available tables
     echo '<script>window.location.href = "../";</script>';
    }
//     else{

// if (mysqli_multi_query($conn,$sql))
// {    echo '<script>window.location.href = "thankyou";</script>';
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
//     }

mysqli_close($conn);
?>
</body>
</html>
 
 
 
 
 
 
 