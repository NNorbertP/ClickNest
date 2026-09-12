# STATE - 2026-09-12, F2 RESTORED; F3 hero parity next

## Current work package and continuation
Target: https://alakfamester-wp.clicknest.hu/ ; repository NNorbertP/ClickNest, main, alakfamester/.

The failed F3 hero experiment has been rolled back. Page 268 `/referencia-videok/` is again byte-identical to server revision 324, the verified F2 state: `_elementor_data` 38989 bytes, SHA256 `c5c91f9922ad1a978ba48f7b239865951d0c12719d12705817584504b885a942`. Restoration was done with guarded supported content edits against exact pre/post snippets, followed by Elementor CSS regeneration. Frontend and Elementor editor were re-opened and verified. Evidence: `reports/subpages/reference-videos-f3-rollback-v001.json`, commit `17c5d7eafbc42e7db61bed094fcf2d454f783e04`.

Verified restore markers: native F2 Atomic Tabs root `af2c0230` present; experimental F3 art `af2c0307` absent; old `af-project-reviews` absent; all seven F1 YouTube identities present. Opera diagnostic screenshot again shows the stable F2 hero and reviews heading; the broken F3 plain/pink contact + oversized SVG rendering is gone. Elementor editor reopened with the correct page title.

Current quota immediately after restore verification: 264/300 used, 36 remaining in rolling 24h. Keep minimum 10-call reserve. The next F3 package may use at most the budget above that reserve and must be stopped before a risky remote write if its closeout no longer fits.

### Next automatically selected task: F3 clean hero parity
Page268 hero is stable but still incomplete versus the original: it lacks the exact animated `referencia-videok` illustration and complete source meta row (`7 referencia videó`, `A videó csak kattintásra indul`), and the source subcopy is the shortened F2 form. Restart only from the restored F2 tree. Before any write, reread D04 + actual target-proven hero pattern on an already working page, and map the proven target classes/structure to the inner-page variant. Use `af-hero-art` with `art=referencia-videok`; no static replacement. Do not reuse the failed experimental `g-af-src-*` styling approach. Reuse existing IDs for existing hero content; mint unique IDs only for genuinely new wrapper/art/meta elements. Save/read back/frontend/editor verify; animation lifecycle verification remains required.

The final page CTA still points to `/fooldal/#ajanlatkeres` in restored F2. Correct it to the mapped contact-page anchor only inside a verified later package (F3 if safely in scope, otherwise a small independent link package).

## Completed page268 packages - preserve
F1 preflight raw `_elementor_data`: 8947 bytes, SHA256 `fec3b94865400b50f39d2e33955233e637a2a0d713189b8998ee062b2f0a5563`. Original rollback: `backups/page-268-raw-pre-v001.json`.
F1 preserved all seven Video widget IDs + YouTube identity and restored correct grouping: featured `af2c0049/qJIcIt1a6Mk`; shaping `af2c000b/Qs5q1Dcl4aw`, `af2c004a/ww28lnsg8QY`, `af2c0048/mbA7iEkfHCE`; health `af2c0009/5mGcFuxc0JI`, `af2c000a/GLIrUif2eG8`, `af2c000c/c7JZBmKwTwM`. Source featured explanation, QA items, titles and featured CTA restored; lazy click-to-play overlays enabled. Evidence `reports/subpages/reference-videos-f1-v001.json`, commit `60248298f1bf8c78bd9a1d77a95880ca785a6189`.
F2 replaced page268 `af-project-reviews` with the D12 native Atomic Tabs pattern. Root `af2c0230`, 3 tabs/3 panels, image attachments 75/76/77; source review titles/full copy; save warnings=[]; frontend and editor readback passed. Evidence `reports/subpages/reference-videos-f2-reviews-v001.json`, commit `1e5c3a8f3a01bba1d5841fc238804c738e7d0fe8`.
Verified F2 rollback sources: local `/mnt/data/alakfamester/backups/page-268-after-f2-restore-v001.json` SHA256 `91c4d369cb0a5eb94a9158193eca7c990cc7f8dd719f895e926a2580f057f055`; prepared save body `/mnt/data/alakfamester/build/page-268-f3-rollback-to-f2-save-body.json` SHA256 `2ea649d288affd9ecadc6db26b06a26235494117b0be77834eda5d022c5a4b94`; server revision324 meta SHA256 `c5c91f9922ad1a978ba48f7b239865951d0c12719d12705817584504b885a942`.

