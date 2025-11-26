<?php
// full name in lower case (ตามโจทย์)
$fullname = "harry potter";

// nickname
$nickname = "harry";

// birth year (เปลี่ยนเป็นปีเกิดตัวเองได้)
$birthYear = 2005;

// split fullname to firstname / lastname
$nameParts = explode(" ", $fullname);
$firstname = strtoupper($nameParts[0]); // HARRY
$lastname  = strtoupper($nameParts[1]); // POTTER

// calculate age from current year
$currentYear = date("Y");
$age = $currentYear - $birthYear;

// update date (today)
$updateDate = date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My PHP</title>
</head>
<body>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <td>Firstname</td>
        <td><?php echo $firstname; ?></td>
    </tr>
    <tr>
        <td>Lastname</td>
        <td><?php echo $lastname; ?></td>
    </tr>
    <tr>
        <td>Nickname</td>
        <td><?php echo strtoupper($nickname); ?></td>
    </tr>
    <tr>
        <td>Age</td>
        <td>
            <span style="color:red;"><?php echo $age; ?></span>
        </td>
    </tr>
    <tr>
        <td>Update</td>
        <td><?php echo $updateDate; ?></td>
    </tr>
</table>

</body>
</html>
