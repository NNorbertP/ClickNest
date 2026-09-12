# STATE - 2026-09-12, F3 HERO REPAIR CLOSED STRUCTURALLY; ACCEPTANCE QA NEXT

## Current state and continuation
Target: https://alakfamester-wp.clicknest.hu/ ; repository NNorbertP/ClickNest, main, alakfamester/.

WPVibe is connected under `ncsnorbert+20260912-1@gmail.com`. Last exact service reading after F3 closeout: 49/300 used, 251 remaining in the rolling 24-hour window. Keep at least 10 calls for closeout/recovery.

Page 268 `/referencia-videok/` F3 is now structurally and visually repaired on desktop diagnostics. The original `referencia-videok` `af-hero-art` illustration is visibly painted again, full source hero copy/contact/CTA/meta content is present, Elementor editor reopens, F1 seven video identities remain, and F2 native Atomic Tabs remain. Final CTA now maps to `/kapcsolat/#ajanlatkeres`.

Exact current page268 `_elementor_data`: 45647 bytes, SHA256 `1f9cfaba55dc15fd6d6cb1e675e6e6c79f9b4f930a0e2e60cadd8a05b1919dc5`. Markers: art widget `af2c0345` present; native tabs `af2c0230` present; all seven F1 YouTube identities present. Experimental H1 class `g-af-v-inner-heading` is no longer referenced by page268.

Exact Hello Additional CSS post8 after F3: 259652 bytes, SHA256 `f659a3b805dc54c7e28e832a531b14e9854508f1671621df9a4fa525435b042d`; exactly one project start and one project end marker, project version `af-project:start v027`, package marker `af-project:videos-hero-v001` once start/end.

F3 root cause: the old generic `subpages-v001` selectors `[id^="af-sub-"][id$="-hero"]` and matching eyebrow/title/body selectors overrode the proven V4 hero tree with centered column layout. Page268 hero/eyebrow/title/body are now explicitly excluded from those legacy generic selectors. A scoped `videos-hero-v001` bridge at the end of the project block maps the already proven V4 structure to the source inner-hero geometry; no `g-af-src-*` experiment is used. The H1 was reduced to the proven `g-af-type-heading` class.

Evidence: `reports/subpages/reference-videos-f3-hero-v001.json`, commit `070db7aa6a3ad4d18fe8abfe7cb24c69be015fa0`.

### Current F3 hero identifiers - preserve
- root `af2c0002`, class `g-af-layout-hero`, id `af-sub-videos-hero`
- copy wrapper `af2c0330`, `g-af-layout-hero-copy`
- eyebrow `af2c0003`, `g-af-type-eyebrow`
- H1 `af2c0004`, `g-af-type-heading` only
- body `af2c0005`, `g-af-type-body`, full source subcopy
- contact pair `af2c0040`; children `af2c0331`..`af2c033a`, proven `g-af-contact-*`
- CTA row `af2c033b`; buttons `af2c033c` -> `#af-video-featured`, `af2c033d` -> `/galeria/`
- meta row `af2c033e`; items `af2c033f` and `af2c0342`; texts `7 referencia videó`, `A videó csak kattintásra indul`
- art wrapper `af2c0041`, `g-af-layout-hero-art`
- art widget `af2c0345`, `art=referencia-videok`, source a11y title/description and proven motion parameters
- final CTA `af2c0011` -> `https://alakfamester-wp.clicknest.hu/kapcsolat/#ajanlatkeres`

## Next automatically selected package: page268 acceptance QA and only measured fixes
Before any new write, re-read this STATE, D03/D04/D07 and CSS registry rows for hero/reviews/video behavior, then recheck page268/post8 hashes above. Do not rewrite if a manual change is present; merge it.

1. Capture/compare page268 source and target at available desktop/mobile views. Opera source/target desktop diagnostic now shows the same two-column hero concept and visible art, but target capture has admin bar, so it is not formal pixel evidence.
2. Verify hero animation lifecycle as far as available tooling allows: fresh load/entry, intermediate state, full-cycle behavior, mobile/reduced-motion and editor reinitialization. Do not claim unsupported timing proof.
3. Verify F2 tab behavior and F1 video click/keyboard semantics without starting external messaging. If browser connector cannot perform the interaction, record it open rather than infer it.
4. Inspect page268 section spacing/page height and remove only demonstrated obsolete fixed-height/overflow rules that actually match current DOM. Current page268 `_elementor_data` does not contain `af-s-referencia-videok-1/2/4/6/8/10`, so old fixed-height rules are technical debt but currently do not select this tree; do not remove broad shared rules without impact analysis.
5. Update evidence/STATE before selecting the next page/package. Formal `PIXEL_PASS` remains false until the frozen acceptance inputs and qualified measurement path are available.

