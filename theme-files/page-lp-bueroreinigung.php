<?php
/**
 * Template Name: Landing — Büroreinigung Stuttgart (Google Ads)
 * Figma 5:20 (desktop), 110:2750 (mobile). Unlinked page — not in any nav menu.
 *
 * @package Stargo
 */

get_header();
?>
<main id="main" class="lp lp--buero" tabindex="-1">
  <?php get_template_part('template-parts/landing-bueroreinigung/hero'); ?>
  <?php get_template_part('template-parts/home/clients'); ?>
  <?php get_template_part('template-parts/landing-bueroreinigung/cases'); ?>
  <?php get_template_part('template-parts/landing-bueroreinigung/team'); ?>
  <?php get_template_part('template-parts/landing-bueroreinigung/switch'); ?>
  <?php get_template_part('template-parts/landing-bueroreinigung/concept'); ?>
  <?php get_template_part('template-parts/landing-bueroreinigung/objects'); ?>
  <?php get_template_part('template-parts/landing-bueroreinigung/scope'); ?>
  <?php get_template_part('template-parts/landing-bueroreinigung/ticket'); ?>
  <?php get_template_part('template-parts/landing-bueroreinigung/inhaber'); ?>
  <?php get_template_part('template-parts/home/faq'); ?>
</main>
<?php
get_footer();
