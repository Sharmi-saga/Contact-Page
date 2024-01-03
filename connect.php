<?php 
 $firstname = filter_input(INPUT_POST, 'firstname');
 $lastname = filter_input(INPUT_POST, 'lastname');
 $email = filter_input(INPUT_POST, 'email');
 $phone = filter_input(INPUT_POST, 'phone');
 $message = filter_input(INPUT_POST, 'message');
 
 $host = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname ="contactform";
 $conn= new mysql ($host, $dbusername, $dbpassword, $dbname)
 
 if (mysqli_connect_error())
 {   die ('Connect Error ('. mysqli_connect_errno().')'. mysqli_connect_error(); } 
 
 else
 { 
    $sql = "INSERT INTO contactform (firstname, lastname, email, phone, message ) 
    values ('$firstname', '$lastname', '$email','$phone', '$message',)"; if ($conn->query($sql)) { echo "New record is inserted sucessfully";
    
} else{ 
    echo "Error : "
    . $sql."<br>". $conn->error; 
} 
$conn->close();
 }

?>