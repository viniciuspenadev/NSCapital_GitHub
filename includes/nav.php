<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header id="main-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 py-6">
    <div class="container mx-auto px-6">
        <div
            class="bg-navy/90 backdrop-blur-lg rounded-2xl border border-white/10 shadow-lg px-6 py-3 flex items-center justify-between">
            <!-- Logo -->
            <a href="index.php" class="flex items-center gap-2 group">
                <img src="assets/img/logo_nonstop.png" alt="Nonstop Capital Logo"
                    class="h-12 w-auto group-hover:scale-105 transition-transform">
            </a>

            <!-- Nav Links -->
            <nav class="hidden lg:flex items-center gap-8">
                <?php
                $menu_items = [
                    'Home' => 'index.php',
                    'Tese' => 'tese.php',
                    'Governança' => 'governanca.php'
                ];
                foreach ($menu_items as $label => $url):
                    $active = ($current_page == $url) ? 'text-[#0047BB]' : 'text-gray-300 hover:text-white';
                    ?>
                    <a href="<?php echo $url; ?>" class="text-sm font-bold transition-colors <?php echo $active; ?>">
                        <?php echo $label; ?>
                    </a>
                <?php endforeach; ?>
            </nav>

            <!-- Actions -->
            <div class="flex items-center gap-4">
                <a href="index.php#contato"
                    class="hidden md:block px-6 py-2.5 bg-[#0047BB] text-white text-sm font-bold rounded-xl hover:bg-[#00358E] transition-all shadow-md">
                    Falar com a Nonstop
                </a>
                <!-- Mobile Menu Toggle -->
                <button class="lg:hidden p-2 text-white" id="mobile-menu-btn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden absolute top-full left-0 w-full px-6 pt-2">
        <div class="bg-navy border border-white/10 rounded-2xl shadow-2xl py-6 px-6 flex flex-col gap-4">
            <?php foreach ($menu_items as $label => $url): ?>
                <a href="<?php echo $url; ?>" class="text-lg font-bold text-white"><?php echo $label; ?></a>
            <?php endforeach; ?>
            <hr class="border-white/10">
            <a href="index.php#contato" class="bg-[#0047BB] text-white text-center py-4 rounded-xl font-bold">Falar com
                a
                Nonstop</a>
        </div>
    </div>
</header>

<script>
    // Scroll handling
    const header = document.getElementById('main-header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            header.classList.remove('py-6');
            header.classList.add('py-2');
        } else {
            header.classList.remove('py-2');
            header.classList.add('py-6');
        }
    });

    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

</script>