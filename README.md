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

## Layout

```
templates/   10 block templates (page, home, single, archive, search, 404,
             singular, index, single/archive-ajr_case_study)
parts/       header.html, footer.html
patterns/    PHP patterns emitting serialized block markup
assets/      css/ (global + per-block), fonts/
```

Requires WordPress 6.9+ (uses the core accordion block) and PHP 8.0+.
