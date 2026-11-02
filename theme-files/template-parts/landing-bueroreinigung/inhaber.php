<?php
/**
 * Landing (Büroreinigung Stuttgart) — "Inhabergeführt" section.
 * Figma 94:2103 (desktop), 136:5263 (mobile) — own namespace .lp-inhaber__*.
 * Portrait breaks out of the grid on the left, rounded only on the outer edge
 * (no card) — copy-source: handoff/.../Section 10/stargo-inhaber-a-desktop-mobile.html.
 * Portrait photo cropped from handoff's own export (baked-in black letterbox
 * bars removed) — real client photo, not a placeholder.
 *
 * @package Stargo
 */

$badge   = 'Inhabergeführt';
$heading = 'Verantwortung lässt sich';
$heading_soft = 'nicht delegieren.';
$paragraphs = [
    'Unsere Kunden geben uns Zugang zu ihren Büros, Praxen und Betrieben. Dieses Vertrauen verdient feste Ansprechpartner – und eine ehrliche, schnelle Reaktion, wenn einmal etwas nicht passt.',
    'Wenn in Ihrem Objekt etwas nicht stimmt, landet das nicht in einer Abteilung. Es landet bei mir.',
];
$name  = 'Mustafa Tüfekci';
$role  = 'Geschäftsführer & Inhaber';
$since = 'Stargo seit 2019';

$proofs = [
    ['icon' => 'pulse-underline.svg', 'title' => 'Direkte Verantwortung', 'text' => 'Entscheidungen verschwinden nicht zwischen Abteilungen. Es gibt jemanden, der sie trifft.'],
    ['icon' => 'route-dots.svg', 'title' => 'Kurze Wege', 'text' => 'Eskalation heißt bei uns: ein Anruf – nicht drei Ebenen und ein Ticket im Konzern.'],
    ['icon' => 'line-chart-line.svg', 'title' => 'Langfristig gedacht', 'text' => 'Wir optimieren nicht auf den nächsten Auftrag, sondern auf Kunden, die bleiben.'],
];

$img_rel  = 'images/landing-bueroreinigung/inhaber-portrait2.jpg';
$img_set  = stargo_responsive_srcset($img_rel, [480, 768], '(max-width: 1023px) 100vw, 44vw');
$img_webp = stargo_asset_webp($img_rel);
?>
<section class="lp-inhaber" id="lp-inhaber">
  <div class="lp-inhaber__split">
    <figure class="lp-inhaber__photo">
      <picture>
        <?php if ($img_set['webp_srcset'] !== '') : ?>
          <source type="image/webp" srcset="<?php echo esc_attr($img_set['webp_srcset']); ?>" sizes="(max-width: 1023px) 100vw, 44vw">
        <?php elseif ($img_webp) : ?>
          <source type="image/webp" srcset="<?php echo esc_url($img_webp); ?>">
        <?php endif; ?>
        <img
          src="<?php echo esc_url($img_set['src']); ?>"
          <?php echo $img_set['srcset'] !== '' ? 'srcset="' . esc_attr($img_set['srcset']) . '" sizes="(max-width: 1023px) 100vw, 44vw"' : ''; ?>
          alt="<?php echo esc_attr($name); ?>, Geschäftsführer und Inhaber von Stargo Facility Services"
          width="966"
          height="978"
          loading="lazy"
          decoding="async"
        >
      </picture>
    </figure>

    <div class="lp-inhaber__copy">
      <span class="badge badge--soft"><?php echo esc_html($badge); ?></span>
      <h2 class="lp-inhaber__heading">
        <?php echo esc_html($heading); ?>
        <span class="lp-inhaber__heading-soft"><?php echo esc_html($heading_soft); ?></span>
      </h2>

      <?php foreach ($paragraphs as $p) : ?>
        <p class="lp-inhaber__text"><?php echo esc_html($p); ?></p>
      <?php endforeach; ?>

      <div class="lp-inhaber__sign">
        <span class="lp-inhaber__sign-name"><?php echo esc_html($name); ?></span>
        <span class="badge badge--gray"><?php echo esc_html($role); ?></span>
        <span class="lp-inhaber__sign-since"><?php echo esc_html($since); ?></span>
      </div>
    </div>
  </div>

  <div class="lp-inhaber__proofs">
    <?php foreach ($proofs as $item) : ?>
      <div class="lp-inhaber__proof">
        <span class="lp-inhaber__proof-icon" aria-hidden="true">
          <img src="<?php echo esc_url(stargo_asset('images/icons/' . $item['icon'])); ?>" alt="">
        </span>
        <h3 class="lp-inhaber__proof-h"><?php echo esc_html($item['title']); ?></h3>
        <p class="lp-inhaber__proof-text"><?php echo esc_html($item['text']); ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>
