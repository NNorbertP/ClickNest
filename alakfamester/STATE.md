# STATE - 2026-09-12, HOMEPAGE VISUAL AUDIT ACTIVE; HEADER/HERO PACKAGE CLOSED

## Current target / quota
Target: https://alakfamester-wp.clicknest.hu/ ; repo `NNorbertP/ClickNest`, branch `main`, folder `alakfamester/`.

WPVibe account: `ncsnorbert+20260912-3@gmail.com`; authorization and live site connection verified. Latest exact quota after the homepage header/hero package checkpoint: **67/300 used, 233 remaining** in rolling 24 hours. Keep at least 10 for recovery/closeout. No SMTP and no external form/test message.

Environment reread live: WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4; Hello Elementor 3.5.1 active. Preserve page56, page12, ElementsKit header20/footer21, MetForm33, Additional CSS post8, canonical pages 256/258/260/262/264/266/268/270/272. Page template `elementor_header_footer`. Front options: `show_on_front=page`, `page_on_front=56`, `page_for_posts=0`, `siteurl=home=https://alakfamester-wp.clicknest.hu`.

Frozen source aggregate remains `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`.

## Rules reread for current phase
D02 Hello Elementor + ElementsKit global header/footer. D03 V4 Atomic normal structure; MetForm/addon/af-project complex widgets may remain legacy in V4. D04 source hero illustration stays editable `af-hero-art`. D06 Georgia/system stack. D07 handwritten CSS only in Hello Additional CSS. D09 source links map to canonical WP pages/anchors. D11 reserve 10 calls. D12 reviews remain native Atomic Tabs. D17 masonry remains EAEL Free gallery. D18 before any full structural save inventory Atomic legacy `_css_classes`; preserve required selectors with V4 Global Classes. Supported `content/edit` may be used for unique localized JSON edits with immediate readback.

## CLOSED - Homepage header + hero parity v001
Evidence: `reports/home/home-header-hero-parity-v001.json`, commit `201d4b8d72baeaeb5a1d97db22aff5c3f6d8cc6e`.

Source was reread live for desktop/tablet/mobile header and hero behavior. Concrete corrections:
- header20 subtitle now exact `Biró János`;
- active Code Snippets ID **7**, `AF source header mobile dock parity`, marker `af-header-nav-parity-v001`, guarded/idempotent: source-style desktop Services/References dropdowns, source mobile drawer/submenus, brand keyboard behavior, scroll state and fixed phone/mail/offer dock; canonical WP links only;
- source logo plate/media uses existing attachment 136; no asset duplication;
- Hello Additional CSS project blocks `home-header-parity-v001` and `home-header-hero-source-exact-v002` restore the source header, responsive hamburger/drawer/dock and hero geometry/typography;
- hero art container now also contains an editable native Elementor image-carousel `af1000a2` (`#af-home-proof-carousel`) plus label `af1000a1` / `Saját munkák`, using existing exact image attachments **173–193** in source order, 1 slide, arrows+dots, 4000 ms autoplay, hover/interact pause, source 4:3 contain geometry;
- wrong obsolete `benefits-species-v001 visual fix` Unicode glyph override was removed; D16 exact SVG-mask icon rules remain.

Current checkpoint hashes:
- header20: **5855 B**, SHA `e8293a7b0d7c7910af1e5eeb8dd7613677d65b08e315d4fe12cbb59ade4fcafb`;
- page56: **241842 chars / 243740 B**, SHA `259179abc73584e2a030d717cdc1784777910b02d4aaf09b71ca0ca9b88f18ec`;
- Additional CSS post8: **282900 chars / 283610 B**, SHA `2112242c3464ac407fd537365330ce0c56e2e3f0b1a86a0a313ed06d58cda287`.

Rollback-before values are preserved in the evidence report. Before any next CSS write reread the complete post8 field fresh.

## Previous closed/stable packages
- MetForm33: evidence `reports/home/metform33-source-parity-v001.json`; no delivery/SMTP test in prompt 2.
- D09 contact-link audit: evidence `reports/final-audit-d09-contact-links-v001.json`; stale contact routes removed.
- Page256 biological hero is `af-hero-art`; evidence `reports/subpages/bio-hero-project-widget-v001.json`.
- Global structural audit: `reports/final-structural-audit-v001.json`; canonical pages published on `elementor_header_footer`, one known ElementsKit header/footer, no source-host or `.html` links, no custom reviews widget.
- Page272 Hedge: 21-image proof, native reviews, 28-item EAEL masonry, MetForm preserved.
- Page264 Old Trees: hero/problem grid/local MetForm/CTA remap closed.
- Page258 Gallery: 44-item EAEL masonry/native reviews preserved.
- Page56 partner section restored.

## NEXT MAIN PACKAGE - Homepage #elotte-utana behavior/parity
A fresh source DOM read proved a major remaining mismatch. Original `#elotte-utana` has three `.project-card` items, each with an interactive `.ba.js-ba` before/after stage, exact before+after image pair, badges, a native range input `js-ba-range` at 50%, visible split/handle, and exact title/body text. It also has gallery link and source CTA band.

Before any write:
1. Re-read AGENTS/STATE/D03/D07/D09/D11/D18 and exact quota.
2. Fetch current target `#elotte-utana` DOM and localized Elementor snippets; do not assume old static-media structure.
3. Inspect existing shared source-interactions JS for `js-ba` support; reuse if already present, otherwise add one guarded delegated lifecycle implementation in the approved project execution location.
4. Resolve the six exact before/after source files to existing attachment IDs/hash map; no re-upload if already present.
5. Use native editable Elementor structure where possible; preserve current IDs and avoid full page save unless necessary. Re-read data/frontend/editor after write.
6. Compare desktop/tablet/mobile, then continue automatically to the next measured homepage defect.

Known exact source pairs:
- `50-eves-tiszafa-elotte.webp` / `50-eves-tiszafa-utana.webp`;
- `IMG_20260829_131143.webp` / `IMG_20260829_183731.webp`;
- `thujaorient_elegantissima_elotte1_20260715_103452.webp` / `thujaorient_elegantissima_utana1_20260715_103452.webp`.

## Known external/frozen blockers
- Page270 source portrait `Biró János munka közben`: known source URL 404; no proven substitute.
- Gallery Ellwoodi source asset: known source URL 404; no proven substitute.
- `specs/acceptance.json` and `specs/behaviors.json` are not exposed in the repository connection. Formal frozen acceptance remains unavailable; use live original plus documented reference viewports and record actual measured evidence.
- SMTP/delivery and a real MetForm submission remain deferred to prompt 3.

## Acceptance
Homepage audit is **in progress**. `PIXEL_PASS=false`; do not claim page-wide visual parity until desktop/tablet/mobile full-page checks and behavior checks close.
