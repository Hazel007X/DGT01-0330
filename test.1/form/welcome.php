<html>
<body>
<h2>Form Result</h2>
<center>
<?php
$name    = $_POST["name"] ?? "";
$age     = $_POST["age"] ?? "";
$gender  = $_POST["gender"] ?? "";
$comment = $_REQUEST["comment"] ?? "";

echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Gender: " . $gender . "<br>";

if (!empty($_POST["interest"])) {
    echo "Interest: " . implode(", ", $_POST["interest"]) . "<br>";
}

echo "Comment: " . $comment;
?>
</center>
</body>
</html>
