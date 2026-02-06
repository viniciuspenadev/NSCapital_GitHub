<footer class="bg-navy text-gray-400 py-20 border-t border-gray-800">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            <!-- Brand -->
            <div class="lg:col-span-1">
                <a href="index.php" class="flex items-center gap-2 mb-8 group">
                    <img src="assets/img/logo_nonstop.png" alt="Nonstop Capital Logo"
                        class="h-10 w-auto group-hover:scale-105 transition-transform">
                </a>
                <p class="text-sm leading-relaxed mb-8">
                    Holding de investimentos focada em gestão ativa, governança de excelência e crescimento sustentável
                    de longo prazo.
                </p>
                <div class="flex gap-4">
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-navy-light flex items-center justify-center hover:bg-[#0047BB] hover:text-white transition-all">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Links 1 -->
            <div>
                <h4 class="text-white font-bold mb-6">Institucional</h4>
                <ul class="space-y-4 text-sm">
                    <li><a href="sobre.php" class="hover:text-white transition-colors">Sobre Nós</a></li>
                    <li><a href="tese.php" class="hover:text-white transition-colors">Nossa Tese</a></li>
                    <li><a href="governanca.php" class="hover:text-white transition-colors">Governança</a></li>
                    <li><a href="insights.php" class="hover:text-white transition-colors">Insights</a></li>
                </ul>
            </div>

            <!-- Links 2 -->
            <div>
                <h4 class="text-white font-bold mb-6">Transparência</h4>
                <ul class="space-y-4 text-sm">
                    <li><a href="privacidade.php" class="hover:text-white transition-colors">Privacidade</a></li>
                    <li><a href="termos.php" class="hover:text-white transition-colors">Termos de Uso</a></li>
                    <li><a href="contato.php" class="hover:text-white transition-colors">Contato</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-white font-bold mb-6">Escritório</h4>
                <p class="text-sm leading-relaxed mb-4">
                    Av. Brigadeiro Faria Lima, 4500<br>
                    Itaim Bibi, São Paulo - SP<br>
                    CEP 04538-132
                </p>
                <a href="mailto:contato@nscapital.com.br"
                    class="text-sm font-bold text-[#0047BB] hover:underline">contato@nscapital.com.br</a>
            </div>
        </div>

        <div class="pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-xs uppercase tracking-widest font-bold">
                &copy; <?php echo date('Y'); ?> Nonstop Capital Holding S.A.
            </p>
            <div class="flex gap-8 text-[10px] items-center">
                <span>CNPJ: 00.000.000/0000-00</span>
                <span class="px-2 py-1 rounded bg-navy-light border border-gray-800">CVM Registrada</span>
            </div>
        </div>
    </div>
</footer>

<script src="assets/js/app.js"></script>
</body>

</html>