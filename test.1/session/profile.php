<?php
session_start();

if (isset($_POST["username"])) {
    $_SESSION["username"] = $_POST["username"];
}

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
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
