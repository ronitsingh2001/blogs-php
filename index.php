<?php include('header.php'); ?>

<?php

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

$sql = "SELECT id, heading, img_url, text, created_at FROM Blogs";
$result = $conn->query($sql);

$date = $text = $heading = $imageUrl = "";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $text = $row["text"];
    $imageUrl = $row["img_url"];
    $heading = $row["heading"];
    $date = $row["created_at"];
    // echo $row["created_at"];
    // echo "id: " . $row["id"]. " - Name: " . $row["heading"]. " " . $row["img_url"]. " ". $row["text"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();


?>


    <div class="container">
        <div class="card shadow-sm text-center mt-3">
            <img class="card-img-top mx-auto" style="width:50vw" src="<?php echo $imageUrl ?>" alt="">
            <div class="card-img">
            </div>
            <div class="card-body">
                <h3><?php echo $heading; ?></h3>
                <b>Text:</b>
                <?php echo $text; ?>
            </div>
            <div class="card-footer text-start">
                <div class="row">
                    <span class="col-6"><i class="bi bi-chat text-primary fs-5"></i> comment</span>
                    <p class="col-6 text-end"><b>Date Created</b>: <?php echo $date; ?> </p>
                </div>
            </div>
        </div>

        <form class="p-4 m-5 card" action="submit.php" method="GET">
            <div class="card-body">

                Name: <input type="text" class="form-control" name="name"><br>
                E-mail: <input type="text" class="form-control" name="email"><br>
                <input class="btn btn-primary" type="submit">
            </div>
        </form>
    </div>
<?php include('footer.php'); ?>
