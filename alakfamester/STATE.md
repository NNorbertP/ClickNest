# STATE - 2026-09-14, PAGE264 ONLY; V004+V005 LIVE; V006+V007 READY/GATED; NEW WPVIBE ACCOUNT UNVERIFIED

## Current continuation point — Idős fák / page264 only

Target: `https://alakfamester-wp.clicknest.hu/idos-fak-megmentese-szolgaltatas/` (page264).  
Reference: `https://alakfamester.clicknest.hu/idos-fak-megmentese-szolgaltatas.html`.  
Repository: `NNorbertP/ClickNest`, branch `main`, folder `alakfamester/`.

**WordPress write scope:** only page264 may change. A Hello Additional CSS edit is permitted only when every effect selector is explicitly page264-scoped. Do not modify another page, global header/footer template, shared media, shared plugin setting, SMTP or send a real/external form test from this package.

Current planning/evidence:
- `reports/subpages/oldtrees-continuation-20260914-v007.json`
- `reports/subpages/oldtrees-visual-live-qa-20260914-v006.json`
- `reports/subpages/oldtrees-direct-live-compare-20260914-v005.json`
- `reports/subpages/oldtrees-form-runtime-reconciliation-20260914-v001.json`
- `build/oldtrees-post-v005-acceptance-plan-20260914-v001.json`
- `build/oldtrees-next-remote-window-20260914-v001.json`

## Live state to preserve

Page264 visual **v004 and v005 are already live** in Hello Additional CSS.

Last verified:
- `_elementor_data`: **48874 B**, SHA256 **`09f661e095714c1b3149c40406d7f31f04887c49a392f59c7c41b11fee3a788a`**, JSON valid;
- v004 marker inserted/read back once;
- post-v004 Additional CSS **611030 B**, SHA256 **`87fb6f275f9550dfcb406ac855b1287f4cf4dbd15da226840e6d2d8c28108bb6`**;
- v005 marker inserted/read back once; v005 write returned **611423 B**;
- full post-v005 CSS SHA intentionally not spent because D11 reserve was preserved;
- page264 Elementor data remained unchanged.

v004 proved source-like warning/growth icons and X/check leaf bullets. v005 made the beige/sage comparison surfaces and stretch rules win. Do **not** redeploy v001-v005 visual packages or older semantic packages.

## Two proven remaining page264-local visual deltas — prepared, NOT deployed

### v006 — request contact foreground

Fresh same-browser 1640×920 evidence proves target green request-contact label/value text is dark while source is white. The panel alignment, compact clock and joined form panel are already much closer and must be preserved.

Candidate: `build/oldtrees-visual-v006-contact-text-cascade.css`.  
QA: `reports/subpages/oldtrees-visual-v006-contact-text-static-qa-20260914-v001.json`.

Scope/effect:
- `body.page-id-264 #ajanlatkeres .elementor-element-af2a0054` only;
- three `color` declarations only;
- button/strong `#FFF !important`, label `rgba(255,255,255,.9) !important`;
- no layout/background/spacing/DOM/copy/MetForm/other-page/header/footer change.

### v007 — comparison equal-column grid cascade

Fresh post-v005 same-browser evidence proves source has two equal desktop comparison columns while target left card remains wider, right card narrower, with extra positive-card text wrapping. v004 already declares the correct 1fr/1fr + 24px contract but it loses in the live cascade.

Candidate: `build/oldtrees-visual-v007-comparison-grid-cascade.css`.  
QA: `reports/subpages/oldtrees-visual-v007-comparison-grid-static-qa-20260914-v001.json`.

Scope/effect:
- `body.page-id-264 .elementor-element-af2a0045` only;
- makes display/grid-template/gap/stretch and card width constraints win with `!important`;
- <=900px remains one column;
- preserves v005 surfaces, icons, bullets, copy, DOM, form and other pages.

### One-write option if BOTH still fail

Bundle: `build/oldtrees-visual-v006-v007-single-write-bundle.css`.  
QA: `reports/subpages/oldtrees-visual-v006-v007-single-write-static-qa-20260914-v001.json`.

Use the bundle **only** if fresh preflight + fresh same-browser check proves both failures still reproduce. If only one fails, deploy only that standalone block. If neither fails, write nothing.

Required preflight for any visual write:
- verify +5 account/site/quota and preserve D11 10-call reserve;
- fresh page264 saved-data hash/JSON reconciled;
- fresh post8 marker inventory: `af-project:end=1`, v004=1, v005=1, and selected new marker(s)=0;
- no newer live rule already fixes the selected failure;
- one guarded server-side match-once insertion only;
- any HTTP 429 write result is UNKNOWN until marker/hash readback; never blind-retry.

Postwrite:
- read back marker(s), unique `af-project:end`, unchanged page264 hash/JSON;
- same-browser targeted capture must prove the selected defect closed with no v005/form geometry regression;
- do not cache-purge unless fresh render is demonstrably stale.

## WPVibe account handoff

Requested WPVibe identity was verified as **`ncsnorbert+20260914-5@gmail.com`**, email verified. `connect_site` returned a one-click authorization URL, but WPVibe became unavailable before `list_sites` / `site_info` could confirm site connection or rolling quota.

