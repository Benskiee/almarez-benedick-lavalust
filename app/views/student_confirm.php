<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Student ID · Mindoro State University</title>
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

        <h1 class="resume-gate-title">Confirm your identity</h1>
        <p class="resume-gate-lead">
            Enter your Student ID to view your academic record.
        </p>

        <?php if (!empty($error)): ?>
            <div class="resume-gate-error"><?= $error; ?></div>
        <?php endif; ?>

        <form action="<?= site_url('student/confirm'); ?>" method="post">
            <div class="resume-gate-field">
                <label for="student_id" class="resume-gate-label">Student ID</label>
                <input
                    type="text"
                    id="student_id"
                    name="student_id"
                    class="resume-gate-input"
                    placeholder="e.g. MCC2024-00023"
                    required
                    autofocus
                >
            </div>
             <label for="student_id" class="resume-gate-label">my ID No. MCC2024-00023</label>
            <button type="submit" class="resume-gate-btn resume-gate-btn--primary resume-gate-btn--block">Continue</button>
        </form>
    </div>
</main>

</body>
</html>