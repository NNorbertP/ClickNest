# STATE - 2026-09-12, WPVIBE BUDGET RESTORED; GALLERY HERO PACKAGE ACTIVE

## Current state and active continuation
Target: https://alakfamester-wp.clicknest.hu/ ; repository `NNorbertP/ClickNest`, branch `main`, folder `alakfamester/`.

WPVibe account is now `ncsnorbert+20260912-2@gmail.com`. The site authorization is live and `site_info` confirms the connected WordPress administrator and active Hello Elementor environment. Exact quota at the start of this continuation: **0/300 used, 300 remaining** in the rolling 24-hour window. Keep at least 10 calls for recovery/closeout.

The active work package is page258 Gallery hero source parity. A fresh target read before any write confirmed page258 is still **72603 bytes, SHA256 `9af1124e4aa167f73e3d1ab34bb5b243db7169cd20fbea38ff50f049e9921294`, modified GMT `2026-09-12 13:15:27`**, matching the previous checkpoint. The existing empty hero host is `af270041`; the prepared new child remains `af27004c`, widget `af-hero-art`, `art=galeria`, accessible title `Formakatalógus – négy alakfa-sziluett`, accessible description `Négy különböző formavilág egy polcon: rétegzett niwaki, gömb, kúp és felhőcsokor.`, `scroll_mode=hero`. The live widget schema was re-read on Elementor 4.2.4 and confirms `art`, `accessible_title`, `accessible_description`, and `scroll_mode` are valid controls. Perform this only through the supported Elementor full-save workflow, then reread data, frontend and editor before the next structural package.

No SMTP is configured and no external form submission/test message may be sent in this mode.

## Environment / resources to preserve
- WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4.
- Active theme `hello-elementor` 3.5.1; Elementor 4.2.4.
- ElementsKit Lite 4.0.4; Essential Addons 6.8.3; MetForm 4.3.0; `af-project` 0.2.0; UpdraftPlus and Head & Footer Code active.
- Preserve homepage56, capability page12, ElementsKit header20/footer21, MetForm33, Additional CSS post8, and canonical pages 256/258/260/262/264/266/268/270/272.
- Page template remains `elementor_header_footer`.
- Shared interaction JS remains the single Head & Footer Code marker `af-source-interactions-v001`; do not duplicate handlers.
- Last known unchanged Additional CSS: 259652 bytes, SHA256 `f659a3b805dc54c7e28e832a531b14e9854508f1671621df9a4fa525435b042d`. Re-read before any future CSS write.
- Frozen source aggregate remains `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`; live original is diagnostic only.

## Closed / stable packages - do not repeat
- D12 native reviews are now present on all canonical pages that use reviews; no canonical page retains `af-project-reviews`.
- Page258 D17: Essential Addons `eael-filterable-gallery` id `af27000e`, 44-image masonry, source order/lightbox; evidence `reports/subpages/gallery-eael-masonry-v001.json`.
- Page272 D17: Essential Addons widget `b2e2c001`, 28 source images; evidence `reports/subpages/hedge-eael-masonry-v001.json`.
- Page272 D12 native Atomic Tabs root `c3d30005`, review media 75/76/77; evidence `reports/subpages/hedge-native-reviews-v001.json`.
- Page268 seven reference videos, native reviews and hero are structurally present. Do not revert to the old F2/F3 experiments.
- Page56 D16 benefits/species content is already deployed despite stale prep metadata; do not redeploy it.

## MetForm33 source-parity package
MetForm 33 was saved once through the supported Elementor save route with stable IDs. Current verified form meta at that checkpoint: **5568 bytes, SHA256 `47152dff5fa5d5369a8955f7581e71b0652604c39a6c283fd15e243a543d01f3`**.

Aligned internal source names/placeholders: `nev`, `telefon`, `email`, `telepules`, radio `kapcsolat-tema`, `magassag`, `faj`, `fotok`, `uzenet`, `hozzajarulas`. Required topic radio, required multi-file upload, 8 MB/file limit and required GDPR consent are active. MetForm stores entries while admin/user notifications and webhook/REST integrations remain disabled, so mail-free processing is preserved.

Open form parity: MetForm Free schema exposes no native maximum-file-count control, so the source's max-5 rule still needs the documented targeted validation extension; textarea currently renders 10 rows vs source 5; exact source success-message copy remains to be recovered. Do not send an external submission while fixing these.

