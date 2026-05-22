<?php
$page_title = $page_title ?? 'RepDoc - Professional Replica Document Generator';
$page_desc = $page_desc ?? 'Create precise, high-quality replica documents with RepDoc. Fast, secure, and reliable document generation platform.';
$current_page = $current_page ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
<meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
<meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="https://repdoc.xyz">
<meta property="og:image" content="https://repdoc.xyz/assets/images/og-image.png">
<meta name="twitter:card" content="summary_large_image">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div id="preloader">
<div class="preloader-content">
<div class="preloader-ring">
<div class="preloader-ring-inner"></div>
<div class="preloader-logo">
<svg viewBox="0 0 200 40" class="logo-svg">
<defs>
    <linearGradient id="logoGrad" x1="0%" y1="0%" x2="100%" y2="100%">
<stop offset="0%" style="stop-color:#A30B11"/>
<stop offset="100%" style="stop-color:#E65A28"/>
</linearGradient>
</defs>
<text x="0" y="30" font-family="Inter, sans-serif" font-weight="800" font-size="28" fill="url(#logoGrad)">REPDOC</text>
</svg>
</div>
</div>
</div>
</div>

<div class="marquee-bar">
<div class="marquee-track">
<span><i class="fas fa-triangle-exclamation"></i> এই ওয়েবসাইট শুধুমাত্র ডেমো, ডিজাইন ও শিক্ষামূলক উদ্দেশ্যে তৈরি। কোনো সরকারি ডকুমেন্টের অপব্যবহার আইনত দণ্ডনীয়।</span>
<span><i class="fas fa-triangle-exclamation"></i> এই ওয়েবসাইট শুধুমাত্র ডেমো, ডিজাইন ও শিক্ষামূলক উদ্দেশ্যে তৈরি। কোনো সরকারি ডকুমেন্টের অপব্যবহার আইনত দণ্ডনীয়।</span>
</div>
</div>

<div class="scroll-progress" id="scrollProgress"></div>

<nav class="navbar" id="navbar">
<div class="nav-container">
<a href="index.php" class="nav-logo">
<svg viewBox="0 0 160 32" class="logo-svg" width="140" height="28">
<defs>
    <linearGradient id="navLogoGrad" x1="0%" y1="0%" x2="100%" y2="100%">
<stop offset="0%" style="stop-color:#A30B11"/>
<stop offset="100%" style="stop-color:#E65A28"/>
</linearGradient>
</defs>
<text x="0" y="24" font-family="Inter, sans-serif" font-weight="800" font-size="22" fill="url(#navLogoGrad)">REPDOC</text>
</svg>
</a>
<ul class="nav-links" id="navLinks">
<li><a href="index.php" class="nav-link<?= $current_page === 'index' ? ' active' : '' ?>">Home</a></li>
<li><a href="features.php" class="nav-link<?= $current_page === 'features' ? ' active' : '' ?>">Features</a></li>
<li><a href="about.php" class="nav-link<?= $current_page === 'about' ? ' active' : '' ?>">About</a></li>
<li><a href="pricing.php" class="nav-link<?= $current_page === 'pricing' ? ' active' : '' ?>">Pricing</a></li>
<li><a href="faq.php" class="nav-link<?= $current_page === 'faq' ? ' active' : '' ?>">FAQ</a></li>
<li><a href="changelog.php" class="nav-link<?= $current_page === 'changelog' ? ' active' : '' ?>">Updates</a></li>
<li><a href="contact.php" class="nav-link<?= $current_page === 'contact' ? ' active' : '' ?>">Contact</a></li>
</ul>
<div class="nav-actions">
<a href="features.php" class="btn btn-primary btn-sm nav-cta">Get Started</a>
<button class="hamburger" id="hamburger" aria-label="Menu">
<span></span><span></span><span></span>
</button>
</div>
</div>
</nav>

<main class="main-content">
