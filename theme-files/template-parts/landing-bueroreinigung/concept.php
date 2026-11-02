<?php
/**
 * Landing (Büroreinigung Stuttgart) — "Leistungsverzeichnis" (Konzept) section.
 * Figma 49:660 (desktop), 124:3409 (mobile) — own namespace .lp-concept__*.
 * Photo: handoff/.../Section 6/DSC03903.JPG, own crop (not on home).
 * Copy source: handoff/.../Section 6/stargo-konzept-a-desktop-mobile.html
 *
 * @package Stargo
 */

$badge   = 'Regelmäßige Reinigung';
$heading = 'Sauberkeit, um die Sie sich nicht mehr kümmern müssen.';
$lead    = 'Gemeinsam legen wir fest, welche Räume wann und wie gereinigt werden. Das Ergebnis ist ein klares Leistungsverzeichnis, ein fester Preis und ein Ablauf, den nicht jeden Tag jemand neu erklären muss.';
$caption = 'Eigenes Personal · fest eingeplant im Objekt';

$pillars_badge   = 'Worauf der Festpreis steht';
$pillars_heading = 'Drei Festlegungen, die alles Weitere tragen.';

$pillars = [
    [
        'icon'  => 'lp-concept-pillar-1.svg',
        'label' => 'Leistung',
        'title' => 'Sie wissen genau, was gemacht wird.',
        'text'  => 'Raum, Aufgabe und Intervall stehen schriftlich fest – ein Leistungsverzeichnis ohne Grauzonen.',
    ],
    [
        'icon'  => 'lp-concept-pillar-2.svg',
        'label' => 'Verantwortung',
        'title' => 'Ein Objektleiter kennt Ihr Gebäude.',
        'text'  => 'Ein fester Ansprechpartner für Räume, Team und vereinbarte Leistungen – per Telefon, E-Mail oder persönlich.',
    ],
    [
        'icon'  => 'lp-concept-pillar-3.svg',
        'label' => 'Qualität',
        'title' => 'Die Leistung wird geprüft, nicht behauptet.',
        'text'  => 'Monatliche Kontrolle mit Checkliste und Fotos. Bei Mängeln folgen Nachschulung und zusätzliche Kontrollen.',
    ],
];

$register_heading = 'Ebenfalls im Leistungsverzeichnis geregelt';

$register = [
    [
        'num'   => '01',
        'label' => 'Vertretung',
        'title' => 'Auch bei Krankheit läuft die Reinigung weiter.',
        'text'  => 'Bei Urlaub oder Krankheit übernehmen eingearbeitete Springer. Sie erhalten vor dem Einsatz eine Einweisung in Ihr Objekt und arbeiten nach demselben Leistungsverzeichnis.',
    ],
    [
        'num'   => '02',
        'label' => 'Personal',
        'title' => '100 % eigenes Personal, keine Subunternehmer.',
        'text'  => 'Alle Reinigungskräfte sind direkt bei Stargo angestellt. Erfahrene Objektleiter und Vorarbeiter arbeiten neue Mitarbeiter nach dem Stargo-Standard ein.',
    ],
    [
        'num'   => '03',
        'label' => 'Zeiten',
        'title' => 'Die Reinigung passt sich Ihrem Betrieb an.',
        'text'  => 'Früh morgens, tagsüber, abends, nachts oder am Wochenende. Auf Wunsch reinigen wir auch diskret während des laufenden Betriebs.',
    ],
    [
        'num'   => '04',
        'label' => 'Verfahren',
        'title' => 'Mittel und Ressourcen werden bewusst eingesetzt.',
        'text'  => 'Wo immer möglich setzen wir auf umweltbewusste Reinigungsmittel und ressourcenschonende Verfahren – ohne Abstriche beim Ergebnis.',
    ],
];

$close_title = 'Jede dieser Zeilen steht so in Ihrem Leistungsverzeichnis.';
$close_text  = 'Was darin nicht geregelt ist, kommt hinein, bevor wir anfangen.';
$close_label = 'Reinigung anfragen';

