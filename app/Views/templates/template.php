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
    <footer class="footer-dark py-4 mt-auto text-light">
        <div class="container text-center pt-5">
            <div class="row">
                
                <div class="col-md-6">
                    <div id="redesesociales">
                        <h6>SOCIAL NETWORKS</h6>
                        <p class="my-4">    
                            <a class="personallinks" href="https://www.facebook.com/iskartours/" target="_blank"><i class="bi bi-facebook"></i></a>
                            <a class="personallinks" href="https://www.instagram.com/iskartours/" target="_blank"><i class="bi bi-instagram"></i></a>
                            <a class="personallinks" href="https://www.tiktok.com/@iskartours" target="_blank"><i class="bi bi-tiktok"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="redesesociales">
                        <h6>OTHER LINKS</h6>
                        <p>    
                            <ul class="list-unstyled">
                                <li><a class="personallinks" href="https://www.tckunayala.com/" target="_blank">Transporte y Carga Kuna Yala S.A.</a></li>
                                <li><a class="personallinks" href="https://www.gunayala.org.pa/" target="_blank">Congreso General Guna</a></li>
                                <li><a class="personallinks" href="https://www.atp.gob.pa/" target="_blank">Autoridad de Turismo de Panamá</a></li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <p class="my-5">
                Iskar Tours &copy; <?= date('Y') ?> . All rights reserved.
            </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>