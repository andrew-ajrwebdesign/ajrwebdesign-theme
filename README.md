# AJR Web Design — FSE Theme

The standalone block theme powering [ajrwebdesign.com](https://ajrwebdesign.com). Built theme.json-first with deliberately minimal CSS, real block markup throughout (no HTML blobs), and one language-aware header/footer serving both English and German via Polylang.

**Status: actively maintained** (powers the live site). Companion plugin: [ajrwebdesign-core](https://github.com/andrew-ajrwebdesign/ajrwebdesign-core).

## Architecture

- **theme.json is the single source of truth** — palette (teal/green + slate neutrals), gradients, fluid heading scale (pixel-exact at desktop, scales down on mobile), spacing scale, and per-block styles all live there.
- **CSS is minimal by design**: `assets/css/global.css` carries only what theme.json cannot express (fixed header, focus rings, skip link, responsive helpers). Per-block stylesheets load on demand via `wp_enqueue_block_style()`.
- **No JS build**: the theme ships no JavaScript. Interactive behaviour belongs to blocks in the companion plugin, which carry their own `viewScript`.
- **Fonts**: self-hosted variable fonts (Lora 400–700 headings, Noto Sans 400–700 body) declared via theme.json `fontFace`.
- **Multilingual by structure**: header/footer use the plugin's `language-aware-nav` block (navigation resolved by `{menuSlug}-{lang}` slug convention) and `is-i18n`-classed strings registered with Polylang — one template part per area, every language.

- **Featured Work** (1.13.0): `patterns/featured-work.php` is a list with no band or heading of its own: a Query Loop over case studies tagged `featured`, each drawn by the plugin's `case-study-card` block. Place it inside a section that introduces the work (on the home page it sits in "Proven results"). Tag a case study and it appears; nothing on the page is edited. The tag's taxonomy has no public pages, so AJR Core must have "Query Loop: filter by private taxonomies" switched on (AJR Core → Modules) with `case_study_tag` listed (AJR Core → Blocks), or the list shows every case study; the site plugin warns in wp-admin when it does. A page holds a snapshot of the pattern, including the tag's ID on that site, so insert it on each site rather than copying page content between sites. `assets/css/blocks/core/post-template.css` owns the list's grid and loads only where a post list is on the page.
- **Patterns load in wp-admin and REST only** (1.13.0): the inserter whitelist in `functions.php` no longer runs on every front-end request, which used to execute every pattern file per page view.
- **Case Studies page** (1.14.0): the list of case studies is an ordinary page at `/case-studies/` (it was the Results page), not the post type's archive, so `templates/archive-ajr_case_study.html` is gone and AJR Core → Case studies → "Give them a list page" must be OFF. The page is two patterns: `patterns/case-studies-builds.php` (case studies tagged `site-build`, as cards with screenshots and scores) and `patterns/case-studies-audits.php` (every other case study, as compact before-and-after cards). Both are Query Loops with the same private-taxonomy dependency as Featured Work, and the same rule: insert them on each site, do not copy page content between sites.
- **Case Studies page, first list** (1.15.0): it lists case studies tagged `site-build` OR `site-care` (a site somebody else built, made faster and looked after; the site plugin, 1.14.0+, shows it with screenshots and a scorecard like a build). Its heading is "Sites built, and sites looked after". The second list excludes both tags. ⛔ A page holds a snapshot of a pattern: after this update the two lists on the Case Studies pages must be refreshed (on the folio, the content script's step does it).
- **Single case study: three optional bands** (1.14.0): `case-study-changes.php`, `case-study-delivered.php` and `case-study-related.php` each hold one `case-study-card` block variant. A band whose block prints nothing (an audit has no "what was delivered") is removed by the site plugin, keyed on the class `cs-optional-band`; `global.css` hides an empty one when the plugin is off.
- **Width tokens** (1.14.0): `settings.custom.width.intro` (700px) in theme.json. New patterns take their measure from `var(--wp--custom--width--intro)`; the older patterns still type theirs and are due to move.

## Layout

```
templates/   9 block templates (page, home, single, archive, search, 404,
             singular, index, single-ajr_case_study)
parts/       header.html, footer.html
patterns/    PHP patterns emitting serialized block markup
assets/      css/ (global + per-block), fonts/
```

Requires WordPress 6.9+ (uses the core accordion block) and PHP 8.0+.
