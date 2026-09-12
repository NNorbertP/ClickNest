# STATE - 2026-09-12, FAQ + FRUIT + ABOUT HERO CLOSED; HEDGE HERO NEXT

## Current target / quota
Target: https://alakfamester-wp.clicknest.hu/ ; repo `NNorbertP/ClickNest`, branch `main`, folder `alakfamester/`.

WPVibe account: `ncsnorbert+20260912-2@gmail.com`; authorization live. Last exact quota read before the About package was **110/300 used, 190 remaining** in the rolling 24-hour window. Several successful read/save/verification calls occurred after that exact check; re-read before the next main structural package. Keep at least 10 for recovery/closeout. No SMTP and no external form/test message.

Environment rechecked 2026-09-12: WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4; Hello Elementor 3.5.1 active; Elementor, ElementsKit Lite, Essential Addons, Head & Footer Code, LiteSpeed Cache, MetForm, UpdraftPlus, WPVibe, Yoast and `af-project` active. Preserve page56, capability page12, ElementsKit header20/footer21, MetForm33, Additional CSS post8, and canonical pages 256/258/260/262/264/266/268/270/272. Page template `elementor_header_footer`; single shared JS marker `af-source-interactions-v001`.

Last known Additional CSS: 259652 B, SHA256 `f659a3b805dc54c7e28e832a531b14e9854508f1671621df9a4fa525435b042d`; re-read before any CSS write. Frozen source aggregate remains `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`; live original is diagnostic only.

## D18 structural save rule
Elementor 4.2.4 drops legacy `_css_classes` from Atomic `e-flexbox` on supported `save-page`. Before every full structural save, map every Atomic legacy class that must survive to native V4 Global Classes whose labels exactly equal the frontend CSS selector, and reference them through typed `settings.classes`. Decision D18 and evidence `reports/subpages/contact-hero-v4-class-bridge-v001.json`.

Known bridge classes include `g-af-src-wave`→`af-source-wave`, `g-af-src-contact1`→`af-s-kapcsolat-1`, `g-af-src-contact5`→`af-s-kapcsolat-5`, `g-af-src-subpage`→`af-subpage-section`, `g-af-src-bgpaper`→`af-bg-paper`, existing `g-af-probe-hero`→`af-hero`, and the page260/page262 page-specific bridges already used. Do not recreate existing bridges without a fresh inventory.

## Closed/stable - preserve
- D12 native reviews on canonical review pages; no canonical `af-project-reviews`.
- Page258 D17 EAEL masonry `af27000e`: 44 images.
- Page272 D17 EAEL masonry `b2e2c001`: 28 images; D12 Atomic Tabs `c3d30005`.
- Page268 seven videos/native reviews/hero structurally present; no old F2/F3 rollback.
- Page56 D16 benefits/species already deployed.
- Page266 Contact D18 package closed: **8685 B, SHA `815f22bec4aa1a4401a78186505bf553740a2c19710b720407d19b4703366fae`**. Hero widget `af2b0046`, `art=kapcsolat`; headings and V4 class labels verified; editor reopened.

## Page260 FAQ - HERO CLOSED
Evidence: `reports/subpages/faq-topics-v001.json`, `reports/subpages/faq-hero-v4-v002.json`.
Final current state: **34184 B, SHA `7d6d50bb58a1bc70d8ae17eb249e3aba8d5f6339318a50007a86419619e03fcb`**.
Editable hero widget `af28004f`, `art=gyakran-ismetelt-kerdesek`; topic links, 17 FAQ controls, D18 classes and native reviews preserved. Logged-out frontend and editor were verified.

## Page262 Fruit - HERO CLOSED
Evidence: `reports/subpages/fruit-content-parity-v001.json`, `reports/subpages/fruit-hero-v4-v002.json`.
Fresh verified current state before restart: **31788 B, SHA `0e7ed4b97f4c3fde3be91a532f62d936a35ac52567ac1a2d5b44f1af2f57d816`**.
Editable hero widget `af290047`, `art=gyumolcsfak-metszese-es-vedelme`, source title/description, `scroll_mode=hero`; text/FAQ, D18 classes and native reviews preserved; logged-out frontend and editor verified.

## Page270 About - HERO CLOSED
Evidence: `reports/subpages/about-content-v003.json`, `reports/subpages/about-hero-v4-v001.json`.
Current supported-save state: **38701 B, SHA `bf89d384396db61cc9ff85c78d3a5fb7c25c80d94f3ab9a440efbf7f7f431b6b`**.

