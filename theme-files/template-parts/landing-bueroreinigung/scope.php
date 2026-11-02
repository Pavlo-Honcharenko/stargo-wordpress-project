<?php
/**
 * Landing (Büroreinigung Stuttgart) — "Leistungsumfang" section.
 * Figma 70:1173 (desktop), 133:4016 (mobile) — own namespace .lp-scope__*.
 * Row toggle: same open/close grid-rows technique as .lp-case__toggle
 * (assets/js/landing-bueroreinigung.js), independent per row.
 * Copy source: handoff/.../Section 8/stargo-leistungsumfang-b-vier-fragen.html
 *
 * @package Stargo
 */

$badge   = 'Leistungsumfang';
$heading = 'Das gehört zu Ihrer regelmäßigen Reinigung.';
$lead    = 'Welche Leistungen wie oft ausgeführt werden, halten wir in Ihrem Leistungsverzeichnis fest. So wissen beide Seiten, was vereinbart und im Festpreis enthalten ist.';

$questions = [
    ['q' => 'Was?', 'a' => 'Acht Leistungsbereiche'],
    ['q' => 'Wie?', 'a' => 'Materialgerecht, je Fläche'],
    ['q' => 'Wie oft?', 'a' => 'Ein Intervall je Bereich'],
    ['q' => 'Zu welchem Preis?', 'a' => 'Ein Festpreis für alles Vereinbarte'],
];

$note_bold = 'Alle vier Antworten stehen schriftlich in Ihrem Leistungsverzeichnis.';
$note_rest = 'Nichts davon wird erst im laufenden Betrieb geklärt.';

$index_label = 'Die acht Bereiche im Einzelnen';

$rows = [
    [
        'num'  => '01',
        'name' => 'Oberflächen und Mobiliar',
        'keys' => ['Arbeitsflächen', 'Tische', 'Schränke', 'Mobiliar'],
        'text' => 'Arbeitsflächen, Tische, Schränke und frei zugängliches Mobiliar werden materialgerecht gereinigt.',
    ],
    [
        'num'  => '02',
        'name' => 'Böden und Teppiche',
        'keys' => ['Saugen', 'Wischen', 'Pflege'],
        'text' => 'Saugen, Wischen und regelmäßige Pflege – abgestimmt auf Bodenbelag und Nutzung.',
    ],
    [
        'num'  => '03',
        'name' => 'Sanitärreinigung',
        'keys' => ['WC-Anlagen', 'Waschbereiche', 'Armaturen', 'Kontaktflächen'],
        'text' => 'WC-Anlagen, Waschbereiche, Armaturen und Kontaktflächen werden hygienisch gereinigt und kontrolliert.',
    ],
    [
        'num'  => '04',
        'name' => 'Küchenreinigung und Spülservice',
        'keys' => ['Arbeitsflächen', 'Spülen', 'Geräteaußenflächen', 'Geschirr'],
        'text' => 'Arbeitsflächen, Spülen, Geräteaußenflächen und Geschirr bleiben für die nächste Nutzung bereit.',
    ],
    [
        'num'  => '05',
        'name' => 'Müll und Verbrauchsmaterialien',
        'keys' => ['Abfallbehälter', 'Sammelpunkt', 'Seife', 'Papier'],
        'text' => 'Abfallbehälter werden geleert und Abfälle zum vereinbarten Sammelpunkt gebracht. Seife, Papierhandtücher und Toilettenpapier kontrollieren, füllen und liefern wir auf Wunsch.',
    ],
    [
        'num'  => '06',
        'name' => 'Empfangs- und Besprechungsbereiche',
        'keys' => ['Empfang', 'Besprechungsräume', 'repräsentative Flächen'],
        'text' => 'Die Flächen, die Mitarbeiter, Mandanten, Patienten und Gäste zuerst sehen, bleiben gepflegt und repräsentativ.',
    ],
    [
        'num'  => '07',
        'name' => 'Treppenhäuser, Flure und Aufzüge',
        'keys' => ['Verkehrsflächen', 'Treppen', 'Aufzüge'],
        'text' => 'Stark genutzte Verkehrsflächen werden regelmäßig gereinigt und bei Bedarf intensiver kontrolliert.',
    ],
    [
        'num'  => '08',
        'name' => 'Objektspezifische Bereiche',
        'keys' => ['Hotelzimmer', 'Verkaufsflächen', 'Pausenräume', 'Lager'],
        'text' => 'Hotelzimmer, Verkaufsflächen, Pausenräume, Lager- und Gemeinschaftsflächen integrieren wir passend zu Ihrem Betrieb.',
    ],
];

