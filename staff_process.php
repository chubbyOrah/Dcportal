<?php
include("db_connection.php");




if (isset($_POST['submit'])) {
    $DepartmentID = $_POST['DepartmentID'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Gender = $_POST['Gender'];
    $DoB = $_POST['DoB'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $email = $_POST['email'];
    $Address = $_POST['Address'];
    $Position = $_POST['Position'];
     $Status = $_POST['Status'];

     $sql = "INSERT INTO staff (DepartmentID, FirstName,LastName,Gender, DoB, PhoneNumber,email,Address,Position,Status) VALUES ('$DepartmentID', '$FirstName','$LastName','$Gender', '$DoB', '$PhoneNumber','$email','$Address','$Position','$Status')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} 
   
    // Close the database connection
    $conn->close();

?>
