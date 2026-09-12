# STATE - 2026-09-12, F3 CLEAN PARTIAL; STOP REMOTE WRITES AT RESERVE

## Current state and mandatory continuation
Target: https://alakfamester-wp.clicknest.hu/ ; repository NNorbertP/ClickNest, main, alakfamester/.

Page 268 `/referencia-videok/` is currently a functional but NOT accepted F3-clean intermediate. It was rebuilt from the verified F2 state using the already proven target-side Atomic hero classes and the exact `af-hero-art` widget contract. The earlier broken `g-af-src-*` experiment is not used by this current hero. The current hero has source full subcopy, native phone/mail contacts, native CTA row, source meta row, and `af-hero-art` variant `referencia-videok`. Frontend readback confirms the art SVG and its accessible title/description are in the DOM; Opera accessibility also sees the image. However the current desktop screenshot does not visibly paint the art. Removing `g-af-v-inner-art` from the art container did not fix the visible paint. Therefore F3 is not closed and `PIXEL_PASS=false`.

Do not start another remote package now. Last exact WPVibe service value before the final F3 diagnostics was 285/300 used (15 remaining); several closing diagnostics followed. The exact current value was intentionally not re-queried so the 10-call closing/restore reserve is not consumed. Treat the remotely usable budget as RESERVE ONLY until the rolling window recovers.

Evidence: `reports/subpages/reference-videos-f3-clean-partial-v001.json`, commit `ea4f51661a20954c06fbbcfc05a56166e241f896`.

### Current F3-clean hero identifiers
- root existing `af2c0002`, target class `g-af-layout-hero`
- copy wrapper `af2c0330`, class `g-af-layout-hero-copy`
- existing eyebrow `af2c0003` -> `g-af-type-eyebrow`
- existing H1 `af2c0004` -> `g-af-type-heading` + `g-af-v-inner-heading`
- existing body `af2c0005` -> `g-af-type-body`, now full source subcopy
- existing `af2c0040` is now the native Atomic contact pair; children `af2c0331`..`af2c033a` use `g-af-contact-*`
- CTA row `af2c033b`, buttons `af2c033c` / `af2c033d`; `Kiemelt videó` -> `#af-video-featured`, `Fotógaléria` -> `/galeria/`
- meta row `af2c033e`, items `af2c033f` / `af2c0342`, text `7 referencia videó` and `A videó csak kattintásra indul`
- existing `af2c0041` is the art container, now only `g-af-layout-hero-art`
- art widget `af2c0345`, `art=referencia-videok`, source a11y title/description and proven motion parameters
- last supported content-edit reported current `_elementor_data` length 45668 bytes; exact final SHA was not re-read at reserve threshold

### F3 diagnostic facts already proven; do not repeat blindly
- page56 working hero uses the same target global classes and `af-hero-art` widget pattern.
- generated `global-268-frontend-desktop.css` does contain `.af-layout-hero{display:flex;flex-direction:row}`, `.af-layout-hero-copy`, `.af-layout-hero-art` and all contact/CTA/meta classes.
- Hello Additional CSS contains `.af-layout-hero-art>.elementor-widget-af-hero-art{width:100%;}` and `.af-original-art` sizing rules.
- current target frontend HTML contains the exact `referencia-videok` SVG and a11y role image.
- Opera screenshot still shows only the copy/contact/CTA/meta portion, not the illustration.
- F1 seven video sections/play controls and F2 native Atomic review tabs are still present in the accessibility tree after the clean F3 write.

