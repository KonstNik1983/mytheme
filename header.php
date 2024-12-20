<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Блог о домашнем пивоварении: рецепты, советы, истории успеха.">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php bloginfo('name'); ?></title>

   <?php wp_head(); ?>

</head>

<body background="<?php bloginfo('template_url'); ?>/assets/images/background2.jpg">

   <header>

      <?php

      $class = "";
      $class1 = "";
      $class2 = "";
      $class3 = "";
      $mobile = "";
      $mobile1 = "";
      $mobile2 = "";
      $mobile3 = "";


      if (is_page('home')) {
         $class = 'active-full';
         $mobile = 'active-mobile';
      } elseif (is_page('blog')) {
         $class1 = 'active-full';
         $mobile1 = 'active-mobile';
      } elseif (is_page('recipes')) {
         $class2 = 'active-full';
         $mobile2 = 'active-mobile';
      } elseif (is_page('about')) {
         $class3 = 'active-full';
         $mobile3 = 'active-mobile';
      }
      ?>

      <div class="logo">
         <div class="main">The Rocket Beer</div>
         <div class="sub">Brewing company</div>
      </div>
      <nav>
         <a href="https://wpfolder" class="<?php echo $class; ?> btn btn-outline-secondary">Главная</a>
         <a href="https://wpfolder/blog" class="<?php echo $class1; ?> btn btn-outline-secondary">Статьи</a>
         <a href="https://wpfolder/recipes" class="<?php echo $class2; ?> btn btn-outline-secondary">Рецепты</a>
         <a href="https://wpfolder/about" class="<?php echo $class3; ?> btn btn-outline-secondary">О школе</a>
      </nav>
      <nav class="mobile-menu">
         <a href="https://wpfolder" class="<?php echo $mobile; ?>">Главная</a>
         <a href="https://wpfolder/blog" class="<?php echo $mobile1; ?>">Статьи</a>
         <a href="https://wpfolder/recipes" class="<?php echo $mobile2; ?>" id="recipes">Рецепты</a>
         <a href="https://wpfolder/about" class="<?php echo $mobile3; ?>">О школе</a>
      </nav>

   </header>