$extra_tag     = 'Zusätzlich Planbar';
$extra_heading = 'Glas-, Fassaden-, Grund- und Sonderreinigung.';
$extra_items = [
    ['icon' => 'icon-planbar-1.svg', 'label' => 'Glasreinigung'],
    ['icon' => 'icon-planbar-2.svg', 'label' => 'Fassadenreinigung'],
    ['icon' => 'icon-planbar-3.svg', 'label' => 'Grundreinigung'],
    ['icon' => 'icon-planbar-4.svg', 'label' => 'Sonderreinigung'],
];
$extra_text = 'Diese Leistungen übernimmt unsere spezialisierte Sonderreinigungsgruppe. Wir kalkulieren sie separat und bieten sie genauso transparent an – sprechen Sie uns bei der Besichtigung darauf an.';

$cta_label = 'Leistungsumfang für Ihr Objekt festlegen';
$foot_note = 'Bei der Besichtigung gehen wir jeden Bereich einzeln durch.';

$urls = stargo_nav_urls();
$cta_url = trailingslashit($urls['contact']) . '#lead';
?>
<section class="lp-scope" id="lp-scope">
  <div class="lp-scope__intro">
    <span class="badge badge--soft"><?php echo esc_html($badge); ?></span>
    <h2 class="lp-scope__heading"><?php echo esc_html($heading); ?></h2>
    <p class="lp-scope__lead"><?php echo esc_html($lead); ?></p>
  </div>

  <div class="lp-scope__four">
    <?php foreach ($questions as $item) : ?>
      <div class="lp-scope__four-item">
        <span class="badge badge--soft"><?php echo esc_html($item['q']); ?></span>
        <p class="lp-scope__four-answer"><?php echo esc_html($item['a']); ?></p>
      </div>
    <?php endforeach; ?>
  </div>

  <p class="lp-scope__note">
    <strong><?php echo esc_html($note_bold); ?></strong>
    <?php echo esc_html($note_rest); ?>
  </p>

  <div class="lp-scope__index-head">
    <span class="lp-scope__index-label"><?php echo esc_html($index_label); ?></span>
  </div>

  <div class="lp-scope__list">
    <?php foreach ($rows as $row) :
        $open = !empty($row['open']);
    ?>
      <details class="lp-scope__row<?php echo $open ? ' is-open' : ''; ?>" <?php echo $open ? 'open' : ''; ?>>
        <summary class="lp-scope__row-summary">
          <span class="lp-scope__row-num"><?php echo esc_html($row['num']); ?></span>
          <span class="lp-scope__row-name"><?php echo esc_html($row['name']); ?></span>
          <span class="lp-scope__row-keys">
            <?php foreach ($row['keys'] as $key) : ?>
              <span><?php echo esc_html($key); ?></span>
            <?php endforeach; ?>
          </span>
          <span class="lp-scope__row-toggle" aria-hidden="true">
            <img class="lp-scope__row-icon-plus" src="<?php echo esc_url(stargo_asset('images/icons/plus-white.svg')); ?>" alt="">
            <img class="lp-scope__row-icon-x" src="<?php echo esc_url(stargo_asset('images/icons/x.svg')); ?>" alt="">
          </span>
        </summary>
        <div class="lp-scope__row-detail">
          <div class="lp-scope__row-detail-inner">
            <p><?php echo esc_html($row['text']); ?></p>
          </div>
        </div>
      </details>
    <?php endforeach; ?>
  </div>

  <div class="lp-scope__extra">
    <div class="lp-scope__extra-head">
      <div class="lp-scope__extra-intro">
        <span class="lp-scope__extra-tag"><?php echo esc_html($extra_tag); ?></span>
        <h3 class="lp-scope__extra-heading"><?php echo esc_html($extra_heading); ?></h3>
      </div>
      <p class="lp-scope__extra-text"><?php echo esc_html($extra_text); ?></p>
    </div>

    <div class="lp-scope__extra-items">
      <?php foreach ($extra_items as $i => $item) : ?>
        <?php if ($i > 0) : ?>
          <span class="lp-scope__extra-divider" aria-hidden="true"></span>
        <?php endif; ?>
        <span class="lp-scope__extra-item">
          <span class="lp-scope__extra-item-icon" aria-hidden="true">
            <img src="<?php echo esc_url(stargo_asset('images/icons/' . $item['icon'])); ?>" alt="">
          </span>
          <span><?php echo esc_html($item['label']); ?></span>
        </span>
      <?php endforeach; ?>
    </div>

    <div class="lp-scope__foot">
      <a class="btn btn--primary" href="<?php echo esc_url($cta_url); ?>">
        <span class="btn__label"><?php echo esc_html($cta_label); ?></span>
        <span class="btn__icon" aria-hidden="true">
          <img src="<?php echo esc_url(stargo_asset('images/icon-arrow-right.svg')); ?>" alt="">
        </span>
      </a>
      <p class="lp-scope__foot-note"><?php echo esc_html($foot_note); ?></p>
    </div>
  </div>
</section>
