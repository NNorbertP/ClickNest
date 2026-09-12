# STATE - 2026-09-12, CONTACT HERO CLOSED; D18 V4 CLASS BRIDGE ACTIVE

## Current target and budget
Target: https://alakfamester-wp.clicknest.hu/ ; repo `NNorbertP/ClickNest`, branch `main`, folder `alakfamester/`.

WPVibe account: `ncsnorbert+20260912-2@gmail.com`. Authorization is live. Start-of-session quota was 0/300; last explicit service read was **22/300 used, 278 remaining** before the later contact package. More successful calls have happened since; re-read before the next large batch and keep at least 10 calls for recovery/closeout. A temporary host-side HTTP 429 during rapid requests cleared; do not treat it as credential failure.

Environment: WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4; `hello-elementor` 3.5.1 active; Elementor 4.2.4; ElementsKit Lite 4.0.4; Essential Addons 6.8.3; MetForm 4.3.0; `af-project` 0.2.0. Preserve page56, capability page12, ElementsKit header20/footer21, MetForm33, Additional CSS post8, and canonical pages 256/258/260/262/264/266/268/270/272. Page template remains `elementor_header_footer`. Shared JS remains single marker `af-source-interactions-v001`. No SMTP and no external form submission/test message.

Last known Additional CSS: 259652 bytes, SHA256 `f659a3b805dc54c7e28e832a531b14e9854508f1671621df9a4fa525435b042d`; re-read before any CSS write. Frozen source aggregate stays `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`; live original is diagnostic only.

## Structural-save rule added as D18
Elementor 4.2.4 strips legacy `_css_classes` from Atomic `e-flexbox` during supported `save-page`. Before every future full structural save, enumerate required Atomic legacy class labels and represent them with native V4 Global Classes whose **labels exactly equal the required frontend CSS class names**, then reference their IDs through typed `settings.classes`. Existing matching global classes must be reused. Evidence: `reports/subpages/contact-hero-v4-class-bridge-v001.json`; decision D18 in `specs/decisions.md`.

Current newly available bridge classes:
- `g-af-src-wave` → `af-source-wave`
- `g-af-src-contact1` → `af-s-kapcsolat-1`
- `g-af-src-contact5` → `af-s-kapcsolat-5`
- `g-af-src-subpage` → `af-subpage-section`
- `g-af-src-bgpaper` → `af-bg-paper`
- existing `g-af-probe-hero` → `af-hero`

## Closed/stable - do not repeat
- D12 native reviews on all canonical review pages; no canonical `af-project-reviews`.
- Page258 D17 EAEL masonry `af27000e`: 44 images, source order/lightbox.
- Page272 D17 EAEL masonry `b2e2c001`: 28 images.
- Page272 D12 native Atomic Tabs `c3d30005`, review media 75/76/77.
- Page268: seven videos + native reviews + hero structurally present; do not revert old F2/F3 experiments.
- Page56 D16 benefits/species already deployed; do not redeploy from stale prep metadata.

## Page262 fruit content parity - CLOSED
Evidence: `reports/subpages/fruit-content-parity-v001.json`.

Final state: **25970 bytes, SHA256 `9e440c34c1fb45ef27061807aea590b79581eb592bf4e72f98fa2fc414090737`**. Source FAQ question `Metszhető a fa télen, fagyban?`, all four FAQ answers, `Mikor történik a metszés?` copy and h3 semantics are restored in existing text-editor content. Logged-out target and Elementor editor were rechecked. Open fruit gap: hero illustration `Gyümölcsfa nyitott vázkoronával`, requiring a D18-compliant full save.

## Page266 Contact - CLOSED structural/content package
Evidence: `reports/subpages/contact-hero-v4-class-bridge-v001.json`.

Pre-state: 8117 B, SHA `b9ef3e23aa2ac1ae9cc9e8cb8d5c050ed7842f0b1af4d695236925a0ecf0511f`.
Final state after the clean D18 bridge save: **8685 B, SHA `815f22bec4aa1a4401a78186505bf553740a2c19710b720407d19b4703366fae`, modified GMT `2026-09-12 14:05:50`**.

Closed:
- Added editable `af-hero-art` widget `af2b0046`, `art=kapcsolat`, title `Nyitott kertkapu egy megformált növény mellett`, description `Bronz kertkapu-ív, mögötte gereblyézett ösvény és egy kész alakfa – hívogató nyitókép.`, `scroll_mode=hero`.
- Added source heading `Elérhetőségek` inside existing contact-card widget.
- Converted the four process-step labels to h3 headings.
- Restored Atomic frontend class labels with D18 native V4 class references: hero emits `af-s-kapcsolat-1 af-hero`; form section emits `af-s-kapcsolat-5 af-subpage-section af-bg-paper`; wave containers emit `af-source-wave`.
- Logged-out frontend HTML contains correct SVG title/desc and exact section labels; Elementor editor page266 reopened.

Do not repeat the first experimental save that relied on Atomic `_css_classes`; the final D18 state above is canonical.

