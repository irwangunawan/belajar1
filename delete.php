<?php
$connection = mysqli_connect("localhost", "root", "root", "belajar1");
$getId = $_GET['id'];
$query = "DELETE FROM datakaryawan WHERE id ='$getId'";

$result = mysqli_query($connection, $query);

if ($result == true) {
    echo "Delete Success";
} else {
    echo "Delete failed";
}


?>
<html>
<body>

</br></br></br>

<a href="http://localhost:8888/belajarphp/userdata.php">Back to Employee list</a>

</body>

</html>
