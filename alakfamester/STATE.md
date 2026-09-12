# STATE - 2026-09-12, WP20260912-F3 INTERRUPTED; RESTORE F2 FIRST

## Current work package and mandatory continuation
Target: https://alakfamester-wp.clicknest.hu/ ; repository NNorbertP/ClickNest, main, alakfamester/.

F1 and F2 were completed and verified on page 268 `/referencia-videok/`. F3 (hero/source-parity repair) was started, but target-side WPVibe requests are now returning HTTP 429 Too Many Requests. This is NOT the ChatGPT plugin permission problem: WPVibe permission has already been set to full access and writes worked. WPVibe reports that the target/Wordfence/host/Cloudflare is throttling requests and recommends allowlisting requests with header `X-WPVibe: 1` or User-Agent `WPVibe/1.0`. Do not repeatedly retry while the block is active.

IMPORTANT: the current remote page268 hero is an unaccepted intermediate diagnostic state. A trial that reused source class labels on Atomic wrappers rendered incorrectly in Opera (plain/pink contact text and oversized SVG/play graphic; expected art geometry not proven). Do not continue styling on top of it. The first remote write after the throttle clears must be a restore to the verified F2 page, unless a fresh preflight detects a real manual conflict.

Prepared rollback, not yet sent:
- verified F2 page data: `/mnt/data/alakfamester/backups/page-268-after-f2-restore-v001.json`
- SHA256: `91c4d369cb0a5eb94a9158193eca7c990cc7f8dd719f895e926a2580f057f055`
- Elementor elements: 105, element IDs unique
- prepared supported save body: `/mnt/data/alakfamester/build/page-268-f3-rollback-to-f2-save-body.json`
- save-body SHA256: `2ea649d288affd9ecadc6db26b06a26235494117b0be77834eda5d022c5a4b94`

Resume sequence:
1. Re-check target availability, page268 modified/hash/markers, and exact quota. If a manual change appeared, merge instead of overwriting.
2. If no conflict, POST the prepared F2 tree through `/wpvibe/v1/elementor/save-page` with page268 + `elementor_header_footer`; require warnings=[].
3. Read back frontend and editor; verify F1 seven-video mapping, F2 native Atomic reviews, and no `af-project-reviews` widget.
4. Only after the verified restore, restart F3 from the F2 tree. Use the target's proven `af-*` V4 classes plus the `af-hero-art` widget contract. Do not reuse the experimental source-label classes as styling hooks.
5. The experimental F3 global classes (`g-af-src-*`, `g-af-v-inner-heading`, `g-af-v-inner-art`) must not be deleted until usage is checked. They may remain unused without harm.

Evidence for the interruption and recovery instructions: `reports/subpages/reference-videos-f3-interrupted-v001.json`, commit `a575c78a9a318ce35e684295ab3fcc4102db6021`.

## Completed page268 packages - preserve after restore
F1 preflight raw `_elementor_data`: 8947 bytes, SHA256 `fec3b94865400b50f39d2e33955233e637a2a0d713189b8998ee062b2f0a5563`. Original rollback: `backups/page-268-raw-pre-v001.json`.
F1 preserved all seven Video widget IDs + YouTube identity and restored correct content/grouping: featured `af2c0049/qJIcIt1a6Mk`; shaping `af2c000b/Qs5q1Dcl4aw`, `af2c004a/ww28lnsg8QY`, `af2c0048/mbA7iEkfHCE`; health `af2c0009/5mGcFuxc0JI`, `af2c000a/GLIrUif2eG8`, `af2c000c/c7JZBmKwTwM`. Source featured explanation, QA items, titles and featured CTA restored; lazy click-to-play overlays enabled. Evidence `reports/subpages/reference-videos-f1-v001.json`, commit `60248298f1bf8c78bd9a1d77a95880ca785a6189`.
F2 replaced page268 `af-project-reviews` with the D12 native Atomic Tabs pattern. Root `af2c0230`, 3 tabs/3 panels, image attachments 75/76/77; source review titles/full copy; save warnings=[]; frontend and editor readback passed. Evidence `reports/subpages/reference-videos-f2-reviews-v001.json`, commit `1e5c3a8f3a01bba1d5841fc238804c738e7d0fe8`.

