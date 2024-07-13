<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>updated table</h1>
<?php
include ('db.php');
$adm = $_POST['adm'];
$options = $_POST['options'];
$new = $_POST['new'];
echo "<h4>New $options: $new</h4>";

$str="SELECT * FROM student WHERE admno='$adm'";
$str2 = "UPDATE student set $options='$new' WHERE admno='$adm'";
$result=mysqli_query($conn,$str);
mysqli_query($conn,$str2);


while ($row = mysqli_fetch_array($result)){
        
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