Experimental F3 global classes may still exist globally but are not used by restored page268: `g-af-v-inner-heading`, `g-af-v-inner-art`, `g-af-src-hero`, `g-af-src-hero-inner`, `g-af-src-hero-container`, `g-af-src-hero-grid`, `g-af-src-hero-copy`, `g-af-src-eyebrow`, `g-af-src-hero-sub`, `g-af-src-hero-visual`. Do not delete until site-wide usage is checked. They are not an acceptance proof and must not be used as the F3 solution.

Reusable F1 native V4 classes already available: `g-af-v-page`, `g-af-v-section`, `g-af-v-paper`, `g-af-v-inner`, `g-af-v-split`, `g-af-v-grid`, `g-af-v-card`, `g-af-v-copy`, `g-af-v-card-title`, `g-af-v-cta`, `g-af-v-button`, `g-af-v-small-heading`. Do not recreate or rename them.

## Verified environment and preserved resources
WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4; active Hello Elementor 3.5.1; Elementor 4.2.4.
Preserve static homepage 56, page_for_posts=0; page 12; ElementsKit header 20 and footer 21; MetForm 33; Additional CSS 8. Do not duplicate these.
Canonical pages: 256 biologiai-vedelem; 258 galeria; 260 gyakran-ismetelt-kerdesek; 262 gyumolcsfak-metszese-es-vedelme; 264 idos-fak-megmentese-szolgaltatas; 266 kapcsolat; 268 referencia-videok; 270 rolam; 272 soveny-specialista. Page template `elementor_header_footer`.
Hello Additional CSS was not intentionally modified by F1/F2/F3. Last verified checkpoint: post8 255948 bytes, SHA256 `2618f40875d30cdbf468ef2f07715b265b26c6c9e695662c1b9758cee1066e06`, native revision307 byte-identical at that checkpoint.

## Earlier completed packages - preserve, do not repeat
A1: page270/page272 section-tone fixes; visual parity open.
B: gallery258 36 featured + 44 masonry images; structural save/readback passed; final interaction/exact/editor QA open. Never repeat obsolete op_dd3ae07c6db44c60.
C: hedge272 21-slide proof carousel and 28-image masonry; partial QA open.
D: shared JS in `auhfc_settings_sitewide.footer`, marker `af-source-interactions-v001`; GitHub `build/source-interactions-v001.js`, commit `6710e707bbe4e4272ce6356c527c8511521de061`, SHA256 `c545a177861d1e811041b3444bda5a587de34aa32edee4060936514928fe1e66`.
E: about270/survivor264 media package; evidence `reports/subpages/about-survivor-source-parity-v001.json`, commit `188e1a3cb853750d103de17f64177ce9af4d3654`; do not rewrite from older cached payloads.

## Known acceptance blockers
Repository view in this run does not expose `source/`, `specs/acceptance.json`, `specs/behaviors.json`, full page specs or referenced local measurement tools. No source ZIP is attached in this chat. Frozen source aggregate from earlier: `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`; do not replace it with a new live snapshot.
Live original `https://alakfamester.clicknest.hu/` is usable for diagnosis but is not a frozen final-reference proof. Opera provides diagnostic screenshots/accessibility trees; no connected Playwright/CDP flow for qualified screenshot pairs/overlays/diffs, computed styles, console/network or full animation timing. Container DNS cannot reach source/target/GitHub.
PIXEL_PASS = false. Open acceptance includes six viewport image comparisons, geometry/wrapping/page heights, actual fonts incl. ő/ű, asset/network/console errors, video click/keyboard behavior, animation timeline/mobile/reduced motion, menu/focus/scroll locks, editor reinitialization, optimized config, second engine, and mail-free form processing where supported. No SMTP or external test send.

## Rate-limit note
A temporary target-side HTTP 429 occurred during the failed F3 experiment. WPVibe identified likely Wordfence/host/Cloudflare rate limiting and recommends allowlisting requests with `X-WPVibe: 1` or User-Agent `WPVibe/1.0`. The block later cleared without reconnecting. WPVibe ChatGPT plugin permission is already `full_access`; a future 429 is target/network throttling, not a ChatGPT permission issue. Do not hammer retries if it recurs.
