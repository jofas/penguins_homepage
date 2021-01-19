<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<?php wp_head(); ?>

  <link rel="stylesheet" href="../../../style.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <style>
    article > header {
      display: block;
    }
  </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site" style="flex-wrap: wrap">
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
        <?php
          while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content/content-page' );

            if ( comments_open() || get_comments_number() ) {
              comments_template();
            }
          endwhile;
        ?>
      </main>
    </div>
  </div>
</body>
</html>