F3 changes currently on remote but NOT accepted: exact source hero copy/meta and `af-hero-art` variant `referencia-videok` were introduced; page268 final CTA href was corrected to `/kapcsolat/#ajanlatkeres` and its eyebrow/mail contact were added. These are not reasons to skip the F2 restore: reapply only proven F3 parts cleanly after restore. Current experimental hero classes include `g-af-src-hero`, `g-af-src-hero-inner`, `g-af-src-hero-container`, `g-af-src-hero-grid`, `g-af-src-hero-copy`, `g-af-src-eyebrow`, `g-af-src-hero-sub`, `g-af-src-hero-visual`; plus `g-af-v-inner-heading`, `g-af-v-inner-art`.

## Verified environment and preserved resources
WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4; active Hello Elementor 3.5.1; Elementor 4.2.4.
Preserve static homepage 56, page_for_posts=0; page 12; ElementsKit header 20 and footer 21; MetForm 33; Additional CSS 8. Do not duplicate these.
Canonical pages: 256 biologiai-vedelem; 258 galeria; 260 gyakran-ismetelt-kerdesek; 262 gyumolcsfak-metszese-es-vedelme; 264 idos-fak-megmentese-szolgaltatas; 266 kapcsolat; 268 referencia-videok; 270 rolam; 272 soveny-specialista. Page template `elementor_header_footer`.
Hello Additional CSS was not intentionally modified by F1/F2/F3. Last verified checkpoint: post8 255948 bytes, SHA256 `2618f40875d30cdbf468ef2f07715b265b26c6c9e695662c1b9758cee1066e06`, native revision307 byte-identical at that checkpoint.

Reusable F1 native V4 classes already available: `g-af-v-page`, `g-af-v-section`, `g-af-v-paper`, `g-af-v-inner`, `g-af-v-split`, `g-af-v-grid`, `g-af-v-card`, `g-af-v-copy`, `g-af-v-card-title`, `g-af-v-cta`, `g-af-v-button`, `g-af-v-small-heading`. Do not recreate/rename.

## Earlier completed packages - preserve, do not repeat
A1: page270/page272 section-tone fixes; visual parity open.
B: gallery258 36 featured + 44 masonry images; structural save/readback passed; final interaction/exact/editor QA open. Never repeat obsolete op_dd3ae07c6db44c60.
C: hedge272 21-slide proof carousel and 28-image masonry; partial QA open.
D: shared JS in `auhfc_settings_sitewide.footer`, marker `af-source-interactions-v001`; GitHub `build/source-interactions-v001.js`, commit `6710e707bbe4e4272ce6356c527c8511521de061`, SHA256 `c545a177861d1e811041b3444bda5a587de34aa32edee4060936514928fe1e66`.
E: about270/survivor264 media package; evidence `reports/subpages/about-survivor-source-parity-v001.json`, commit `188e1a3cb853750d103de17f64177ce9af4d3654`; do not rewrite from older cached payloads.

## Known acceptance blockers
Repository view in this run does not expose `source/`, `specs/acceptance.json`, `specs/behaviors.json`, full page specs or the referenced local measurement tools. No source ZIP is attached in this chat. Frozen source aggregate from earlier: `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`; do not replace it with a new live snapshot.
Live original `https://alakfamester.clicknest.hu/` is usable for diagnosis but is not a frozen final-reference proof. Opera provides diagnostic screenshots/accessibility trees; no connected Playwright/CDP flow for qualified screenshot pairs/overlays/diffs, computed styles, console/network or full animation timing. Container DNS cannot reach source/target/GitHub.
PIXEL_PASS = false. Open acceptance includes six viewport image comparisons, geometry/wrapping/page heights, actual fonts incl. ő/ű, asset/network/console errors, video click/keyboard behavior, animation timeline/mobile/reduced motion, menu/focus/scroll locks, editor reinitialization, optimized config, second engine, and mail-free form processing where supported. No SMTP or external test send.

## Budget
Last successfully reported WPVibe account value before the 429: 243/300 used, 57 remaining in the rolling 24-hour window. Exact current balance after the throttled calls is unknown; query it only after the target throttle is resolved. Keep minimum 10-call closing/restore reserve. Do not start another remote package until the F2 restore + verification fits comfortably inside the then-current balance.
