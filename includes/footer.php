<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <a href="<?= (strpos($_SERVER["PHP_SELF"], "/admin/") !== false) ? "../" : "" ?>index.php" class="brand footer-brand-link">
                <div class="brand-logo">🚆</div>
                <div>
                    <strong>SOUTH GUJARAT RAILWAYS</strong>
                    <span>Safe • Fast • Reliable</span>
                </div>
            </a>
            <p>© <?= date("Y") ?> South Gujarat Railways.</p>
            <p>College Project • All rights reserved.</p>
        </div>

        <div>
            <h3>Quick Links</h3>
            <a href="<?= (strpos($_SERVER["PHP_SELF"], "/admin/") !== false) ? "../" : "" ?>index.php">Home</a>
            <a href="trains.php">Trains</a>
            <a href="booking.php">Book Ticket</a>
            <a href="pnr.php">PNR Status</a>
            <a href="my-bookings.php">My Bookings</a>
        </div>

        <div>
            <h3>Information</h3>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact Us</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Refund Policy</a>
        </div>

        <div>
            <h3>Contact Us</h3>
            <p>☎ 0261-1234567</p>
            <p>✉ support@sgr.in</p>
            <p>⌖ Surat, Gujarat, India</p>
            <div class="socials">
                <span>f</span><span>𝕏</span><span>◎</span><span>▶</span>
            </div>
        </div>
    </div>
</footer>

<script src="<?= (strpos($_SERVER["PHP_SELF"], "/admin/") !== false) ? "../" : "" ?>js/script.js"></script>
</body>
</html>
