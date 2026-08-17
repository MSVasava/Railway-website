<?php
$pageTitle = "South Gujarat Railways";
require_once __DIR__ . "/includes/header.php";
?>

<section class="hero">
    <div class="hero-overlay"></div>

    <div class="hero-content container">
        <div class="hero-copy">
            <p class="eyebrow">SAFE • FAST • RELIABLE</p>
            <h1>SOUTH GUJARAT<br>RAILWAYS</h1>
            <p class="hero-subtitle">Your Journey, Our Priority</p>

            <div class="service-highlights">
                <span>🛡️ Secure Booking</span>
                <span>◷ Confirmed Travel</span>
                <span>♧ Best Service</span>
            </div>
        </div>

        <div class="search-card">
            <div class="search-tabs">
                <button class="search-tab active" type="button" data-panel="train-panel">🚆 Search Trains</button>
                <button class="search-tab" type="button" data-panel="pnr-panel">⌕ PNR Status</button>
                <button class="search-tab" type="button" data-panel="running-panel">◷ Running Status</button>
            </div>

            <div class="search-panel" id="train-panel">
                <form action="trains.php" method="get" class="train-search-form">
                    <div class="field">
                        <label for="from">From</label>
                        <input id="from" name="from" type="text" placeholder="From Station" required>
                    </div>

                    <button class="swap-btn" type="button" id="swapStations" aria-label="Swap stations">⇄</button>

                    <div class="field">
                        <label for="to">To</label>
                        <input id="to" name="to" type="text" placeholder="To Station" required>
                    </div>

                    <div class="field date-field">
                        <label for="date">Journey Date</label>
                        <input id="date" name="date" type="date" required>
                    </div>

                    <button class="primary-btn search-btn" type="submit">Search Trains</button>
                </form>
            </div>

            <div class="search-panel hidden" id="pnr-panel">
                <form action="pnr.php" method="get" class="simple-search-form">
                    <div class="field grow">
                        <label for="pnr">PNR Number</label>
                        <input id="pnr" name="pnr" type="text" placeholder="Enter 10 digit PNR" maxlength="10">
                    </div>
                    <button class="primary-btn" type="submit">Check Status</button>
                </form>
            </div>

            <div class="search-panel hidden" id="running-panel">
                <form action="trains.php" method="get" class="simple-search-form">
                    <div class="field grow">
                        <label for="train-number">Train Number</label>
                        <input id="train-number" name="train" type="text" placeholder="Enter train number">
                    </div>
                    <button class="primary-btn" type="submit">Check Running Status</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="routes section">
    <div class="container">
        <div class="section-heading centered">
            <p class="section-label">TRAVEL WITH US</p>
            <h2>Popular Routes</h2>
            <p>Some of the most searched routes in South Gujarat</p>
        </div>

        <div class="route-grid">
            <a href="trains.php?from=Surat&to=Vadodara" class="route-card">
                <span class="route-icon">🚆</span>
                <div><strong>Surat ↔ Vadodara</strong><small>120+ Trains</small></div>
                <span class="arrow">→</span>
            </a>

            <a href="trains.php?from=Surat&to=Mumbai" class="route-card">
                <span class="route-icon">🚆</span>
                <div><strong>Surat ↔ Mumbai</strong><small>85+ Trains</small></div>
                <span class="arrow">→</span>
            </a>

            <a href="trains.php?from=Surat&to=Ahmedabad" class="route-card">
                <span class="route-icon">🚆</span>
                <div><strong>Surat ↔ Ahmedabad</strong><small>70+ Trains</small></div>
                <span class="arrow">→</span>
            </a>

            <a href="trains.php?from=Surat&to=Bharuch" class="route-card">
                <span class="route-icon">🚆</span>
                <div><strong>Surat ↔ Bharuch</strong><small>45+ Trains</small></div>
                <span class="arrow">→</span>
            </a>
        </div>
    </div>
</section>

<section class="about section">
    <div class="container about-grid">
        <div class="about-copy">
            <p class="section-label">ABOUT US</p>
            <h2>Connecting South Gujarat with confidence.</h2>
            <p>
                South Gujarat Railways is a college project website designed to provide
                a simple and modern railway experience for searching trains, checking
                journeys and managing bookings.
            </p>

            <div class="about-points">
                <div><span>✓</span> Easy train search</div>
                <div><span>✓</span> Simple online booking</div>
                <div><span>✓</span> PNR status tracking</div>
            </div>

            <a href="about.php" class="primary-btn inline-btn">Read More</a>
        </div>

        <div class="station-image">
            <div class="station-placeholder">
                <span>🚉</span>
                <strong>SOUTH GUJARAT<br>RAILWAYS</strong>
                <small>Passenger Services</small>
            </div>
        </div>
    </div>
</section>

<section class="quick-info">
    <div class="container quick-info-grid">
        <div><strong>Secure</strong><span>Protected booking experience</span></div>
        <div><strong>Reliable</strong><span>Clear journey information</span></div>
        <div><strong>Convenient</strong><span>Search from anywhere</span></div>
        <div><strong>Support</strong><span>Help when you need it</span></div>
    </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
