<?php
/**
 * Landing (Büroreinigung Stuttgart) hero.
 * Figma 5:20 (desktop), 110:2750 (mobile).
 * Own BEM namespace (.lp-hero__*) — not shared with template-parts/home/hero.php's
 * .hero__* classes, only .btn/.badge design-system atoms are reused.
 *
 * @package Stargo
 */

$badge = 'Stuttgart und 20 km umkreis';
$title = 'Büro- und Unterhaltsreinigung in Stuttgart – feste Teams statt ständig neuer Gesichter.';
$lead  = 'Ein fester Objektleiter, eingespielte Teams und dokumentierte Kontrollen sorgen dafür, dass Ihre Räume zuverlässig sauber bleiben.';
$cta_label = 'Kostenlose Besichtigung anfragen';

$hero_mobile_rel = 'images/landing-bueroreinigung/hero-lp-mobile.webp';

$urls = stargo_nav_urls();
$cta_url = trailingslashit($urls['contact']) . '#lead';
?>
<section class="lp-hero" data-node-id="5:20">
  <div class="lp-hero__media" aria-hidden="true">
    <picture>
      <source media="(max-width: 1023px)" srcset="<?php echo esc_url(stargo_asset($hero_mobile_rel)); ?>">
      <img
        src="<?php echo esc_url(content_url('uploads/2026/09/new-bg-hero-pc.webp')); ?>"
        alt="Stargo-Mitarbeiter bei der Büro- und Unterhaltsreinigung in Stuttgart"
        width="2200"
        height="1467"
        fetchpriority="high"
        loading="eager"
      >
    </picture>
  </div>

  <?php get_template_part('template-parts/header/nav'); ?>

  <div class="lp-hero__bottom">
    <div class="lp-hero__content">
      <span class="badge badge--glass lp-hero__badge"><?php echo esc_html($badge); ?></span>

      <h1 class="lp-hero__title"><?php echo esc_html($title); ?></h1>

      <p class="lp-hero__lead"><?php echo esc_html($lead); ?></p>

      <div class="lp-hero__actions">
        <a class="btn btn--primary" href="<?php echo esc_url($cta_url); ?>">
          <span class="btn__label"><?php echo esc_html($cta_label); ?></span>
          <span class="btn__icon" aria-hidden="true">
            <img src="<?php echo esc_url(stargo_asset('images/icon-arrow-right.svg')); ?>" alt="">
          </span>
        </a>
      </div>
    </div>

    <div class="lp-hero__stats">
      <div class="lp-hero__stats-grid">
        <div class="lp-hero__stat">
          <p class="lp-hero__stat-value">39</p>
          <p class="lp-hero__stat-label">Festangestellte</p>
        </div>
        <span class="lp-hero__divider" aria-hidden="true"></span>
        <div class="lp-hero__stat">
          <p class="lp-hero__stat-value">41+</p>
          <p class="lp-hero__stat-label">Stammkunden</p>
        </div>
        <span class="lp-hero__divider" aria-hidden="true"></span>
        <div class="lp-hero__stat">
          <p class="lp-hero__stat-value">100%</p>
          <p class="lp-hero__stat-label">Eigenpersonal</p>
        </div>
        <span class="lp-hero__divider" aria-hidden="true"></span>
        <div class="lp-hero__stat">
          <p class="lp-hero__stat-value">2019</p>
          <p class="lp-hero__stat-label">Inhabergeführt</p>
        </div>
      </div>

      <div class="lp-hero__trust" aria-label="Zertifizierungen">
        <img
          class="lp-hero__trust-logo lp-hero__trust-logo--qv"
          src="<?php echo esc_url(content_url('uploads/2026/08/trust-logo-1.png')); ?>"
          srcset="<?php echo esc_url(content_url('uploads/2026/08/trust-logo-1.png')); ?> 2x"
          alt="Qualitätsverbund Gebäudedienste"
          width="168"
          height="56"
          decoding="async"
        >
        <img
          class="lp-hero__trust-logo lp-hero__trust-logo--ldg"
          src="<?php echo esc_url(content_url('uploads/2026/08/trust-logo-2.png')); ?>"
          srcset="<?php echo esc_url(content_url('uploads/2026/08/trust-logo-2.png')); ?> 2x"
          alt="Die Gebäudedienstleister – Landesinnung Baden-Württemberg"
          width="200"
          height="56"
          decoding="async"
        >
      </div>
    </div>
  </div>
</section>
