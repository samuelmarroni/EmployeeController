<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/generic.css">
    <link rel="stylesheet" href="/css/app/app.css">
    <link rel="manifest" href="/pwa/manifest.webmanifest">
    <title>{{ $title }}</title>
</head>
<body>
    <header class="app-header">
        <a href="/"><img id="logo" src="/img/logo.svg" alt="Logo"></a>
        <div class="admin">
            <span>Olá, Admin!</span>
            <img id="avatar" src="/img/admin.svg" alt="Avatar">
        </div>
    </header>

    {{ $slot }}

    <footer class="app-footer">
        <span>Samuel {{ date('Y') }}</span>
    </footer>
    <script src="/pwa/index.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>