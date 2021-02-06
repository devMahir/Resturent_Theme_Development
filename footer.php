<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resturent
 */

?>

	<footer>
		<div class="wrapper">
			<ul>
                <li>New Your Resturant</li>
                <li>3926 Anmore Road</li>
                <li>New York, NY 10014</li>
                <li>718-7491714zz</li>
            </ul>
            <ul>
                <li>France Resturant</li>
                <li>68, rue de la Couronne</li>
                <li>75002 PARISE</li>
                <li>02.94.23.69.56</li>
            </ul>
            <ul>
                <li><a href="">Blog</a></li>
                <li><a href="">Careers</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <ul>
                <li><img src="<?php echo(get_template_directory_uri()); ?>/images/logo.png" alt="logo"></li>
                <li>&copy; All Right Reserved 2021</li>
            </ul>
            <?php dynamic_sidebar( 'footer' ); ?>
		</div><!-- .wrapper -->
	</footer><!-- .footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
