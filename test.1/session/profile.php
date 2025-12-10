<?php
session_start();
$_SESSION["username"] = $_POST["username"];
?>
<html>
<body>
<h2>User Profile</h2>

<?php
echo "Welcome, " . $_SESSION["username"];
?>
<br><br>

<a href="logout.php">Logout</a>

</body>
</html>
