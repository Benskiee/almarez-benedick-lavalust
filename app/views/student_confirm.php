<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/student.css'); ?>">
    <title>Confirm Student ID</title>
</head>
<body>
    <div class="card">
        <h1>Confirm Your Identity</h1>
        <p class="lead">Pleas Enter Student ID to view the profile page.</p>

        <?php if (!empty($error)): ?>
            <div class="error"><?= $error; ?></div>
        <?php endif; ?>

        <form action="<?= site_url('student/confirm'); ?>" method="post">
            <input type="text" name="student_id" placeholder="e.g. MCC2024-00023" required autofocus>
            <p class="lead">Student ID: MCC2024-00023</p>
            <button type="submit">Continue</button>
        </form>
    </div>
</body>
</html>