$img_rel  = 'images/landing-bueroreinigung/concept-photo2.jpg';
$img_set  = stargo_responsive_srcset($img_rel, [480, 768], '(max-width: 767px) 100vw, (max-width: 1023px) 50vw, 524px');
$img_webp = stargo_asset_webp($img_rel);

$urls = stargo_nav_urls();
$cta_url = trailingslashit($urls['contact']) . '#lead';
?>
<section class="lp-concept" id="lp-concept">
  <div class="lp-concept__top">
    <div class="lp-concept__intro">
      <span class="badge badge--soft"><?php echo esc_html($badge); ?></span>
      <h2 class="lp-concept__heading"><?php echo esc_html($heading); ?></h2>
      <p class="lp-concept__lead"><?php echo esc_html($lead); ?></p>
    </div>

    <figure class="lp-concept__figure">
      <picture>
        <?php if ($img_set['webp_srcset'] !== '') : ?>
          <source type="image/webp" srcset="<?php echo esc_attr($img_set['webp_srcset']); ?>" sizes="<?php echo esc_attr($img_set['sizes']); ?>">
        <?php elseif ($img_webp) : ?>
          <source type="image/webp" srcset="<?php echo esc_url($img_webp); ?>">
        <?php endif; ?>
        <img
          src="<?php echo esc_url($img_set['src']); ?>"
          <?php echo $img_set['srcset'] !== '' ? 'srcset="' . esc_attr($img_set['srcset']) . '" sizes="' . esc_attr($img_set['sizes']) . '"' : ''; ?>
          alt="Stargo-Mitarbeiterin bei der Unterhaltsreinigung im Büro"
          width="788"
          height="824"
          loading="lazy"
          decoding="async"
        >
      </picture>
      <figcaption class="lp-concept__figcap">
        <span><?php echo esc_html($caption); ?></span>
      </figcaption>
    </figure>
  </div>

  <div class="lp-concept__pillars-head">
    <span class="badge badge--gray"><?php echo esc_html($pillars_badge); ?></span>
    <p class="lp-concept__pillars-heading"><?php echo esc_html($pillars_heading); ?></p>
  </div>

  <div class="lp-concept__pillars">
    <?php foreach ($pillars as $pillar) : ?>
      <div class="lp-concept__pillar">
        <span class="lp-concept__pillar-icon" aria-hidden="true">
          <img src="<?php echo esc_url(stargo_asset('images/icons/' . $pillar['icon'])); ?>" alt="">
        </span>
        <div class="lp-concept__pillar-label"><?php echo esc_html($pillar['label']); ?></div>
        <h3 class="lp-concept__pillar-title"><?php echo esc_html($pillar['title']); ?></h3>
        <p class="lp-concept__pillar-text"><?php echo esc_html($pillar['text']); ?></p>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="lp-concept__register-head">
    <span class="lp-concept__register-label"><?php echo esc_html($register_heading); ?></span>
  </div>

  <div class="lp-concept__register">
    <?php foreach ($register as $row) : ?>
      <div class="lp-concept__row">
        <span class="lp-concept__row-num"><?php echo esc_html($row['num']); ?></span>
        <div class="lp-concept__row-head">
          <span class="lp-concept__row-label"><?php echo esc_html($row['label']); ?></span>
          <h4 class="lp-concept__row-title"><?php echo esc_html($row['title']); ?></h4>
        </div>
        <p class="lp-concept__row-text"><?php echo esc_html($row['text']); ?></p>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="lp-concept__close">
    <h2 class="lp-concept__close-title"><?php echo esc_html($close_title); ?></h2>
    <div class="lp-concept__close-aside">
      <p class="lp-concept__close-text"><?php echo esc_html($close_text); ?></p>
      <a class="btn btn--primary-dark" href="<?php echo esc_url($cta_url); ?>">
        <span class="btn__label"><?php echo esc_html($close_label); ?></span>
        <span class="btn__icon" aria-hidden="true">
          <img src="<?php echo esc_url(stargo_asset('images/icon-arrow-right-white.svg')); ?>" alt="">
        </span>
      </a>
    </div>
  </div>
</section>
