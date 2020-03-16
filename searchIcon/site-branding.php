<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<div class="site-branding navbar-brand col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mr-0 p-0">
	<div class="row mr-0 ml-0">		
		<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<?php if ( has_custom_logo() ) : ?>
				<div class="site-logo col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0"><?php the_custom_logo(); ?></div>
			<?php endif; ?>
		</div>
		<div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 pr-0">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pr-0">
				<a href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i></a>
				<a id="account" href="<?php echo get_template_directory_uri(); ?>/my-account/"><i class="fas fa-user"></i></a>
				<a href="<?php echo get_template_directory_uri(); ?>/cart/"><i class="fa fa-shopping-basket"></i></a>
			</div>
		</div>

	</div>
</div><!-- .site-branding -->