## Current canonical hashes relevant to next packages
Known current:
- page56: 240028 B, `3e1f0bd0d5ca4102e1e44d1e4e7bb23433cd4f35c60d8f155088cf9efa7fd1b6`
- page258: 72603 B, `9af1124e4aa167f73e3d1ab34bb5b243db7169cd20fbea38ff50f049e9921294`
- page260: 28729 B, `9599ff0129ee166c48a5adbc40a8db69bd013da4e114ba7056173dca7934e524`
- page262: 25970 B, `9e440c34c1fb45ef27061807aea590b79581eb592bf4e72f98fa2fc414090737`
- page264: 36867 B, `336eafeb38bc47350733127345fc2299b4baeb70ee6cfc71038059273b28635c`
- page266: 8685 B, `815f22bec4aa1a4401a78186505bf553740a2c19710b720407d19b4703366fae`
- page270: 33129 B, `254c5c25a2ffb5a4b0d5c49202c83eb7dd089e1853bf361579da09fc11b18386`
- page272: 49475 B, `0db2ad33292b338446b3b8f9358c434521894ea8ad0f5dfa8c92b78d035ca3d8`
Re-read immediately before writing any page.

## Page258 Gallery - structural hero open
D17 masonry is closed and must not be touched. Hero host previously `af270041`. Prepared new widget `af27004c`, `af-hero-art`, `art=galeria`, title `Formakatalógus – négy alakfa-sziluett`, description `Négy különböző formavilág egy polcon: rétegzett niwaki, gömb, kúp és felhőcsokor.`, `scroll_mode=hero`.

Because page258 is 72 kB and contains Atomic elements with legacy class labels, **do not full-save it until every required Atomic legacy `_css_classes` label has been mapped/reused through D18 native global classes**. Missing Ellwoodi slide source file `175725917368bda5a5b1ae6_370X354.webp` returns 404 live; do not retry/invent a replacement. Need frozen/local asset.

## Page272 Hedge
Fresh known hash 49475 B `0db2ad33292b338446b3b8f9358c434521894ea8ad0f5dfa8c92b78d035ca3d8`. Remaining structural gap: hero art `Nyírt sövénysáv díszes véggel`, description `Szerkezetileg fenntartott, egyenesre nyírt sövénysáv, a végén formára nevelt oszloppal.`, `art=soveny-specialista`. Perform only after fresh full-tree read + D18 class mapping.

## Page264 Old trees
Fresh known hash 36867 B `336eafeb38bc47350733127345fc2299b4baeb70ee6cfc71038059273b28635c`.
Open: hero art `Idős fa megtartott, alátámasztott vezérággal`; source inline request form at `#ajanlatkeres`; missing problem chip `Túl közel került a házhoz`; comparison bullets simplified. Content-only gaps should be closed before structural save where possible.

## Page260 FAQ
All 17 source FAQ controls present. Open: hero art `Jelölt formatanulmány – ahol a kérdések felmerülnek`; source `Témakörök` heading/navigation block. Prefer content-only recovery for topics if existing text-editor can host it; hero uses D18 structural save.

## Page270 About
Open:
- hero art `A formanevelés három fázisa`;
- separate source image `Biró János munka közben`, live URL `https://alakfamester.clicknest.hu/kepek/biro-janos-portre.webp`;
- timeline labels need heading semantics;
- missing article `Miért lettem kertész?` with recovered exact text: `A kertészet nálam gyerekkori történettel kezdődött – az első saját növénnyel és azzal a felismeréssel, hogy egy növény formája nem véletlen, hanem döntések sorozata.`
Check media library/hash before any portrait upload; do not duplicate.

## Page56 homepage
Source `Ingatlanértékesítési partnerprogram` remains missing after form area. Accessibility tree confirms heading plus disclosure `Ingatlanértékesítőknek: partnerprogram`; recover hidden source content before construction.

## MetForm33 open parity
Verified checkpoint: 5568 B, SHA `47152dff5fa5d5369a8955f7581e71b0652604c39a6c283fd15e243a543d01f3`. Required topic, multi-file upload, 8 MB/file, GDPR active; entries stored; notifications/webhooks disabled. Open: max-five validation extension; textarea 10 rows vs source 5; exact success copy. No SMTP/external test submit.

## Mandatory next actions
1. Continue read-only/source recovery and guarded content-only fixes in parallel: page270 missing article/timeline semantics, page264 problem/comparison copy, page260 topics block, page56 partner disclosure.
2. Before each structural hero save, fresh-read the whole page and build complete D18 mappings for every Atomic legacy class that must survive; save once; read back; logged-out frontend check; editor reopen.
3. Prefer smaller pages 260/262/270 next; page258 large tree only after full D18 map validation.
4. Recover frozen/local Ellwoodi asset; do not retry the live 404 URL.
5. Finish MetForm max-five/textarea/success-state parity without delivery.
6. Formal acceptance only when frozen specs/screenshot tooling are available.

## Acceptance
`PIXEL_PASS=false`. Repository paths `specs/acceptance.json` and `specs/behaviors.json` currently return 404. Formal frozen six-viewport screenshot pairs/overlay/diff, computed geometry/fonts, controlled animation/reduced-motion timelines, full runtime/console/network proof and second browser engine remain required. Opera accessibility checks are structural evidence only.