Closed:
- Existing content changes preserved: four timeline labels are h3 and source article `Miért lettem kertész?` remains present.
- Fresh D18 inventory found zero Atomic `e-flexbox` legacy `_css_classes`, so no new bridge was needed.
- Added editable hero widget `af2d004c` inside preserved container `af2d0041`, `art=rolam`, title `A formanevelés három fázisa`, description `Ugyanaz a növény három érettségi állapotban, balról jobbra: első formázás, kialakuló váz, kész alakfa.`, `scroll_mode=hero`.
- Supported `/wpvibe/v1/elementor/save-page` returned no warnings. Frontend renders exact SVG title/desc and Opera logged-out accessibility name matches the source image.

Open on page270: separate source portrait `Biró János munka közben`. The known live URL returned Not Found; do not retry or invent. Existing media IDs 142–146 and 308 are not proven to be that source portrait. Formal pixel/animation acceptance remains open.

## Page264 Old trees - content parity advanced
Evidence `reports/subpages/oldtrees-content-parity-v003.json`. Current known **37499 B, SHA `c23ad9d1dfa85c52a0f5c324d4860832913b077566ac0c0cff3ca18ba66f14a6`**; fresh-read before write.
Closed content: `Túl közel került a házhoz`, `Két út`, all eight comparison bullets and maintenance caveat; earlier v002 restored biological-support/benefit cards, three-step/offer copy, second credibility paragraph, fourth FAQ and comparison intro.
Open: exact source problem-grid chip visual structure, hero art `Idős fa megtartott, alátámasztott vezérággal`, inline request form at `#ajanlatkeres`.

## Page258 Gallery
D17 masonry closed. Known state before next fresh read: 72603 B, SHA `9af1124e4aa167f73e3d1ab34bb5b243db7169cd20fbea38ff50f049e9921294`. Prepared hero: `af27004c`, `art=galeria`, title `Formakatalógus – négy alakfa-sziluett`, description `Négy különböző formavilág egy polcon: rétegzett niwaki, gömb, kúp és felhőcsokor.`, `scroll_mode=hero`. Do not full-save this 72 kB page until all Atomic legacy class labels are mapped through D18. Missing Ellwoodi file `175725917368bda5a5b1ae6_370X354.webp` is live-404; frozen/local asset required.

## Page272 Hedge - NEXT MAIN PACKAGE
Known state before fresh read: 49475 B, SHA `0db2ad33292b338446b3b8f9358c434521894ea8ad0f5dfa8c92b78d035ca3d8`. D12/D17/content package preserved.
Next task: fresh quota + full page272 Atomic legacy-class inventory, create/reuse required D18 bridges, then one supported save adding `af-hero-art` `art=soveny-specialista`, title `Nyírt sövénysáv díszes véggel`, description `Szerkezetileg fenntartott, egyenesre nyírt sövénysáv, a végén formára nevelt oszloppal.`, `scroll_mode=hero`; reread/frontend/editor.

## Page56 homepage
Missing source region after contact/form: heading `Ingatlanértékesítési partnerprogram`, disclosure `Ingatlanértékesítőknek: partnerprogram` with recovered source body already recorded. Structural placement remains open; page56 is ~240 kB, so do not full-save without complete D18 mapping/validated package.

## MetForm33
Checkpoint 5568 B, SHA `47152dff5fa5d5369a8955f7581e71b0652604c39a6c283fd15e243a543d01f3`. Required topic, multi-file upload, 8 MB/file, GDPR active; entries stored; notifications/webhooks disabled. Open: max-five validation extension, textarea 10→5 rows, exact source success message. No SMTP/external submission.

## Mandatory next work
1. Before page272: re-read exact quota, `AGENTS.md`, D03/D04/D07/D11/D18, and fresh page272 hash/tree.
2. Execute page272 Hedge hero with D18 class preservation and one supported full save; reread, logged-out frontend and editor.
3. Then page264 hero package. Page264 also needs separate problem-grid/source-form work.
4. Large page258/page56 full saves only after complete class-map validation.
5. Resolve frozen/local missing assets without retrying known 404 URLs.
6. Finish MetForm validation/textarea/success state without delivery.

## Acceptance
`PIXEL_PASS=false`. `specs/acceptance.json` and `specs/behaviors.json` are absent (404) in current repo snapshot. Formal frozen six-viewport screenshot pairs/overlay/diff, computed geometry/fonts, controlled animation/reduced-motion timelines, full runtime/console/network proof and second browser engine remain required. Opera accessibility checks are structural evidence only.
