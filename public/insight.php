<?php
$posts = include '../data/posts.php';
$slug = $_GET['slug'] ?? '';
$post = null;

foreach ($posts as $p) {
    if ($p['slug'] === $slug) {
        $post = $p;
        break;
    }
}

if (!$post) {
    header("Location: insights.php");
    exit;
}

$page_title = $post['title'];
include '../includes/header.php';
?>

<main>
    <!-- Post Content -->
    <article class="pt-32 pb-24">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto">
                <a href="insights.php"
                    class="text-primary text-sm font-bold flex items-center gap-2 mb-12 hover:underline">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                    </svg>
                    Voltar para insights
                </a>

                <header class="mb-16">
                    <div class="flex items-center gap-4 text-xs font-bold text-gray-400 uppercase tracking-widest mb-6">
                        <time>
                            <?php echo date('d/m/Y', strtotime($post['date'])); ?>
                        </time>
                        <span class="w-1 h-1 rounded-full bg-gray-400"></span>
                        <span>Nonstop Capital</span>
                    </div>
                    <h1 class="text-4xl lg:text-5xl font-bold leading-tight mb-8">
                        <?php echo $post['title']; ?>
                    </h1>
                    <p class="text-xl text-gray-500 dark:text-gray-400 italic">
                        <?php echo $post['excerpt']; ?>
                    </p>
                </header>

                <!-- Post Media Placeholder -->
                <div
                    class="aspect-video bg-navy-light rounded-3xl mb-16 overflow-hidden flex items-center justify-center">
                    <span class="text-primary font-bold text-7xl opacity-10">NS Capital</span>
                </div>

                <div
                    class="prose prose-lg dark:prose-invert max-w-none text-gray-600 dark:text-gray-300 leading-relaxed space-y-8">
                    <p>
                        <?php echo $post['content']; ?>
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <h3 class="text-2xl font-bold text-navy dark:text-white mt-12 mb-6">Visão Estratégica</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>

                    <blockquote
                        class="border-l-4 border-primary pl-8 py-4 italic text-2xl font-medium text-navy dark:text-white">
                        "A excelência não é um ato, mas um hábito. Na gestão de ativos, a excelência é o resultado de
                        processos rigorosos e execução disciplinada."
                    </blockquote>

                    <p>Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo
                        pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris
                        eu nibh euismod gravida.</p>
                </div>

                <!-- Footer Post -->
                <footer
                    class="mt-20 pt-12 border-t border-gray-100 dark:border-gray-800 flex flex-col sm:flex-row justify-between items-center gap-8">
                    <div class="flex items-center gap-4 text-xs font-bold uppercase tracking-widest">
                        <span>Compartilhar:</span>
                        <a href="#" class="text-gray-400 hover:text-primary">LinkedIn</a>
                        <a href="#" class="text-gray-400 hover:text-primary">Twitter</a>
                    </div>
                </footer>
            </div>
        </div>
    </article>
</main>

<?php include '../includes/footer.php'; ?>