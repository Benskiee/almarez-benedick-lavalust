<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * @var string $student_id
 * @var string $name
 * @var string $course
 * @var string $year
 * @var string $section
 * @var string $email
 * @var string $photo
 * @var array  $hobbies
 * @var array  $skills
 * @var array  $socials
 */

$student_id = $student_id ?? '';
$name       = $name ?? '';
$course     = $course ?? '';
$year       = $year ?? '';
$section    = $section ?? '';
$email      = $email ?? '';
$photo      = $photo ?? 'profile.png';
$hobbies    = $hobbies ?? [];
$skills     = $skills ?? [];
$socials    = $socials ?? [];

function social_icon($label)
{
    $key = strtolower(trim($label));

    $icons = [
        'facebook' => [
            'class' => 'facebook',
            'svg' => '<path d="M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.4h-1.2c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12z"/>',
        ],
        'github' => [
            'class' => 'github',
            'svg' => '<path d="M12 2a10 10 0 0 0-3.2 19.5c.5.1.7-.2.7-.5v-1.7c-2.8.6-3.4-1.3-3.4-1.3-.4-1.2-1-1.5-1-1.5-.9-.6.1-.6.1-.6 1 .1 1.5 1 1.5 1 .9 1.5 2.3 1.1 2.9.8.1-.7.4-1.1.6-1.4-2.2-.3-4.6-1.1-4.6-5 0-1.1.4-2 1-2.7-.1-.3-.4-1.3.1-2.6 0 0 .8-.3 2.8 1a9.4 9.4 0 0 1 5 0c1.9-1.3 2.8-1 2.8-1 .5 1.3.2 2.3.1 2.6.6.7 1 1.6 1 2.7 0 3.9-2.4 4.7-4.6 5 .3.3.6.9.6 1.9v2.8c0 .3.2.6.7.5A10 10 0 0 0 12 2z"/>',
        ],
        'instagram' => [
            'class' => 'instagram',
            'svg' => '<path d="M12 2c2.7 0 3.1 0 4.1.1 1 .1 1.7.2 2.3.5.6.2 1.1.6 1.6 1.1.5.5.8 1 1.1 1.6.2.6.4 1.3.5 2.3.1 1 .1 1.4.1 4.1s0 3.1-.1 4.1c-.1 1-.2 1.7-.5 2.3a4.6 4.6 0 0 1-1.1 1.6c-.5.5-1 .8-1.6 1.1-.6.2-1.3.4-2.3.5-1 .1-1.4.1-4.1.1s-3.1 0-4.1-.1c-1-.1-1.7-.2-2.3-.5a4.6 4.6 0 0 1-1.6-1.1 4.6 4.6 0 0 1-1.1-1.6c-.2-.6-.4-1.3-.5-2.3C2 15.1 2 14.7 2 12s0-3.1.1-4.1c.1-1 .2-1.7.5-2.3.2-.6.6-1.1 1.1-1.6.5-.5 1-.8 1.6-1.1.6-.2 1.3-.4 2.3-.5C8.9 2 9.3 2 12 2zm0 1.8c-2.6 0-2.9 0-4 .1-.8.1-1.3.2-1.6.3-.4.2-.7.3-1 .6-.3.3-.5.6-.6 1-.1.3-.3.8-.3 1.6-.1 1.1-.1 1.4-.1 4s0 2.9.1 4c.1.8.2 1.3.3 1.6.2.4.3.7.6 1 .3.3.6.5 1 .6.3.1.8.3 1.6.3 1.1.1 1.4.1 4 .1s2.9 0 4-.1c.8-.1 1.3-.2 1.6-.3.4-.2.7-.3 1-.6.3-.3.5-.6.6-1 .1-.3.3-.8.3-1.6.1-1.1.1-1.4.1-4s0-2.9-.1-4c-.1-.8-.2-1.3-.3-1.6a2.7 2.7 0 0 0-.6-1 2.7 2.7 0 0 0-1-.6c-.3-.1-.8-.3-1.6-.3-1.1-.1-1.4-.1-4-.1zm0 3.4a4.8 4.8 0 1 1 0 9.6 4.8 4.8 0 0 1 0-9.6zm0 1.8a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm5-2a1.1 1.1 0 1 1-2.2 0 1.1 1.1 0 0 1 2.2 0z"/>',
        ],
    ];

    return $icons[$key] ?? [
        'class' => 'default',
        'svg' => '<path d="M3.9 12a4.1 4.1 0 0 1 4.1-4.1h4v1.7h-4a2.4 2.4 0 1 0 0 4.8h4V16h-4A4.1 4.1 0 0 1 3.9 12zm6-1h4.2v2H9.9v-2zM16 7.9h4a4.1 4.1 0 1 1 0 8.2h-4v-1.7h4a2.4 2.4 0 1 0 0-4.8h-4V7.9z"/>',
    ];
}

