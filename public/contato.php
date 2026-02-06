<?php
$page_title = "Fale com a Nonstop";
$page_description = "Entre em contato com nossa equipe de Novos Negócios e Relações com Investidores.";
include '../includes/header.php';

$success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Honeypot check
    if (!empty($_POST['website'])) {
        // Probable bot
        exit("Spam detected.");
    }

    // Simple validation (mock)
    if (!empty($_POST['name']) && !empty($_POST['email'])) {
        $success = true;
    }
}
?>

<main>
    <!-- Page Header -->
    <section class="pt-32 pb-20 bg-gray-50 dark:bg-navy-dark">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl lg:text-6xl font-bold mb-8">Contato</h1>
            <p class="text-xl text-gray-500 dark:text-gray-400 max-w-2xl leading-relaxed">
                Estamos prontos para ouvir sua proposta ou esclarecer dúvidas sobre nossa atuação.
            </p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-24">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-20">
                <!-- Info -->
                <div class="w-full lg:w-1/3">
                    <h3 class="text-2xl font-bold mb-8">Canais Diretos</h3>
                    <div class="space-y-12">
                        <div>
                            <h5 class="text-xs font-bold uppercase tracking-widest text-primary mb-4">Novos Negócios
                            </h5>
                            <p class="text-lg font-medium">deals@nscapital.com.br</p>
                        </div>
                        <div>
                            <h5 class="text-xs font-bold uppercase tracking-widest text-primary mb-4">RI</h5>
                            <p class="text-lg font-medium">ri@nscapital.com.br</p>
                        </div>
                        <div>
                            <h5 class="text-xs font-bold uppercase tracking-widest text-primary mb-4">Imprensa</h5>
                            <p class="text-lg font-medium">press@nscapital.com.br</p>
                        </div>
                        <div class="pt-12 border-t border-gray-100 dark:border-gray-800">
                            <h5 class="text-xs font-bold uppercase tracking-widest text-gray-400 mb-4">Sede</h5>
                            <p class="text-gray-500 dark:text-gray-400 leading-relaxed">
                                Av. Brigadeiro Faria Lima, 3477<br>
                                São Paulo, SP
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="w-full lg:w-2/3">
                    <div
                        class="bg-white dark:bg-navy-light p-10 lg:p-16 rounded-3xl shadow-sm border border-gray-100 dark:border-gray-800">
                        <?php if ($success): ?>
                            <div class="bg-primary/10 border border-primary/20 p-8 rounded-2xl text-center">
                                <svg class="w-12 h-12 text-primary mx-auto mb-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <h4 class="text-2xl font-bold mb-2">Mensagem enviada!</h4>
                                <p class="text-gray-500">Agradecemos o contato. Nossa equipe retornará em breve.</p>
                                <button onclick="window.location.href='contato.php'"
                                    class="mt-8 text-primary font-bold hover:underline">Enviar outra mensagem</button>
                            </div>
                        <?php else: ?>
                            <form action="contato.php" method="POST" class="space-y-6">
                                <!-- Honeypot -->
                                <div class="hidden">
                                    <input type="text" name="website" tabindex="-1" autocomplete="off">
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label
                                            class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Nome
                                            Completo</label>
                                        <input type="text" name="name" required
                                            class="w-full px-6 py-4 rounded-xl bg-gray-50 dark:bg-navy border border-transparent focus:border-primary focus:bg-white dark:focus:bg-navy-dark outline-none transition-all"
                                            placeholder="Sr. Nonstop">
                                    </div>
                                    <div>
                                        <label
                                            class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">E-mail
                                            Corporativo</label>
                                        <input type="email" name="email" required
                                            class="w-full px-6 py-4 rounded-xl bg-gray-50 dark:bg-navy border border-transparent focus:border-primary focus:bg-white dark:focus:bg-navy-dark outline-none transition-all"
                                            placeholder="contato@empresa.com.br">
                                    </div>
                                </div>

                                <div>
                                    <label
                                        class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Assunto</label>
                                    <select name="subject"
                                        class="w-full px-6 py-4 rounded-xl bg-gray-50 dark:bg-navy border border-transparent focus:border-primary focus:bg-white dark:focus:bg-navy-dark outline-none transition-all">
                                        <option value="deals">Novos Negócios / Parcerias</option>
                                        <option value="ri">Relações com Investidores</option>
                                        <option value="other">Outros assuntos</option>
                                    </select>
                                </div>

                                <div>
                                    <label
                                        class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Mensagem</label>
                                    <textarea name="message" rows="5" required
                                        class="w-full px-6 py-4 rounded-xl bg-gray-50 dark:bg-navy border border-transparent focus:border-primary focus:bg-white dark:focus:bg-navy-dark outline-none transition-all"
                                        placeholder="Como podemos ajudar?"></textarea>
                                </div>

                                <div class="pt-4">
                                    <button type="submit" class="btn-primary w-full md:w-auto">Enviar mensagem</button>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>