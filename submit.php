<?php
// submit.php

// If someone opens submit.php directly without submitting the form
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
    exit;
}

// Safely read form values
$full_name = htmlspecialchars($_POST['full_name'] ?? '');
$email     = htmlspecialchars($_POST['email'] ?? '');
$phone     = htmlspecialchars($_POST['phone'] ?? '');
$course    = htmlspecialchars($_POST['course'] ?? '');
$gender    = htmlspecialchars($_POST['gender'] ?? '');
$address   = htmlspecialchars($_POST['address'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page-wrapper">
        <header class="page-header">
            <h1>Registration Successful</h1>
            <p class="subtitle">Thank you for submitting your details.</p>
        </header>

        <section class="card">
            <h2 style="margin-bottom: 15px; font-size: 18px;">Submitted Details</h2>
            <div class="form-group">
                <strong>Full Name:</strong> <?php echo $full_name; ?>
            </div>
            <div class="form-group">
                <strong>Email:</strong> <?php echo $email; ?>
            </div>
            <div class="form-group">
                <strong>Phone:</strong> <?php echo $phone; ?>
            </div>
            <div class="form-group">
                <strong>Course:</strong> <?php echo $course; ?>
            </div>
            <div class="form-group">
                <strong>Gender:</strong> <?php echo $gender; ?>
            </div>
            <div class="form-group">
                <strong>Address:</strong><br>
                <?php echo nl2br($address); ?>
            </div>

            <a href="index.html">
                <button type="button">Back to Form</button>
            </a>
        </section>

        <footer class="page-footer">
            <p>You may take a screenshot for your project documentation.</p>
        </footer>
    </div>
</body>
</html>
