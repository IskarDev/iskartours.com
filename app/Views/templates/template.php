<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iskar Tours Web Page</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/css/iskarstyle.css">

    <link rel="icon" type="image/x-icon" href="favicon.ico">
    
</head>
<body class="d-flex flex-column vh-100">
    <header>
        <?= $this->include('templates/mainmenu') ?>
        <?= $this->renderSection('banner') ?>
    </header>
    <main>
        <div class="container my-1 my-md-4">
            <?= $this->renderSection('content') ?>
        </div>
    </main>
    <footer class="footer-dark py-3 mt-auto text-light">
        <?= $this->include('templates/mainfooter') ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>