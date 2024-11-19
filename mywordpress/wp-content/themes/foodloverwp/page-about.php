<?php
/**
 * Template Name: About Page
 *
 * The custom template for displaying the About page.
 *
 * @package WordPress
 * @subpackage Your_Theme_Name
 * @since Your Theme 1.0
 */

get_header();  // Include the header of the site

?>

<div class="content-area">
    <main>
        <!-- About Us Section -->
        <section class="aboutus">
            <div class="container1">
                <div class="col-lg-6 col-md-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image2.png" alt="About Us Image" width="80" height="70">
                </div>
                <div class="about">
                    <div class="col-lg-6 col-md-12">
                        <h3>About Us</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur<br>
                            adipiscing elit, sed do eiusmod tempor<br>
                            incididunt ut labore et dolore magna aliqua.<br>
                            Quis ipsum suspendisse ultrices gravida.<br>
                            Risus commodo viverra maecenas accumsan<br>
                            lacus vel facilisis.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php
get_footer(); // Include the footer of the site
?>
