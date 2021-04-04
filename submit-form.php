<?php 
$text = $heading = $imageUrl = "";

if($_POST["text"]){
    $text = $_POST["text"];
}
if($_POST["heading"]){
    $heading = $_POST["heading"];
}
if($_POST["imageUrl"]){
    $imageUrl = $_POST["imageUrl"];
}

echo $heading;
echo "<br/>";
echo $imageUrl;
echo "<br/>";
echo $text;
echo "<br/>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Blogs (heading, img_url, text )
VALUES ('$heading', '$imageUrl', '$text')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>