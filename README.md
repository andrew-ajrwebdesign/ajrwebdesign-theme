# AJR Web Design — FSE Theme

The standalone block theme powering [ajrwebdesign.com](https://ajrwebdesign.com). Built theme.json-first with deliberately minimal CSS, real block markup throughout (no HTML blobs), and one language-aware header/footer serving both English and German via Polylang.

**Status: actively maintained** (powers the live site). Companion plugin: [ajrwebdesign-core](https://github.com/andrew-ajrwebdesign/ajrwebdesign-core).

## Architecture

- **theme.json is the single source of truth** — palette (teal/green + slate neutrals), gradients, fluid heading scale (pixel-exact at desktop, scales down on mobile), spacing scale, and per-block styles all live there.
- **CSS is minimal by design**: `assets/css/global.css` carries only what theme.json cannot express (fixed header, focus rings, skip link, responsive helpers). Per-block stylesheets load on demand via `wp_enqueue_block_style()`.
- **No JS build**: the theme ships no JavaScript. Interactive behaviour belongs to blocks in the companion plugin, which carry their own `viewScript`.
- **Fonts**: self-hosted variable fonts (Lora 400–700 headings, Noto Sans 400–700 body) declared via theme.json `fontFace`.
- **Multilingual by structure**: header/footer use the plugin's `language-aware-nav` block (navigation resolved by `{menuSlug}-{lang}` slug convention) and `is-i18n`-classed strings registered with Polylang — one template part per area, every language.

## Layout

```
templates/   10 block templates (page, home, single, archive, search, 404,
             singular, index, single/archive-ajr_case_study)
parts/       header.html, footer.html
patterns/    PHP patterns emitting serialized block markup
assets/      css/ (global + per-block), fonts/
```

Requires WordPress 6.9+ (uses the core accordion block) and PHP 8.0+.
