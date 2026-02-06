<?php
$page_title = "Portfólio de Investimentos";
$page_description = "Explore as empresas e verticais que compõem o ecossistema NSCapital.";
include '../includes/header.php';

$portfolio = include '../data/portfolio.php';

// Get unique sectors for filters
$sectors = array_unique(array_column($portfolio, 'sector'));
?>

<main>
    <!-- Page Header -->
    <section class="relative pt-48 pb-24 bg-[#0047BB] overflow-hidden text-white">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#00358E] opacity-50 skew-x-12 translate-x-24"></div>
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-5xl lg:text-7xl font-bold mb-8 tracking-tight">Portfólio</h1>
            <p class="text-xl text-blue-100 max-w-2xl leading-relaxed">
                Empresas e verticais estratégicas onde aplicamos nossa expertise de gestão para criar valor real.
            </p>
        </div>
    </section>

    <!-- Filters and Grid -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <!-- Filter Nav -->
            <div class="flex flex-wrap gap-4 mb-20 items-center justify-center">
                <button class="filter-btn px-8 py-3 rounded-full text-sm font-bold bg-[#0047BB] text-white transition-all shadow-lg shadow-blue-200"
                    data-filter="all">Todos</button>
                <?php foreach ($sectors as $sector): ?>
                    <button
                        class="filter-btn px-8 py-3 rounded-full text-sm font-bold bg-gray-50 text-gray-400 hover:bg-blue-50 hover:text-[#0047BB] transition-all border border-gray-100"
                        data-filter="<?php echo $sector; ?>">
                        <?php echo $sector; ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <!-- Portfolio Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10" id="portfolio-grid">
                <?php foreach ($portfolio as $item): ?>
                    <div class="portfolio-item group bg-white rounded-[40px] border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-500"
                        data-sector="<?php echo $item['sector']; ?>">
                        <div class="h-56 bg-navy relative overflow-hidden">
                            <!-- Abstract company artwork/logo placeholder -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-white/5 text-9xl font-black italic select-none"><?php echo strtoupper(substr($item['name'], 0, 1)); ?></span>
                            </div>
                            <div class="absolute bottom-6 left-8">
                                <span class="text-[10px] uppercase tracking-widest bg-[#0047BB] text-white px-3 py-1.5 rounded-lg font-black shadow-lg">
                                    <?php echo $item['sector']; ?>
                                </span>
                            </div>
                        </div>
                        <div class="p-10">
                            <div class="flex justify-between items-start mb-6">
                                <h3 class="text-2xl font-bold text-navy">
                                    <?php echo $item['name']; ?>
                                </h3>
                                <div class="px-2 py-1 rounded bg-green-50 text-green-600 text-[10px] font-bold uppercase tracking-widest">
                                    <?php echo $item['status']; ?>
                                </div>
                            </div>
                            <p class="text-gray-500 mb-8 line-clamp-3 leading-relaxed">
                                <?php echo $item['description']; ?>
                            </p>
                            <div class="pt-8 border-t border-gray-100 flex justify-between items-center">
                                <span class="text-xs font-medium text-gray-400">Ativo NSCapital</span>
                                <button class="text-[#0047BB] font-black text-sm hover:underline flex items-center gap-2">
                                    Ver Detalhes
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTAs -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-6 text-center max-w-4xl">
            <div class="bg-white p-16 rounded-[50px] border border-gray-100 shadow-sm">
                <h2 class="text-4xl font-bold mb-8 text-navy">Expandindo o Ecossistema</h2>
                <p class="text-lg text-gray-500 mb-12">Buscamos negócios com fundamentos sólidos e potencial de escala global através de melhorias operacionais.</p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="contato.php" class="px-8 py-4 bg-[#0047BB] text-white font-bold rounded-xl hover:bg-[#00358E] transition-all shadow-lg shadow-blue-200">
                        Propor Investimento
                    </a>
                    <a href="tese.php" class="px-8 py-4 bg-white text-[#0047BB] border-2 border-[#0047BB] font-bold rounded-xl hover:bg-blue-50 transition-all">
                        Ver Nossa Tese
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>