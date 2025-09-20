<div class="container-fluid">
    <nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top navbar-scroll" data-bs-theme="dark">
        <div class="container">
            <!-- Navbar brand -->
            <a href="<?=base_url("/")?>" class="navbar-brand">
                <img src="./assets/images/iskartourslogo.png" alt="Iskar Tours" width="150" height="40">
            </a>
            <!-- Toggle button -->
             <button class="navbar-toggler" type="button" 
             data-bs-toggle="collapse" 
             data-bs-target="#mainmenu" 
             aria-controls="mainmenu" 
             aria-expanded="false" 
             aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="mainmenu">
                <!-- Left links -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?=base_url("/")?>"><i class="bi bi-house-door-fill mx-1"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?=base_url("/contact")?>"><i class="bi bi-envelope-fill mx-1"></i>Contact Us</a>
                    </li>
        </div>
    </nav>
</div>