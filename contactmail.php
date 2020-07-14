<html>
<body>
 
<?php
$servername = "localhost";
$username = "indocowo_youssef";
$password = "Admin@123";
$dbname = "indocowo_espace";
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$emailtoespace = $name . " sent a message. " . $message;
$emailtouser = "Thanks " . $name . ", your message has been sent succesfully.";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection : " . mysqli_connect_error());
}


$sql = "INSERT INTO contact (
 name, email, date, message
) VALUES('$name','$email', CURRENT_TIMESTAMP ,'$message');";



// $result = $conn->query($sql);
// $query = mysqli_query($conn, $sql);


if (mysqli_query($conn, $sql)) {
    mail ( 'youssefyasser276@gmail.com' , "New message" ,  $emailtoespace);
    mail ( $email , "ESPACE DESIGN" ,   $emailtouser);
   
    echo '<script>window.location.href = "thankyou.html";</script>';
}
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>






