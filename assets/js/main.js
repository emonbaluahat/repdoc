document.addEventListener('DOMContentLoaded', () => {

// Theme Toggle
const htmlEl = document.documentElement;
const themeBtn = document.getElementById('themeBtn');
const themeIcon = document.getElementById('themeIcon');
function applyTheme(t) {
htmlEl.setAttribute('data-theme', t);
if (themeIcon) themeIcon.className = t === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
localStorage.setItem('rd-theme', t);
}
if (themeBtn) {
themeBtn.addEventListener('click', () => {
applyTheme(htmlEl.getAttribute('data-theme') === 'dark' ? 'light' : 'dark');
});
}
const savedTheme = localStorage.getItem('rd-theme');
if (savedTheme) applyTheme(savedTheme);

// Preloader
const preloader = document.getElementById('preloader');
window.addEventListener('load', () => {
setTimeout(() => preloader.classList.add('hidden'), 600);
});
setTimeout(() => preloader.classList.add('hidden'), 2500);

// Scroll Progress
const progressBar = document.getElementById('scrollProgress');
window.addEventListener('scroll', () => {
const scrollTop = window.scrollY;
const docHeight = document.documentElement.scrollHeight - window.innerHeight;
const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
progressBar.style.width = progress + '%';
});

// Sticky Navbar
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
navbar.classList.toggle('scrolled', window.scrollY > 80);
});

// Mobile Nav
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');
hamburger.addEventListener('click', () => {
hamburger.classList.toggle('active');
navLinks.classList.toggle('open');
});
navLinks.querySelectorAll('.nav-link').forEach(link => {
link.addEventListener('click', () => {
hamburger.classList.remove('active');
navLinks.classList.remove('open');
});
});

// Back to Top
const backToTop = document.getElementById('backToTop');
window.addEventListener('scroll', () => {
backToTop.classList.toggle('visible', window.scrollY > 400);
});
backToTop.addEventListener('click', e => {
e.preventDefault();
window.scrollTo({ top: 0, behavior: 'smooth' });
});

// Scroll Reveal
const revealObserver = new IntersectionObserver(entries => {
entries.forEach(entry => {
if (entry.isIntersecting) {
entry.target.classList.add('revealed');
revealObserver.unobserve(entry.target);
}
});
}, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
document.querySelectorAll('[data-reveal]').forEach(el => revealObserver.observe(el));

// Animated Counters
const counterObserver = new IntersectionObserver(entries => {
entries.forEach(entry => {
if (entry.isIntersecting) {
const el = entry.target;
const target = parseInt(el.dataset.count) || parseInt(el.dataset.target) || 0;
const suffix = el.dataset.suffix || '';
const duration = 2000;
const start = performance.now();
function update(now) {
const elapsed = now - start;
const progress = Math.min(elapsed / duration, 1);
const eased = 1 - Math.pow(1 - progress, 3);
const current = Math.round(eased * target);
el.textContent = current + suffix;
if (progress < 1) requestAnimationFrame(update);
}
requestAnimationFrame(update);
counterObserver.unobserve(el);
}
});
}, { threshold: 0.3 });
document.querySelectorAll('.stat-number, [data-target]').forEach(el => counterObserver.observe(el));

// Testimonial Slider
const slider = document.querySelector('.testimonial-slider');
const dots = document.querySelectorAll('.dot');
if (slider && dots.length) {
let current = 0;
const total = dots.length;
let autoSlide = setInterval(nextSlide, 4000);
function goToSlide(n) {
current = n;
slider.style.transform = `translateX(-${current * 100}%)`;
dots.forEach((d, i) => d.classList.toggle('active', i === current));
}
function nextSlide() { goToSlide((current + 1) % total); }
dots.forEach((dot, i) => {
dot.addEventListener('click', () => {
clearInterval(autoSlide);
goToSlide(i);
autoSlide = setInterval(nextSlide, 4000);
});
});
}

// FAQ Accordion
document.querySelectorAll('.faq-question').forEach(q => {
q.addEventListener('click', () => {
const item = q.parentElement;
const isActive = item.classList.contains('active');
document.querySelectorAll('.faq-item.active').forEach(i => i.classList.remove('active'));
if (!isActive) item.classList.add('active');
});
});

// FAQ Search
const faqSearch = document.getElementById('faqSearch');
if (faqSearch) {
faqSearch.addEventListener('input', function() {
const q = this.value.toLowerCase();
document.querySelectorAll('.faq-item').forEach(item => {
const text = item.textContent.toLowerCase();
item.style.display = text.includes(q) ? '' : 'none';
});
});
}

// FAQ Category Filter
document.querySelectorAll('.faq-cat').forEach(btn => {
btn.addEventListener('click', function() {
document.querySelectorAll('.faq-cat').forEach(b => b.classList.remove('active'));
this.classList.add('active');
const cat = this.dataset.cat;
document.querySelectorAll('.faq-item').forEach(item => {
if (!cat || cat === 'all' || item.dataset.cat === cat) {
item.style.display = '';
} else {
item.style.display = 'none';
}
});
});
});

// Cookie Notice
const cookieNotice = document.getElementById('cookieNotice');
const cookieAccept = document.getElementById('cookieAccept');
if (!localStorage.getItem('cookieAccepted')) {
setTimeout(() => cookieNotice.classList.add('visible'), 1000);
}
if (cookieAccept) {
cookieAccept.addEventListener('click', () => {
localStorage.setItem('cookieAccepted', 'true');
cookieNotice.classList.remove('visible');
});
}

// Toast System
window.showToast = function(message, icon = 'fa-check-circle') {
const container = document.getElementById('toastContainer');
const toast = document.createElement('div');
toast.className = 'toast';
toast.innerHTML = `<i class="fas ${icon}"></i> ${message}`;
container.appendChild(toast);
setTimeout(() => toast.remove(), 3200);
};

// Contact Form
const contactForm = document.getElementById('contactForm');
if (contactForm) {
contactForm.addEventListener('submit', function(e) {
e.preventDefault();
let valid = true;
this.querySelectorAll('[required]').forEach(field => {
if (!field.value.trim()) {
valid = false;
field.style.borderColor = '#ff4444';
} else {
field.style.borderColor = '';
}
});
if (valid) {
showToast('Message sent successfully! We\'ll get back to you soon.', 'fa-paper-plane');
this.reset();
}
});
}

// Newsletter Form
const newsletterForm = document.querySelector('.newsletter-form');
if (newsletterForm) {
newsletterForm.addEventListener('submit', function(e) {
e.preventDefault();
const input = this.querySelector('input');
if (input.value.trim()) {
showToast('Subscribed successfully! Welcome to RepDoc.', 'fa-bell');
input.value = '';
}
});
}

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
anchor.addEventListener('click', function(e) {
const href = this.getAttribute('href');
if (href !== '#') {
const target = document.querySelector(href);
if (target) {
e.preventDefault();
target.scrollIntoView({ behavior: 'smooth', block: 'start' });
}
}
});
});

});
