<?php include('header.php'); ?>


<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDb";
// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // sql to create table
// $sql = "CREATE TABLE Blogs (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// text text NOT NULL,
// heading VARCHAR(128) NOT NULL,
// img_url VARCHAR(1000),
// created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($conn->query($sql) === TRUE) {
//   echo "Table Blogs created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// $conn->close();
?>

<div class="container">
    <div class="card mt-5">
        <div class="card-body px-5 py-5">
            <form action="submit-form.php" method="POST" class="">
                <div class="form-group mb-3">
                    <label for="">Heading</label>
                    <input name="heading" type="text" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Text</label>
                    <textarea class="form-control" name="text" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="">Image Url</label>
                    <input type="text" name="imageUrl" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Add New Blog" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
</div>




<?php include('footer.php'); ?>
