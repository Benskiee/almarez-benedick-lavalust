<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * @var string $student_id
 * @var string $name
 * @var string $course
 * @var string $year
 * @var string $section
 * @var string $email
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/student.css'); ?>">
</head>
<body>
    <div class="card">
        <img src="<?= base_url('assets/css/images/profile.png'); ?>" alt="Profile Photo" class="profile-img">
        <h1>Student Information</h1>

        <div class="info-row">
            <span class="label">Student ID</span>
            <span class="value"><?= $student_id; ?></span>
        </div>
        <div class="info-row">
            <span class="label">Name</span>
            <span class="value"><?= $name; ?></span>
        </div>
        <div class="info-row">
            <span class="label">Course</span>
            <span class="value"><?= $course; ?></span>
        </div>
        <div class="info-row">
            <span class="label">Year Level</span>
            <span class="value"><?= $year; ?></span>
        </div>
        <div class="info-row">
            <span class="label">Section</span>
            <span class="value"><?= $section; ?></span>
        </div>
        <div class="info-row">
            <span class="label">Email</span>
            <span class="value"><?= $email; ?></span>
        </div>

        <nav>
            <a href="<?= site_url('/'); ?>" class="secondary">Home</a>
         
        </nav>
    </div>
</body>
</html>