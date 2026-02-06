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

    <!-- Tailwind CSS (Build) -->
    <link rel="stylesheet" href="assets/css/app.css">

    <!-- Tailwind CSS (CDN Fallback - Remove in production after build) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#0047BB', // Azul Asaas Style
                            dark: '#00358E',
                            light: '#1A6BFF',
                        },
                        navy: {
                            DEFAULT: '#0A0F1D',
                            light: '#161F33',
                            dark: '#050810',
                        },
                        surface: {
                            dark: '#F4F7FA', // Background claro bancário
                            light: '#FFFFFF',
                        }
                    }
                }
            }
        }
    </script>

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