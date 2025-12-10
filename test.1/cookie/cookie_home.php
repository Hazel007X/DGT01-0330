<?php
if (!isset($_COOKIE["username"])) {
    echo "No cookie found. <a href='cookie_login.php'>Login</a>";
    exit;
}
?>
<html>
<body>
<h2>Home (Cookie)</h2>

<?php
echo "Welcome, " . $_COOKIE["username"];
?>
<br><br>

<a href="cookie_logout.php">Logout</a>
</body>
</html>
