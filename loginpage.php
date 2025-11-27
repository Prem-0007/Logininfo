<!DOCTYPE html>

<head>
    <style>
        body {
            background-color: #ffffffff;
        }

        .php {
            font-size: 35px;
            font-weight: bold;
            margin: 30px;
            font-family: 'Poppins', sans-serif;
            text-shadow: 0 0 3px #ff0000, 0 0 8px #0000ff;
        }
    </style>
</head>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<div class="php">';
    $name = $_POST["name"] ?? '';
    $password = $_POST["password"] ?? '';
    $remember = $_POST["remember"] ?? '';
    echo "Login info Retrieved Successfully !!!";
    echo "<br><br>";
    echo "Your Username: " . $name . "<br>";
    echo "Your Password: " . $password . "<br>";
    echo "Remember: " . $remember;
    echo '</div>';
}
?>