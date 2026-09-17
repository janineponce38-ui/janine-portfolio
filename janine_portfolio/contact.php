<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php#contact");
    exit;
}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$message = trim($_POST["message"] ?? "");

if ($name === "" || !filter_var($email, FILTER_VALIDATE_EMAIL) || $message === "") {
    die("Please enter a valid name, email, and message. <a href='index.php#contact'>Go back</a>");
}

$stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Message Sent</title>
    <style>body{font-family:Arial;background:#eef9ff;display:grid;place-items:center;min-height:100vh}
    .box{background:#fff;padding:40px;border-radius:18px;box-shadow:0 15px 40px #b8d9ea;text-align:center}
    a{display:inline-block;margin-top:20px;background:#1265c8;color:#fff;padding:10px 18px;border-radius:8px;text-decoration:none}</style></head>
    <body><div class='box'><h1>Thank you!</h1><p>Your message has been saved to the MySQL database.</p>
    <a href='index.php'>Back to Portfolio</a></div></body></html>";
} else {
    echo "Unable to save your message. <a href='index.php#contact'>Go back</a>";
}

$stmt->close();
$conn->close();
?>
