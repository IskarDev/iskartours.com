<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iskar Tours Web Page</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/iskarstyle.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    
</head>
<body class="d-flex flex-column vh-100">
    <header>
        <div class="container-fluid">
            <nav class="navbar fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="./assets/images/iskartourslogo.png" alt="Iskar Tours" width="150" height="40">
                    </a>
                </div>
            </nav>
        </div>
        <?= $this->renderSection('banner') ?>
    </header>
    <main></main>
    <footer class="mt-auto">
        <div class="container-fluid">
            <div class="container">
                Iskar Tours &copy;2025. Derechos Reservados
            </div>
        </div>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>