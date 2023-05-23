<?php

$host = 'localhost';
$db = 'your_database_name';
$user = 'your_username';
$password = 'your_password';


$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn) {
  die('Failed to connect to database: ' . mysqli_connect_error());
}


$full_name = $_POST['full_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];


if (empty($full_name) || empty($email) || empty($gender)) {
  die('Please fill in all required fields.');
}


$insertQuery = "INSERT INTO students (full_name, email, gender) VALUES ('$full_name', '$email', '$gender')";
if (mysqli_query($conn, $insertQuery)) {
  echo 'Registration successful!';
} else {
  echo 'Error: ' . mysqli_error($conn);
}


mysqli_close($conn);
<?php

$host = 'localhost';
$db = 'your_database_name';
$user = 'your_username';
$password = 'your_password';


$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn) {
  die('Failed to connect to database: ' . mysqli_connect_error());
}


$query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
  echo '<h2>Registered Students:</h2>';
  echo '<table>';
  echo '<tr><th>ID</th><th>Full Name</th><th>Email</th><th>Gender</th></tr>';
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['full_name'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['gender'] . '</td>';
    echo '</tr>';
 

?>
