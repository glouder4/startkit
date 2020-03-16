<nav id="pageHeader" class="navbar navbar-expand-md navbar-light col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 fixed-top">
        <?php get_template_part( 'template-parts/header/site', 'branding' ); ?> 
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-0" id="navbarSupportedContent">
       <?php wp_nav_menu(array(
      'theme_lacation'=>'menu',
      "menu_class"=>"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 row mr-0 ml-0", 
      'container'=>'false')); ?>
      </div>
      <div id="searcher" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <?php get_search_form(); ?>
      </div>
</nav>