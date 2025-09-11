<?= $this->extend('templates/template')?>
<?= $this->section('banner')?>
<?= $this->endSection()?>
<?= $this->section('content')?>
<h1>Welcome to Iskar Tours</h1>
<p>Your adventure starts here!</p>
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
                        <button class="btn btn-primary" type="button">More Info</button>
                        <button class="btn btn-success" type="button">Book Now</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()?>   