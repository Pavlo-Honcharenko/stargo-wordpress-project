<?php
/**
 * Landing (Büroreinigung Stuttgart) — "Ticketsystem" section.
 * Figma 70:1173 (desktop), 136:4780 (mobile) — own namespace .lp-ticket__*.
 * One case, four states (Gesendet/Zugeordnet/In Bearbeitung/Erledigt): a progress
 * rail of 4 buttons drives a shared stage panel on desktop; same button list stacks
 * vertically and reveals its own inline content on mobile (CSS-only, [aria-selected]
 * + grid-rows — same technique as .lp-objects__mob).
 * Copy + UI mockup images extracted verbatim from copy-source:
 * handoff/.../Section 9/stargo-ticketsystem-a-states-mobile.html (window.__TK_SHOTS__).
 * Status chip colors sampled from handoff/Ninth section desktop.png (open/work/done).
 *
 * @package Stargo
 */

$badge      = 'Ticketsystem';
$heading_a  = 'Kein Hinterhertelefonieren.';
$heading_b  = 'Sie sehen, was passiert.';
$lead_pre   = 'Nach Auftragsstart erhalten Sie kostenlosen Zugang zu unserem browserbasierten Ticketsystem. Reklamationen, zusätzliche Leistungen oder Hinweise gehen ';
$lead_strong = 'direkt an die zuständige Objektleitung';
$lead_post  = ' – auf Wunsch mit Foto.';

$states = [
    [
        'num'    => '01',
        'name'   => 'Gesendet',
        'status' => 'open',
        'status_label' => 'Offen',
        'h'      => 'Einmal melden – in unter einer Minute.',
        'text'   => 'Anliegen kurz beschreiben, bei Bedarf ein Foto ergänzen, Wunschtermin angeben, absenden. Keine Warteschleife, keine E-Mail, die untergeht.',
        'image'  => 'ticket-state1-hq.webp',
        'alt'    => 'Ticketsystem: Ticket erstellen',
        'cap'    => ['Ticket erstellen', 'Beschreibung', 'Foto und Wunschtermin'],
    ],
    [
        'num'    => '02',
        'name'   => 'Zugeordnet',
        'status' => 'open',
        'status_label' => 'Offen',
        'h'      => 'Sofort bei der richtigen Person.',
        'text'   => 'Objektleitung und Reinigungsteam werden in Echtzeit informiert. Sie erhalten die Bestätigung, dass Ihr Anliegen zugeordnet ist – Sie müssen niemanden suchen.',
        'image'  => 'ticket-state2-hq.webp',
        'alt'    => 'Ticketsystem: Bestätigung, Ihr Anliegen ist zugeordnet',
        'cap'    => ['Bestätigung', 'Ihr Anliegen ist zugeordnet'],
    ],
    [
        'num'    => '03',
        'name'   => 'In Bearbeitung',
        'status' => 'work',
        'status_label' => 'In Bearbeitung',
        'h'      => 'Sie sehen den Stand, ohne zu fragen.',
        'text'   => 'Im Ticket steht jederzeit, woran gerade gearbeitet wird und was als Nächstes passiert. Rückfragen laufen direkt mit Ihrer Objektleitung – im selben Vorgang.',
        'image'  => 'https://stargo-fs.de/wp-content/uploads/2026/09/in-bearbeitung.webp',
        'alt'    => 'Ticketsystem: Ticketansicht mit Status und nächstem Schritt',
        'cap'    => ['Ticketansicht', 'Status und nächster Schritt jederzeit sichtbar'],
    ],
    [
        'num'    => '04',
        'name'   => 'Erledigt',
        'status' => 'done',
        'status_label' => 'Erledigt',
        'h'      => 'Abgeschlossen – und nachlesbar.',
        'text'   => 'Der Vorgang wird als erledigt markiert. Anliegen, Kommunikation und Bearbeitung bleiben dokumentiert und sind später jederzeit auffindbar.',
        'image'  => 'ticket-state34-hq.webp',
        'alt'    => 'Ticketsystem: abgeschlossener, dokumentierter Vorgang',
        'cap'    => ['Abgeschlossener Vorgang', 'dokumentiert und auffindbar'],
    ],
];

$benefits = [
    ['icon' => 'send-ins-fill.svg', 'title' => 'Direkt', 'text' => 'Ihr Anliegen landet bei der zuständigen Objektleitung, nicht in einer allgemeinen Zentrale.'],
    ['icon' => 'search-eye-line.svg', 'title' => 'Transparent', 'text' => 'Sie sehen jederzeit den Status und den nächsten Schritt – ohne nachzufragen.'],
    ['icon' => 'time-line.svg', 'title' => 'Nachvollziehbar', 'text' => 'Anliegen, Kommunikation und Bearbeitung bleiben dokumentiert.'],
];

$goal_big  = '24 h';
$goal_tag  = 'Unser Ziel, keine Garantie';
$goal_bold = 'Wir wollen Anliegen möglichst innerhalb von 24 Stunden lösen.';
$goal_rest = ' Braucht die Bearbeitung mehr Zeit – etwa weil Material fehlt oder eine Sonderleistung nötig ist – sehen Sie im Ticket den aktuellen Stand und den nächsten Schritt.';

$first = $states[0];

/**
 * Absolute URL (e.g. pasted from Media Library) is used as-is;
 * otherwise treated as a theme asset filename.
 */
