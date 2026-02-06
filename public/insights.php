<?php
$page_title = "Insights e Comunicados";
$page_description = "Acompanhe nossa visão sobre mercado, investimentos e os passos da Nonstop Capital.";
include '../includes/header.php';

$posts = include '../data/posts.php';
?>

<main>
    <!-- Page Header -->
    <section class="relative pt-48 pb-24 bg-[#0047BB] overflow-hidden text-white text-center">
        <div class="absolute inset-0 bg-gradient-to-b from-navy/30 to-transparent"></div>
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-5xl lg:text-7xl font-bold mb-8 tracking-tight">Insights</h1>
            <p class="text-xl text-blue-100 max-w-2xl mx-auto leading-relaxed">
                Nossa perspectiva sobre o presente para antecipar o valor do futuro.
            </p>
        </div>
    </section>

    <!-- Post Grid -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <?php foreach ($posts as $post): ?>
                    <article class="group">
                        <a href="insight.php?slug=<?php echo $post['slug']; ?>"
                            class="block overflow-hidden rounded-[40px] mb-10 aspect-video bg-navy relative border border-gray-100 shadow-sm transition-all duration-500 group-hover:shadow-2xl">
                            <!-- Post Abstract Cover -->
                            <div
                                class="absolute inset-0 flex items-center justify-center font-black text-white/5 text-[150px] group-hover:scale-110 transition-transform duration-1000 select-none">
                                NS</div>
                            <div class="absolute inset-0 bg-blue-900/20 group-hover:bg-blue-900/10 transition-colors"></div>
                            <div class="absolute bottom-10 left-10">
                                <span
                                    class="text-xs font-black uppercase tracking-widest text-white bg-[#0047BB] px-4 py-2 rounded-xl shadow-lg">Mercado</span>
                            </div>
                        </a>
                        <div class="px-4">
                            <div class="flex items-center gap-4 mb-6">
                                <time class="text-xs text-gray-400 font-bold uppercase tracking-widest">
                                    <?php echo date('d M, Y', strtotime($post['date'])); ?>
                                </time>
                                <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                                <span class="text-xs text-[#0047BB] font-bold">5 min read</span>
                            </div>
                            <h2
                                class="text-3xl font-bold mb-6 text-navy group-hover:text-[#0047BB] transition-colors leading-tight">
                                <a href="insight.php?slug=<?php echo $post['slug']; ?>">
                                    <?php echo $post['title']; ?>
                                </a>
                            </h2>
                            <p class="text-gray-500 leading-relaxed mb-8 text-lg">
                                <?php echo $post['excerpt']; ?>
                            </p>
                            <a href="insight.php?slug=<?php echo $post['slug']; ?>"
                                class="inline-flex items-center gap-3 text-[#0047BB] font-black text-sm group/btn">
                                Ler Artigo
                                <div
                                    class="w-8 h-8 rounded-full border border-blue-100 flex items-center justify-center group-hover/btn:bg-[#0047BB] group-hover/btn:text-white transition-all">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>