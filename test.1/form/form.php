<html>
<body>
<h2>Register Form</h2>
<center>
<form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br><br>
    Age: <input type="number" name="age"><br><br>

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Interest:
    <input type="checkbox" name="interest[]" value="Movies"> Movies
    <input type="checkbox" name="interest[]" value="Music"> Music
    <input type="checkbox" name="interest[]" value="Sports"> Sports
    <input type="checkbox" name="interest[]" value="Travel"> Travel
    <br><br>

    Comment:<br>
    <textarea name="comment" rows="3" cols="30"></textarea><br><br>

    <input type="submit" value="Submit">
</form>
</center>
</body>
</html>
