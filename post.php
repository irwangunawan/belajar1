<html>
<body>


<?
$connection = mysqli_connect("localhost", "root", "root", "belajar1");

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birthDate = $_POST['birthdate'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$educationLevel = $_POST['educationlevel'];


$query = "INSERT INTO datakaryawan SET
                  firstname='$firstName',
                  lastname='$lastName',
                  email='$email',
                  phone='$phone',
                  birthdate='$birthDate',
                  height='$height',
                  weight='$weight',
                  educationlevel='$educationLevel'
              ";

$result = mysqli_query($connection, $query);

if ($result == true) {
    echo "Input Success";
} else {
    echo "Input failed";
}

//echo $query;
//exit;
//echo "<pre>";
//var_dump($result);
//echo mysqli_error($con);


?>
</br></br>
<a href="http://localhost:8888/belajarphp/registrationpage.php">Back to Register</a>
</br>or</br>
<a href="http://localhost:8888/belajarphp/userdata.php">Go to Employee list</a>
</body>
</html>
