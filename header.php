<!DOCTYPE html>
<html class="html" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body <?php body_class(); ?>>

  <?php wp_head(); ?>

  <section class="hero is-dark is-small">
    <div class="hero-body">
      <div class="container">
  <?php get_template_part('partials/head', 'menu');?>
      </div>
     </div>
   </section>
