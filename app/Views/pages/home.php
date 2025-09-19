<?= $this->extend('templates/template') ?>
<?= $this->section('banner') ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<h1>Welcome to Iskar Tours</h1>
<p>Your adventure starts here!</p>
<hr>
<div id="ourservices">
    <h2>Our Services</h2>
    <div class="row">
        <div class="col col-md-6 col-lg-4">
            <div class="card">
                <img src="./assets/images/aeropuerto.webp" alt="Airport Services">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">
                        🚐 Private Transportation – Airport ↔ Hotel
                    </h5>
                    <p class="card-text">Start your trip in Panama with the comfort and safety of a private transfer from Tocumen International Airport to your hotel.</p>

                    <div class="d-grip gap-2">
                        <a href="https://wa.me/50768434370" class="btn btn-success" role="button"><i class="bi bi-whatsapp"></i> Book Now</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col col-md-6 col-lg-4">
            <div class="card">
                <img src="./assets/images/personal.webp" alt="Personalized Services">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">
                        🚐 Customized Transportation Services
                    </h5>
                    <p class="card-text">Enjoy the flexibility of private transportation tailored to your needs, perfect for beach trips, mountain getaways, events, or business travel anywhere in Panama.</p>

                    <div class="d-grip gap-2">
                        <a href="https://wa.me/50768434370" class="btn btn-success" role="button"><i class="bi bi-whatsapp"></i> Book Now</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col col-md-6 col-lg-4">
            <div class="card">
                <img src="./assets/images/corporativo.webp" alt="Corporative Services">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">
                        💼 Corporate Transfers
                    </h5>
                    <p class="card-text">We provide reliable executive transportation for business meetings, conferences, staff movements, or client visits.</p>

                    <div class="d-grip gap-2">
                        <a href="https://wa.me/50768434370" class="btn btn-success" role="button"><i class="bi bi-whatsapp"></i> Book Now</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-1 my-md-5">
<div id="tours">
    <h2>Trips & Tours</h2>
    <div class="row">
        <div class="col col-md-6 col-lg-4">
            <div class="card">
                <img src="./assets/images/sanblas.webp" alt="San Blas Tours">
                <div class="card-body">
                    <h5 class="card-title">
                        🌴 DAILY TOURS TO SAN BLAS
                    </h5>
                    <p class="card-text">Enjoy an unforgettable experience in the beautiful San Blas Islands, a Caribbean paradise in Panama with crystal-clear waters, white-sand beaches, and the vibrant Guna indigenous culture.</p>

                    <div class="d-grip gap-2">
                        <a href="https://wa.me/50768434370" class="btn btn-success" role="button"><i class="bi bi-whatsapp"></i> Book Now</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col col-md-6 col-lg-4">
            <div class="card">
                <img src="./assets/images/gamboamonkey.webp" alt="Gamboa Monkeys Island Tours">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">
                        🌿 Gamboa Monkeys Island Tours
                    </h5>
                    <p class="card-text">Enjoy a unique journey through Gamboa, surrounded by lush nature and stunning views of the Panama Canal. Spot local wildlife, cross bridges over the Chagres River, and experience the serenity of this natural paradise just minutes from the city.</p>

                    <div class="d-grip gap-2">
                        <a href="https://wa.me/50768434370" class="btn btn-success" role="button"><i class="bi bi-whatsapp"></i> Book Now</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col col-md-6 col-lg-4">
            <div class="card">
                <img src="./assets/images/villaembera.webp" alt="Gamboa Monkeys Island Tours">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">
                        🛶 Emberá Indigenous Village – Panama
                    </h5>
                    <p class="card-text">Discover the vibrant culture of the Emberá people on this unforgettable visit to their riverside village deep in the Panamanian rainforest. Travel by traditional canoe, learn about their customs, music, and crafts, and enjoy a warm welcome from the community.</p>
                    <div class="d-grip gap-2">
                        <a href="https://wa.me/50768434370" class="btn btn-success" role="button"><i class="bi bi-whatsapp"></i> Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>