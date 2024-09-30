<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo com Sidebar</title>
    <!-- Incluindo Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            overflow-x: hidden;
        }
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            height: 100%;
            width: 250px;
            background-color: #f8f9fa;
            padding: 1rem;
        }
        .main-content {
            margin-left: 250px;
            padding: 2rem;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4>Casos de Uso</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="animal">Animais</a>
            </li>
        </ul>
    </div>

    <!-- Conteúdo Principal -->
    <div class="main-content">
        <h1>Bem-vindo ao Seu Site</h1>

    </div>

    <!-- Incluindo Bootstrap JS e Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>
</html>
