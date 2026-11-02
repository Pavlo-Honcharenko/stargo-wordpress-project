<?php
/**
 * Landing (Büroreinigung Stuttgart) — "Feste Teams" section.
 * Figma 32:302 (desktop), 117:3073 (mobile) — own namespace .lp-team__*.
 * Closing CTA ported from template-parts/home/mid-cta.php's .mid-cta pattern.
 * Portraits: exported from Figma mock (client's own team, halbnah, Stargo-Kleidung).
 * Copy source: handoff/.../Section 4/stargo-team-final-desktop-tablet-mobile.html
 *
 * @package Stargo
 */

$badge   = 'Feste Teams';
$heading = 'Sie sehen immer die gleichen Gesichter.';
$text    = 'Wer bei Ihnen reinigt, ist bei uns angestellt und bleibt Ihrem Objekt zugeordnet. Das Team kennt Ihre Räume, Ihre Abläufe und die vereinbarte Leistung – Sie müssen nichts neu erklären.';

$members = [
    [
        'image' => 'team-portrait-1',
        'name'  => 'Teamleitung Sonderreinigung',
        'role'  => 'Glas · Fassade · Grundreinigung',
        'quote' => 'Glas, Fassade, Grundreinigung – das sind Einsätze, die man vorher plant und nicht nebenbei erledigt.',
    ],
    [
        'image' => 'team-portrait-2',
        'name'  => 'Vorarbeiter Unterhaltsreinigung',
        'role'  => 'Täglicher ablauf · einweisung',
        'quote' => 'Ich arbeite selbst mit. Wenn etwas nicht passt, sehe ich es, bevor es der Kunde meldet.',
    ],
    [
        'image' => 'team-portrait-3',
        'name'  => 'Facility Manager',
        'role'  => 'Objektabläufe · koordination',
        'quote' => 'Jedes Gebäude hat eigene Abläufe. Meine Aufgabe ist, dass die Reinigung sich daran hält.',
    ],
    [
        'image' => 'team-portrait-4',
        'name'  => 'Teamleitung Unterhaltsreinigung',
        'role'  => 'Teams · vertretung · qualität',
        'quote' => 'Fällt jemand aus, kommt keine fremde Kraft, sondern eine eingewiesene Vertretung.',
    ],
];

$cta_title = 'Wer in Ihrem Objekt arbeitet, steht vor dem ersten Einsatz fest.';
$cta_text  = 'Bei der Besichtigung lernen Sie Ihre Objektleitung persönlich kennen – nicht erst, wenn etwas zu klären ist.';
$cta_label = 'Besichtigungstermin anfragen';

$urls = stargo_nav_urls();
$cta_url = trailingslashit($urls['contact']) . '#lead';
?>
<section class="lp-team" id="lp-team">
  <div class="lp-team__intro">
    <span class="badge badge--soft"><?php echo esc_html($badge); ?></span>
    <h2 class="lp-team__heading"><?php echo esc_html($heading); ?></h2>
    <p class="lp-team__text"><?php echo esc_html($text); ?></p>
  </div>

  <div class="lp-team__grid">
    <?php foreach ($members as $member) :
        $img_rel = 'images/landing-bueroreinigung/' . $member['image'] . '.jpg';
        $img_set = stargo_responsive_srcset($img_rel, [480, 768], '(max-width: 1023px) 50vw, 25vw');
        $img_webp = stargo_asset_webp($img_rel);
    ?>
      <article class="lp-team__member">
        <div class="lp-team__photo">
          <picture>
            <?php if ($img_set['webp_srcset'] !== '') : ?>
              <source type="image/webp" srcset="<?php echo esc_attr($img_set['webp_srcset']); ?>" sizes="<?php echo esc_attr($img_set['sizes']); ?>">
            <?php elseif ($img_webp) : ?>
              <source type="image/webp" srcset="<?php echo esc_url($img_webp); ?>">
            <?php endif; ?>
            <img
              src="<?php echo esc_url($img_set['src']); ?>"
              <?php echo $img_set['srcset'] !== '' ? 'srcset="' . esc_attr($img_set['srcset']) . '" sizes="' . esc_attr($img_set['sizes']) . '"' : ''; ?>
              alt="<?php echo esc_attr($member['name']); ?>"
              width="332"
              height="395"
              loading="lazy"
              decoding="async"
            >
          </picture>
          <div class="lp-team__photo-gradient" aria-hidden="true"></div>
          <div class="lp-team__photo-info">
            <h3 class="lp-team__name"><?php echo esc_html($member['name']); ?></h3>
            <p class="lp-team__role"><?php echo esc_html($member['role']); ?></p>
          </div>
        </div>
        <div class="lp-team__quote">
          <p>&bdquo;<?php echo esc_html($member['quote']); ?>&ldquo;</p>
        </div>
      </article>
    <?php endforeach; ?>
  </div>

  <div class="lp-team__cta">
    <h2 class="lp-team__cta-title"><?php echo esc_html($cta_title); ?></h2>
    <div class="lp-team__cta-aside">
      <p class="lp-team__cta-text"><?php echo esc_html($cta_text); ?></p>
      <a class="btn btn--primary-dark" href="<?php echo esc_url($cta_url); ?>">
        <span class="btn__label"><?php echo esc_html($cta_label); ?></span>
        <span class="btn__icon" aria-hidden="true">
          <img src="<?php echo esc_url(stargo_asset('images/icon-arrow-right-white.svg')); ?>" alt="">
        </span>
      </a>
    </div>
  </div>
</section>
