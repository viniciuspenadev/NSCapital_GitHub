<?php
$page_title = "Nossa Tese de Investimento";
$page_description = "Entenda como a Nonstop Capital seleciona ativos e gera alfa através da gestão ativa.";
include '../includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="relative pt-48 pb-24 bg-[#0047BB] overflow-hidden text-white">
        <div class="absolute top-0 right-0 w-2/3 h-full bg-gradient-to-l from-white/10 to-transparent"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/20 text-white text-xs font-bold uppercase tracking-wider mb-8">
                    Investment Thesis
                </div>
                <h1 class="text-5xl lg:text-7xl font-bold mb-8 tracking-tight leading-tight">Capital com propósito e
                    disciplina de longo prazo.</h1>
                <p class="text-xl text-blue-100 leading-relaxed mb-10">Focamos em ativos reais resilientes e na
                    transformação operacional para gerar retornos consistentes através de uma gestão ativa.</p>
            </div>
        </div>
    </section>

    <!-- The 3 Pillars (Banking Style Cards) -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-20">
                <h2 class="text-4xl font-bold mb-6 text-navy">Nossos Pilares</h2>
                <p class="text-lg text-gray-500">Fundamentos que guiam cada decisão de alocação de capital na Nonstop.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-gray-50 p-10 rounded-[40px] border border-gray-100 hover:shadow-2xl hover:bg-white transition-all group">
                    <div
                        class="w-16 h-16 bg-[#0047BB] text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-blue-200">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-navy">Performance</h3>
                    <p class="text-gray-500 leading-relaxed">Busca incansável por rentabilidade através da eficiência
                        operacional e otimização de custos em cada investida.</p>
                </div>
                <div
                    class="bg-gray-50 p-10 rounded-[40px] border border-gray-100 hover:shadow-2xl hover:bg-white transition-all group">
                    <div
                        class="w-16 h-16 bg-[#0047BB] text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-blue-200">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-navy">Governança</h3>
                    <p class="text-gray-500 leading-relaxed">Transparência absoluta e processos de decisão baseados em
                        dados e melhores práticas globais de compliance.</p>
                </div>
                <div
                    class="bg-gray-50 p-10 rounded-[40px] border border-gray-100 hover:shadow-2xl hover:bg-white transition-all group">
                    <div
                        class="w-16 h-16 bg-[#0047BB] text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-blue-200">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-navy">Perpetuidade</h3>
                    <p class="text-gray-500 leading-relaxed">Visão de décadas, não apenas de trimestres. Investimos para
                        construir negócios que resistam ao tempo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Crescimento Sustentável Section -->
    <section class="py-24 bg-gray-50">
        <style>
            @keyframes tese-chart-draw {
                from {
                    stroke-dashoffset: 1000;
                }

                to {
                    stroke-dashoffset: 0;
                }
            }

            .tese-animate-chart {
                stroke-dasharray: 1000;
                stroke-dashoffset: 1000;
                animation: tese-chart-draw 3s ease-out forwards;
            }

            @keyframes tese-pulse-dot {

                0%,
                100% {
                    transform: scale(1);
                    opacity: 1;
                }

                50% {
                    transform: scale(1.5);
                    opacity: 0.5;
                }
            }

            .tese-pulse-dot {
                animation: tese-pulse-dot 2s infinite;
                transform-origin: center;
            }
        </style>
        <div class="container mx-auto px-6">
            <div
                class="bg-white p-12 lg:p-20 rounded-[50px] shadow-sm border border-gray-100 flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 bg-blue-50 text-[#0047BB] rounded-full text-xs font-bold uppercase tracking-widest mb-6">
                        Compounding Growth
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold mb-8 text-navy leading-tight">Crescimento Sustentável do
                        Portfólio</h2>
                    <p class="text-gray-600 mb-8 leading-relaxed text-lg">Nossa estratégia de reinvestimento e alocação
                        tem gerado um crescimento composto sólido, superando os principais índices de referência através
                        de disciplina e visão de longo prazo.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="p-6 bg-gray-50 rounded-3xl border border-gray-100">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">CAGR Alvo</p>
                            <p class="text-3xl font-black text-navy">15% - 20%</p>
                        </div>
                        <div class="p-6 bg-gray-50 rounded-3xl border border-gray-100">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Dividend Yield</p>
                            <p class="text-3xl font-black text-[#0047BB]">Estável</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <!-- Real Animated Chart -->
                    <div
                        class="relative p-8 bg-blue-50/30 rounded-[40px] border border-blue-100/50 overflow-hidden shadow-inner">
                        <div class="absolute top-6 right-8 flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Real-time
                                Alfa</span>
                        </div>

                        <svg class="w-full h-64 drop-shadow-2xl" viewBox="0 0 400 200" preserveAspectRatio="none">
                            <defs>
                                <linearGradient id="teseGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="0%" style="stop-color:#0047BB;stop-opacity:0.2" />
                                    <stop offset="100%" style="stop-color:#0047BB;stop-opacity:0" />
                                </linearGradient>
                            </defs>

                            <!-- Grid Lines -->
                            <line x1="0" y1="50" x2="400" y2="50" stroke="#0047BB" stroke-opacity="0.05" />
                            <line x1="0" y1="100" x2="400" y2="100" stroke="#0047BB" stroke-opacity="0.05" />
                            <line x1="0" y1="150" x2="400" y2="150" stroke="#0047BB" stroke-opacity="0.05" />

                            <!-- Fill Area -->
                            <path
                                d="M0,200 L50,185 L100,175 L150,150 L200,130 L250,90 L300,70 L350,40 L400,15 L400,200 Z"
                                fill="url(#teseGradient)" />

                            <!-- Growth Line -->
                            <path class="tese-animate-chart"
                                d="M0,200 L50,185 L100,175 L150,150 L200,130 L250,90 L300,70 L350,40 L400,15"
                                fill="none" stroke="#0047BB" stroke-width="5" stroke-linecap="round"
                                stroke-linejoin="round" />

                            <!-- Pulse Point -->
                            <circle cx="400" cy="15" r="6" fill="#0047BB" class="tese-pulse-dot" />
                        </svg>

                        <div
                            class="flex justify-between mt-8 text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em]">
                            <span>Fundação</span>
                            <span>Expansão</span>
                            <span>Consolidação</span>
                            <span class="text-[#0047BB]">Atual Peak</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>