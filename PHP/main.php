
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $o = $_POST["email"];
    $message = $_POST["message"];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $message = filter_var($message, FILTER_SANITIZE_STRING);
    $to = $email;
    $subject = "Thank you for contacting ";
    $message = "Dear $name,\n\nThank you for contacting . We appreciate your message and will get back to you as soon as possible.\n\nBest regards,\nSkillSparkle Team";
    $headers = "From: meraweshah.tt@gmail.com";
    mail($to, $subject, $message, $headers);
    echo "<div style='text-align:center; margin-top:20px; color: #ffffff;'>Thank you, $name! We'll get back to you soon.</div>";
} else {
    echo "Invalid form submission.";
}
?>
