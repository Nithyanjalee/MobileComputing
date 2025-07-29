<?php 
$host = 'localhost';
$user = 'root';
$password = '#Strong123';
$database = 'studentdatabase';
$connect = mysqli_connect($host, $user, $password, $database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT StudentID, FirstName, LastName, Height, PhoneNumber FROM student";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>STUDENT LIST five</h2>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Height (cm)</th>
            <th>Phone Number</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['StudentID']}</td>
                <td>{$row['FirstName']}</td>
                <td>{$row['LastName']}</td>
                <td>{$row['Height']}</td>
                <td>{$row['PhoneNumber']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No students found.";
}

mysqli_close($connect);
?>
