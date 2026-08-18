<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/student.css'); ?>">
</head>
<body>
    <div class="card">
        <h1>Student Information Page</h1>
        <p class="lead">Welcome! This is my home page.
        </p>
        <nav>
            <a href="<?= site_url('/'); ?>">Home</a>
            <a href="<?= site_url('student/profile'); ?>" class="secondary">My Profile</a>
        </nav>
    </div>
</body>
</html>
