<?php
$page_title = "Privacidade e Termos";
include '../includes/header.php';
?>

<main class="pt-32 pb-24">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-4xl font-bold mb-12">Privacidade e Termos</h1>

            <section class="mb-16">
                <h2 class="text-2xl font-bold mb-6">Política de Privacidade</h2>
                <div class="prose dark:prose-invert text-gray-500 dark:text-gray-400 space-y-4 text-sm">
                    <p>A Nonstop Capital valoriza sua privacidade. Este site não coleta cookies de rastreamento para
                        fins publicitários de terceiros. As informações enviadas via formulário de contato são
                        utilizadas exclusivamente para responder às solicitações institucionais.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat
                        volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.</p>
                </div>
            </section>

            <section>
                <h2 class="text-2xl font-bold mb-6">Termos de Uso</h2>
                <div class="prose dark:prose-invert text-gray-500 dark:text-gray-400 space-y-4 text-sm">
                    <p>O conteúdo deste site é meramente informativo e não constitui oferta de valores mobiliários ou
                        recomendação de investimento. A Nonstop Capital não se responsabiliza por decisões tomadas com
                        base nas informações aqui contidas.</p>
                    <p>Copyright ©
                        <?php echo date('Y'); ?> Nonstop Capital S.A. Proibida a reprodução total ou parcial sem
                        autorização prévia.
                    </p>
                </div>
            </section>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>