Therefore:
- current `-5` site connection is **not confirmed**;
- exact current quota is **unknown**;
- do not reuse historical `-4` counters;
- verify identity + site + quota first when WPVibe returns;
- keep **10 calls** for D11 closeout/recovery.

No WordPress write was made through the unavailable `-5` connection in this continuation.

## Existing page264 content/runtime to preserve

Runtime evidence: `reports/subpages/oldtrees-runtime-live-qa-20260914-v004.json`, `reports/subpages/oldtrees-runtime-ownership-static-qa-20260914-v001.json`, `build/oldtrees-semantic-runtime-v003.php`.

Preserve:
- ID33 page guard `is_page(264)` and its semantic fixes;
- exact three review tab names and source-equivalent previous/next controls;
- numbered duplicate review dots absent from AX/focus while pointer behavior remains;
- form accessible name/description, service group labelling, Település describedby;
- tiszafa initial value 50, native 0..100 step1 range;
- hero `af2a0052` exact title/description;
- seven-chip problem grid `af2a0007` and source SVG geometry;
- exact comparison copy/caveat;
- inline MetForm33 section and visible 24-hour reply;
- current page264 IDs/order/data baseline.

Do not add duplicate review/slider/carousel JS without a stable failing interaction proof.

## Shared MetForm33 — solved items must not be rebuilt

`reports/home/metform33-source-parity-v001.json` proves:
- 3–5 photo server validation, 8 MB/file, active ID5, route-scoped to Form33 endpoint;
- `uzenet` effective 5 rows via active ID6, one guarded Form33-only MutationObserver;
- success state configured/read back;
- notifications/webhooks disabled, local entries enabled;
- no SMTP or external submission.

Do not add another validator, rows helper or success-state rewrite.

Only form validation proof still open: D05 requires service/topic radio submission-time mandatory enforcement. Existing repo evidence does **not** explicitly prove this property; inspect fresh Form33 schema/runtime read-only first and change nothing if already correct.

## Direct acceptance already PASS

`reports/subpages/oldtrees-direct-live-compare-20260914-v005.json` proves:
- review AX names/buttons exact source match and numbered dots absent;
- tiszafa slider source/target accessible name and initial value 50 match;
- Nordmann static AX controls prev/next + dots 1–6 match;
- reviewed named page regions match source names/order.

These are not reasons for more static/semantic writes.

## Remaining QA after/around v006/v007

Follow `build/oldtrees-next-remote-window-20260914-v001.json` and `build/oldtrees-post-v005-acceptance-plan-20260914-v001.json`.

Visual:
- after v007 or if a newer rule already fixes it, prove equal desktop comparison columns/source-like wrapping and preserve beige/sage surfaces/icons/bullets;
- after v006 or if already fixed, prove white request-contact foreground and unchanged panel/button geometry;
- hero target copy begins lower in the existing 1640×920 comparison, but root cause is unproven: **no hero padding/margin patch without measured geometry + computed-style owner/cascade proof**;
- floating contact dock is visually nearly empty/clipped while AX content exists. Do not recreate markup/runtime. This page264 task must not deploy a global dock fix; any future correction from this task must first prove exact cascade ownership and be page264-scoped;
- `PIXEL_PASS=false` until deterministic same-browser exact viewport/DPR/zoom screenshot pair + overlay + diff exists.

Interaction:
- reviews Arrow/Home/End;
- tiszafa pointer + keyboard;
- Nordmann ~4000 ms normal autoplay, ArrowLeft/Right, swipe, hover/focus pause/resume, reduced-motion stop/re-evaluation.

## Tooling / memory constraints

Opera Browser Connector is disconnected. Only the two existing project tabs were reused; **zero new/replacement tabs** were opened. When stable again, use at most one source + one target tab and reuse them; stop on instability instead of tab fan-out.

Local Chromium exists but this runtime DNS cannot resolve the Clicknest hosts. Generic web fetch/search also cannot currently fetch these pages. Thus no current live QA/write gate is available in this conversation.

`specs/acceptance.json` and `specs/behaviors.json` are absent on `main`; do not invent them.

## Current status

**Elkészült:** page264 content/semantics; v004+v005 live; shared Form33 photo-count/textarea/success reconciled; v006 color microfix prepared; v007 comparison-grid microfix prepared; v006+v007 single-write bundle and exact next-window plan prepared.  
**Ellenőrzött:** historical live hash; v004/v005 markers; v004 icons/bullets; final review AX; tiszafa initial AX; Nordmann static AX; v006/v007 static scopes; shared Form33 helpers/settings.  
**Nyitott:** fresh +5 connection/quota/hash/marker preflight; conditional v006/v007 live deployment/readback; postwrite targeted screenshots; hero root-cause proof; interaction acceptance; service-radio required proof; page264-scoped dock diagnosis; deterministic pixel matrix.  
**Következő művelet:** verify WPVibe +5 connection/quota → hash/marker preflight → fresh two-delta visual gate → at most one selected CSS write → mandatory readback → targeted QA.  
**Ismert jelenlegi keret:** **unknown** for `ncsnorbert+20260914-5@gmail.com`; estimated selected remote package ~5–8 calls plus the mandatory 10-call reserve, but actual counter must be read first.