/**
 * Split "First Last" so the surname can be set on its own weight/line
 * in the resume masthead. Falls back gracefully for single-word names.
 */
function resume_name_parts($full)
{
    $parts = preg_split('/\s+/', trim($full));
    if (count($parts) < 2) {
        return ['given' => $full, 'family' => ''];
    }
    $family = array_pop($parts);
    return ['given' => implode(' ', $parts), 'family' => $family];
}

$name_parts = resume_name_parts($name);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ? $name . ' · ' : ''; ?>Student Record · Mindoro State University</title>
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
<div class="resume-shell">

    <aside class="resume-sidebar">
        <div class="resume-photo-wrap">
            <img src="<?= base_url('assets/css/images/' . $photo); ?>" alt="Profile Photo" class="resume-photo">
            <span class="resume-seal" title="MinSU Verified Student">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M9 16.2l-3.5-3.5-1.4 1.4L9 19 20 8l-1.4-1.4z"/>
                </svg>
            </span>
        </div>

        <div class="resume-section">
            <h2 class="resume-eyebrow">Contact</h2>
            <p class="resume-contact-line"><?= $email; ?></p>
        </div>

        <?php if (!empty($skills)): ?>
        <div class="resume-section">
            <h2 class="resume-eyebrow">Skills</h2>
            <ul class="resume-tag-stack">
                <?php foreach ($skills as $skill): ?>
                    <li><?= $skill; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>

        <?php if (!empty($hobbies)): ?>
        <div class="resume-section">
            <h2 class="resume-eyebrow">Hobbies</h2>
            <ul class="resume-tag-stack resume-tag-stack--muted">
                <?php foreach ($hobbies as $hobby): ?>
                    <li><?= $hobby; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>

        <?php if (!empty($socials)): ?>
        <div class="resume-section">
            <h2 class="resume-eyebrow">Connect</h2>
            <ul class="resume-social-row">
                <?php foreach ($socials as $social):
                    $icon = social_icon($social['label']);
                ?>
                    <li>
                        <a href="<?= $social['url']; ?>" target="_blank" rel="noopener" class="<?= $icon['class']; ?>" title="<?= $social['label']; ?>">
                            <svg class="resume-social-icon" viewBox="0 0 24 24" aria-hidden="true"><?= $icon['svg']; ?></svg>
                            <span class="sr-only"><?= $social['label']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
    </aside>

    <section class="resume-main">
        <div class="resume-masthead">
            <span class="resume-masthead-label">Mindoro State University &middot; Official Student Record</span>
            <h1 class="resume-name">
                <?= $name_parts['given']; ?><?php if ($name_parts['family']): ?> <span class="resume-name-family"><?= $name_parts['family']; ?></span><?php endif; ?>
            </h1>
            <p class="resume-subtitle">
                <?php
                    $subtitle_parts = array_filter([$course, $year ? $year . ' Year' : '', $section ? 'Section ' . $section : '']);
                    echo implode(' &nbsp;&middot;&nbsp; ', $subtitle_parts);
                ?>
            </p>
        </div>

        <hr class="resume-divider">

        <div class="resume-record">
            <h2 class="resume-eyebrow resume-eyebrow--record">Academic Record</h2>

            <div class="resume-record-row">
                <span class="resume-record-label">Student ID</span>
                <span class="resume-record-value resume-id"><?= $student_id; ?></span>
            </div>
            <div class="resume-record-row">
                <span class="resume-record-label">Course</span>
                <span class="resume-record-value"><?= $course; ?></span>
            </div>
            <div class="resume-record-row">
                <span class="resume-record-label">Year Level</span>
                <span class="resume-record-value"><?= $year; ?></span>
            </div>
            <div class="resume-record-row">
                <span class="resume-record-label">Section</span>
                <span class="resume-record-value"><?= $section; ?></span>
            </div>
            <div class="resume-record-row">
                <span class="resume-record-label">Email</span>
                <span class="resume-record-value"><?= $email; ?></span>
            </div>
        </div>

        <nav class="resume-footer">
            <a href="<?= site_url('/'); ?>" class="resume-home-link">&larr; Back to Home</a>
        </nav>
    </section>

</div>
</main>

</body>
</html>