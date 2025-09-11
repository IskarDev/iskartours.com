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
        <div class="container-fluid">
            <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scroll">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="./assets/images/iskartourslogo.png" alt="Iskar Tours" width="150" height="40">
                    </a>
                </div>
            </nav>
            
        </div>
        <div id="banner" class="banner-dark">
            <?= $this->renderSection('banner') ?>
        </div>
    </header>
    <main>
        <div class="container my-1 my-md-4">
            <?= $this->renderSection('content') ?>
        </div>
    </main>
    <footer class="bg-dark py-4 mt-auto">
        <div class="container text-center">
            <p class="mb-0 text-light">
                Iskar Tours &copy; <?= date('Y') ?> . All rights reserved.
            </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>