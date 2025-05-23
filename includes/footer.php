<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="/shoe-store/assets/css/footer.css">
</head>
<body>
</main>
<footer class="main-footer">
    <div class="container">
        <div class="footer-grid">
           
            <!-- Help Section -->
            <div class="footer-col">
                <h3>Help</h3>
                <ul>
                    <li><a href="<?php echo SITE_URL; ?>/faq.php">FAQ</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/size-guide.php">Size Guide</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/contact.php">Contact Us</a></li>
                </ul>
            </div>

            <!-- About Section -->
            <div class="footer-col">
                <h3>About</h3>
                <ul>
                    <li><a href="<?php echo SITE_URL; ?>/about.php">Our Story</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/term.php">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Newsletter Section -->
            <div class="footer-col">
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
           </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> ShoeStyle. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>
