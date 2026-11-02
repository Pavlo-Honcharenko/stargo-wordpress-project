<?php
/**
 * Landing (Büroreinigung Stuttgart) — Cases "Drei Objekte" section.
 * Intro: structure modeled on template-parts/home/services.php's .services__intro
 * (own BEM namespace .lp-cases__*, reuses .badge atom).
 * Case cards: Figma 22:135 (desktop), 114:2869 (mobile) — own namespace .lp-case__*.
 * Toggle pattern (native <details>, grid-rows animation) modeled on template-parts/home/faq.php.
 * Copy source: handoff/.../Section 3/stargo-cases-variante-b.html
 *
 * @package Stargo
 */

$urls = stargo_nav_urls();
$cta_url = trailingslashit($urls['contact']) . '#lead';

$badge   = 'Referenzen';
$heading = 'Drei Objekte. Drei Lösungen. Ein Standard.';
$text    = 'Gute Reinigung folgt keinem Paketpreis von der Stange. Drei anonymisierte Beispiele zeigen, wie wir Team, Zeiten und Leistungen auf das jeweilige Objekt abstimmen.';

$cases = [
    [
        'image'    => 'case-buero',
        'category' => 'Büroreinigung',
        'title'    => 'Feste Teams statt täglicher Unsicherheit',
        'kpi'      => '1.800 m²',
        'kpi_meta' => 'Kunde seit 2022',
        'before'   => 'Ständig wechselndes Personal, schwankende Qualität',
        'after'    => 'Festes Zwei-Personen-Team, dokumentierte Kontrollen',
        'ausgangslage' => 'Beim vorherigen Anbieter wechselte das Personal ständig. Die Qualität schwankte, und der Kunde wusste nicht immer, ob die vereinbarten Arbeiten durchgeführt worden waren.',
        'loesung'      => 'Ein fest eingearbeitetes Zwei-Personen-Team, ein klares Leistungsverzeichnis, eine direkte Objektleitung und dokumentierte Kontrollen.',
        'ergebnis'     => 'Die Sauberkeit wurde sichtbar gleichmäßiger. Heute kennt das Team die Räume, Abläufe und Erwartungen der Kanzlei.',
        'open'     => true,
    ],
    [
        'image'    => 'case-unterhalt',
        'category' => 'Unterhaltsreinigung',
        'title'    => 'Klare Abläufe bei täglicher Nutzung',
        'kpi'      => '1.000 m²',
        'kpi_meta' => 'Kunde seit 2024',
        'before'   => 'Sechs Bereiche ohne verlässlichen Ablauf',
        'after'    => 'Ein fester Mitarbeiter, ein Leistungsverzeichnis',
        'ausgangslage' => 'Der Kunde war mit dem vorherigen Anbieter unzufrieden. Verkaufsfläche, Lager, Büro, Pausenraum, Sanitärbereiche und Parkplatz mussten in einen verlässlichen Ablauf gebracht werden.',
        'loesung'      => 'Ein fester Mitarbeiter übernimmt das Objekt nach einem klar abgestimmten Leistungsverzeichnis. Die Objektleitung bleibt für Kontrollen und Anpassungen direkt erreichbar.',
        'ergebnis'     => 'Seit dem Wechsel erlebt der Kunde eine verlässlichere, sichtbar gepflegte Reinigung und klare Zuständigkeiten im laufenden Marktalltag.',
        'open'     => false,
    ],
    [
        'image'    => 'case-hotel',
        'category' => 'Hotel-Unterhaltsreinigung',
        'title'    => 'Planbare Zimmerreinigung seit 2020',
        'kpi'      => '53 Zimmer',
        'kpi_meta' => 'Kunde seit 2020',
        'before'   => 'Enge Zeitfenster, täglich schwankende Belegung',
        'after'    => 'Zwölfköpfiges Team, nach Belegung koordiniert',
        'ausgangslage' => 'Zimmer müssen in engen Zeitfenstern bezugsfertig sein, während Belegung und Arbeitsaufkommen täglich schwanken.',
        'loesung'      => 'Ein zwölfköpfiges Team wird passend zu Belegung und Zimmerbedarf koordiniert. Neue Mitarbeiter werden objektspezifisch eingewiesen.',
        'ergebnis'     => 'Die Zusammenarbeit besteht seit 2020. Das eingespielte Team kennt das Haus und deckt den täglichen Zimmerbedarf planbar ab.',
        'open'     => false,
    ],
];
?>
<section class="lp-cases">
  <div class="lp-cases__intro">
    <span class="badge badge--soft"><?php echo esc_html($badge); ?></span>
    <div class="lp-cases__copy">
      <h2 class="lp-cases__heading"><?php echo esc_html($heading); ?></h2>
      <p class="lp-cases__text"><?php echo esc_html($text); ?></p>
    </div>
  </div>

  <div class="lp-cases__list">
    <?php foreach ($cases as $i => $case) :
        $img_rel = 'images/landing-bueroreinigung/' . $case['image'] . '.jpg';
        $img_set = stargo_responsive_srcset($img_rel, [480, 768], '(max-width: 1023px) 100vw, 525px');
        $img_webp = stargo_asset_webp($img_rel);
        $open = !empty($case['open']);
        $reverse = $i % 2 === 1;
    ?>
      <article class="lp-case<?php echo $reverse ? ' lp-case--reverse' : ''; ?>">
        <div class="lp-case__media">
          <picture>
            <?php if ($img_set['webp_srcset'] !== '') : ?>
              <source type="image/webp" srcset="<?php echo esc_attr($img_set['webp_srcset']); ?>" sizes="<?php echo esc_attr($img_set['sizes']); ?>">
            <?php elseif ($img_webp) : ?>
              <source type="image/webp" srcset="<?php echo esc_url($img_webp); ?>">
            <?php endif; ?>
            <img
              src="<?php echo esc_url($img_set['src']); ?>"
              <?php echo $img_set['srcset'] !== '' ? 'srcset="' . esc_attr($img_set['srcset']) . '" sizes="' . esc_attr($img_set['sizes']) . '"' : ''; ?>
              alt="<?php echo esc_attr($case['category'] . ' – ' . $case['title']); ?>"
              width="525"
              height="395"
              loading="lazy"
              decoding="async"
            >
          </picture>
          <div class="lp-case__kpi">
            <p class="lp-case__kpi-value"><?php echo esc_html($case['kpi']); ?></p>
            <p class="lp-case__kpi-meta"><?php echo esc_html($case['kpi_meta']); ?></p>
          </div>
        </div>

        <div class="lp-case__body">
          <span class="badge lp-case__category"><?php echo esc_html($case['category']); ?></span>
          <h3 class="lp-case__title"><?php echo esc_html($case['title']); ?></h3>

          <div class="lp-case__compare">
            <div class="lp-case__compare-box lp-case__compare-box--before">
              <span class="lp-case__compare-label">Vorher</span>
              <p class="lp-case__compare-text"><?php echo esc_html($case['before']); ?></p>
            </div>
            <span class="lp-case__compare-arrow" aria-hidden="true">
              <img src="<?php echo esc_url(stargo_asset('images/icons/arrow-diagonal.svg')); ?>" alt="">
            </span>
            <div class="lp-case__compare-box lp-case__compare-box--after">
              <span class="lp-case__compare-label">Heute</span>
              <p class="lp-case__compare-text"><?php echo esc_html($case['after']); ?></p>
            </div>
          </div>

          <details class="lp-case__toggle<?php echo $open ? ' is-open' : ''; ?>" <?php echo $open ? 'open' : ''; ?>>
            <summary>
              <span class="lp-case__toggle-icon" aria-hidden="true">
                <img src="<?php echo esc_url(stargo_asset('images/icons/plus.svg')); ?>" alt="">
              </span>
              <span class="lp-case__toggle-label lp-case__toggle-label--show">Informationen anzeigen</span>
              <span class="lp-case__toggle-label lp-case__toggle-label--hide">Informationen ausblenden</span>
            </summary>
            <div class="lp-case__details">
              <div class="lp-case__details-inner">
                <div class="lp-case__detail">
                  <span class="lp-case__detail-label">Ausgangslage</span>
                  <p class="lp-case__detail-text"><?php echo esc_html($case['ausgangslage']); ?></p>
                </div>
                <div class="lp-case__detail">
                  <span class="lp-case__detail-label">Unsere Lösung</span>
                  <p class="lp-case__detail-text"><?php echo esc_html($case['loesung']); ?></p>
                </div>
                <div class="lp-case__detail">
                  <span class="lp-case__detail-label">Ergebnis</span>
                  <p class="lp-case__detail-text"><?php echo esc_html($case['ergebnis']); ?></p>
                </div>
              </div>
            </div>
          </details>
        </div>
      </article>
    <?php endforeach; ?>
  </div>

  <div class="lp-cases__cta">
    <a class="btn btn--primary-dark" href="<?php echo esc_url($cta_url); ?>">
      <span class="btn__label">Beratung anfordern</span>
      <span class="btn__icon" aria-hidden="true">
        <img src="<?php echo esc_url(stargo_asset('images/icon-arrow-right-white.svg')); ?>" alt="">
      </span>
    </a>
  </div>
</section>
