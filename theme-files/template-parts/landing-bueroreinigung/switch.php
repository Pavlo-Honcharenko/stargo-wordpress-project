<?php
/**
 * Landing (Büroreinigung Stuttgart) — "Anbieterwechsel" section.
 * Figma 41:499 (desktop), 118:3294 (mobile) — own namespace .lp-switch__*.
 * Dark card, own literal palette per Figma (not on home — new pattern).
 * Copy source: handoff/.../Section 5/stargo-anbieterwechsel-variante-b.html
 *
 * @package Stargo
 */

$badge   = 'Anbieterwechsel';
$heading = 'Der Wechsel ist einfacher, als Sie denken.';
$lead    = 'Ein Wechsel scheitert selten am Preis, sondern an der Sorge vor Lücken im Ablauf. Deshalb organisieren wir den Übergang für Sie — komplett.';

$steps = [
    [
        'num'   => '01',
        'title' => 'Besichtigung',
        'text'  => 'Wir sehen uns Ihr Objekt an und erstellen ein Festpreisangebot.',
    ],
    [
        'num'   => '02',
        'title' => 'Wechsel planen',
        'text'  => 'Wir lesen Ihren bestehenden Vertrag und legen den Start darauf ab.',
    ],
    [
        'num'   => '03',
        'title' => 'Übergabe organisieren',
        'text'  => 'Schlüssel, Zugänge, Alarm und Material klären wir vorab.',
    ],
    [
        'num'   => '04',
        'title' => 'Sicher starten',
        'text'  => 'Team wird eingewiesen, erste 8 Wochen engmaschig kontrolliert.',
    ],
];

$cta_title = 'Kein Tag ohne Reinigung. Keine Doppelzahlung.';
$cta_note  = 'Kostenlos · Unverbindlich · Ohne Kündigung Ihres bestehenden Vertrags';
$cta_label = 'Wechsel unverbindlich durchrechnen lassen';

$urls = stargo_nav_urls();
$cta_url = trailingslashit($urls['contact']) . '#lead';
?>
<section class="lp-switch" id="lp-switch">
  <div class="lp-switch__card">
    <div class="lp-switch__intro">
      <div class="badge badge--glass"><?php echo esc_html($badge); ?></div>
      <h2 class="lp-switch__heading"><?php echo esc_html($heading); ?></h2>
      <p class="lp-switch__lead"><?php echo esc_html($lead); ?></p>
    </div>

    <div class="lp-switch__legend">
      <span class="lp-switch__legend-item lp-switch__legend-item--old">
        <i class="lp-switch__legend-dot" aria-hidden="true"></i>Bisheriger Anbieter
      </span>
      <span class="lp-switch__legend-item lp-switch__legend-item--new">
        <i class="lp-switch__legend-dot" aria-hidden="true"></i>Stargo
      </span>
    </div>

    <div class="lp-switch__timeline">
      <div class="lp-switch__bar lp-switch__bar--old"></div>
      <div class="lp-switch__bar lp-switch__bar--new"></div>
      <span class="lp-switch__marker lp-switch__marker--handover" aria-hidden="true"></span>
      <span class="lp-switch__marker lp-switch__marker--end" aria-hidden="true"></span>
    </div>
    <div class="lp-switch__labels">
      <span class="lp-switch__label lp-switch__label--today">Heute</span>
      <span class="lp-switch__label lp-switch__label--handover">Übergabe</span>
      <span class="lp-switch__label lp-switch__label--end">Vertragsende</span>
    </div>

    <div class="lp-switch__steps">
      <?php foreach ($steps as $step) : ?>
        <div class="lp-switch__step">
          <p class="lp-switch__step-num"><?php echo esc_html($step['num']); ?></p>
          <h3 class="lp-switch__step-title"><?php echo esc_html($step['title']); ?></h3>
          <p class="lp-switch__step-text"><?php echo esc_html($step['text']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="lp-switch__cta">
      <h2 class="lp-switch__cta-title"><?php echo esc_html($cta_title); ?></h2>
      <div class="lp-switch__cta-aside">
        <p class="lp-switch__cta-note"><?php echo esc_html($cta_note); ?></p>
        <a class="btn btn--primary" href="<?php echo esc_url($cta_url); ?>">
          <span class="btn__label"><?php echo esc_html($cta_label); ?></span>
          <span class="btn__icon" aria-hidden="true">
            <img src="<?php echo esc_url(stargo_asset('images/icon-arrow-right.svg')); ?>" alt="">
          </span>
        </a>
      </div>
    </div>
  </div>
</section>
