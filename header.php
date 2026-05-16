<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
<script>document.documentElement.setAttribute('data-theme',localStorage.getItem('repdoc-theme')==='light'?'light':'dark');</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RepDoc - Replica Document Generator</title>
<meta name="description" content="RepDoc - Professional replica document generation platform.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="marquee-bar">
<div class="marquee-track">
<i class="fas fa-triangle-exclamation"></i> <span data-i18n="legal-notice">Legal Notice: Any misuse of this platform is solely the user's responsibility. The website and its owner shall not be held liable for any legal issues arising from such misuse.</span>
</div>
</div>

<nav class="navbar" id="navbar">
<div class="nav-container">
<a href="index.php" class="nav-logo">
<img src="assets/images/repdoc_logo.png" alt="RepDoc" class="logo-img">
<span class="logo-text">RepDoc</span>
</a>
<ul class="nav-links" id="navLinks">
<li><a href="index.php" class="nav-link<?= ($current_page ?? '') === 'index' ? ' active' : '' ?>" data-i18n="nav-home">Home</a></li>
<li><a href="features.php" class="nav-link<?= ($current_page ?? '') === 'features' ? ' active' : '' ?>" data-i18n="nav-features">Features</a></li>
<li><a href="about.php" class="nav-link<?= ($current_page ?? '') === 'about' ? ' active' : '' ?>" data-i18n="nav-about">About</a></li>
<li><a href="why.php" class="nav-link<?= ($current_page ?? '') === 'why' ? ' active' : '' ?>" data-i18n="nav-why">Why RepDoc</a></li>
<li><a href="faq.php" class="nav-link<?= ($current_page ?? '') === 'faq' ? ' active' : '' ?>" data-i18n="nav-faq">FAQ</a></li>
</ul>
<div class="nav-actions">
<button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">
<i class="fas fa-moon"></i>
</button>
<button class="lang-toggle" id="langToggle" aria-label="Toggle language">EN</button>
<button class="hamburger" id="hamburger" aria-label="Menu">
<span></span><span></span><span></span>
</button>
</div>
</div>
</nav>
