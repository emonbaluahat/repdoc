<?php $current_page = 'index'; include 'header.php'; ?>

<section class="hero" id="hero">
<canvas id="particleCanvas"></canvas>
<div class="hero-content">
<div class="hero-text">
<div class="hero-badge">Trusted by hundreds of users</div>
<h1 class="hero-title">Professional-Grade Document Replicas</h1>
<p class="hero-subtitle">Create precise, high-quality replica documents — built for speed and accuracy.</p>
<div class="hero-actions">
<a href="features.php" class="btn btn-primary">Get Started</a>
<a href="about.php" class="btn btn-outline">Learn More</a>
</div>
</div>
<div class="hero-visual">
<lottie-player src="assets/animations/explore.json" background="transparent" speed="0.8" loop autoplay></lottie-player>
</div>
</div>
<div class="hero-stats">
<div class="hero-stat"><span class="stat-number" data-count="50">0</span><span class="stat-label">Documents Generated</span></div>
<div class="hero-stat"><span class="stat-number" data-count="10">0</span><span class="stat-label">Active Users</span></div>
<div class="hero-stat"><span class="stat-number" data-count="99">0</span><span class="stat-label">Accuracy Rate</span></div>
</div>
</section>

<?php include 'footer.php'; ?>
