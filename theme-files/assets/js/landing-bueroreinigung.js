/**
 * Landing (Büroreinigung Stuttgart) — shared open/close grid-rows accordion
 * technique for independent <details> items (case cards, scope rows). Same
 * smooth technique as home/faq.php's main.js block, but each item here is
 * independent (no "close others" behavior).
 *
 * @package Stargo
 */
function stargoLpBindAccordion(itemSelector, detailSelector) {
  const items = document.querySelectorAll(itemSelector);
  if (!items.length) return;

  const openItem = (item) => {
    const detail = item.querySelector(detailSelector);
    item.open = true;
    if (detail) {
      detail.style.gridTemplateRows = "0fr";
      void detail.offsetHeight;
    }
    item.classList.add("is-open");
    if (detail) detail.style.gridTemplateRows = "1fr";
  };

  const closeItem = (item) => {
    const detail = item.querySelector(detailSelector);
    item.classList.remove("is-open");
    if (!detail) {
      item.open = false;
      return;
    }
    detail.style.gridTemplateRows = "1fr";
    void detail.offsetHeight;
    detail.style.gridTemplateRows = "0fr";
    detail.addEventListener(
      "transitionend",
      () => {
        if (!item.classList.contains("is-open")) item.open = false;
      },
      { once: true }
    );
  };

  items.forEach((item) => {
    if (item.open) item.classList.add("is-open");
    const summary = item.querySelector("summary");
    summary?.addEventListener("click", (e) => {
      e.preventDefault();
      if (item.classList.contains("is-open")) closeItem(item);
      else openItem(item);
    });
  });
}

stargoLpBindAccordion(".lp-case__toggle", ".lp-case__details");

/**
 * Landing (Büroreinigung Stuttgart) — "Objektarten" tab list. Click swaps the
 * shared desktop stage panel (image/heading/chips); mobile shows the same
 * content inline per item via CSS only (no JS needed there).
 */
(function () {
  const list = document.querySelector(".lp-objects__list");
  if (!list) return;

  const tabs = Array.from(list.querySelectorAll(".lp-objects__item"));
  const stage = document.querySelector(".lp-objects__stage");
  const shot = stage?.querySelector(".lp-objects__shot");
  const phTag = stage?.querySelector(".lp-objects__ph-tag");
  const phText = stage?.querySelector(".lp-objects__ph p");
  const quoteText = stage?.querySelector(".lp-objects__quote p");
  const infoHeading = document.querySelector(".lp-objects__info-h");
  const infoKeys = document.querySelector(".lp-objects__stagecol .lp-objects__keys");

  const renderKeys = (container, keys) => {
    if (!container) return;
    container.innerHTML = keys
      .split("|")
      .map((key) => `<span>${key}</span>`)
      .join("");
  };

  const select = (tab) => {
    tabs.forEach((t) => t.setAttribute("aria-selected", t === tab ? "true" : "false"));

    const mode = tab.dataset.mode;
    if (stage) stage.dataset.mode = mode;

    if (mode === "photo" && shot) {
      shot.src = tab.dataset.imageUrl;
      shot.alt = tab.dataset.h || "";
    } else if (mode === "ph") {
      if (phTag) phTag.textContent = "Bild folgt";
      if (phText) phText.textContent = tab.dataset.shot;
    } else if (mode === "quote" && quoteText) {
      quoteText.textContent = tab.dataset.quote;
    }

    if (infoHeading) infoHeading.textContent = tab.dataset.h;
    renderKeys(infoKeys, tab.dataset.keys);
  };

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => select(tab));
  });
})();

/**
 * Landing (Büroreinigung Stuttgart) — "Leistungsumfang" row toggle. Same
 * shared accordion technique as .lp-case__toggle above, independent per row.
 */
stargoLpBindAccordion(".lp-scope__row", ".lp-scope__row-detail");

/**
 * Landing (Büroreinigung Stuttgart) — "Ticketsystem" progress rail. Click swaps
 * the shared desktop stage/copy panel (same technique as .lp-objects__list);
 * mobile reveals each node's own content inline via CSS ([aria-selected] +
 * grid-rows on .lp-ticket__mob), no JS needed there beyond the shared selection.
 */
(function () {
  const rail = document.querySelector(".lp-ticket__rail");
  if (!rail) return;

  const nodes = Array.from(rail.querySelectorAll(".lp-ticket__node"));
  const copyH = document.querySelector(".lp-ticket__copy-h");
  const copyText = document.querySelector(".lp-ticket__copy-text");
  const chipline = document.querySelector(".lp-ticket__module .lp-ticket__chipline");
  const chip = chipline?.querySelector(".lp-ticket__chip");
  const chipLabel = chip?.querySelector("span");
  const stageImg = document.querySelector(".lp-ticket__stagecol .lp-ticket__stage img");
  const stageCap = document.querySelector(".lp-ticket__stagecol .lp-ticket__cap");

  const select = (node) => {
    nodes.forEach((n) => n.setAttribute("aria-selected", n === node ? "true" : "false"));

    if (copyH) copyH.textContent = node.dataset.h;
    if (copyText) copyText.textContent = node.dataset.text;

    if (chip) {
      chip.className = "lp-ticket__chip lp-ticket__chip--" + node.dataset.status;
      if (chipLabel) chipLabel.textContent = node.dataset.statusLabel;
    }

    if (stageImg) {
      stageImg.src = node.dataset.image;
      stageImg.alt = node.dataset.alt;
    }
    if (stageCap) {
      stageCap.innerHTML = "";
      node.dataset.cap.split("||").forEach((tag) => {
        const span = document.createElement("span");
        span.className = "lp-ticket__cap-tag";
        span.textContent = tag;
        stageCap.appendChild(span);
      });
    }
  };

  nodes.forEach((node) => {
    node.addEventListener("click", () => select(node));
  });
})();
