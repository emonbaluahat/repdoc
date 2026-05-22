<?php
$current_page = 'changelog';
$page_title = 'Changelog - RepDoc Updates & Releases';
$page_desc = 'Stay up to date with the latest RepDoc features, improvements, and updates.';
include 'header.php';
?>

<section class="page-hero">
<div class="container">
<span class="section-tag">Updates</span>
<h1 class="section-title">Changelog</h1>
<p class="section-desc">Track every improvement we ship</p>
</div>
</section>

<section class="changelog section" data-reveal>
<div class="container">
<div class="changelog-timeline">
<div class="changelog-item" data-reveal>
<div class="changelog-date">v2.0 — March 2026</div>
<h3>Major Platform Redesign</h3>
<div class="changelog-tags">
<span class="changelog-tag new">New</span>
<span class="changelog-tag improved">Improved</span>
</div>
<ul>
<li>Complete UI overhaul with modern SaaS design system</li>
<li>Added real-time document preview functionality</li>
<li>New template customization options for all document types</li>
<li>Performance optimizations — 40% faster generation times</li>
<li>Improved mobile responsiveness across all pages</li>
</ul>
</div>
<div class="changelog-item" data-reveal>
<div class="changelog-date">v1.5 — December 2025</div>
<h3>Security Enhancement Release</h3>
<div class="changelog-tags">
<span class="changelog-tag new">New</span>
<span class="changelog-tag improved">Improved</span>
</div>
<ul>
<li>Implemented 256-bit encryption for all data transmission</li>
<li>Auto-delete system for user data after document generation</li>
<li>Added cookie consent and privacy policy compliance</li>
<li>Enhanced server-side validation and security protocols</li>
</ul>
</div>
<div class="changelog-item" data-reveal>
<div class="changelog-date">v1.3 — July 2025</div>
<h3>New Tools & Features</h3>
<div class="changelog-tags">
<span class="changelog-tag new">New</span>
<span class="changelog-tag fixed">Fixed</span>
</div>
<ul>
<li>Prottoyon Generator launched with full template support</li>
<li>Added lazy loading for improved page speed</li>
<li>Fixed mobile navigation issues on iOS devices</li>
<li>Improved error handling and user feedback messages</li>
</ul>
</div>
<div class="changelog-item" data-reveal>
<div class="changelog-date">v1.1 — April 2025</div>
<h3>Quality of Life Updates</h3>
<div class="changelog-tags">
<span class="changelog-tag improved">Improved</span>
<span class="changelog-tag fixed">Fixed</span>
</div>
<ul>
<li>Birth Certificate Generator enhanced with registration fields</li>
<li>Updated NID template to match latest format specifications</li>
<li>Added smooth scroll and improved navigation experience</li>
<li>Various bug fixes and stability improvements</li>
</ul>
</div>
<div class="changelog-item" data-reveal>
<div class="changelog-date">v1.0 — January 2025</div>
<h3>Initial Launch</h3>
<div class="changelog-tags">
<span class="changelog-tag new">New</span>
</div>
<ul>
<li>NID Replica Generator launched</li>
<li>Birth Certificate Generator launched</li>
<li>Responsive design with dark theme</li>
<li>Basic template system and PDF export</li>
</ul>
</div>
</div>
</div>
</section>

<section class="roadmap section" data-reveal>
<div class="container">
<div class="section-header">
<h2>Future Roadmap</h2>
<p>What we're building next</p>
</div>
<div class="roadmap-grid">
<div class="roadmap-card" data-reveal>
<span class="roadmap-badge">In Development</span>
<h3>Passport Generator</h3>
<p>Full passport replica generation with MRZ codes</p>
<p class="eta">Expected: Q3 2026</p>
</div>
<div class="roadmap-card" data-reveal>
<span class="roadmap-badge">In Development</span>
<h3>API Platform</h3>
<p>REST API for enterprise document generation integration</p>
<p class="eta">Expected: Q4 2026</p>
</div>
<div class="roadmap-card" data-reveal>
<span class="roadmap-badge">Planning</span>
<h3>Mobile App</h3>
<p>Native mobile applications for iOS and Android</p>
<p class="eta">Expected: 2027</p>
</div>
</div>
</div>
</section>

<?php include 'footer.php'; ?>
