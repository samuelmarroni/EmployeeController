<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>{{ $title }}</title>
</head>
<body>
    <header class="app-header">
        <img id="logo" src="/img/logo.svg" alt="Logo">
        <div class="admin">
            <span>Olá, Admin!</span>
            <img id="avatar" src="/img/admin.svg" alt="Avatar">
        </div>
    </header>
    <h1>{{ $title }}</h1>

    {{ $slot }}

    <footer class="app-footer">
        <span>Samuel {{ date('Y') }}</span>
    </footer>
</body>
</html>