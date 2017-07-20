<html>
<body>
<?

$getId = $_GET['id'];

$connection = mysqli_connect("localhost", "root", "root", "belajar1");

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birthDate = $_POST['birthdate'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$educationLevel = $_POST['educationlevel'];


$query = "Update datakaryawan SET
                  firstname='$firstName',
                  lastname='$lastName',
                  email='$email',
                  phone='$phone',
                  birthdate='$birthDate',
                  height='$height',
                  weight='$weight',
                  educationlevel='$educationLevel'
              Where id ='$getId'
              ";

$result = mysqli_query($connection, $query);

//echo $query;
//exit;
//echo "<pre>";
//var_dump($result);
//echo mysqli_error($con);


if ($result == true) {
    echo "Edit Success";
} else {
    echo "Edit failed";
}

?>
</br></br>
<a href="http://localhost:8888/belajarphp/userdata.php">Back to Employee list</a>

</body>
</html>
