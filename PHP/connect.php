<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$database = "project";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $service = isset($_POST["service"]) ? $_POST["service"] : "";
    $message = $_POST["message"];
    $member = $_POST["member"];

    $sql = "INSERT INTO mainpage (name, email, gender, service, message, member)
            VALUES ('$name', '$email', '$gender', '$service', '$message', '$member')";

    if ($conn->query($sql) === TRUE) {
        header("Location: confirmation.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
