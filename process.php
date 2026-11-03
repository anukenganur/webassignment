<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST['fullName']));
    $email = htmlspecialchars(trim($_POST['email']));
    $course = htmlspecialchars(trim($_POST['course']));

    echo "<div class='success-card'>";

    echo "<h3>Registration Successful!</h3>";

    echo "<p><strong>Name:</strong> " . $name . "</p>";

    echo "<p><strong>Email:</strong> " . $email . "</p>";

    echo "<p><strong>Course:</strong> " . $course . "</p>";

    echo "</div>";
}

?>