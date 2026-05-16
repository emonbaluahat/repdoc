<!DOCTYPE html>
<html lang="en">
<head>
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
<span><i class="fas fa-triangle-exclamation"></i> দাবিত্যাগ: এই প্ল্যাটফর্ম শুধুমাত্র ব্যক্তিগত ব্যবহারের জন্য। যেকোনো অপব্যবহারের সম্পূর্ণ দায়িত্ব ব্যবহারকারীর। অপব্যবহারজনিত কোনো আইনি পরিণতির জন্য REPDOC দায়ী থাকবে না।</span>
</div>
</div>

<nav class="navbar" id="navbar">
<div class="nav-container">
<a href="index.php" class="nav-logo">
<img src="assets/images/repdoc_logo.png" alt="RepDoc" class="logo-img">
</a>
<ul class="nav-links" id="navLinks">
<li><a href="index.php" class="nav-link<?= ($current_page ?? '') === 'index' ? ' active' : '' ?>">Home</a></li>
<li><a href="features.php" class="nav-link<?= ($current_page ?? '') === 'features' ? ' active' : '' ?>">Features</a></li>
<li><a href="about.php" class="nav-link<?= ($current_page ?? '') === 'about' ? ' active' : '' ?>">About</a></li>
<li><a href="why.php" class="nav-link<?= ($current_page ?? '') === 'why' ? ' active' : '' ?>">Why RepDoc</a></li>
<li><a href="faq.php" class="nav-link<?= ($current_page ?? '') === 'faq' ? ' active' : '' ?>">FAQ</a></li>
</ul>
<div class="nav-actions">
<button class="hamburger" id="hamburger" aria-label="Menu">
<span></span><span></span><span></span>
</button>
</div>
</div>
</nav>
