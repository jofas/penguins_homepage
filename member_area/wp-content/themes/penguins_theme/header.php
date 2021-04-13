<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<?php wp_head(); ?>
  <link rel="stylesheet" href="../style.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site", style="flex-wrap: wrap">
  <div style="width: 100%; text-align: center; align-self: flex-start; display: flex; flex-direction: column;">
    <div style="align-self: flex-end;">
      <img
        style="width:75px; float: right"
        src="../static/logo.png" alt="Penguins"/>
    </div>
    <div>
      <h1>The Penguins Club</h1>
    </div>
    <div>
      <a href="./">
        <button type="button">Membership Area</button>
      </a>
      <span class="spacing"></span>
      <a href="./?post_type=tribe_events">
        <button type="button">Events</button>
      </a>
      <span class="spacing"></span>
      <a href="<?php echo wp_logout_url("./")?>">
        <button type="button">Logout</button>
      </a>
    </div>
  </div>
  <main>
