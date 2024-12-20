<?php
session_start();
include("header.html")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    This is the <b>home</b> page of my website. <br>

    <br><br><br>
</body>

</html>

<?php

echo "Login credentials:<br>";
echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br><br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Log Out">
    </form>
</body>

</html>

<?php
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: session.php");
}

include("footer.html")
?>