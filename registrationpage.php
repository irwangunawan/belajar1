<html>
<head>
    <meta charset="utf-8">
    <title>Belajar Submit</title>
</head>
<body>

<h1>
    Input
</h1>

<form action="post.php" method="post">
    First name:
    <input required type="text" name="firstname" id="firstname">
    <br/><br/>
    Last name:
    <input required type="text" name="lastname" id="lastname">
    <br/><br/>
    Email:
    <input required type="email" name="email" id="email">
    <br/><br/>
    Phone:
    <input required type="tel" name="phone" id="phone">
    <br/><br/>
    Birth date:
    <input required type="date" name="birthdate" id="birthdate">
    <br/><br/>
    Height (cm):
    <input required type="text" name="height" id="height">
    <br/><br/>
    Weight (kg):
    <input required type="text" name="weight" id="weight">
    <br/><br/>
    Education level:
    <select required name="educationlevel">
        <option value="">--Please select--</option>
        <option value="Junior high school">Junior high school</option>
        <option value="Senior high school">Senior high school</option>
        <option value="Diploma">Diploma</option>
        <option value="Bachelor">Bachelor</option>
    </select>
    <br/><br/>
    <input type="submit" name="submit" value="Register">
</form>

</body>

</html>