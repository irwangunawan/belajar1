<html>
<head>
    <meta charset="utf-8">
    <title>Employee List</title>
    <style>table, th, td {
            border: 1px solid black;
        }</style>
</head>
<br>

<h1>
    User data
</h1>
<table style="width:100%">
    <tr>
        <th>Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Birth date</th>
        <th>Height</th>
        <th>Weight</th>
        <th>Education Level</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>

    <script>
        function myFunction(id) {
            var txt;
            var r = confirm("Are you sure want to delete this record!");
            if (r == true) {
                window.location.href = 'http://localhost:8888/belajarphp/delete.php?id=' + id;
            } else {
                return false;
            }
        }
    </script>

    <?php
    $connection = mysqli_connect("localhost", "root", "root", "belajar1");
    $query = "Select id,firstname,lastname,email,phone,birthdate,height,weight,educationlevel,status from Datakaryawan";
    $result = mysqli_query($connection, $query);
    ?>

    <?php

    while ($data = mysqli_fetch_array($result)) {
        $id = $data['id'];
        echo "    
        <tr>
            <td>" . $data['id'] . "</td>
            <td>" . $data['firstname'] . "</td>
            <td>" . $data['lastname'] . "</td>
            <td>" . $data['email'] . "</td>
            <td>" . $data['phone'] . "</td>
            <td>" . $data['birthdate'] . "</td>
            <td>" . $data['height'] . "</td>
            <td>" . $data['weight'] . "</td>
            <td>" . $data['educationlevel'] . "</td>
            <td>" . $data['status'] . "</td>
            <td>
                <a href='http://localhost:8888/belajarphp/edit.php?id=" . $data['id'] . "'><input type='submit' name='edit' value='Edit'></a>
                <input onclick=\"myFunction($data[id])\" type='submit' name='delete' value='Delete' id='delete'>
            </td>
        </tr> 
        ";
    }
    ?>
</table>


</br></br></br>
<a href="http://localhost:8888/belajarphp/registrationpage.php">Back to Register</a>

</body>

</html>