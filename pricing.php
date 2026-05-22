<?php
$current_page = 'pricing';
$page_title = 'Pricing - RepDoc Plans & Features';
$page_desc = 'Choose the right RepDoc plan for your needs. Free, Pro, and Enterprise options available with flexible features.';
include 'header.php';
?>

<section class="page-hero">
<div class="container">
<span class="section-tag">Pricing</span>
<h1 class="section-title">Choose Your Plan</h1>
<p class="section-desc">Start free, scale as you grow. No hidden fees.</p>
</div>
</section>

<section class="pricing section" data-reveal>
<div class="container">
    <div class="pricing-grid">
      <div class="pricing-card featured" data-reveal>
        <div class="pricing-badge">Most Popular</div>
        <h3>Pro</h3>
        <p class="price">$9.99 <span>/ month</span></p>
        <p class="price-desc">For professionals who need more</p>
        <ul class="pricing-features">
          <li><i class="fas fa-check"></i> Unlimited documents</li>
          <li><i class="fas fa-check"></i> All templates</li>
          <li><i class="fas fa-check"></i> PDF + PNG export</li>
          <li><i class="fas fa-check"></i> Priority support</li>
          <li><i class="fas fa-check"></i> Advanced formatting</li>
          <li><i class="fas fa-xmark"></i> API access</li>
        </ul>
        <a href="features.php" class="btn btn-primary" style="width:100%;">Choose Pro</a>
      </div>
      <div class="pricing-row">
        <div class="pricing-card" data-reveal>
          <h3>Free</h3>
          <p class="price">$0 <span>/ month</span></p>
          <p class="price-desc">Perfect for getting started</p>
          <ul class="pricing-features">
            <li><i class="fas fa-check"></i> 1 document per day</li>
            <li><i class="fas fa-check"></i> Basic templates</li>
            <li><i class="fas fa-check"></i> PDF download</li>
            <li><i class="fas fa-check"></i> Community support</li>
            <li><i class="fas fa-xmark"></i> Priority support</li>
            <li><i class="fas fa-xmark"></i> API access</li>
          </ul>
          <a href="features.php" class="btn btn-outline" style="width:100%;">Get Started</a>
        </div>
        <div class="pricing-card" data-reveal>
          <h3>Enterprise</h3>
          <p class="price">Custom <span></span></p>
          <p class="price-desc">For organizations with custom needs</p>
          <ul class="pricing-features">
            <li><i class="fas fa-check"></i> Unlimited everything</li>
            <li><i class="fas fa-check"></i> Custom templates</li>
            <li><i class="fas fa-check"></i> API access</li>
            <li><i class="fas fa-check"></i> Dedicated support</li>
            <li><i class="fas fa-check"></i> Custom branding</li>
            <li><i class="fas fa-check"></i> SLA guarantee</li>
          </ul>
          <a href="contact.php" class="btn btn-outline" style="width:100%;">Contact Us</a>
        </div>
      </div>
    </div>
</div>
</section>

<section class="compare-table section" data-reveal>
<div class="container">
<div class="section-header">
<h2>Feature Comparison</h2>
<p>See exactly what each plan includes</p>
</div>
<table>
<thead>
<tr>
<th>Feature</th>
<th>Free</th>
<th>Pro</th>
<th>Enterprise</th>
</tr>
</thead>
<tbody>
<tr>
<td>Templates</td>
<td>3</td>
<td>All</td>
<td>Custom</td>
</tr>
<tr>
<td>Daily Limit</td>
<td>1 document</td>
<td>Unlimited</td>
<td>Unlimited</td>
</tr>
<tr>
<td>Download Format</td>
<td>PDF</td>
<td>PDF, PNG</td>
<td>All formats</td>
</tr>
<tr>
<td>Support</td>
<td><i class="fas fa-check"></i> Community</td>
<td><i class="fas fa-check"></i> Priority</td>
<td><i class="fas fa-check"></i> Dedicated</td>
</tr>
<tr>
<td>API Access</td>
<td><i class="fas fa-xmark"></i></td>
<td><i class="fas fa-xmark"></i></td>
<td><i class="fas fa-check"></i></td>
</tr>
<tr>
<td>Custom Branding</td>
<td><i class="fas fa-xmark"></i></td>
<td><i class="fas fa-xmark"></i></td>
<td><i class="fas fa-check"></i></td>
</tr>
<tr>
<td>SLA Guarantee</td>
<td><i class="fas fa-xmark"></i></td>
<td><i class="fas fa-xmark"></i></td>
<td><i class="fas fa-check"></i></td>
</tr>
</tbody>
</table>
</div>
</section>

<?php include 'footer.php'; ?>
