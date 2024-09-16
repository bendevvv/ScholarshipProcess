<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processed</title>
</head>
<body>
    <?php
        if (!isset($_POST["submit"])) header("Location: Scholarship.html");

        $fName = $_POST["fName"];
        $lName = $_POST["lName"];
        echo "<h3>Thank you for filling out the scholarship form, $fName $lName<h3>"
    ?>
</body>
</html>