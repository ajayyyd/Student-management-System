<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
<body>
<header>
    <h1>Student Management System</h1>
</header>
    <section class="entry">
        <h1 align="center">STUDENT DATA ENTRY</h1>
        <form action="create.php" method="post">
            <label> Admission number: </label>
            <input type="number" name="admno"><br><br>
            <label> Roll No: </label>
            <input type="number" name="rollno"><br><br>
            <label> Name: </label>
            <input type="text" name="name"><br><br>
            <label>Date of Birth: </label>
            <input type="date" name="dob"><br><br>
            <label>Phone number: </label>
            <input type="number" name="phno" ><br><br>
            <label>Email id: </label>
            <input type="email" name="mail"><br><br>
            <input type="submit" name="submit"><br><br>
        </form>
    <section class="update">
        <h1 align="center">STUDENT DATA UPDATE</h1>
    <form action="update.php" method="post">
            <label>Enter Admission number: </label>
            <input type="number" name="adm" minlength="3"><br><br>
            <label>What do you want to update: </label>
            <label for="options">Choose an option:</label>
            <select id="options" name="options">
                <option value="name">Name</option>
                <option value="dob">Date of Birth</option>
                <option value="phno">Phone Number</option>
                <option value="email">Email</option>
            </select>
            Enter new value: <input type="text" name="new">
            <button value="submit">Update</button>
        </form>
    </section>

    <section class="delete">
    <h1 align="center">STUDENT DATA DELETE</h1>
    <form action="delete.php" method="post">
            <label>Enter admno of the student data you want to delete: </label>
            <input type="number" name="adm" minlength="3"><br><br>
            <input type="submit" name="submit"><br><br>
    </section>
<!-- footer -->
    <footer>
    <p>&copy; 2024 Student Management System</p>
</footer>
</body>
<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "studentmanagement";
    
    
    
    try{
        $conn = mysqli_connect($host,
                             $username,
                              $password, 
                              $database);
    }
    catch(mysqli_sql_exception){
        echo "could not connect";
    }
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    
    
?>
</html>


