<!DOCTYPE html>
<html class="html" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

  <?php wp_head(); ?>

  <section class="hero is-dark">
    <div class="hero-body">
      <div class="container">
  <?php get_template_part('partials/head', 'menu');?>
      </div>
     </div>
   </section>
