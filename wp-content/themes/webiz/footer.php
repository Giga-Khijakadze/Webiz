<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Webiz
 */

?>

<footer class="footer container d-flex align-items-center flex-column">
    <div class="footer-wrapper">
        <nav class="footer-nav">
            <ul class="
                        footer-nav-list
                        d-flex
                        justify-content-between
                    ">
                <li class="footer-nav-item">
                    <a href="homepage.html">Home</a>
                </li>
                <li class="footer-nav-item">
                    <a href="#">About</a>
                </li>
                <li class="footer-nav-item">
                    <a href="#">Contact</a>
                </li>
                <li class="footer-nav-item footer-nav-item--highlight">
                    <a href="#">Start Work at Webiz</a>
                </li>
            </ul>
        </nav>

        <div class="footer-social-media">
            <ul class="
                        social-list
                        d-flex
                        justify-content-between
                        align-items-center
                    ">
                <li class="social-list-item">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="" /></a>
                </li>
                <li class="social-list-item">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="" /></a>
                </li>
                <li class="social-list-item">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="" /></a>
                </li>
                <li class="social-list-item">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="" /></a>
                </li>
                <li class="social-list-item">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="" /></a>
                </li>
            </ul>
        </div>

        <div class="
                    copyright
                    d-flex
                    align-items-center
                    flex-column
                    justify-content-evenly
                ">
            <p class="copyright-text1 align-items-center">
                Webiz International 2021. Terms & Policy
            </p>
            <p class="copyright-text2">Copyright 2021</p>
        </div>
    </div>
</footer>
</div><!-- #page -->
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>
<?php wp_footer(); ?>

</body>

</html>