### Resume sequence after quota recovery
1. Re-query exact WPVibe quota and target connection. Before any write, re-read page268 modified/hash/markers; merge any real manual change instead of overwriting.
2. Decide one small closeable action only: either diagnose/fix the art paint/lifecycle using the existing current F3 tree, or restore F2 with the already prepared supported Elementor save body. Do not stack more speculative class experiments.
3. Preferred rollback if needed: `/mnt/data/alakfamester/build/page-268-f3-rollback-to-f2-save-body.json`, SHA256 `2ea649d288affd9ecadc6db26b06a26235494117b0be77834eda5d022c5a4b94`; F2 local data `/mnt/data/alakfamester/backups/page-268-after-f2-restore-v001.json`, SHA256 `91c4d369cb0a5eb94a9158193eca7c990cc7f8dd719f895e926a2580f057f055`; server revision324 meta SHA `c5c91f9922ad1a978ba48f7b239865951d0c12719d12705817584504b885a942`. Restore through `/wpvibe/v1/elementor/save-page`, not direct SQL.
4. A raw-SQL revision-copy operation was requested once and returned an approval URL, but it was NOT approved/executed and should be allowed to expire. Do not use it: it bypasses Elementor save semantics.
5. After the eventual F3 save or F2 restore, verify frontend + editor + F1/F2 markers, then update this STATE and evidence before moving on.

The final page CTA below the video sections still points to `/fooldal/#ajanlatkeres` because the verified F2 state was the base and current clean F3 only changed the hero. Correct the final CTA to the mapped contact-page anchor in a later small verified package, not during a risky hero diagnosis.

## Completed page268 packages - preserve
F1 preflight raw `_elementor_data`: 8947 bytes, SHA256 `fec3b94865400b50f39d2e33955233e637a2a0d713189b8998ee062b2f0a5563`. Original rollback: `backups/page-268-raw-pre-v001.json`.
F1 preserved all seven Video widget IDs + YouTube identity and restored correct grouping: featured `af2c0049/qJIcIt1a6Mk`; shaping `af2c000b/Qs5q1Dcl4aw`, `af2c004a/ww28lnsg8QY`, `af2c0048/mbA7iEkfHCE`; health `af2c0009/5mGcFuxc0JI`, `af2c000a/GLIrUif2eG8`, `af2c000c/c7JZBmKwTwM`. Source featured explanation, QA items, titles and featured CTA restored; lazy click-to-play overlays enabled. Evidence `reports/subpages/reference-videos-f1-v001.json`, commit `60248298f1bf8c78bd9a1d77a95880ca785a6189`.
F2 replaced page268 `af-project-reviews` with the D12 native Atomic Tabs pattern. Root `af2c0230`, 3 tabs/3 panels, image attachments 75/76/77; source review titles/full copy; save warnings=[]; frontend and editor readback passed. Evidence `reports/subpages/reference-videos-f2-reviews-v001.json`, commit `1e5c3a8f3a01bba1d5841fc238804c738e7d0fe8`.
Verified F2 recovery evidence: `reports/subpages/reference-videos-f3-rollback-v001.json`, commit `17c5d7eafbc42e7db61bed094fcf2d454f783e04`.

Experimental global classes from the earlier failed F3 (`g-af-src-*`, `g-af-v-inner-art`) may still exist globally. Do not delete until site-wide usage is checked. Current clean F3 does not use `g-af-src-*`; `g-af-v-inner-art` was removed from current art container after it failed to make the art visible. `g-af-v-inner-heading` is still used on the current H1. Reusable F1 classes `g-af-v-page`, `g-af-v-section`, `g-af-v-paper`, `g-af-v-inner`, `g-af-v-split`, `g-af-v-grid`, `g-af-v-card`, `g-af-v-copy`, `g-af-v-card-title`, `g-af-v-cta`, `g-af-v-button`, `g-af-v-small-heading` remain valid; do not recreate/rename.

## Verified environment and preserved resources
WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4; active Hello Elementor 3.5.1; Elementor 4.2.4.
Preserve static homepage 56, page_for_posts=0; page 12; ElementsKit header20/footer21; MetForm33; Additional CSS8. Do not duplicate these.
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
A temporary target-side HTTP 429 occurred during an earlier F3 experiment. WPVibe identified likely Wordfence/host/Cloudflare rate limiting and recommends allowlisting requests with `X-WPVibe: 1` or User-Agent `WPVibe/1.0`. The block later cleared without reconnecting. WPVibe ChatGPT plugin permission is `full_access`; a future 429 is target/network throttling, not a ChatGPT permission issue. Do not hammer retries if it recurs.
