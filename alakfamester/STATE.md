# STATE - 2026-09-12, FAQ HERO CLOSED; STRUCTURAL HERO QUEUE CONTINUES

## Current target / quota
Target: https://alakfamester-wp.clicknest.hu/ ; repo `NNorbertP/ClickNest`, branch `main`, folder `alakfamester/`.

WPVibe account: `ncsnorbert+20260912-2@gmail.com`; authorization live. Latest exact quota read before the just-completed FAQ structural package was **92/300 used, 208 remaining** in the rolling 24-hour window. Additional successful calls occurred after that; re-read before the next large structural package. Keep at least 10 for recovery/closeout. No SMTP and no external form/test message.

Environment: WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4; Hello Elementor 3.5.1 active; Elementor 4.2.4; ElementsKit Lite 4.0.4; Essential Addons 6.8.3; MetForm 4.3.0; `af-project` 0.2.0. Preserve page56, capability page12, ElementsKit header20/footer21, MetForm33, Additional CSS post8, and canonical pages 256/258/260/262/264/266/268/270/272. Page template `elementor_header_footer`; single shared JS marker `af-source-interactions-v001`.

Last known Additional CSS: 259652 B, SHA256 `f659a3b805dc54c7e28e832a531b14e9854508f1671621df9a4fa525435b042d`; re-read before CSS write. Frozen source aggregate remains `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`; live original is diagnostic only.

## D18 structural save rule
Elementor 4.2.4 drops legacy `_css_classes` from Atomic `e-flexbox` on supported `save-page`. Before every full structural save, map every Atomic legacy class that must survive to native V4 Global Classes whose labels exactly equal the frontend CSS selector, and reference them through typed `settings.classes`. Decision D18 and evidence `reports/subpages/contact-hero-v4-class-bridge-v001.json`.

Known bridge classes include: `g-af-src-wave`→`af-source-wave`, `g-af-src-contact1`→`af-s-kapcsolat-1`, `g-af-src-contact5`→`af-s-kapcsolat-5`, `g-af-src-subpage`→`af-subpage-section`, `g-af-src-bgpaper`→`af-bg-paper`, existing `g-af-probe-hero`→`af-hero`, and FAQ bridges `g-af-src-faq1`, `g-af-src-faq2`, `g-af-src-reviews`, `g-af-src-faq16`, `g-af-src-bgsage`, `g-af-src-subfinal`.

## Closed/stable - preserve
- D12 native reviews on canonical review pages; no canonical `af-project-reviews`.
- Page258 D17 EAEL masonry `af27000e`: 44 images.
- Page272 D17 EAEL masonry `b2e2c001`: 28 images; D12 Atomic Tabs `c3d30005`.
- Page268 seven videos/native reviews/hero structurally present; no old F2/F3 rollback.
- Page56 D16 benefits/species already deployed.
- Page262 fruit text/FAQ package closed: **25970 B, SHA `9e440c34c1fb45ef27061807aea590b79581eb592bf4e72f98fa2fc414090737`**; evidence `reports/subpages/fruit-content-parity-v001.json`. Hero art remains structural.
- Page266 Contact D18 package closed: **8685 B, SHA `815f22bec4aa1a4401a78186505bf553740a2c19710b720407d19b4703366fae`**. Hero widget `af2b0046`, `art=kapcsolat`; headings and V4 class labels verified; editor reopened.

## Page260 FAQ - HERO CLOSED
Evidence: `reports/subpages/faq-topics-v001.json` and `reports/subpages/faq-hero-v4-v002.json`.

Final current state: **34184 B, SHA `7d6d50bb58a1bc70d8ae17eb249e3aba8d5f6339318a50007a86419619e03fcb`**.

Closed:
- `Témakörök` is an h2 in the existing topic block; all five topic links and all 17 FAQ controls preserved.
- Added editable hero widget `af28004f`, `af-hero-art`, `art=gyakran-ismetelt-kerdesek`, title `Jelölt formatanulmány – ahol a kérdések felmerülnek`, description `Egy alakfa bronz jelölésekkel a jellemző pontjain: ághalom, elágazás, korona és tő.`, `scroll_mode=hero`.
- D18 class bridge applied to hero, native review section, waves and final CTA.
- Logged-out frontend verifies hero classes `af-s-gyakran-ismetelt-kerdesek-1 af-hero`, review classes `af-reviews-section af-s-gyakran-ismetelt-kerdesek-2 af-source-reviews`, SVG title/desc, and native Atomic reviews.
- Elementor editor page260 reopened successfully.

Do not repeat page260 bridge creation or hero save unless a measured regression is found.

## Page264 Old trees - content parity advanced
Evidence `reports/subpages/oldtrees-content-parity-v003.json`. Current **37499 B, SHA `c23ad9d1dfa85c52a0f5c324d4860832913b077566ac0c0cff3ca18ba66f14a6`**.

