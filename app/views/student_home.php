<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home · Mindoro State University</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/student.css'); ?>">
</head>
<body class="resume-body">

<header class="site-header">
    <img src="https://minsu.edu.ph/template/images/logo.png" alt="MinSU Logo">
    <div class="brand-text">
        <strong>Mindoro State University</strong>
        <span>Calapan City Campus</span>
    </div>
</header>

<main class="page-body">
    <div class="resume-gate">
        <span class="resume-gate-seal" aria-hidden="true">
            <svg viewBox="0 0 24 24">
                <path d="M9 16.2l-3.5-3.5-1.4 1.4L9 19 20 8l-1.4-1.4z"/>
            </svg>
        </span>

        <p class="resume-gate-kicker">Student Information Portal</p>
        <p class="resume-gate-org">Mindoro State University &middot; Calapan City Campus</p>

        <h1 class="resume-gate-title">Welcome back</h1>
        <p class="resume-gate-lead">
            Look up your academic record, contact details, and student card
            whenever you need them.
        </p>

        <nav class="resume-gate-nav">
            <a href="<?= site_url('student/confirm'); ?>" class="resume-gate-btn resume-gate-btn--primary">View My Profile</a>
            <a href="<?= site_url('/'); ?>" class="resume-gate-btn resume-gate-btn--outline">Home</a>
        </nav>
    </div>
</main>

</body>
</html>