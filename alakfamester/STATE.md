# STATE - 2026-09-12, HOMEPAGE VISUAL AUDIT ACTIVE; HEDGE/NOT-FIT/PRICE PACKAGE CLOSED

## Current target / quota
Target: https://alakfamester-wp.clicknest.hu/ ; repo `NNorbertP/ClickNest`, branch `main`, folder `alakfamester/`.

WPVibe account: `ncsnorbert+20260912-3@gmail.com`; live site connection verified. Latest exact quota after the hedge/not-fit/price closeout: **203/300 used, 97 remaining** in rolling 24 hours. Keep at least 10 for recovery/closeout. No SMTP and no external form/test message.

Environment live: WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4; Hello Elementor 3.5.1 active. Preserve page56, page12, ElementsKit header20/footer21, MetForm33, Additional CSS post8 and canonical subpages. Homepage template remains `elementor_header_footer`; `show_on_front=page`, `page_on_front=56`, `page_for_posts=0`.

Frozen source aggregate remains `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`.

## Rules for the active homepage audit
D02 Hello Elementor + ElementsKit global header/footer. D03 V4 Atomic normal structure; MetForm/addon/af-project complex widgets may remain legacy in V4. D04 hero art remains editable `af-hero-art`. D06 Georgia/system stack. D07 handwritten CSS only in Hello Additional CSS. D08 exact source text/service structure. D09 map source links to canonical WP destinations while retaining intended anchors. D11 keep 10-call recovery reserve. D12 reviews remain native Atomic Tabs. D17 masonry uses EAEL Free gallery. D18 inventory/preserve V4 class semantics before any structural full-save. Localized supported `content/edit` is permitted for unique proven insertions with immediate readback. Before every Additional CSS write reread the complete post8 field and modify only the `af-project` block.

## CLOSED - Homepage header + hero parity v001
Evidence: `reports/home/home-header-hero-parity-v001.json`.

- header20 subtitle exact `Biró János`;
- Code Snippets ID 7 (`af-header-nav-parity-v001`) supplies guarded desktop dropdowns, mobile drawer/submenus, scroll state, keyboard brand behavior and fixed quick-contact dock with canonical WP links;
- source logo attachment 136;
- Hello Additional CSS `home-header-parity-v001` + `home-header-hero-source-exact-v002`;
- hero native carousel `af1000a2` / `#af-home-proof-carousel`, source attachments 173–193, arrows+dots, 4000 ms autoplay and pause behavior.

## CLOSED DATA/CSS - Homepage #elotte-utana before/after parity v001
Evidence: `reports/home/home-before-after-parity-v001.json`, commit `ebd94065222aeeb7de088b2b4d2d5b369c2ed87c`.

Existing V4 cards now contain six editable images (127/128, 165/166, 118/121). Code Snippets ID 8 `AF homepage before-after parity`, marker `af-home-ba-parity-v001`, provides source-style badges, labelled range controls and idempotent lifecycle. Additional CSS `home-before-after-v001` restores 4:3 contain layers, split handle/focus and responsive 3→2→1 grid. Runtime browser verification is still pending because Opera screenshot/runtime connection is unavailable.

## CLOSED CSS - Homepage #kialakitas + #apolas + #aggodalmak source parity v001
Evidence: `reports/home/home-process-care-concerns-source-parity-v001.json`, commit `7602bdf1242be71c49e6d2a095ca784824ae15a7`.

- `#kialakitas`: source forest background, split heading, dashed six-step timeline, bronze leaf counters, translucent organic cards;
- `#apolas`: source 3→2→1 care grid, six semantic SVG-mask icons, organic cards and two callouts;
- `#aggodalmak`: source 2→1 concerns grid, gradient edge, quoted question treatment, hover/reduced-motion.

## CLOSED DATA/CSS - Homepage #af-survivor + #formavilag source parity v001
Evidence: `reports/home/home-survivor-forms-source-parity-v001.json`, commit `81c9e76921703f6c37739d8173947f197f867f2b`.

`#af-survivor`: existing Atomic host `af1b000f` contains native image-carousel `af1b0100` / `#af-survivor-carousel`; source attachments 130–135 and exact semantic alts; one slide, arrows+dots, lazyload, 4000 ms autoplay, pause hover/interact, source-like 4:3 contain responsive card.

`#formavilag`: all 12 Atomic cards preserved; exact source names and twelve source SVG drawings restored on existing symbol hosts; source 6→4→3 responsive grid; canonical `/galeria/` CTA.

