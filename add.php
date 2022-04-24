<?php
$servername = "mariadb";
$username = "root";
$password = "rootpwd";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
?>
    <script>
        alert('error');
    </script>
<?php
} else {
?>
    <script>
        alert('connected successfully');
    </script>
<?php
}
?>


<?php


// $ads_id=mysqli_real_escape_string($conn , $_POST["ads_id"]);

$ads_id =  $_REQUEST['ads_id'];
$title = $_REQUEST['title'];
$price =  $_REQUEST['price'];
$description = $_REQUEST['description'];
$product_condition = $_REQUEST['product_condition'];
$category_id = $_REQUEST['category_id'];
$location = $_REQUEST['location'];
$filename = $_REQUEST['filename'];


$sql = "INSERT INTO ads  VALUES ('$ads_id', 
            '$title','$price','$description','$product_condition','$category_id','$location','$filename')";

if (mysqli_query($mysqli, $sql)) {
    echo "<h3>data stored in a database successfully.";

    echo ("\n$ads_id\n $title\n "
        . "$price\n $description\n $product_condition\n $category_id\n $location\n $filename");
} else {
    echo "ERROR ";
}

// Close connection
$mysqli_close($mysqli);
?>

</body>

</html>