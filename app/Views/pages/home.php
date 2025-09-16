<?= $this->extend('templates/template')?>
<?= $this->section('banner')?>
<?= $this->endSection()?>
<?= $this->section('content')?>
<h1>Welcome to Iskar Tours</h1>
<p>Your adventure starts here!</p>
<hr>
<div id="ourservices">
    <h2>Our Services</h2>
    <div class="row">
        <div class="col col-md-6 col-lg-4">
            <div class="card">
                <img src="./assets/images/aeropuerto.webp" alt="Aeropuerto">
                <div class="card-body">
                    <h5 class="card-title">
                        🚐 Private Transportation – Airport ↔ Hotel
                    </h5>
                    <p class="card-text">Start your trip in Panama with the comfort and safety of a private transfer from Tocumen International Airport to your hotel.</p>
                    <p class="card-text">A professional and punctual driver will greet you upon arrival and take you directly to your destination, hassle-free.</p>
                    <div class="d-grip gap-2">
                        <a href="https://wa.me/50768434370" class="btn btn-success" role="button"><i class="bi bi-whatsapp"></i> Book Now</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col col-md-6 col-lg-4">
            <div class="card">
                <img src="./assets/images/personal.webp" alt="Aeropuerto">
                <div class="card-body">
                    <h5 class="card-title">
                        🚐 Customized Transportation Services
                    </h5>
                    <p class="card-text">Enjoy the flexibility of private transportation tailored to your needs, perfect for beach trips, mountain getaways, events, or business travel anywhere in Panama.</p>
                    <p class="card-text">Our professional and punctual driver will take you wherever you need to go, safely and comfortably.</p>
                    <div class="d-grip gap-2">
                        <a href="https://wa.me/50768434370" class="btn btn-success" role="button"><i class="bi bi-whatsapp"></i> Book Now</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col col-md-6 col-lg-4">
            <div class="card">
                <img src="./assets/images/corporativo.webp" alt="Aeropuerto">
                <div class="card-body">
                    <h5 class="card-title">
                        💼 Corporate Transfers
                    </h5>
                    <p class="card-text">We provide reliable executive transportation for business meetings, conferences, staff movements, or client visits.</p>
                    <p class="card-text">Our professional and punctual driver ensures comfort, discretion, and efficiency for you and your team.</p>
                    <div class="d-grip gap-2">
                        <a href="https://wa.me/50768434370" class="btn btn-success" role="button"><i class="bi bi-whatsapp"></i> Book Now</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()?>   