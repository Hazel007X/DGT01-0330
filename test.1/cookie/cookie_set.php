<?php
$username = $_POST["username"];

// cookie อายุ 1 ชั่วโมง
setcookie("username", $username, time() + 3600);
?>
<html>
<body>
Cookie saved! <a href="cookie_home.php">Go to Home</a>
</body>
</html>
