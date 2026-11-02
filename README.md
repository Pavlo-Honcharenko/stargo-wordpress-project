# Google Ads Landing Page and Live-Site Fixes for a German Facility Services Company (stargo-fs.de)

Two engagements for Stargo Facility Services, a building-cleaning and facility-services company in Stuttgart, Germany: bug-fix maintenance on the live WordPress site, then a new 10-section landing page for a Google Ads campaign. The site runs on a custom theme with no page builder, built by another developer; I worked inside it.

---

## 🚀 Live Website
- Website: https://stargo-fs.de/
- Google Ads landing page: https://stargo-fs.de/bueroreinigung-stuttgart/

---

## 📸 Preview
➡️ [Homepage Screenshot](./screenshots/homepage-first-screen.png)
➡️ [Landing Page Screenshot](./screenshots/landing-first-screen.png)

---

## 🎥 Demo Video
The demo video shows the homepage and the landing page on desktop, then the landing page on mobile.

➡️ [Demo Video](./demo-video/)

---

## 📝 Project Description

### 1. Maintenance (August 2026)
Four visible defects on the live site, traced in the source and fixed in a single session after cloning the site from a full backup:

- **Carousel arrows:** a mousemove handler placed the Previous and Next buttons at the same coordinates, so Next permanently covered Previous.
- **Blurry logo:** one logo had no retina source (200×56 px, while its neighbour was 336×112 px).
- **Missing trust logos:** one hero variant was missing the trust-logo block the other variants carried.
- **Cropped hero image:** a hero image lost about half of its height to a fixed 400px container with `object-fit: cover`.

Every fix was verified on desktop and mobile. The client rated the work 5 stars and came back with a larger project.

### 2. Landing Page for Google Ads (August–September 2026)
A 10-section landing page for the "Büroreinigung Stuttgart" campaign, built from Figma inside the existing theme rather than as a separate site:

1. Hero with company stats and trust logos
2. Three project cases
3. Team
4. Four-step process for switching contractors
5. Fixed-price explainer
6. Property types
7. Eight service categories
8. Ticket system
9. Owner section
10. FAQ

The page reuses the site's exact visual language: colors, typography, button states, icons, radii and spacing. Mobile is its own layout rather than a squeezed desktop view, every interaction works without hover, and all calls to action route to the existing contact form.

---

## 🛠️ Technologies Used
- WordPress (custom theme, no page builder)
- PHP page template and `template-parts`
- BEM-structured CSS with CSS custom properties
- Vanilla JavaScript (no jQuery)
- Figma → WordPress integration

---

## ⭐ Key Features
- Landing page template assembled from 9 section partials, with its own CSS and JS namespace so it never leaks into other pages
- Separate mobile layouts and hover-free interactions
- Accordion sections (FAQ, case cards, scope rows) with animated open and close
- Ticket system section with status states
- Reuse of existing home page blocks (client logos, FAQ) instead of duplicating them

---

## 📂 Included Files
This repository contains only the code I wrote for the landing page:
- `theme-files/page-lp-bueroreinigung.php` – page template
- `theme-files/template-parts/landing-bueroreinigung/` – the 9 section partials
- `theme-files/assets/css/landing-bueroreinigung.css` – landing page styles
- `theme-files/assets/js/landing-bueroreinigung.js` – landing page interactions
- Screenshots of the final pages
- Demo video

> WordPress core files, plugins and the base theme are not included. The maintenance fixes were made in the base theme's own files.

---

## 📌 Notes
This project is part of my professional WordPress developer portfolio.
