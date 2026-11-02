<?php
/**
 * Landing (Büroreinigung Stuttgart) — "Objektarten" section.
 * Figma 70:1173 (desktop), 128:3706 (mobile) — own namespace .lp-objects__*.
 * Interactive tab list: click swaps the shared desktop stage panel (image/heading/
 * chips) via assets/js/landing-bueroreinigung.js; mobile carries the same content
 * inline per item (CSS-only accordion via [aria-selected] + grid-rows), no JS needed
 * on mobile. Pattern ported from handoff/.../Section 7 copy-source's oa-item/oa-stage.
 * "Weitere Gewerbeobjekte" has no matching photo (catch-all category) and stays
 * on the copy-source's own quote state.
 *
 * @package Stargo
 */

$badge   = 'Objektarten';
$heading = 'Reinigungsabläufe, die zu Ihrem Betrieb passen.';
$lead    = 'Ein Hotel funktioniert anders als eine Kanzlei oder Arztpraxis. Deshalb stimmen wir Team, Zeiten und Leistungsumfang auf die tatsächliche Nutzung Ihres Gebäudes ab.';
$cta_label = 'Jetzt kostenlos anfragen';

$items = [
    [
        'icon'  => 'lp-objects-1.svg',
        'title' => 'Büros, Kanzleien & Verwaltung',
        'mode'  => 'photo',
        'image' => 'objects-office2.jpg',
        'pos'   => '50% 50%',
        'h'     => 'Sauber, bevor der Arbeitstag beginnt.',
        'keys'  => ['Arbeitsplätze', 'Empfang', 'Besprechungsräume', 'Teeküchen', 'Sanitärbereiche'],
    ],
    [
        'icon'  => 'lp-objects-2.svg',
        'title' => 'Praxen, Kliniken & sensible Bereiche',
        'mode'  => 'photo',
        'image' => 'praxen.webp',
        'pos'   => '50% 50%',
        'h'     => 'Hygiene, ohne den Praxisbetrieb zu stören.',
        'keys'  => ['Hygienevorgaben', 'Patientenzeiten', 'geschulte Teams', 'sensible Bereiche'],
    ],
    [
        'icon'  => 'lp-objects-3.svg',
        'title' => 'Einzelhandel & Supermärkte',
        'mode'  => 'photo',
        'image' => 'einzelhandel.webp',
        'pos'   => '50% 50%',
        'h'     => 'Sauberkeit trotz hoher Frequenz.',
        'keys'  => ['Verkaufsflächen', 'Eingangszone', 'Sanitärbereiche', 'Nebenflächen'],
    ],
    [
        'icon'  => 'lp-objects-4.svg',
        'title' => 'Hausverwaltungen & Wohnanlagen',
        'mode'  => 'photo',
        'image' => 'hausverwaltungen.webp',
        'pos'   => '50% 50%',
        'h'     => 'Ein gepflegter Eindruck, jeden Tag.',
        'keys'  => ['Treppenhäuser', 'Eingänge', 'Aufzüge', 'Gemeinschaftsflächen'],
    ],
    [
        'icon'  => 'lp-objects-5.svg',
        'title' => 'Hotels & Gastronomie',
        'mode'  => 'photo',
        'image' => 'hotels.webp',
        'pos'   => '50% 50%',
        'h'     => 'Reinigung nach Belegung statt nach Standardzeiten.',
        'keys'  => ['Zimmer', 'Check-out', 'Gastraum', 'Betriebsschluss'],
    ],
    [
        'icon'  => 'lp-objects-6.svg',
        'title' => 'Industrie, Produktion & Lager',
        'mode'  => 'photo',
        'image' => 'industrie.webp',
        'pos'   => '50% 50%',
        'h'     => 'Abläufe, die sich Ihrem Schichtplan unterordnen.',
        'keys'  => ['Schichtbetrieb', 'Bodenbeläge', 'Maschinenumfeld', 'Verschmutzungsgrad'],
    ],
    [
        'icon'  => 'lp-objects-7.svg',
        'title' => 'Öffentliche Einrichtungen',
        'mode'  => 'photo',
        'image' => 'einrichtungen.webp',
        'pos'   => '50% 50%',
        'h'     => 'Reinigung passend zu Nutzung und Zugangszeiten.',
        'keys'  => ['Gemeinschaftsflächen', 'objektspezifische Bereiche', 'feste Zeitfenster'],
    ],
    [
        'icon'  => 'lp-objects-8.svg',
        'title' => 'Weitere Gewerbeobjekte',
        'mode'  => 'quote',
        'quote' => 'Ihr Gebäude passt in keine Schublade?',
        'h'     => 'Beschreiben Sie uns Ihr Objekt.',
        'keys'  => ['Wir sagen Ihnen offen, ob wir der richtige Partner sind.'],
    ],
];

$first = $items[0];