## Completed page268 packages - preserve
F1 preflight raw `_elementor_data`: 8947 bytes, SHA256 `fec3b94865400b50f39d2e33955233e637a2a0d713189b8998ee062b2f0a5563`. Original rollback: `backups/page-268-raw-pre-v001.json`.
F1 preserved all seven Video widget IDs + YouTube identity and restored correct grouping: featured `af2c0049/qJIcIt1a6Mk`; shaping `af2c000b/Qs5q1Dcl4aw`, `af2c004a/ww28lnsg8QY`, `af2c0048/mbA7iEkfHCE`; health `af2c0009/5mGcFuxc0JI`, `af2c000a/GLIrUif2eG8`, `af2c000c/c7JZBmKwTwM`. Source featured explanation, QA items, titles and featured CTA restored; lazy click-to-play overlays enabled. Evidence `reports/subpages/reference-videos-f1-v001.json`, commit `60248298f1bf8c78bd9a1d77a95880ca785a6189`.
F2 replaced page268 `af-project-reviews` with D12 native Atomic Tabs. Root `af2c0230`, 3 tabs/3 panels, image attachments 75/76/77; source review titles/full copy; save warnings=[]; frontend and editor readback passed. Evidence `reports/subpages/reference-videos-f2-reviews-v001.json`, commit `1e5c3a8f3a01bba1d5841fc238804c738e7d0fe8`.
F3 rollback evidence from the failed earlier experiment remains `reports/subpages/reference-videos-f3-rollback-v001.json`, commit `17c5d7eafbc42e7db61bed094fcf2d454f783e04`.
F3 final structural/desktop diagnostic repair evidence is `reports/subpages/reference-videos-f3-hero-v001.json`, commit `070db7aa6a3ad4d18fe8abfe7cb24c69be015fa0`.

Experimental global classes from the failed F3 (`g-af-src-*`, `g-af-v-inner-art`, `g-af-v-inner-heading`) may still exist globally. Do not delete until site-wide usage is checked. Current page268 does not use `g-af-src-*`, `g-af-v-inner-art`, or `g-af-v-inner-heading`. Reusable F1 classes `g-af-v-page`, `g-af-v-section`, `g-af-v-paper`, `g-af-v-inner`, `g-af-v-split`, `g-af-v-grid`, `g-af-v-card`, `g-af-v-copy`, `g-af-v-card-title`, `g-af-v-cta`, `g-af-v-button`, `g-af-v-small-heading` remain valid; do not recreate/rename.

## Verified environment and preserved resources
WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4; active Hello Elementor 3.5.1; Elementor 4.2.4.
Preserve static homepage 56, page_for_posts=0; page12; ElementsKit header20/footer21; MetForm33; Additional CSS8. Do not duplicate these.
Canonical pages: 256 biologiai-vedelem; 258 galeria; 260 gyakran-ismetelt-kerdesek; 262 gyumolcsfak-metszese-es-vedelme; 264 idos-fak-megmentese-szolgaltatas; 266 kapcsolat; 268 referencia-videok; 270 rolam; 272 soveny-specialista. Page template `elementor_header_footer`.

## Earlier completed packages - preserve, do not repeat
A1: page270/page272 section-tone fixes; visual parity open.
B: gallery258 36 featured + 44 masonry images; structural save/readback passed; final interaction/exact/editor QA open. Never repeat obsolete op_dd3ae07c6db44c60.
C: hedge272 21-slide proof carousel and 28-image masonry; partial QA open.
D: shared JS in `auhfc_settings_sitewide.footer`, marker `af-source-interactions-v001`; GitHub `build/source-interactions-v001.js`, commit `6710e707bbe4e4272ce6356c527c8511521de061`, SHA256 `c545a177861d1e811041b3444bda5a587de34aa32edee4060936514928fe1e66`.
E: about270/survivor264 media package; evidence `reports/subpages/about-survivor-source-parity-v001.json`, commit `188e1a3cb853750d103de17f64177ce9af4d3654`; do not rewrite from older cached payloads.

## Known acceptance blockers
Repository view in this run still does not expose `source/`, `specs/acceptance.json`, `specs/behaviors.json`, full page specs or referenced local measurement tools. No source ZIP is attached in this chat. Frozen source aggregate from earlier: `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`; do not replace it with a new live snapshot.
Live original `https://alakfamester.clicknest.hu/` is usable for diagnosis but is not a frozen final-reference proof. Opera provides diagnostic screenshots/accessibility trees. A side-by-side 390px data-iframe comparison was prepared but browser actions block screenshots of the data URL, so no qualified mobile pair was produced. No connected Playwright/CDP flow is available for qualified overlays/diffs, computed styles, console/network or controlled animation timing. Container DNS cannot reach source/target/GitHub.
`PIXEL_PASS = false`. Open acceptance includes six viewport image comparisons, geometry/wrapping/page heights, actual fonts incl. ő/ű, asset/network/console errors, video click/keyboard behavior, animation timeline/mobile/reduced motion, menu/focus/scroll locks, editor reinitialization beyond open/readback, optimized config, second engine, and mail-free form processing where supported. No SMTP or external test send.

## Rate-limit note
An earlier target-side HTTP 429 cleared without reconnecting. If it recurs, treat it as likely Wordfence/host/Cloudflare throttling; WPVibe recommends allowlisting `X-WPVibe: 1` or User-Agent `WPVibe/1.0`. Current WPVibe connection is healthy; do not hammer retries.