function stargo_ticket_image_url(string $image): string
{
    if (str_starts_with($image, 'http://') || str_starts_with($image, 'https://')) {
        return $image;
    }

    return stargo_asset('images/landing-bueroreinigung/' . $image);
}
?>
<section class="lp-ticket" id="lp-ticket">
  <div class="lp-ticket__top">
    <div class="lp-ticket__intro">
      <div class="badge badge--soft"><?php echo esc_html($badge); ?></div>
      <h2 class="lp-ticket__heading">
        <?php echo esc_html($heading_a); ?>
        <span class="lp-ticket__heading-soft"><?php echo esc_html($heading_b); ?></span>
      </h2>
      <p class="lp-ticket__lead">
        <?php echo esc_html($lead_pre); ?><strong><?php echo esc_html($lead_strong); ?></strong><?php echo esc_html($lead_post); ?>
      </p>
    </div>
  </div>

  <div class="lp-ticket__body">
  <div class="lp-ticket__panel">
  <div class="lp-ticket__rail" role="tablist" aria-label="Ablauf eines Anliegens">
    <?php foreach ($states as $i => $state) :
        $selected = $i === 0;
    ?>
      <button
        type="button"
        class="lp-ticket__node"
        role="tab"
        aria-selected="<?php echo $selected ? 'true' : 'false'; ?>"
        data-status="<?php echo esc_attr($state['status']); ?>"
        data-status-label="<?php echo esc_attr($state['status_label']); ?>"
        data-h="<?php echo esc_attr($state['h']); ?>"
        data-text="<?php echo esc_attr($state['text']); ?>"
        data-image="<?php echo esc_url(stargo_ticket_image_url($state['image'])); ?>"
        data-alt="<?php echo esc_attr($state['alt']); ?>"
        data-cap="<?php echo esc_attr(implode('||', $state['cap'])); ?>"
      >
        <span class="lp-ticket__step"><?php echo esc_html($state['num']); ?></span>
        <span class="lp-ticket__name"><?php echo esc_html($state['name']); ?></span>

        <span class="lp-ticket__mob">
          <span class="lp-ticket__mob-inner">
            <p class="lp-ticket__mob-h"><?php echo esc_html($state['h']); ?></p>
            <p class="lp-ticket__mob-text"><?php echo esc_html($state['text']); ?></p>
            <span class="lp-ticket__mob-chipline">
              <span class="lp-ticket__lbl">Status im Ticket</span>
              <span class="lp-ticket__chip lp-ticket__chip--<?php echo esc_attr($state['status']); ?>">
                <i aria-hidden="true"></i><span><?php echo esc_html($state['status_label']); ?></span>
              </span>
            </span>
            <span class="lp-ticket__mob-stage">
              <img src="<?php echo esc_url(stargo_ticket_image_url($state['image'])); ?>" alt="<?php echo esc_attr($state['alt']); ?>" loading="lazy" decoding="async">
            </span>
            <span class="lp-ticket__cap">
              <?php foreach ($state['cap'] as $tag) : ?>
                <span class="lp-ticket__cap-tag"><?php echo esc_html($tag); ?></span>
              <?php endforeach; ?>
            </span>
          </span>
        </span>
      </button>
    <?php endforeach; ?>
  </div>

  <div class="lp-ticket__module">
    <div class="lp-ticket__copy">
      <h3 class="lp-ticket__copy-h"><?php echo esc_html($first['h']); ?></h3>
      <p class="lp-ticket__copy-text"><?php echo esc_html($first['text']); ?></p>
      <span class="lp-ticket__chipline">
        <span class="lp-ticket__lbl">Status im Ticket</span>
        <span class="lp-ticket__chip lp-ticket__chip--<?php echo esc_attr($first['status']); ?>">
          <i aria-hidden="true"></i><span><?php echo esc_html($first['status_label']); ?></span>
        </span>
      </span>
    </div>

    <div class="lp-ticket__stagecol">
      <div class="lp-ticket__stage">
        <img src="<?php echo esc_url(stargo_ticket_image_url($first['image'])); ?>" alt="<?php echo esc_attr($first['alt']); ?>" loading="lazy" decoding="async">
      </div>
      <p class="lp-ticket__cap">
        <?php foreach ($first['cap'] as $tag) : ?>
          <span class="lp-ticket__cap-tag"><?php echo esc_html($tag); ?></span>
        <?php endforeach; ?>
      </p>
    </div>
  </div>
  </div>

  <div class="lp-ticket__benefits">
    <?php foreach ($benefits as $item) : ?>
      <div class="lp-ticket__benefit">
        <span class="lp-ticket__benefit-icon" aria-hidden="true">
          <img src="<?php echo esc_url(stargo_asset('images/icons/' . $item['icon'])); ?>" alt="">
        </span>
        <h4 class="lp-ticket__benefit-h"><?php echo esc_html($item['title']); ?></h4>
        <p class="lp-ticket__benefit-text"><?php echo esc_html($item['text']); ?></p>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="lp-ticket__goal">
    <div class="lp-ticket__goal-num">
      <p class="lp-ticket__goal-big"><?php echo esc_html($goal_big); ?></p>
      <span class="lp-ticket__goal-tag"><?php echo esc_html($goal_tag); ?></span>
    </div>
    <div class="lp-ticket__goal-copy">
      <h3 class="lp-ticket__goal-h"><?php echo esc_html($goal_bold); ?></h3>
      <p class="lp-ticket__goal-text"><?php echo esc_html($goal_rest); ?></p>
    </div>
  </div>
  </div>
</section>
