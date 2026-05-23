<?php
$current_page = 'faq';
$page_title = 'FAQ - Frequently Asked Questions About RepDoc';
$page_desc = 'Find answers to common questions about RepDoc document generation, security, pricing, and more.';
include 'header.php';
?>

<section class="page-hero">
<div class="container">
<span class="section-tag">FAQ</span>
<h1 class="section-title">Frequently Asked Questions</h1>
<p class="section-desc">Got questions? We've got answers.</p>
</div>
</section>

<section class="faq-section section" data-reveal>
<div class="container">
<div class="faq-controls">
<input type="text" class="faq-search" id="faqSearch" placeholder="Search questions...">
<div class="faq-categories">
<button class="faq-cat active" data-cat="all">All</button>
<button class="faq-cat" data-cat="general">General</button>
<button class="faq-cat" data-cat="security">Security</button>
<button class="faq-cat" data-cat="tools">Tools</button>
<button class="faq-cat" data-cat="pricing">Pricing</button>
<button class="faq-cat" data-cat="technical">Technical</button>
</div>
</div>
<div class="faq-list">
<div class="faq-item" data-cat="general">
<div class="faq-question">
<h3>What is RepDoc?</h3>
<i class="fas fa-chevron-down"></i>
</div>
<div class="faq-answer">
<p>RepDoc is an online platform that lets you generate replica documents including NID, Birth Certificates, Prottoyon, and more. Our focus is on accuracy, speed, and simplicity.</p>
</div>
</div>
<div class="faq-item" data-cat="general">
<div class="faq-question">
<h3>How does RepDoc work?</h3>
<i class="fas fa-chevron-down"></i>
</div>
<div class="faq-answer">
<p>Simply choose a template, fill in your details through our guided form, preview the result, and download your document. The entire process takes less than a minute.</p>
</div>
</div>
<div class="faq-item" data-cat="security">
<div class="faq-question">
<h3>Is RepDoc secure?</h3>
<i class="fas fa-chevron-down"></i>
</div>
<div class="faq-answer">
<p>Absolutely. All data is encrypted using 256-bit encryption during transmission. We automatically delete your information after document generation. We never store or share personal data.</p>
</div>
</div>
<div class="faq-item" data-cat="security">
<div class="faq-question">
<h3>What happens to my data?</h3>
<i class="fas fa-chevron-down"></i>
</div>
<div class="faq-answer">
<p>Your data is processed in real-time and automatically purged from our systems immediately after your document is generated. We maintain a strict zero-storage policy.</p>
</div>
</div>
<div class="faq-item" data-cat="tools">
<div class="faq-question">
<h3>What documents can I create?</h3>
<i class="fas fa-chevron-down"></i>
</div>
<div class="faq-answer">
<p>Currently available: NID Replica, Birth Certificate, and Prottoyon generators. Coming soon: Passport, Driving License, Trade License, Academic Certificates, and more.</p>
</div>
</div>
<div class="faq-item" data-cat="tools">
<div class="faq-question">
<h3>Are the templates accurate?</h3>
<i class="fas fa-chevron-down"></i>
</div>
<div class="faq-answer">
<p>Yes. All our templates are carefully crafted to match original document layouts with precision. We continuously update them to maintain accuracy.</p>
</div>
</div>
<div class="faq-item" data-cat="pricing">
<div class="faq-question">
<h3>Is RepDoc free to use?</h3>
<i class="fas fa-chevron-down"></i>
</div>
<div class="faq-answer">
<p>We offer a Free plan with basic access. Our Pro plan unlocks unlimited usage and priority support. Enterprise plans are available for organizations with custom needs.</p>
</div>
</div>
<div class="faq-item" data-cat="pricing">
<div class="faq-question">
<h3>Are there any usage limits?</h3>
<i class="fas fa-chevron-down"></i>
</div>
<div class="faq-answer">
<p>Free plan includes 1 document per day. Pro plan offers unlimited document generation. Enterprise plans have custom limits based on your requirements.</p>
</div>
</div>
<div class="faq-item" data-cat="technical">
<div class="faq-question">
<h3>What formats are supported?</h3>
<i class="fas fa-chevron-down"></i>
</div>
<div class="faq-answer">
<p>Documents can be downloaded in PDF format with high-resolution output. We also support PNG preview for quick visual verification before download.</p>
</div>
</div>
<div class="faq-item" data-cat="technical">
<div class="faq-question">
<h3>Do I need to create an account?</h3>
<i class="fas fa-chevron-down"></i>
</div>
<div class="faq-answer">
<p>No account required for basic usage. Simply visit the tool page, enter your details, and generate. Account creation is optional and provides access to additional features.</p>
</div>
</div>
<div class="faq-item" data-cat="technical">
<div class="faq-question">
<h3>Can I use RepDoc on mobile?</h3>
<i class="fas fa-chevron-down"></i>
</div>
<div class="faq-answer">
<p>Yes! RepDoc is fully responsive and works seamlessly on all devices including smartphones, tablets, and desktops.</p>
</div>
</div>
<div class="faq-item" data-cat="general">
<div class="faq-question">
<h3>How can I contact support?</h3>
<i class="fas fa-chevron-down"></i>
</div>
<div class="faq-answer">
<p>You can reach us at <a href="mailto:support@repdoc.xyz" style="color:#DCC3AA;">support@repdoc.xyz</a>. We typically respond within 24 hours. You can also use our contact form.</p>
</div>
</div>
</div>
</div>
</section>

<?php include 'footer.php'; ?>
