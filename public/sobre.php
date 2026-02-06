<?php
$page_title = "Sobre a Nonstop Capital";
$page_description = "Conheça o manifesto e os valores que guiam nossa gestão de capital.";
include '../includes/header.php';
?>

<main>
    <!-- Page Header -->
    <section class="relative pt-48 pb-24 bg-[#0047BB] overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-[#00358E] opacity-50 skew-x-12 translate-x-24"></div>
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-5xl lg:text-7xl font-bold text-white mb-8 tracking-tight">Nossa<br>História</h1>
            <p class="text-xl text-blue-100 max-w-2xl leading-relaxed">
                Construindo legados através de uma gestão disciplinada e governança de excelência desde a fundação.
            </p>
        </div>
    </section>

    <!-- Manifesto & Image Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-20 items-center">
                <div class="w-full lg:w-1/2">
                    <div class="relative">
                        <div class="aspect-[4/5] rounded-[40px] overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80"
                                alt="Team" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-10 -right-10 w-48 h-48 bg-blue-50 rounded-full -z-10"></div>
                        <div class="absolute -top-10 -left-10 w-32 h-32 border-4 border-blue-100 rounded-full -z-10">
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 border border-blue-100 text-[#0047BB] text-xs font-bold uppercase tracking-wider mb-8">
                        Nonstop Manifesto
                    </div>
                    <h2 class="text-4xl font-bold mb-8 text-navy leading-tight">Gestão focada na perpetuidade do
                        capital.</h2>
                    <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
                        <p class="italic text-navy font-medium">"O capital é apenas o combustível; o motor da criação de
                            valor é uma gestão ativa, humana e guiada por princípios éticos inegociáveis."</p>
                        <p>Nascemos no coração financeiro do Brasil para aplicar uma tese clara: identificar negócios
                            com fundamentos sólidos e elevar seu patamar operacional através da nossa expertise em
                            governança e eficiência.</p>
                    </div>

                    <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 pt-12 border-t border-gray-100">
                        <div>
                            <h4 class="font-bold text-navy mb-2">Missão</h4>
                            <p class="text-sm text-gray-500">Impulsionar ativos essenciais para a economia brasileira.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy mb-2">Visão</h4>
                            <p class="text-sm text-gray-500">Ser a holding mais admirada pela excelência em gestão.</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy mb-2">Valores</h4>
                            <p class="text-sm text-gray-500">Governança, Ética e Longo Prazo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Governance Highlight (Banking Style) -->
    <section class="py-24 bg-gray-50 border-y border-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="text-4xl font-bold mb-6 text-navy">Governança sem concessões</h2>
                <p class="text-lg text-gray-500">Nossa estrutura é desenhada para garantir segurança, compliance e
                    transparência absoluta aos nossos stakeholders.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition-all">
                    <div class="w-12 h-12 bg-blue-50 text-[#0047BB] rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold mb-3 text-navy">Board Independente</h4>
                    <p class="text-sm text-gray-500">Decisões estratégicas validadas por especialistas do mercado.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition-all">
                    <div class="w-12 h-12 bg-blue-50 text-[#0047BB] rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold mb-3 text-navy">Compliance Rigoroso</h4>
                    <p class="text-sm text-gray-500">Políticas anti-corrupção e integridade em todas as operações.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition-all">
                    <div class="w-12 h-12 bg-blue-50 text-[#0047BB] rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold mb-3 text-navy">Auditoria Externa</h4>
                    <p class="text-sm text-gray-500">Contas auditadas pelas maiores firmas globais do setor.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition-all">
                    <div class="w-12 h-12 bg-blue-50 text-[#0047BB] rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold mb-3 text-navy">Transparência</h4>
                    <p class="text-sm text-gray-500">Prestação de contas clara para todos os acionistas.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>