Closed content: `Túl közel került a házhoz`, `Két út`, all eight comparison bullets and maintenance caveat; earlier v002 restored biological-support/benefit cards, three-step/offer copy, second credibility paragraph, fourth FAQ and comparison intro.

Open: exact source problem-grid chip visual structure, hero art `Idős fa megtartott, alátámasztott vezérággal`, inline request form at `#ajanlatkeres`.

## Page270 About - content parity advanced
Evidence `reports/subpages/about-content-v003.json`. Current **33446 B, SHA `143e4f5e323db2898bfa7e1a367b1e74710de1e046046656502be7e39d83911f`**.

Closed: four timeline labels are h3; source article `Miért lettem kertész?` restored with exact paragraph; logged-out headings verified and editor reopened.

Open: hero art `A formanevelés három fázisa`; separate source portrait `Biró János munka közben`. Live portrait URL `https://alakfamester.clicknest.hu/kepek/biro-janos-portre.webp` returned Not Found to `upload_media`; do not retry or invent. Need frozen/local asset. Existing media search found IDs 142–146 and 308 but no portrait identity.

## Page258 Gallery
D17 masonry closed. Known state before next fresh read: 72603 B, SHA `9af1124e4aa167f73e3d1ab34bb5b243db7169cd20fbea38ff50f049e9921294`. Prepared hero: `af27004c`, `art=galeria`, title `Formakatalógus – négy alakfa-sziluett`, description `Négy különböző formavilág egy polcon: rétegzett niwaki, gömb, kúp és felhőcsokor.`, `scroll_mode=hero`. Do not full-save this 72 kB page until all Atomic legacy class labels are mapped through D18. Missing Ellwoodi file `175725917368bda5a5b1ae6_370X354.webp` is live-404; frozen/local asset required.

## Page272 Hedge
Known state before next fresh read: 49475 B, SHA `0db2ad33292b338446b3b8f9358c434521894ea8ad0f5dfa8c92b78d035ca3d8`. D12/D17/content package preserved. Open hero: `art=soveny-specialista`, title `Nyírt sövénysáv díszes véggel`, description `Szerkezetileg fenntartott, egyenesre nyírt sövénysáv, a végén formára nevelt oszloppal.` Full-save only after fresh D18 mapping.

## Page56 homepage
Missing source region after contact/form: heading `Ingatlanértékesítési partnerprogram`, disclosure `Ingatlanértékesítőknek: partnerprogram`.

Recovered body:
- `Ingatlanértékesítéskor a rendezett, átlátható kert mérhetően javítja az első benyomást. Ingatlanközvetítőkkel és tulajdonosokkal külön együttműködési formában dolgozom: az értékesítés előtt célzottan azokat a növényeket rendezzük, amelyek a legtöbbet rontanak vagy javítanak az összképen.`
- `Kinek szól? Ingatlanközvetítő irodáknak, home staging szolgáltatóknak és eladás előtt álló tulajdonosoknak. Részletekért keressen a kreativ@alakfa-mester.hu e-mail-címen.`

Structural placement remains open; page56 is ~240 kB, so do not full-save without complete D18 mapping/validated package.

## MetForm33
Checkpoint 5568 B, SHA `47152dff5fa5d5369a8955f7581e71b0652604c39a6c283fd15e243a543d01f3`. Required topic, multi-file upload, 8 MB/file, GDPR active; entries stored; notifications/webhooks disabled. Open: max-five validation extension, textarea 10→5 rows, exact source success message. No SMTP/external submission.

## Mandatory next work
1. Re-read exact quota and fresh page262 state.
2. Execute page262 Fruit hero next: inventory every Atomic legacy class, create/reuse D18 bridges, add `af-hero-art` `art=gyumolcsfak-metszese-es-vedelme`, title `Gyümölcsfa nyitott vázkoronával`, description `Metszéssel nyitott, kehely alakú vázkorona négy vezérággal és érő terméssel.`, one supported save, reread/frontend/editor.
3. Then page270/page272/page264 hero packages, each with fresh D18 inventory and one full save.
4. Large page258/page56 full saves only after complete class-map validation.
5. Resolve frozen/local missing assets without retrying known 404 URLs.
6. Finish MetForm validation/textarea/success state without delivery.

## Acceptance
`PIXEL_PASS=false`. `specs/acceptance.json` and `specs/behaviors.json` are absent (404) in current repo snapshot. Formal frozen six-viewport screenshot pairs/overlay/diff, computed geometry/fonts, controlled animation/reduced-motion timelines, full runtime/console/network proof and second browser engine remain required. Opera accessibility checks are structural evidence only.
