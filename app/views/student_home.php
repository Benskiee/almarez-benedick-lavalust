<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Portal · Mindoro State University</title>
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
    <div class="resume-hero-wrap">

        <span class="resume-hero-watermark" aria-hidden="true">
            <svg viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="46"/>
                <path d="M34 51l10 10 22-22" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
            </svg>
        </span>

        <div class="resume-hero">
            <p class="resume-hero-kicker">Student Information Portal</p>
            <p class="resume-hero-org">Mindoro State University &middot; Calapan City Campus</p>

            <h1 class="resume-hero-title">Your record,<br><em>on file.</em></h1>

            <p class="resume-hero-lead">
                Enter your Student ID to pull up everything on record —
                course, section, contact details, and your student card,
                all in one place.
            </p>

            <a href="<?= site_url('student/confirm'); ?>" class="resume-hero-cta">
                View My Profile
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h13M13 6l6 6-6 6"/></svg>
            </a>

            <div class="resume-hero-features">
                <span class="resume-hero-feature">
                    <svg viewBox="0 0 24 24"><path d="M9 16.2l-3.5-3.5-1.4 1.4L9 19 20 8l-1.4-1.4z"/></svg>
                    Verified record
                </span>
                <span class="resume-hero-feature">
                    <svg viewBox="0 0 24 24"><path d="M9 16.2l-3.5-3.5-1.4 1.4L9 19 20 8l-1.4-1.4z"/></svg>
                    Always current
                </span>
                <span class="resume-hero-feature">
                    <svg viewBox="0 0 24 24"><path d="M9 16.2l-3.5-3.5-1.4 1.4L9 19 20 8l-1.4-1.4z"/></svg>
                    Secure access
                </span>
            </div>
        </div>

    </div>
</main>

</body>
</html>