## CLOSED DATA/CSS - Homepage #soveny-formazas + #mikor-nem + #arkepzes source parity v001
Evidence: `reports/home/home-hedge-notfit-price-source-parity-v001.json`, commit `3dbaf203fb721f3e53c8224f86af114070452d98`.

Fresh live original DOM/styles and target DOM were compared before changes.

`#soveny-formazas`:
- exact source heading restored: `Sövény-specialista` / `Sövények formázása – kreatív végekkel, átjárókkal`;
- source aside and two-sentence lead restored as separate blocks;
- all six card texts restored exactly: Gömbös sövényvég, Kúp, Figurális vég, Átjáró / kapu, Hullámos felső vonal, Ablak / kivágás;
- exact source informational cards restored: `Mitől lesz tartós a forma?` and `Alakfák erős sövényből`, including bodies and CTA labels;
- source CTA intent mapped canonically to `/soveny-specialista/` and `/soveny-specialista/#galeria`;
- scoped Additional CSS `home-hedge-notfit-price-v001` restores split heading, sage section, 3→2 hedge shape grid, exact source SVG drawings and source-like info cards;
- immediate DOM reread exposed provisional selector-name mismatch for three icons and two info cards. Scoped correction block `home-hedge-notfit-price-v001-fix` now targets the actual live IDs (`af-hedge-ball-icon`, `af-hedge-figure-icon`, `af-hedge-gate-icon`, `af-hedge-info-structure`, `af-hedge-info-alakfa`). The first source SVG was independently base64-encoded and decode-verified before the corrective CSS write.

`#mikor-nem`: fresh target read plus cached live-original accessibility comparison proved the current six X-items and four alternatives already match the current original text. CSS restores asymmetric source-style checklist + sage card and responsive collapse.

`#arkepzes`: fresh target read plus cached live-original accessibility comparison proved the current seven factors + photo-estimate note already match the current original text. CSS lays them out as source-style eight stat tiles with responsive 4→2 geometry.

Final live target HTML reread proves exact source hedge text/labels and canonical CTA destinations. Current checkpoint: Additional CSS post8 **357466 chars / 358191 B**, SHA `acac06ce3aeba0a2b62dfd2b9c886e0a80b4043ff6e56ece73cd6f3e03d1877a`; page56 `_elementor_data` **244617 chars / 246498 B**, SHA `7eaa35dd2c18642b110aef067f1b0950c179baf8a318e20bd2e33e304488e00d`.

## Previously stable packages
- MetForm33 source/config parity closed for prompt-2 no-delivery mode; no SMTP/submission.
- D09 contact-link audit closed.
- Page256 biological hero uses `af-hero-art`.
- Structural audit: canonical pages published on `elementor_header_footer`, one ElementsKit header/footer, no source-host or `.html` refs and no custom reviews widget.
- Page272 Hedge keeps 21-image proof, native reviews, 28-item EAEL masonry and MetForm.
- Page264 Old Trees hero/problem grid/local MetForm/CTA remap closed.
- Page258 Gallery keeps 44-item EAEL masonry/native reviews.
- Page56 partner section restored.

## NEXT MAIN PACKAGE - homepage specialist / health / references
Before any write reread AGENTS/STATE and D03/D07/D08/D09/D11/D18, exact quota and page56/CSS hashes. Audit live original `#af-specialist-section`, `#af-health-section`, and the current source references section DOM/CSS/assets/links first, then target readback, then fix only measured defects. Preserve existing IDs/media/native V4 structure. Before any Additional CSS write reread the complete post8 field.

After that continue FAQ / contact / partner, then a final structural/link/content audit. Once Opera reconnects, run actual source–target screenshots and behavior checks at desktop/tablet/mobile widths for every closed package; do not claim page-wide pixel parity before those pass.

## Known external/frozen blockers
- Page270 source portrait `Biró János munka közben`: source URL 404; no proven substitute.
- Gallery Ellwoodi source asset: source URL 404; no proven substitute.
- `specs/acceptance.json` and `specs/behaviors.json` are not exposed through the repository connection. Formal frozen automated matrix is unavailable; use live original + documented viewports and record actual measurements.
- SMTP/delivery and real MetForm submission are prompt-3 tasks.

## Acceptance
Homepage audit is **in progress**. `PIXEL_PASS=false`.
