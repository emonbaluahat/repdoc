<?php
$current_page = '404';
$page_title = '404 - Page Not Found | RepDoc';
$page_desc = 'The page you are looking for does not exist. Return to RepDoc homepage.';
include 'header.php';
?>

<section class="error-page">
<div class="error-content">
<img src="assets/images/undraw-404.svg" alt="404 illustration" class="img-fluid">
<h1>404</h1>
<h2>Page Not Found</h2>
<p>The page you're looking for doesn't exist or has been moved.</p>
<a href="index.php" class="btn btn-primary btn-lg">Back to Homepage</a>
</div>
</section>

<?php include 'footer.php'; ?>
