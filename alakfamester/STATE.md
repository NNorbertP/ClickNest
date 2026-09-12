# STATE - 2026-09-12, WP20260912-F1 in progress

## Current work package
Target: https://alakfamester-wp.clicknest.hu/ ; repository NNorbertP/ClickNest, main, alakfamester/.
Next task selected from the previous checkpoint: page 268 /referencia-videok/.
No WordPress construction write made in this package yet.
Preflight raw _elementor_data: 8947 bytes, SHA256 fec3b94865400b50f39d2e33955233e637a2a0d713189b8998ee062b2f0a5563.
Exact local export: backups/page-268-raw-pre-v001.json (hash verified against server, not a guessed reconstruction).
Hello Additional CSS: post 8, 255948 bytes, SHA256 2618f40875d30cdbf468ef2f07715b265b26c6c9e695662c1b9758cee1066e06. Native revision 307 is byte-identical and is the rollback point. Revision 280 of page 268 is NOT current; do not restore it as this package's backup.

Scope: preserve all seven video widget IDs and their URL identity, restore correct featured/shaping/health grouping, nest the featured player with its full source explanation, restore missing card titles and featured CTA. Native Atomic structural elements + existing legacy Video and bounded rich-text elements. No SMTP, plugin install, new media import, theme switch or shared JS change.
Mapping: featured af2c0049/qJIcIt1a6Mk; shaping af2c000b/Qs5q1Dcl4aw, af2c004a/ww28lnsg8QY, af2c0048/mbA7iEkfHCE; health af2c0009/5mGcFuxc0JI, af2c000a/GLIrUif2eG8, af2c000c/c7JZBmKwTwM.
Before dispatch recheck page 268 + CSS 8 hashes, class order and package-local validation. Any mismatch: merge actual manual change; do not overwrite.

## Verified environment and preserved resources
WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4; active hello-elementor 3.5.1; Elementor 4.2.4.
Preserve static homepage 56, page_for_posts=0; page 12; ElementsKit header 20 and footer 21; MetForm 33; Additional CSS 8. Do not duplicate these.
Canonical published pages: 256 biologiai-vedelem; 258 galeria; 260 gyakran-ismetelt-kerdesek; 262 gyumolcsfak-metszese-es-vedelme; 264 idos-fak-megmentese-szolgaltatas; 266 kapcsolat; 268 referencia-videok; 270 rolam; 272 soveny-specialista. Page template elementor_header_footer.
Existing project/plugin setup retained. No repeated installation or full schema inventory. LiteSpeed activity needs a targeted check before any optimization work: old STATE said inactive, site_info lists the plugin; do not infer a manual reactivation or change settings.

## Earlier completed packages - preserve, do not repeat
A1: page270 af-s-rolam-9 paper->sage, -11 sage->paper; page272 af-s-soveny-specialista-8 stone->sage. Visual parity remains open.
B: gallery258 af270007, 36 featured images and 44 masonry images; native save/front-end structural check passed. Interaction/exact/editor QA open. Never repeat obsolete op_dd3ae07c6db44c60.
C: hedge272 proof af2e004d has 21 slides/dots; masonry af2e004a has 28 images. Old images preserved hidden. Auto 5->6 observed, remaining QA open.
D: shared JS is auhfc_settings_sitewide.footer, marker af-source-interactions-v001 exactly once, probe marker absent. GitHub build/source-interactions-v001.js, commit 6710e707bbe4e4272ce6356c527c8511521de061, SHA256 c545a177861d1e811041b3444bda5a587de34aa32edee4060936514928fe1e66. BA/carousel/lightbox/masonry/editor mutation handling present; full lifecycle QA open.
E: about270 hero extra af2d0007 hidden, af2d0008 full-width; af2d0047 5-slide manual carousel/timeline; af2d004b three BA cards. Oldtrees264 af2a004a has tiszafa BA + six-slide Nordmann auto story. Native saves/readbacks passed; manual no-autoplay observed; auto started at image3, further read interrupted. CSS marker af-project:about-survivor-media-v001. Evidence reports/subpages/about-survivor-source-parity-v001.json, commit 188e1a3cb853750d103de17f64177ce9af4d3654. Actual post_modified_gmt 270=2026-09-12 09:25:03, 264=09:25:09, newer than old checkpoint; do not rewrite from old cached payload.

## Newly found blockers and defects
Repository folder tree 6a421337dbbda48cb95ab27e1ec482859600c87b does NOT contain source/, specs/acceptance.json, specs/behaviors.json, full page specs or the referenced tools. No source ZIP is attached in this conversation. Frozen source aggregate recorded previously: fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707. Do not replace this reference with a new live snapshot.
Live original https://alakfamester.clicknest.hu/ is available via WPVibe for diagnosis; it is NOT a verified frozen reference in this run. Source CSS/HTML content was read for video page restoration.
Opera screenshot initially succeeded (logged in/admin bar, diagnostic only); subsequent browser read said disconnected. Container DNS cannot reach source/target/GitHub; no connected Playwright automation. No qualified screenshot pair/overlay/diff or font-rendering/network/CDP proof yet.
Video hero lacks its source art/full meta; custom af-project-reviews on subpages contradicts D12's claimed Atomic conversion, and screenshot showed raw pink tab buttons/oversized image. Investigate actual native home pattern, do not assume existing plain _css_classes are valid Atomic controls.
The target CSS contains fixed per-viewport section heights with overflow:hidden. These cannot be used as pixel-parity evidence. Remove obsolete rules within the verified repair scope; do not hide text or force source heights.

## Acceptance / budget
PIXEL_PASS = false. Open: six viewport screenshot pair/overlay/diff, geometry/text wrapping/page heights, actual fonts (including accented glyphs), asset/network/console errors, video click/keyboard operation, source animation time samples/full cycle/mobile/reduced motion, menu/focus/scroll locks, Elementor reopen/reinitialization, optimized configuration, second browser engine, mail-free form processing where supported. No SMTP or external test send.
Initial service quota this run: used132/300, remaining168 in rolling24h. Minimum closing reserve10. Actual current quota must be queried again; do not subtract only successful writes or claim a guessed remainder.
Working files: /mnt/data/alakfamester/. Prepared packages and evidence must be committed before closing. Next package after F1 depends on its readback/browser result; mandatory missing frozen inputs remain a separate block to final acceptance and prompt3 handover.