## Page258 Gallery - current continuation
D17 masonry is closed and must not be touched.

The featured-project block text was corrected in existing widget `af270007` without changing element structure:
- eyebrow now `Referenciák`;
- intro now source text: `Minden panel egy növény vagy egy dokumentált munka. Ahol azonos nézőpontból van előtte–utána pár, ott a csúszka húzható; ahol több állomás vagy nézet van, ott körhinta lépteti végig őket.`

Fresh page258 pre-write state: **72603 bytes, SHA256 `9af1124e4aa167f73e3d1ab34bb5b243db7169cd20fbea38ff50f049e9921294`**.

Opera accessibility comparison previously showed source 61 images vs target 59. The two meaningful differences are:
1. missing source hero illustration `Formakatalógus – négy alakfa-sziluett`;
2. missing Ellwoodi slide `A többgömbös Ellwoodi niwaki, másik nézet`, source file `175725917368bda5a5b1ae6_370X354.webp`.

The Ellwoodi source file currently returns 404 to WPVibe `upload-media`; do not retry the same URL, invent a replacement or upload a duplicate. A frozen/local source asset is required.

Prepared Gallery hero structural package: existing empty hero host `af270041`; intended fresh child `af27004c`; widget `af-hero-art`; `art=galeria`; accessible title `Formakatalógus – négy alakfa-sziluett`; description `Négy különböző formavilág egy polcon: rétegzett niwaki, gömb, kúp és felhőcsokor.`; `scroll_mode=hero`. Implement with supported full Elementor save, then verify current hash/tree/frontend/editor before moving on.

## Page272 Hedge - content parity advanced
Evidence: `reports/subpages/hedge-content-parity-v002.json`.

Guarded edits restored source content without changing Elementor IDs:
- missing second hero-sub sentence;
- `Egyedi forma is kérhető` callout;
- `Forma és dekoratív sövényvégek` and `Beteg, ritkuló, károsodott sövény` cards;
- expanded renewal copy and biological-protection link;
- `Mit nem vállalok?` and exact four price factors;
- source form-intro copy (`Ajánlatkérés`, response timing, phone/e-mail pair, required-fields note);
- hero CTAs/facts now map to source intent: `Kérek felmérést` -> `/kapcsolat/#ajanlatkeres`; `Formák, amiket vállalok` -> `#formara-vagas`; facts are `Formára vágás és szerkezeti fenntartás`, `Növény-egészségügyi szemlélettel`, `Fotó alapján is felmérem – díjmentesen`;
- existing content inner received `id='formara-vagas'`.

Last exact read before the final hero CTA/anchor edits: **49347 bytes, SHA256 `b86eb746bcd76c9efdae71aebb366edb75c98d3fc19f22cff20672143240db6f`**. The final two guarded edits were confirmed successful but were not re-hashed; re-read page272 before the next write.

Remaining hedge structural gap: source hero illustration `Nyírt sövénysáv díszes véggel`, description `Szerkezetileg fenntartott, egyenesre nyírt sövénysáv, a végén formára nevelt oszloppal.` Existing empty hero host was previously `af2e0041`; use `af-hero-art`, `art=soveny-specialista`, through a fresh full supported page save only.

## Page264 Old trees - content parity advanced
Evidence: `reports/subpages/oldtrees-content-parity-v002.json`.

Starting exact state before the prior package: 35176 bytes, SHA256 `48713257e1e950e4123b0ace59ed9760961d6edaed5e6b35cacdd532bc3c68e0`.

Guarded edits restored:
- source `Biológiai támogatás – kiegészítő mechanizmus` card and canonical biological-protection link;
- source `Kivágás helyett mit nyerhet?` card with four bullets;
- `Három lépés, kötelezettség nélkül` heading;
- source `És az ajánlat?` callout with `/kapcsolat/#kiszallas` mapping;
- second credibility paragraph explaining when a saveable plant is still a poor long-term fit;
- missing fourth FAQ `Vállalja a munkát akkor is, ha nem én ültettem a növényt?` with exact answer;
- source `Kivágás vagy átalakítás?` introductory paragraph.

