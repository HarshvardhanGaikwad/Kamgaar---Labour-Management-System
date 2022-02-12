<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p> helo bitch</p>
<?php
    $username = "root";
    $password = "Gaikwad@155508";
    $database = "testpassword";
    $conn = new mysqli("localhost", "root", "Gaikwad@155508", "testpassword");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT c_id,cname, cadd, username, c_pass, phone, email FROM customer";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>address</th>
        <th>username</th>
        <th>password</th>
        <th>phone</th>
        <th>email</th>
        </tr>";
    // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["c_id"]. "</td><td>"
            . $row["cname"]. "</td><td> "
            . $row["cadd"]. "</td><td>"
            . $row["username"]. "</td><td>"
            . $row["c_pass"]. "</td><td>"
            . $row["phone"]. "</td><td>"
            . $row["email"]. "</td></tr>";
        }
        echo "</table>";
    } else {
     echo "0 results";
    }
$conn->close();
?>





    
</body>
</html>