$urls = stargo_nav_urls();
$cta_url = trailingslashit($urls['contact']) . '#lead';
?>
<section class="lp-objects" id="lp-objects">
    <div class="lp-objects__head">
      <div class="lp-objects__intro">
        <span class="badge badge--soft"><?php echo esc_html($badge); ?></span>
        <h2 class="lp-objects__heading"><?php echo esc_html($heading); ?></h2>
        <p class="lp-objects__lead"><?php echo esc_html($lead); ?></p>
      </div>
    </div>

    <div class="lp-objects__module">
      <div class="lp-objects__list" role="tablist">
        <?php foreach ($items as $i => $item) :
            $selected = $i === 0;
            $keys_attr = implode('|', $item['keys']);
        ?>
          <button
            type="button"
            class="lp-objects__item"
            role="tab"
            aria-selected="<?php echo $selected ? 'true' : 'false'; ?>"
            data-mode="<?php echo esc_attr($item['mode']); ?>"
            <?php if ($item['mode'] === 'photo') : ?>
              data-image-url="<?php echo esc_url(stargo_asset('images/landing-bueroreinigung/' . $item['image'])); ?>"
              data-pos="<?php echo esc_attr($item['pos']); ?>"
            <?php elseif ($item['mode'] === 'ph') : ?>
              data-shot="<?php echo esc_attr($item['shot']); ?>"
            <?php else : ?>
              data-quote="<?php echo esc_attr($item['quote']); ?>"
            <?php endif; ?>
            data-h="<?php echo esc_attr($item['h']); ?>"
            data-keys="<?php echo esc_attr($keys_attr); ?>"
          >
            <span class="lp-objects__item-row">
              <span class="lp-objects__item-icon" aria-hidden="true">
                <img src="<?php echo esc_url(stargo_asset('images/icons/' . $item['icon'])); ?>" alt="">
              </span>
              <span class="lp-objects__item-title"><?php echo esc_html($item['title']); ?></span>
              <span class="lp-objects__item-chevron" aria-hidden="true">
                <img src="<?php echo esc_url(stargo_asset('images/icons/lp-objects-chevron.svg')); ?>" alt="">
              </span>
            </span>

            <span class="lp-objects__mob">
              <span class="lp-objects__mob-inner">
                <?php if ($item['mode'] === 'photo') :
                    $img_rel  = 'images/landing-bueroreinigung/' . $item['image'];
                    $img_set  = stargo_responsive_srcset($img_rel, [480, 768], '100vw');
                    $img_webp = stargo_asset_webp($img_rel);
                ?>
                  <span class="lp-objects__mob-shot">
                    <picture>
                      <?php if ($img_set['webp_srcset'] !== '') : ?>
                        <source type="image/webp" srcset="<?php echo esc_attr($img_set['webp_srcset']); ?>" sizes="100vw">
                      <?php elseif ($img_webp) : ?>
                        <source type="image/webp" srcset="<?php echo esc_url($img_webp); ?>">
                      <?php endif; ?>
                      <img
                        src="<?php echo esc_url($img_set['src']); ?>"
                        <?php echo $img_set['srcset'] !== '' ? 'srcset="' . esc_attr($img_set['srcset']) . '" sizes="100vw"' : ''; ?>
                        alt="<?php echo esc_attr($item['title']); ?>"
                        style="object-position: <?php echo esc_attr($item['pos']); ?>;"
                        width="845"
                        height="448"
                        loading="lazy"
                        decoding="async"
                      >
                    </picture>
                  </span>
                <?php elseif ($item['mode'] === 'ph') : ?>
                  <span class="lp-objects__mob-ph">
                    <span class="lp-objects__mob-ph-tag">Bild folgt</span>
                    <span class="lp-objects__mob-ph-text"><?php echo esc_html($item['shot']); ?></span>
                  </span>
                <?php else : ?>
                  <span class="lp-objects__mob-quote"><?php echo esc_html($item['quote']); ?></span>
                <?php endif; ?>

                <span class="lp-objects__mob-h"><?php echo esc_html($item['h']); ?></span>
                <span class="lp-objects__keys">
                  <?php foreach ($item['keys'] as $key) : ?>
                    <span><?php echo esc_html($key); ?></span>
                  <?php endforeach; ?>
                </span>
              </span>
            </span>
          </button>
        <?php endforeach; ?>
      </div>

      <div class="lp-objects__stagecol">
        <div class="lp-objects__stage" data-mode="<?php echo esc_attr($first['mode']); ?>">
          <?php if ($first['mode'] === 'photo') : ?>
            <img class="lp-objects__shot" src="<?php echo esc_url(stargo_asset('images/landing-bueroreinigung/' . $first['image'])); ?>" alt="<?php echo esc_attr($first['title']); ?>">
          <?php else : ?>
            <img class="lp-objects__shot" src="" alt="">
          <?php endif; ?>
          <div class="lp-objects__ph">
            <span class="lp-objects__ph-tag">Bild folgt</span>
            <p><?php echo esc_html($first['mode'] === 'ph' ? $first['shot'] : ''); ?></p>
          </div>
          <div class="lp-objects__quote">
            <p><?php echo esc_html($first['mode'] === 'quote' ? $first['quote'] : ''); ?></p>
          </div>
        </div>

        <div class="lp-objects__info">
          <h3 class="lp-objects__info-h"><?php echo esc_html($first['h']); ?></h3>
          <span class="lp-objects__keys">
            <?php foreach ($first['keys'] as $key) : ?>
              <span><?php echo esc_html($key); ?></span>
            <?php endforeach; ?>
          </span>
          <a class="btn btn--primary-dark lp-objects__cta" href="<?php echo esc_url($cta_url); ?>">
            <span class="btn__label"><?php echo esc_html($cta_label); ?></span>
            <span class="btn__icon" aria-hidden="true">
              <img src="<?php echo esc_url(stargo_asset('images/icon-arrow-right-white.svg')); ?>" alt="">
            </span>
          </a>
        </div>
      </div>
    </div>
</section>