Last guarded edit reported **36867 bytes**. Final SHA was deliberately not queried after the previous account crossed the reserve threshold; re-read before any page264 write. Fresh Opera target reload exposed the new headings and fourth FAQ.

Open page264 parity:
- source hero art still missing: title `Idős fa megtartott, alátámasztott vezérággal`; description `Öreg fa vastag törzzsel és nehéz alsó vezérággal, amelyet bronz támasz tart meg.` Use the matching `af-hero-art` option with a supported full page save after a fresh read.
- source has a full inline request form at `#ajanlatkeres`; target still routes to the shared contact form. Rebuild structurally with existing MetForm33 when quota allows.
- source problem grid includes `Túl közel került a házhoz`; target still omits it.
- source comparison bullets are more detailed than the target simplified wording.

## Quota-safe Opera source-target audit
Evidence: `reports/subpages/readonly-source-target-audit-v001.json`.

### Page260 FAQ
All 17 source FAQ disclosure questions are present on target. Open: source hero art `Jelölt formatanulmány – ahol a kérdések felmerülnek` is missing; source `Témakörök` heading/navigation is absent. Image count source 3 vs target 1; one source-only image is only the ClickNest footer credit, so the meaningful media gap is one hero illustration.

### Page262 Fruit trees
Most technical content and all four FAQ controls are present. Open:
- source hero art `Gyümölcsfa nyitott vázkoronával` missing;
- source section title `Mikor történik a metszés?` exists as target static text but is not a semantic heading;
- FAQ wording differs: source `Metszhető a fa télen, fagyban?`, target `Metszhető ősszel a fám, fagynál?`.
Meaningful image gap is the hero art; source's other extra image is only the ClickNest footer credit.

### Page270 About
Core expertise/work-method/projects remain present. Open:
- source hero art `A formanevelés három fázisa` missing;
- source separate image `Biró János munka közben` missing (target still has the separate carousel image `Biró János a munkájában, 1. kép`);
- timeline item titles are static text instead of source-equivalent headings;
- source heading/content `Miért lettem kertész?` is absent from the target audit.
Source 11 images vs target 8; after excluding ClickNest footer credit this confirms two meaningful media gaps.

### Page266 Contact
Core contact data, MetForm, trip-fee/urgency/area sections are present. Open:
- source hero art `Nyitott kertkapu egy megformált növény mellett` missing;
- source `Elérhetőségek` heading absent;
- the four process-step titles exist as static target text rather than source semantic headings.

### Page256 Biological protection
Hero illustration and review media are present; the only source-only image in the accessibility count is the ClickNest reference-footer credit. Do not unnecessarily rebuild this hero.

## Other known open parity
- Page56 homepage still lacks the source `Ingatlanértékesítési partnerprogram` block after the contact/form area. Recover source HTML and add it as an editable pattern in a future package.
- Page268 structure is largely aligned; target video overlay accessible controls remain generic `Videó lejátszása` while source includes the video title in the label. Treat as accessibility/behavior parity follow-up, not a media reorder.
- Global final visual/behavior acceptance remains open.

## Mandatory next action
1. Complete page258 Gallery hero via supported full Elementor save, then reread data/hash/frontend/editor.
2. Re-read and execute page272 Hedge hero-art package similarly.
3. Then page264/260/262/270/266 hero-art gaps one page at a time, always with fresh target state and one clean supported save per atomic page.
4. Recover or locate the frozen/local Ellwoodi asset; do not retry the live 404 URL.
5. Repair high-value content gaps: page270 `Miért lettem kertész?` + missing work portrait; page264 inline MetForm/problem chip/detail copy; page262 FAQ wording/heading semantics; page266 heading semantics; page56 partner-program block.
6. Finish MetForm max-five validation/textarea/success-state parity without SMTP or external test messaging.
7. Run the formal acceptance pipeline when frozen reference/spec tooling and screenshot capture are available.

## Acceptance
`PIXEL_PASS=false`. The repository currently does not contain `specs/acceptance.json` or `specs/behaviors.json`; this was rechecked at resume and both paths return 404. Formal frozen six-viewport source-target screenshot pairs/overlay/diff, computed geometry/fonts, controlled animation timelines/reduced motion, complete runtime interactions, console/network/asset proof and second browser engine remain required. Opera accessibility-tree work is structural evidence only, not pixel acceptance.
