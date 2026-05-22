<?php
$current_page = 'contact';
$page_title = 'Contact Us - Get In Touch With RepDoc';
$page_desc = 'Contact RepDoc support team. Email support@repdoc.xyz or use our contact form. We typically respond within 24 hours.';
include 'header.php';
?>

<section class="page-hero">
<div class="container">
<span class="section-tag">Contact</span>
<h1 class="section-title">Get In Touch</h1>
<p class="section-desc">We'd love to hear from you. Reach out anytime.</p>
</div>
</section>

<section class="contact section" data-reveal>
<div class="container">
<div class="contact-wrapper">
<div class="contact-visual" data-reveal="left">
<img src="assets/images/undraw-contact.svg" alt="Contact us" class="img-fluid">
</div>
<form class="contact-form" id="contactForm" data-reveal="right">
<div class="form-group">
<label for="name">Full Name</label>
<input type="text" id="name" placeholder="Enter your name" required>
</div>
<div class="form-group">
<label for="email">Email Address</label>
<input type="email" id="email" placeholder="Enter your email" required>
</div>
<div class="form-group">
<label for="subject">Subject</label>
<input type="text" id="subject" placeholder="What is this about?" required>
</div>
<div class="form-group">
<label for="message">Message</label>
<textarea id="message" placeholder="Describe your query in detail..." required></textarea>
</div>
<button type="submit" class="btn btn-primary btn-lg" style="width:100%;">
Send Message <i class="fas fa-paper-plane"></i>
</button>
</form>
</div>
</div>
</section>

<section class="contact-cards section" data-reveal>
<div class="container">
<div class="contact-cards-grid">
<div class="contact-info-card" data-reveal>
<i class="fas fa-envelope"></i>
<h3>Email Us</h3>
<p><a href="mailto:support@repdoc.xyz" style="color:var(--accent);">support@repdoc.xyz</a></p>
</div>
<div class="contact-info-card" data-reveal>
<i class="fas fa-globe"></i>
<h3>Website</h3>
<p><a href="https://repdoc.xyz" target="_blank" rel="noopener" style="color:var(--accent);">repdoc.xyz</a></p>
</div>
<div class="contact-info-card" data-reveal>
<i class="fas fa-clock"></i>
<h3>Response Time</h3>
<p>Typically within 24 hours</p>
</div>
</div>
</div>
</section>

<section class="faq-links section" data-reveal>
<div class="container">
<h2>Quick Answers</h2>
<div class="faq-links-grid">
<a href="faq.php" class="faq-link-card" data-reveal>
<span>What is RepDoc?</span>
<small>Learn about our platform</small>
</a>
<a href="faq.php" class="faq-link-card" data-reveal>
<span>Is RepDoc secure?</span>
<small>Security & privacy details</small>
</a>
<a href="faq.php" class="faq-link-card" data-reveal>
<span>What documents can I create?</span>
<small>Available templates</small>
</a>
<a href="pricing.php" class="faq-link-card" data-reveal>
<span>Pricing plans</span>
<small>Free, Pro & Enterprise</small>
</a>
</div>
</div>
</section>

<?php include 'footer.php'; ?>
