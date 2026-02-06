<?php
$page_title = "Building Legacies. Sustaining Growth.";
include '../includes/header.php';

$portfolio = array_filter(include '../data/portfolio.php');
$posts = include '../data/posts.php';
?>

<style>
    /* Custom Animations */
    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    .delay-100 {
        transition-delay: 100ms;
    }

    .delay-200 {
        transition-delay: 200ms;
    }

    .delay-300 {
        transition-delay: 300ms;
    }

    .delay-400 {
        transition-delay: 400ms;
    }

    .hover-float {
        transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .hover-float:hover {
        transform: translateY(-10px);
    }

    /* Tech elements animations */
    @keyframes pulse-soft {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: 0.5;
            transform: scale(1.2);
        }
    }

    .animate-pulse-soft {
        animation: pulse-soft 2s infinite;
    }

    .tech-card-hover:hover .tech-grid-bg {
        opacity: 0.05;
    }

    .tech-grid-bg {
        background-image: radial-gradient(#0047BB 0.5px, transparent 0.5px);
        background-size: 10px 10px;
    }

    @keyframes chart-draw {
        from {
            stroke-dashoffset: 1000;
        }

        to {
            stroke-dashoffset: 0;
        }
    }

    .animate-chart {
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        animation: chart-draw 3s ease-out forwards;
    }

    @keyframes fade-up-chart {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .reveal-chart {
        animation: fade-up-chart 1s ease-out forwards;
    }

    /* Hero Background Graph Animation */
    @keyframes graph-loop {
        0% {
            stroke-dashoffset: 2000;
        }

        50% {
            stroke-dashoffset: 0;
        }

        100% {
            stroke-dashoffset: -2000;
        }
    }

    .animate-graph-bg {
        stroke-dasharray: 2000;
        animation: graph-loop 30s linear infinite;
    }

    @keyframes float-slow {

        0%,
        100% {
            transform: translateY(0) scale(1.05);
        }

        50% {
            transform: translateY(-30px) scale(1);
        }
    }

    .animate-float-slow {
        animation: float-slow 15s ease-in-out infinite;
    }
</style>

<main class="overflow-hidden">
    <!-- HERO SECTION (Holding Branding) -->
    <section class="relative bg-[#0047BB] overflow-hidden min-h-screen flex flex-col justify-center">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-full h-full bg-gradient-to-l from-[#00358E]/50 to-transparent"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-400/20 rounded-full blur-[100px]"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-400/10 rounded-full blur-[100px]"></div>

        <!-- Animated Background Graph -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden opacity-40">
            <svg class="absolute w-[180%] h-full -right-1/4 animate-float-slow" viewBox="0 0 1200 600"
                preserveAspectRatio="none">
                <defs>
                    <linearGradient id="heroGraphGradient" x1="0%" y1="0%" x2="100% " y2="0%">
                        <stop offset="0%" style="stop-color:#93c5fd;stop-opacity:0" />
                        <stop offset="50%" style="stop-color:#93c5fd;stop-opacity:0.4" />
                        <stop offset="100%" style="stop-color:#93c5fd;stop-opacity:0" />
                    </linearGradient>
                </defs>
                <path class="animate-graph-bg"
                    d="M0,500 C150,480 200,300 350,320 C500,340 550,150 750,180 C950,210 1000,50 1200,80" fill="none"
                    stroke="url(#heroGraphGradient)" stroke-width="4" stroke-linecap="round" />
                <path class="animate-graph-bg" style="animation-duration: 40s; animation-delay: -5s;"
                    d="M0,550 C200,520 250,400 450,420 C650,440 700,250 900,280 C1100,310 1150,150 1350,180" fill="none"
                    stroke="url(#heroGraphGradient)" stroke-width="2" stroke-opacity="0.6" stroke-linecap="round" />
            </svg>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex justify-start">
                <!-- Text Content -->
                <div class="w-full lg:w-2/3 text-white reveal active">

                    <h1 class="text-5xl lg:text-8xl font-bold tracking-tight mb-8 leading-[1.1]">
                        Nossas marcas movem <span class="text-blue-300">para o futuro.</span>
                    </h1>
                    <p class="text-xl lg:text-2xl text-blue-100 mb-10 max-w-2xl leading-relaxed font-light">
                        Não somos apenas investidores. Somos uma holding dedicada a elevar o patamar operacional de
                        nossas empresas, construindo valor através da excelência.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="tese.php"
                            class="px-10 py-5 bg-white text-[#0047BB] font-bold rounded-xl hover:bg-blue-50 transition-all shadow-2xl hover:-translate-y-1">Nossa
                            Tese</a>
                        <a href="#setores"
                            class="px-10 py-5 bg-transparent border-2 border-white/30 text-white font-bold rounded-xl hover:bg-white/10 transition-all hover:-translate-y-1">Setores</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave Transition -->
        <div class="absolute bottom-0 left-0 w-full leading-none z-10">
            <svg class="relative block w-full h-[50px] text-white fill-current" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C58.47,105.14,124.34,103.29,182.25,89.6,240.16,75.91,280.25,71.1,321.39,56.44Z">
                </path>
            </svg>
        </div>
    </section>

    <!-- THE HOLD GROUP (Companies Focus) -->
    <section class="py-32 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-32">
                <h2 class="text-4xl font-bold mb-6 text-navy tracking-tight">Nosso Ecossistema</h2>
                <p class="text-lg text-gray-500">Empresas líderes em seus mercados, fortalecidas pela estrutura de
                    capital e governança da Nonstop.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-10">
                <!-- Neoflow -->
                <div class="group relative bg-white border-2 border-[#F4F7FA] rounded-[50px] p-8 lg:p-12 reveal">
                    <div class="flex flex-col md:flex-row gap-4 lg:gap-0 items-center relative z-10">
                        <!-- Popping Image -->
                        <div class="w-full md:w-1/2 lg:w-[45%] -mt-24 md:-mt-32 md:-ml-20 lg:-ml-24 mb-4 md:mb-0">
                            <img src="assets/img/ps2-saniflo-hs-fixed_1200x1200.png" alt="Neoflow Pump Product"
                                class="w-full h-auto drop-shadow-[0_35px_35px_rgba(0,0,0,0.2)] transform scale-110 lg:scale-125">
                        </div>

                        <!-- Content -->
                        <div class="w-full md:w-1/2 lg:w-[70%] lg:pl-10">
                            <p class="text-[10px] font-black text-blue-400 uppercase tracking-[0.2em] mb-4">
                                Indústria & Bombas
                            </p>
                            <p class="text-gray-500 mb-8 leading-relaxed text-lg">Indústria de alta tecnologia em
                                sistemas de bombeamento e fluxo industrial de alta performance.</p>
                            <a href="portfolio.php"
                                class="inline-flex items-center gap-2 text-[#0047BB] font-black uppercase text-[10px] tracking-widest">Empresa
                                do Grupo →</a>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-blue-100/30 rounded-[50px] -z-0 opacity-0">
                    </div>
                </div>

                <!-- Delphi -->
                <div class="group relative bg-navy text-white rounded-[50px] p-8 lg:p-12">
                    <div class="flex flex-col md:flex-row gap-4 lg:gap-0 items-center relative z-10">
                        <!-- Popping Image -->
                        <div class="w-full md:w-1/2 lg:w-[70%] -mt-24 md:-mt-85 md:-ml-20 lg:-ml-24 mb-4 md:mb-0">
                            <img src="assets/img/3d-illustration-cargo-container-isolated-white-background.png"
                                alt="Delphi Cargo Container"
                                class="w-full h-auto drop-shadow-[0_35px_35px_rgba(0,0,0,0.4)] transform scale-110 lg:scale-125">
                        </div>

                        <!-- Content -->
                        <div class="w-full md:w-1/2 lg:w-[75%] lg:pl-10">
                            <p class="text-[10px] font-black text-blue-200 uppercase tracking-[0.2em] mb-4">
                                Logística Internacional
                            </p>
                            <p class="text-blue-100 opacity-60 mb-8 leading-relaxed text-lg">Excelência operacional em
                                logística internacional e conectividade de mercados globais.</p>
                            <a href="portfolio.php"
                                class="inline-flex items-center gap-2 text-white font-black uppercase text-xs tracking-widest">Empresa
                                do Grupo →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS (Banking Premium) -->
    <section class="py-24 bg-gray-50 border-y border-gray-100">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-12 text-center">
                <div class="reveal">
                    <p class="text-3xl md:text-5xl font-black text-[#0047BB] mb-2 tracking-tighter shadow-sm">R$ 500M+
                    </p>
                    <p class="text-xs font-bold uppercase text-gray-400 tracking-widest">Sob Gestão</p>
                </div>
                <div class="reveal delay-100">
                    <p class="text-3xl md:text-5xl font-black text-[#0047BB] mb-2 tracking-tighter">3+</p>
                    <p class="text-xs font-bold uppercase text-gray-400 tracking-widest">Empresas do Grupo</p>
                </div>
                <div class="reveal delay-200">
                    <p class="text-3xl md:text-5xl font-black text-[#0047BB] mb-2 tracking-tighter">25%</p>
                    <p class="text-xs font-bold uppercase text-gray-400 tracking-widest">EBITDA Médio</p>
                </div>
                <div class="reveal delay-300">
                    <p class="text-3xl md:text-5xl font-black text-[#0047BB] mb-2 tracking-tighter">AAA</p>
                    <p class="text-xs font-bold uppercase text-gray-400 tracking-widest">Rating de Crédito</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO PREVIEW (Cards Animation) -->
    <section id="setores" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="mb-20 text-center reveal">
                <h2 class="text-4xl lg:text-5xl font-bold text-[#0047BB] mb-4 tracking-tight">Presença em Setores Vitais
                </h2>
                <p class="text-gray-500 max-w-2xl mx-auto">Nossa alocação de capital foca em resiliência e perenidade,
                    operando no coração da economia real.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php foreach (array_slice($portfolio, 0, 3) as $key => $item): ?>
                    <div
                        class="group relative bg-white rounded-[40px] p-10 border-2 border-[#F4F7FA] shadow-sm hover-float transition-all tech-card-hover reveal delay-<?php echo ($key + 1) * 100; ?>">

                        <!-- Tech Grid Background (Aparece no hover) -->
                        <div
                            class="absolute inset-0 tech-grid-bg transition-opacity opacity-0 pointer-events-none rounded-[40px]">
                        </div>

                        <!-- Top row: Status & Performance -->
                        <div class="flex justify-between items-start mb-8 relative z-10">
                            <div class="h-16 flex items-center justify-start overflow-hidden">
                                <?php if (isset($item['logo'])): ?>
                                    <img src="<?php echo $item['logo']; ?>" alt="<?php echo $item['name']; ?> Logo"
                                        class="<?php echo ($item['name'] === 'Delphi Fretes') ? 'h-16' : 'h-10'; ?> w-auto object-contain <?php echo ($item['name'] === 'Nonstop Capital') ? 'brightness-[0.4] contrast-125' : ''; ?>">
                                <?php else: ?>
                                    <div
                                        class="w-12 h-12 bg-blue-50 text-[#0047BB] rounded-xl flex items-center justify-center font-black text-xl">
                                        <?php echo strtoupper(substr($item['name'], 0, 1)); ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="flex flex-col items-end">
                                <span
                                    class="flex items-center gap-1.5 px-2.5 py-1 bg-green-50 text-green-600 rounded-full text-[10px] font-bold tracking-wider mb-2">
                                    <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse-soft"></span>
                                    <?php echo $item['status'] ?? 'ATIVO'; ?>
                                </span>
                                <?php if (isset($item['growth'])): ?>
                                    <span class="text-[#0047BB] font-black text-xs"><?php echo $item['growth']; ?> <span
                                            class="text-[8px] opacity-40">PERF.</span></span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Main Info -->
                        <div class="relative z-10">
                            <p class="text-[10px] font-black text-blue-400 uppercase tracking-[0.2em] mb-4">
                                <?php echo $item['sector']; ?>
                            </p>
                            <p class="text-gray-500 leading-relaxed text-sm mb-8"><?php echo $item['description']; ?></p>

                            <!-- Tech Tags Section -->
                            <div class="flex flex-wrap gap-2">
                                <?php if (isset($item['tags'])): ?>
                                    <?php foreach ($item['tags'] as $tag): ?>
                                        <span
                                            class="px-3 py-1 bg-gray-50 border border-gray-100 text-[9px] font-bold text-gray-400 rounded-lg uppercase tracking-wider group-hover:border-blue-200 group-hover:text-blue-500 transition-colors italic">#<?php echo $tag; ?></span>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- Consolidated Growth Chart Card -->
                <div class="md:col-span-3 mt-8">
                    <div
                        class="bg-navy rounded-[40px] p-10 relative overflow-hidden group border border-white/5 shadow-2xl">
                        <!-- Abstract Background Decoration -->
                        <div
                            class="absolute top-0 right-0 w-96 h-96 bg-[#0047BB]/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2">
                        </div>

                        <div class="flex flex-col lg:flex-row items-center gap-12 relative z-10">
                            <!-- Left Content: Metrics -->
                            <div class="w-full lg:w-1/3 text-left">
                                <div
                                    class="inline-flex items-center gap-2 px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] font-black uppercase tracking-[0.2em] text-blue-400 mb-6">
                                    <span class="w-1.5 h-1.5 bg-blue-500 rounded-full animate-pulse"></span>
                                    Performance Consolidada
                                </div>
                                <h2 class="text-4xl font-bold text-white mb-6 leading-tight">Crescimento Sustentável e
                                    Escalável</h2>
                                <div class="grid grid-cols-2 gap-6">
                                    <div class="reveal">
                                        <p class="text-3xl font-black text-white">+145%</p>
                                        <p
                                            class="text-[10px] font-bold uppercase text-gray-400 tracking-widest leading-relaxed">
                                            Crescimento Acumulado (3 anos)</p>
                                    </div>
                                    <div class="reveal delay-100">
                                        <p class="text-3xl font-black text-blue-400">R$ 1.2B</p>
                                        <p
                                            class="text-[10px] font-bold uppercase text-gray-400 tracking-widest leading-relaxed">
                                            AUM (Assets Under Management)</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Content: Animated Graphic -->
                            <div
                                class="w-full lg:w-2/3 h-64 relative bg-black/20 rounded-3xl p-6 border border-white/5 reveal-chart">
                                <svg class="w-full h-full" viewBox="0 0 800 200" preserveAspectRatio="none">
                                    <!-- Grid Lines -->
                                    <line x1="0" y1="50" x2="800" y2="50" stroke="white" stroke-opacity="0.05" />
                                    <line x1="0" y1="100" x2="800" y2="100" stroke="white" stroke-opacity="0.05" />
                                    <line x1="0" y1="150" x2="800" y2="150" stroke="white" stroke-opacity="0.05" />

                                    <!-- Growth Area Fill -->
                                    <path
                                        d="M0 200 L100 180 L200 160 L300 130 L400 110 L500 80 L600 60 L700 30 L800 10 L800 200 Z"
                                        fill="url(#chartGradient)" fill-opacity="0.1" />

                                    <!-- Growth Line -->
                                    <path class="animate-chart"
                                        d="M0 200 L100 180 L200 160 L300 130 L400 110 L500 80 L600 60 L700 30 L800 10"
                                        fill="none" stroke="#0047BB" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />

                                    <!-- Active Point -->
                                    <circle cx="800" cy="10" r="6" fill="#0047BB">
                                        <animate attributeName="r" values="6;9;6" dur="2s" repeatCount="indefinite" />
                                    </circle>

                                    <!-- Gradient Definition -->
                                    <defs>
                                        <linearGradient id="chartGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" style="stop-color:#0047BB;stop-opacity:1" />
                                            <stop offset="100%" style="stop-color:#0047BB;stop-opacity:0" />
                                        </linearGradient>
                                    </defs>
                                </svg>

                                <div
                                    class="absolute inset-0 flex items-center justify-between px-8 pointer-events-none">
                                    <span
                                        class="text-[9px] font-bold text-gray-600 uppercase tracking-widest self-end pb-4">2021
                                        Foundation</span>
                                    <span
                                        class="text-[9px] font-bold text-white uppercase tracking-widest self-end pb-4">Current
                                        Peak</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section id="contato" class="py-24">
        <div class="container mx-auto px-6">
            <div
                class="reveal bg-[#0047BB] py-16 px-10 lg:p-20 rounded-[50px] text-white relative overflow-hidden shadow-2xl">
                <!-- Decorations -->
                <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-80 h-80 bg-blue-400/10 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl">
                </div>

                <div class="relative z-10 flex flex-col lg:flex-row items-center gap-16">
                    <!-- Left Content -->
                    <div class="w-full lg:w-1/2 text-left">
                        <h2 class="text-5xl lg:text-7xl font-bold mb-8 tracking-tighter leading-tight">Potencialize seu
                            legado.</h2>
                        <p class="text-xl text-blue-100 mb-12 max-w-xl leading-relaxed">Estamos em busca de ativos que
                            queiram atingir o próximo nível de governança e eficiência operacional. Nossa estrutura está
                            pronta para acelerar seu crescimento.</p>

                        <div class="flex items-center gap-4 text-sm font-bold text-blue-200 uppercase tracking-widest">
                            <span class="w-12 h-[1px] bg-blue-300"></span>
                            Próxima Geração de Ativos
                        </div>
                    </div>

                    <!-- Right Content: Form -->
                    <div class="w-full lg:w-1/2">
                        <div
                            class="bg-white/10 backdrop-blur-md p-8 lg:p-10 rounded-3xl border border-white/20 shadow-xl">
                            <form action="#" method="POST" class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label class="text-xs font-bold uppercase tracking-wider text-blue-200 px-1">Seu
                                            Nome</label>
                                        <input type="text" name="name" placeholder="Ex: João Silva" required
                                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-4 text-white placeholder-white/30 focus:outline-none focus:border-white/40 transition-all">
                                    </div>
                                    <div class="space-y-2">
                                        <label
                                            class="text-xs font-bold uppercase tracking-wider text-blue-200 px-1">E-mail</label>
                                        <input type="email" name="email" placeholder="joao@empresa.com" required
                                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-4 text-white placeholder-white/30 focus:outline-none focus:border-white/40 transition-all">
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-xs font-bold uppercase tracking-wider text-blue-200 px-1">Sua
                                        Empresa / Ativo</label>
                                    <input type="text" name="company" placeholder="Nome da sua operação" required
                                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-4 text-white placeholder-white/30 focus:outline-none focus:border-white/40 transition-all">
                                </div>
                                <div class="space-y-2">
                                    <label
                                        class="text-xs font-bold uppercase tracking-wider text-blue-200 px-1">Mensagem</label>
                                    <textarea name="message" rows="3"
                                        placeholder="Como podemos impulsionar seu negócio?"
                                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-4 text-white placeholder-white/30 focus:outline-none focus:border-white/40 transition-all"></textarea>
                                </div>
                                <button type="submit"
                                    class="w-full py-5 bg-white text-[#0047BB] font-black rounded-xl hover:bg-blue-50 transition-all shadow-xl hover:-translate-y-1 transform active:scale-[0.98]">
                                    Enviar Proposta de Conexão
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    // Reveal on scroll logic
    const revealElements = document.querySelectorAll('.reveal');

    const revealCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                // Optional: stop observing once revealed
                // observer.unobserve(entry.target);
            }
        });
    };

    const revealObserver = new IntersectionObserver(revealCallback, {
        threshold: 0.15
    });

    revealElements.forEach(el => revealObserver.observe(el));

    // Smooth scroll for anchors
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

<?php include '../includes/footer.php'; ?>