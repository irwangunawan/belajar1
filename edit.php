<?php
$connection = mysqli_connect("localhost", "root", "root", "belajar1");
$getId = $_GET['id'];

$query = mysqli_query($connection, "select * from datakaryawan where id=$getId");
$data = mysqli_fetch_array($query);
//var_dump($data);

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Belajar Edit</title>
</head>
<body>

<h1>
    Edit
</h1>

<form action="postedit.php?id=<?php echo $_GET['id']; ?>" method="post">
    First name:
    <input required type="text" name="firstname"
           value="<?php echo $data[0]; ?>"
           id="firstname">
    <br/><br/>
    Last name:
    <input required type="text"
           name="lastname"
           value="<?php echo $data[1]; ?>"
           id="lastname">
    <br/><br/>
    Email:
    <input required type="email"
           name="email"
           value="<?php echo $data[2]; ?>"
           id="email">
    <br/><br/>
    Phone:
    <input required type="tel"
           name="phone"
           value="<?php echo $data[3]; ?>"
           id="phone">
    <br/><br/>
    Birth date:
    <input required type="date"
           name="birthdate"
           value="<?php echo $data[4]; ?>"
           id="birthdate">
    <br/><br/>
    Height (cm):
    <input required type="text"
           name="height"
           value="<?php echo $data[5]; ?>"
           id="height">
    <br/><br/>
    Weight (kg):
    <input required type="text"
           name="weight"
           value="<?php echo $data[6]; ?>"
           id="weight">
    <br/><br/>
    Education level:
    <select required name="educationlevel">
        <option value="">--Please select--</option>
        <option value="Junior high school" <?php if ($data[7] == 'Junior high school') echo "selected"; ?> >Junior
            highschool
        </option>
        <option value="Senior high school" <?php if ($data[7] == 'Senior high school') echo "selected"; ?> >Senior
            highschool
        </option>
        <option value="Diploma" <?php if ($data[7] == 'Diploma') echo "selected"; ?> >Diploma</option>
        <option value="Bachelor" <?php if ($data[7] == 'Bachelor') echo "selected"; ?> >Bachelor</option>
    </select>
    <br/><br/>
    <input type="submit" name="edit" value='edit'>
</form>

</body>

</html>