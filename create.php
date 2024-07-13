<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Table Data</h1>
<?php
include ('db.php');
    $admno = $_POST['admno'];
    $rno = $_POST['rollno'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $phno = $_POST['phno'];
    $email = $_POST['mail'];

    $str1="INSERT INTO student (admno, rollno, name, dob, phno, email )VALUES ('$admno', '$rno', '$name', '$dob', '$phno', '$email')";
    mysqli_query($conn,$str1);
    $str2="SELECT * FROM student";
    $result=mysqli_query($conn,$str2);
    while ($row = mysqli_fetch_array($result)){
        
        echo "<li>Admission number: $row[0] <br></li>";
        echo "<li>Roll no: $row[1] <br></li>";
        echo "<li>Name: $row[2] <br></li>";
        echo "<li>Date of birth: $row[3] <br></li>";
        echo "<li>Phone number: $row[4] <br></li>";
        echo "<li>Email: $row[5] <br><br></li>";
        
    
        
        
        
        
        
        

    }
    mysqli_close($conn);

        

    

?>
</body>
</html>


