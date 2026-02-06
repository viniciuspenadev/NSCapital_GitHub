// Theme Toggle Logic
const themeToggleBtn = document.getElementById('theme-toggle');
const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change icons based on current theme
if (document.documentElement.classList.contains('dark')) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

themeToggleBtn.addEventListener('click', function () {
    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('theme')) {
        if (localStorage.getItem('theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        }
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    }
});

// Mobile Menu Logic
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

mobileMenuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

// Portfolio Filter Logic (for portfolio page, but included here for simplicity)
const filterBtns = document.querySelectorAll('.filter-btn');
const portfolioItems = document.querySelectorAll('.portfolio-item');

if (filterBtns.length > 0) {
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');

            // Update active state
            filterBtns.forEach(b => b.classList.remove('bg-primary', 'text-navy'));
            filterBtns.forEach(b => b.classList.add('bg-gray-100', 'dark:bg-gray-800', 'text-gray-500'));
            btn.classList.add('bg-primary', 'text-navy');
            btn.classList.remove('bg-gray-100', 'dark:bg-gray-800', 'text-gray-500');

            portfolioItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-sector') === filter) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        });
    });
}
