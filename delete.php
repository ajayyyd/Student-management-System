<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
include ('db.php');
$adm = $_POST['adm'];
$str1 = "SELECT * FROM student WHERE admno='$adm'";
$str2 = "DELETE FROM student WHERE admno='$adm'";
$result = mysqli_query($conn,$str1);
mysqli_query($conn,$str2);
echo "<h4>Deleted field</h4>";
while ($row = mysqli_fetch_array($result)){
        
    echo "<li>Admission number: $row[0] <br></li>";
    echo "<li>Roll no: $row[1] <br></li>";
    echo "<li>Name: $row[2] <br></li>";
    echo "<li>Date of birth: $row[3] <br></li>";
    echo "<li>Phone number: $row[4] <br></li>";
    echo "<li>Email: $row[5] <br><br></li>";

}

//updated table
echo "<h2>UPDATED TABLE</h2>";
$str3 = "SELECT * FROM student";
$result1 = mysqli_query($conn,$str3);
while ($row = mysqli_fetch_array($result1)){
        
    echo "<li>Admission number: $row[0] <br></li>";
    echo "<li>Roll no: $row[1] <br></li>";
    echo "<li>Name: $row[2] <br></li>";
    echo "<li>Date of birth: $row[3] <br></li>";
    echo "<li>Phone number: $row[4] <br></li>";
    echo "<li>Email: $row[5] <br><br></li>";
}
?>


</body>
</html>