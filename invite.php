<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    setcookie("name", $name, time() + 3600, "/"); // Save name in a cookie for 1 hour
    header("Location: invite.html");
    exit();
}
?>
