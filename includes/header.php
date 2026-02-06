<?php
$site_name = "Nonstop Capital";
$page_title = isset($page_title) ? "$page_title | $site_name" : $site_name;
$page_description = $page_description ?? "Holding focada em gestão, crescimento e investimento responsável.";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $page_title; ?>
    </title>
    <meta name="description" content="<?php echo $page_description; ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:type" content="website">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS v4 CDN -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
            --color-primary: #0047BB;
            --color-primary-dark: #00358E;
            --color-primary-light: #1A6BFF;
            --color-navy: #0A0F1D;
            --color-navy-light: #161F33;
            --color-navy-dark: #050810;
            --color-surface-dark: #F4F7FA;
            --color-surface-light: #FFFFFF;
        }

        @layer components {
            .btn-primary {
                @apply px-8 py-4 bg-primary text-white font-bold rounded-xl hover:bg-primary-dark transition-all duration-300 active:scale-95 shadow-lg shadow-primary/20;
            }

            .btn-outline {
                @apply px-8 py-4 bg-transparent border-2 border-primary text-primary font-bold rounded-xl hover:bg-primary hover:text-white transition-all duration-300;
            }

            .card {
                @apply bg-white dark:bg-navy-light p-8 rounded-[32px] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-500;
            }

            .glass {
                @apply backdrop-blur-md bg-white/10 border border-white/20;
            }
        }
    </style>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .transition-theme {
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }
    </style>

    <script>
        // Theme logic removed - Navigation is dark by design, Site is light
    </script>
</head>

<body class="bg-white text-navy transition-theme min-h-screen flex flex-col">
    <?php include 'nav.php'; ?>