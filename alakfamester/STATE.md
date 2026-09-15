# STATE - 2026-09-15, PAGE264 IMPLEMENTATION CLOSED; V004+V005+V006+V007 LIVE; PROOF-ONLY QA REMAINS

## Latest live closeout checkpoint — 2026-09-15, ncsnorbert+20260914-5

This checkpoint supersedes the immediately following **Opera-blocked/no-write** checkpoint for current planning, while preserving that checkpoint and all older history verbatim below.

- **Current user WordPress scope is still page264 only:** `https://alakfamester-wp.clicknest.hu/idos-fak-megmentese-szolgaltatas/`. This closeout does **not** authorize writes to another page, global header/footer, shared media, shared Form33, shared plugin settings, SMTP, notification/webhook or external form submission.
- Current live evidence: `reports/subpages/oldtrees-live-closeout-20260915-v001.json`; current continuation: `reports/subpages/oldtrees-continuation-20260915-v014.json`.
- WPVibe identity/site verified: `ncsnorbert+20260914-5@gmail.com` → `https://alakfamester-wp.clicknest.hu`. Latest exact quota check after the implementation/readback window: **99/300 used, 201 remaining**. D11's 10-call reserve remains preserved.
- Fresh prewrite page264 `_elementor_data` exactly matched the accepted baseline: **48874 B**, SHA256 **`09f661e095714c1b3149c40406d7f31f04887c49a392f59c7c41b11fee3a788a`**, JSON valid.
- Fresh prewrite Additional CSS post8 was **612379 B**, SHA256 **`e3980469873ad39c0841dd2768e6974f0b209e94c33815825d2109b7a63f9396`**, with `af-project:end=1`, v004=1, v005=1, v006=0, v007=0.
- The synchronized same-browser gate reproduced **both** frozen page264-local failures: v006 request-contact label/value foreground was dark on target vs white on source; v007 target desktop comparison columns were unequal and caused extra wrapping vs equal source columns.
- Per `build/oldtrees-visual-deploy-manifest-20260915-v001.json`, exactly one repository artifact was selected: `build/oldtrees-visual-v006-v007-single-write-bundle.css`, blob SHA **`a962b85dff18b902f580c0ce42d036b4e1ac1ef3`**. It was inserted once through guarded match-once `content/edit` immediately before the unique `af-project:end`. Every effect selector remains explicitly rooted at `body.page-id-264`.
- Postwrite Additional CSS is **614248 B**, SHA256 **`c67ebf2f47beb5f73ff63209ae824c349c4ae116c4929b998669c59d4b1558ce`**. Marker readback: `af-project:end=1`, v006 start/end=1/1, v007 start/end=1/1. No duplicate/partial marker exists.
- Postwrite page264 `_elementor_data` is still **48874 B**, SHA256 **`09f661e095714c1b3149c40406d7f31f04887c49a392f59c7c41b11fee3a788a`**, JSON valid; the visual closeout did not alter Elementor data.
- Fresh source/target regression captures close both write-capable defects: **v006 PASS** (white request-contact label/value foreground; accepted form/button geometry preserved) and **v007 PASS** (equal desktop comparison columns and source-like wrapping; accepted beige/sage surfaces, icons and bullets preserved).
- `PIXEL_PASS` remains **false** because no deterministic exact-state viewport/DPR/zoom overlay+diff harness was run. This does not reopen v006/v007 as implementation failures.
- No unresolved 429/5xx mutation outcome exists. One WordPress content write occurred in this closeout; no other page write, shared Form33 write, snippet write, SMTP action or external submission occurred.
- The scope-release criteria's **write-capable page264 blockers are closed**. Remaining items are proof-only/formal acceptance: dynamic native Form33 required/no-delivery interaction, inner-field computed-style measurement if a defect is reproduced, review/tiszafa/Nordmann/FAQ action proof, hero exact owner/cascade proof, dock actual-owner/page264-local-exception gate, and deterministic six-view overlay/diff.

**Elkészült:** v006+v007 live page264-only cascade closeout; exact repository bundle deployed once; server-side marker/hash/data readback; targeted source/target regression checks; closeout evidence and continuation v014 updated.  
**Ellenőrzött:** page264 Elementor baseline unchanged; v004/v005 preserved; v006/v007 each exactly once; v006/v007 targeted visual PASS; no known content/main-media gap reopened; D11 reserve preserved.  
**Nyitott:** proof-only/formal acceptance listed above; no fresh reproduced page264-specific implementation defect currently justifies another write.  
**Következő művelet:** do not perform another page264 implementation write unless fresh evidence proves a new defect. Keep proof-only items open until suitable action-capable/deterministic tooling is available. Do not start another WordPress page under this request without an explicit new scope/handoff.  
**Release:** page264 **implementation scope is RELEASED/CLOSED**; proof-only QA remains open and `PIXEL_PASS=false`.

---

# Previous checkpoints retained verbatim below

# STATE - 2026-09-15, PAGE264 ONLY; LIVE PREFLIGHT PASS; VISUAL GATE BLOCKED BY OPERA; NO WORDPRESS WRITE

## Latest continuation checkpoint — 2026-09-15, ncsnorbert+20260914-5

This checkpoint supersedes the stale WPVibe/Opera availability notes below while preserving all earlier acceptance evidence and scope rules.

- **Hard WordPress scope remains page264 only:** `https://alakfamester-wp.clicknest.hu/idos-fak-megmentese-szolgaltatas/`. No other page, global header/footer, shared media, shared Form33 settings, SMTP, notification/webhook or external submission was modified.
- WPVibe identity/site are now live-verified: account `ncsnorbert+20260914-5@gmail.com`, exactly one connected site `https://alakfamester-wp.clicknest.hu`, Hello Elementor 3.5.1 active. Latest quota check in this continuation: **89/300 used, 211 remaining**; keep the D11 10-call closeout/recovery reserve.
- Fresh page264 preflight exactly matches the accepted saved-data baseline: `_elementor_data` **48874 B**, SHA256 **`09f661e095714c1b3149c40406d7f31f04887c49a392f59c7c41b11fee3a788a`**, JSON valid.
- Fresh Hello Additional CSS post8: **612379 B**, SHA256 **`e3980469873ad39c0841dd2768e6974f0b209e94c33815825d2109b7a63f9396`**; marker counts `af-project:end=1`, v004=1, v005=1, v006=0, v007=0. The size increase after historical v005 is reconciled: a newer homepage-only marked block `af-project:header-home-services-inactive-v001` sits between v005 and `af-project:end`; it must be preserved and is not a page264 fix.
- Repository identity for v006/v007/bundle was re-read and still matches `build/oldtrees-visual-deploy-manifest-20260915-v001.json`. No v006/v007 CSS was deployed.
- Opera was reduced toward one source + one target page264 tab. The source screenshot succeeded, but the target screenshot call disconnected the Opera connector. Per `build/oldtrees-next-remote-window-20260915-v005.json`, the synchronized two-tab visual gate therefore remains **BLOCKED/HOLD**; no replacement-tab fan-out and no screenshot-driven CSS write was attempted.
- Shared Form33 fresh saved-data baseline is unchanged: **6068 B**, SHA256 **`ea091a697d1d4589998315fc24c0818479f5229a2fb6d64d99ab79b6d77518b3`**, JSON valid; `af04000d/#af-form-direct-call` exactly once and `#af-form-service` exactly once.
- Current service radio is widget `af040007` / `mf-radio`, input name `kapcsolat-tema`, `mf_input_required=yes`, exact six options `uj-alakfa`, `apolas`, `tulnott`, `soveny`, `egeszseg`, `gyumolcs`, with native error text `Válasszon egy lehetőséget.`. Fresh rendered widget markup calls MetForm `activateValidation(... required:true ...)` and exposes the matching error component. This confirms native required wiring; no custom service validator is justified without a failing non-delivery interaction proof.
- Current snippets remain active/read-only checked: ID5 SHA256 `67c32bf9b9a3baab3e6b4eb120df943b6cc63cd9564ced0f14d5bd75fea0c5ac`, ID6 SHA256 `7a39d56d3ffb712928df5063f70cf7b8912585a891acbd2da057f59a4d5562ca`, ID33 SHA256 `810e62e37b30b553dc96212783954e808e9bf251eb5c72ab8c509beb4957b22f`; ID33 still has the `is_page(264)` guard. No snippet write occurred.
- Fresh page264 data keeps stale `/fooldal/#ajanlatkeres` at zero; exact saved markup still contains `/kapcsolat/#kiszallas`, `/biologiai-vedelem/`, `tel:+36305394820` and `mailto:kreativ@alakfa-mester.hu`. No route write occurred.
- WPVibe's `db query` wrapper reported automatic Elementor/object-cache purge messages even for these read-only SQL inspections. No intentional content/settings/cache write was requested; do not treat those tool-side purge notices as a completed page264 change.

**Elkészült ebben a munkacsomagban:** +5 account/site/quota verification; repo/artifact identity gate; compact page264/CSS marker preflight; reconciliation of post-v005 CSS growth; Form33 identity/required-setting/native-render wiring readback; ID5/ID6/ID33 readback; route invariant readback.  
**Ellenőrzött:** page264 saved-data baseline unchanged; v004/v005 present once; v006/v007 absent; Form33 baseline/direct-call unchanged; native required configuration present; no stale homepage request route in page264; canonical trip-fee/bio/tel/mail targets remain in saved content.  
**Nyitott:** trustworthy synchronized source/target v006/v007 visual gate and conditional at-most-one CSS deployment/readback; dynamic native radio-required no-delivery interaction proof; inner-field computed-style proof; review/tiszafa/Nordmann/FAQ interactions; hero root-cause; dock owner; six-view responsive/pixel matrix.  
**Következő művelet:** when Opera is stable, reuse exactly one source + one target page264 tab and run the v006/v007 visual decision gate. If both/one/neither fail, follow the frozen decision matrix; at most one exact repository artifact write, followed immediately by marker/hash readback and targeted regression capture.  
**Release:** page264 remains **NOT RELEASED**; visual gate/tool availability is not completion evidence.

---

# Previous checkpoint retained verbatim below

# STATE - 2026-09-15, PAGE264 ONLY; V004+V005 LIVE; V006+V007 READY/GATED; LIVE GATE UNAVAILABLE

## Current continuation point — Idős fák / page264 only

Target: `https://alakfamester-wp.clicknest.hu/idos-fak-megmentese-szolgaltatas/` (page264).  
Reference: `https://alakfamester.clicknest.hu/idos-fak-megmentese-szolgaltatas.html`.  
Repository: `NNorbertP/ClickNest`, branch `main`, folder `alakfamester/`.

**WordPress write scope:** only page264 may change. A Hello Additional CSS edit is permitted only when every effect selector is explicitly page264-scoped. Do not modify another page, global header/footer template, shared media, shared plugin setting, SMTP or send a real/external form test from this package.

Current planning/evidence:
- `reports/subpages/oldtrees-acceptance-ledger-20260914-v001.json` — authoritative consolidated page264 acceptance ledger; use this first to avoid reopening already-passed work;
- `reports/subpages/oldtrees-content-coverage-reconciliation-20260914-v001.json` — current copy/media reconciliation; no known page264 content/main-media gap;
- `reports/subpages/oldtrees-semantic-coverage-reconciliation-20260914-v001.json` — supersedes the stale 29/38 heading and 1/11 region audit snapshot;
- `reports/subpages/oldtrees-visual-coverage-reconciliation-20260914-v001.json` — reconciles every original visual-audit defect; only v006/v007 remain reproduced page-local failures;
- `reports/subpages/oldtrees-evidence-supersedence-20260915-v005.json` — current authoritative/stale/do-not-replay map; aligned to continuation v013, remote v005 and source-exact interaction v003;
- `reports/subpages/oldtrees-continuation-20260915-v013.json` — current continuation checkpoint; supersedes v012 for resume;
- `reports/subpages/oldtrees-source-carousel-runtime-reconciliation-20260915-v001.json` — current exact source carousel contract, including class-derived manual mode and the broken-slide timer caveat;
- `reports/subpages/oldtrees-source-runtime-reconciliation-20260915-v001.json` — supplemental source-runtime audit for page264 acceptance;
- `reports/subpages/oldtrees-css-cascade-ownership-20260915-v001.json` — exact artifact-aligned v006/v007 ownership proof; v007 has no invented flex/box-sizing claim;
- `reports/subpages/oldtrees-visual-v006-v007-parser-qa-20260915-v001.json` — parser/scope QA: v006/v007/bundle parse cleanly and every effect selector is page264-scoped;
- `reports/subpages/oldtrees-section-coverage-20260915-v001.json` — classifies every completed page264 section as PASS / proven failure / diagnostic / proof-only;
- `reports/subpages/oldtrees-link-route-ledger-20260915-v001.json` — exact page-local CTA/related/tel/mail route invariants, including `/biologiai-vedelem/`;
- `reports/subpages/oldtrees-form33-shared-baseline-reconciliation-20260915-v001.json` — reconciles the shared Form33 5568→6068 saved-data timeline and the accepted `#af-form-direct-call` dependency;
- `reports/subpages/oldtrees-visual-live-qa-20260914-v006.json`;
- `reports/subpages/oldtrees-direct-live-compare-20260914-v005.json`;
- `reports/subpages/oldtrees-form-runtime-reconciliation-20260914-v001.json`;
- `build/oldtrees-visual-deploy-manifest-20260915-v001.json` — parser-backed exact v006/v007/bundle blob SHAs, markers and both/one/neither deployment decision;
- `build/oldtrees-interaction-acceptance-20260915-v003.json` — current no-write review/tiszafa/Nordmann/FAQ oracle; v002 is superseded for Nordmann timing/manual/drop semantics;
- `build/oldtrees-review-dot-pointer-diagnostic-20260915-v001.json` — source visual-dot pointer behavior proof gate; current target pointer behavior is not changed without source observation;
- `build/oldtrees-hero-geometry-diagnostic-20260914-v001.json` — exact no-write owner/cascade gate for the unproven hero offset;
- `build/oldtrees-responsive-acceptance-matrix-20260914-v001.json` — six-view responsive acceptance expectations from proven page264 breakpoint contracts;
- `build/oldtrees-form-required-validation-plan-20260915-v001.json` — native-required-first D05 gate with fresh shared Form33 identity + `#af-form-direct-call` preservation;
- `build/oldtrees-form-field-visual-diagnostic-20260915-v001.json` — inner MetForm field visual measurement gate; no current inner-field defect proven;
- `build/floating-contact-dock-diagnostic-plan-20260915-v003.json` — corrected dock provenance and page264-only owner/cascade gate; no global write authorization;
- `build/oldtrees-next-remote-window-20260915-v005.json` — current low-call live plan; supersedes v004 for planning;
- `build/oldtrees-scope-release-gate-20260915-v001.json` — page264 remains NOT RELEASED until fresh v006/v007 implementation closeout; tool unavailability is not release evidence.

`build/oldtrees-post-v005-acceptance-plan-20260914-v001.json` is historical measurement context only. It predates v007 and the current both/one/neither deployment decision and must not be used as the execution plan.

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

## Content/media reconciliation — current PASS

`reports/subpages/oldtrees-content-coverage-reconciliation-20260914-v001.json` reconciles the historical open list. Current evidence closes the old hero-art, inline-form, missing problem-chip and simplified comparison-copy gaps. The page-local form copy/CTA route, visible 24-hour reply and removal of the source-absent `Az első alkalom` eyebrow are preserved. Fresh media reconciliation recorded **5 source main images / 5 target main images** with observed media roles matching.

Known page264 content/main-media gap: **none**. Do not reopen old content packages merely because historical reports still contain open arrays.

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
- makes `display`, `grid-template-columns`, `gap`, `align-items` and card `width/max-width/min-width` constraints win with `!important`;
- it does **not** set `flex` or `box-sizing`;
- <=900px remains one column;
- preserves v005 surfaces, icons, bullets, copy, DOM, form and other pages.

### One-write option if BOTH still fail

Bundle: `build/oldtrees-visual-v006-v007-single-write-bundle.css`.  
QA: `reports/subpages/oldtrees-visual-v006-v007-single-write-static-qa-20260914-v001.json`.  
Parser/scope QA: `reports/subpages/oldtrees-visual-v006-v007-parser-qa-20260915-v001.json`.  
Identity/marker manifest: `build/oldtrees-visual-deploy-manifest-20260915-v001.json`.

Parser QA result:
- v006: **0 parse error / 3 selector / 3 declaration**;
- v007: **0 parse error / 3 selector / 8 declaration**;
- combined bundle: **0 parse error / 6 selector / 11 declaration**;
- every effect selector begins with `body.page-id-264`;
- the bundle declaration sequence is exactly v006 followed by v007, with each start/end marker exactly once.

Use the bundle **only** if fresh preflight + fresh same-browser check proves both failures still reproduce. If only one fails, deploy only that standalone block. If neither fails, write nothing. Parser PASS is not deployment authorization.

Required preflight for any visual write:
- verify +5 account/site/quota and preserve D11 10-call reserve;
- fresh page264 saved-data hash/JSON reconciled;
- fresh post8 marker inventory: `af-project:end=1`, v004=1, v005=1, and selected new marker(s)=0;
- re-read current repository artifact/manifest identity; do not manually reconstruct the CSS at write time;
- no newer live rule already fixes the selected failure;
- one guarded server-side match-once insertion only;
- any HTTP 429/5xx write result is UNKNOWN until marker/hash readback; never blind-retry.

Postwrite:
- read back marker(s), unique `af-project:end`, unchanged page264 hash/JSON;
- same-browser targeted capture must prove the selected defect closed with no v005/form geometry regression;
- do not cache-purge unless fresh render is demonstrably stale.

## Visual audit reconciliation — do not reopen PASS items

The original broad visual audit is now fully reconciled in `oldtrees-visual-coverage-reconciliation-20260914-v001.json`.

Live PASS/currently non-failing:
- beige negative / sage positive comparison surfaces;
- warning/growth comparison icons;
- X/check leaf list markers;
- equal card heights;
- centered request heading;
- compact 18×18 reply clock;
- joined white intro + MetForm panel;
- broad request contact-button geometry is no longer a reproduced failure.

`reports/subpages/oldtrees-css-cascade-ownership-20260915-v001.json` additionally proves that v005 owns only card stretch/height and the two comparison backgrounds. v006 touches only contact foreground colors; exact v007 touches only comparison grid plus `width/max-width/min-width`. Neither prepared microfix overwrites an accepted v005 property.

The problem grid is a stronger static PASS than a screenshot-only assumption: `reports/subpages/oldtrees-problem-grid-v001.json` records a successful live readback with seven source labels, seven source SVG geometries and the source-resolved **4 columns desktop → 2 columns <=960 → 1 column <=760**, 16px gap, 48px top margin, 16px chip padding, 24px radius and 22px icon contract.

Only reproduced local failures are **v006 contact foreground** and **v007 equal desktop comparison columns**. Responsive/formal captures remain acceptance work, not a reason to invent another CSS layer.

At <=560px the current repo contract says intrinsic contact-button width, reduced right padding and `.92rem` strong text; at <=400px width becomes 100%. The original source selector scope for the `.92rem` rule is not independently recoverable from Git, so do not invent a mail-only/general correction until fresh mobile source/target computed-style or screenshot evidence proves a mismatch.

## WPVibe account handoff

Requested WPVibe identity was verified as **`ncsnorbert+20260914-5@gmail.com`**, email verified. `connect_site` returned a one-click authorization URL, but WPVibe became unavailable before `list_sites` / `site_info` could confirm site connection or rolling quota.

In the latest 2026-09-15 continuation, the first WPVibe attempt returned the tool as disabled. No further WPVibe call was made in that continuation.

Therefore:
- current `-5` site connection is **not confirmed**;
- exact current quota is **unknown**;
- do not reuse historical `-4` counters;
- verify identity + site + quota first when WPVibe returns;
- keep **10 calls** for D11 closeout/recovery.

No WordPress write was made through the unavailable `-5` connection in the latest continuation.

## Existing page264 content/runtime to preserve

Runtime evidence: `reports/subpages/oldtrees-runtime-live-qa-20260914-v004.json`, `reports/subpages/oldtrees-runtime-ownership-static-qa-20260914-v001.json`, `build/oldtrees-semantic-runtime-v003.php`, `build/source-interactions-v001.js`, `reports/subpages/oldtrees-source-carousel-runtime-reconciliation-20260915-v001.json`.

Preserve:
- ID33 page guard `is_page(264)` and its semantic fixes;
- exact three review tab names and source-equivalent previous/next controls;
- numbered duplicate review dots absent from AX/focus while their target pointer behavior remains unchanged pending source pointer proof;
- form accessible name/description, service group labelling, Település describedby;
- shared Form33 `#af-form-direct-call` because ID33 uses it as the form `aria-describedby` target;
- tiszafa initial value 50, native 0..100 step1 range;
- hero `af2a0052` exact title/description;
- seven-chip problem grid `af2a0007` and source SVG geometry;
- exact comparison copy/caveat;
- inline MetForm33 section and visible 24-hour reply;
- current page264 IDs/order/data baseline.

Do not add duplicate review/slider/carousel/FAQ JS without a stable failing interaction proof. The exact recovered carousel contract is:
- `manual` is initialized once from `c.classList.contains('carousel--manual')` and is never changed by user navigation;
- on a non-manual instance, prev/next, dot, ArrowLeft/Right and qualifying swipe call `go(...)` followed by `start()`, so the ~4000ms timer is reset/restarted unless the current `start()` guards block it;
- on a `carousel--manual` instance autoplay is disabled from initialization;
- hover/focus pause conditions are not tracked with independent flags, so compound exit-order behavior must match the source even if it is surprising;
- `drop()` removes/reindexes/clamps/re-renders a broken slide state but itself calls neither `stop()` nor `start()`. The `<2 slides` check belongs to `start()` when `start()` runs, so do not infer immediate timer cancellation after runtime removal from static code.

The old permanent manual-latch claim in v002/v012 is **superseded and must never be used as write authority**. The old Nordmann source `group` at slide 2/6 versus target `listItem` at slide 1/6 snapshot was also unsynchronized. It is neither PASS nor write authority. The current interaction v003 first puts source and target on the same slide, pauses motion, compares current/noncurrent AX roles and `aria-hidden`, and compares six caption/alt entries in DOM order. Only a synchronized surviving role delta is a real semantic failure.

## Semantic audit reconciliation — current static/AX PASS

`reports/subpages/oldtrees-semantic-coverage-reconciliation-20260914-v001.json` supersedes the early semantic audit snapshot:
- headings: old 29 target → later live **38 source / 38 target**, matching name sets;
- named regions: old 1 target → later live **11 source / 11 target**, exact ordered names;
- reviews: exact tablist/tab names and source-equivalent previous/next; numbered duplicate dots absent from final page264 AX/focus;
- form semantics: accessible name/description, group labelling and Település help relationship are implemented;
- tiszafa initial static state and Nordmann static AX controls pass.

Do not replay `oldtrees-semantic-parity-20260914-v001.json`, older ID33 runtime versions, or create a second semantic owner. Interaction proof remains separate.

### Review visual-dot pointer behavior — proof gate, not current regression

`build/oldtrees-review-dot-pointer-diagnostic-20260915-v001.json` isolates one remaining exact-behavior question. Source AX does not expose numbered dot controls and recovered source markup describes visual dots as spans, but span markup alone does **not** prove pointer inertness because JavaScript may attach click handlers. Target ID14 creates pointer-active `.af-review-source-dot` buttons; page264 ID33 only removes them from focus/AX.

Therefore:
- if synchronized source visual dots are also pointer-active and target matches, current ID14 pointer behavior + ID33 AX/focus containment is PASS and no write is needed;
- if source visual dots are pointer-inert while target dots change review, that is a real behavior delta, but page264 scope still forbids modifying global ID14; first read current ID14/ID33 and consider only the smallest page264-local containment;
- unreliable/moving source state is HOLD, not permission to change runtime.

## Shared MetForm33 — solved items must not be rebuilt

`reports/home/metform33-source-parity-v001.json` proves:
- 3–5 photo server validation, 8 MB/file, active ID5, route-scoped to Form33 endpoint;
- `uzenet` effective 5 rows via active ID6, one guarded Form33-only MutationObserver;
- success state configured/read back;
- notifications/webhooks disabled, local entries enabled;
- no SMTP or external submission.

Do not add another photo validator, rows helper or success-state rewrite.

### Shared Form33 saved-data timeline

`reports/subpages/oldtrees-form33-shared-baseline-reconciliation-20260915-v001.json` resolves a historical hash difference:
- the earlier Form33 Elementor tree was **5568 B / `47152dff5fa5d5369a8955f7581e71b0652604c39a6c283fd15e243a543d01f3`**;
- `home-final-audit-v001` later intentionally added Atomic paragraph `af04000d / #af-form-direct-call` with `tel:+36305394820`;
- after that supported save Form33 became **6068 B / `ea091a697d1d4589998315fc24c0818479f5229a2fb6d64d99ab79b6d77518b3`**, and later site-wide finalization recorded the same value;
- 6068/`ea091…` is the **latest documented historical reference**, not a substitute for fresh current readback and not a restore target;
- page264 ID33 depends on `#af-form-direct-call` for the form `aria-describedby`, so page264 work must never delete, rename or duplicate that node.

Only form validation proof still open: D05 requires service/topic radio submission-time mandatory enforcement. Repository source inspection proves that MetForm `mf_input_required=yes` is a real client-validation input, not merely a visual required star, but the **current shared Form33 service-radio `mf_input_required` value is still unread**. A later shared page272 audit was rechecked and also contains no exact current field setting, so there is no hidden PASS to reuse. Follow `build/oldtrees-form-required-validation-plan-20260915-v001.json`: first read current shared Form33 length/hash + `#af-form-direct-call`, then the exact current service field name/required state/options plus ID5/ID33, prove native behavior without delivery, and change nothing if native required already passes. If current Form33 has drifted from the latest documented 6068/`ea091…` reference, reconcile the current tree/settings before designing any page264 validation fallback. Do **not** mutate shared Form33 or install a second validator from this page264 package.

Inner form field styling is also a **measurement gate, not a reproduced defect**. `build/oldtrees-form-field-visual-diagnostic-20260915-v001.json` records the recovered source contract (desktop two-column grid; text controls min-height 52px, 13×16px padding, #F5F3ED background, 1.5px #B9B2A2 border, ~14–16px radius; textarea min-height 132px/rows5; radio options two columns desktop). v004 intentionally did not restyle `.mf-input`/textarea. Do not add field CSS unless synchronized computed-style/geometry proves a real difference.

## Direct acceptance already PASS

`reports/subpages/oldtrees-direct-live-compare-20260914-v005.json` proves:
- review AX names/buttons exact source match and numbered dots absent;
- tiszafa slider source/target accessible name and initial value 50 match;
- Nordmann static AX controls prev/next + dots 1–6 match;
- reviewed named page regions match source names/order.

These are not reasons for more static/semantic writes. Nordmann current-slide role semantics, timing, timer reset after manual navigation, compound pause and reduced-motion behavior remain separate synchronized interaction proof.

## Route / CTA invariants to preserve

Use `reports/subpages/oldtrees-link-route-ledger-20260915-v001.json` for the next non-activating live readback:
- the two page-local request CTAs target `#ajanlatkeres`; stale `/fooldal/#ajanlatkeres` must remain absent;
- trip-fee link targets `/kapcsolat/#kiszallas`;
- the biological-support card targets exact canonical WordPress route **`/biologiai-vedelem/`** (source reference route `/biologiai-vedelem.html`, target page256), consistent with D09 `.html` → `/slug/` mapping;
- direct phone is `tel:+36305394820` with source-equivalent accessible name;
- direct e-mail is `mailto:kreativ@alakfa-mester.hu` with source-equivalent accessible name.

Do not activate phone/e-mail handlers merely for QA.

## Remaining QA after/around v006/v007

Follow `reports/subpages/oldtrees-acceptance-ledger-20260914-v001.json`, `reports/subpages/oldtrees-evidence-supersedence-20260915-v005.json`, `reports/subpages/oldtrees-continuation-20260915-v013.json`, `reports/subpages/oldtrees-section-coverage-20260915-v001.json`, `build/oldtrees-next-remote-window-20260915-v005.json`, `reports/subpages/oldtrees-source-carousel-runtime-reconciliation-20260915-v001.json`, `build/oldtrees-interaction-acceptance-20260915-v003.json`, `build/oldtrees-review-dot-pointer-diagnostic-20260915-v001.json`, `build/oldtrees-hero-geometry-diagnostic-20260914-v001.json`, `build/oldtrees-responsive-acceptance-matrix-20260914-v001.json`, `build/oldtrees-form-required-validation-plan-20260915-v001.json`, `build/oldtrees-form-field-visual-diagnostic-20260915-v001.json`, `build/floating-contact-dock-diagnostic-plan-20260915-v003.json` and `build/oldtrees-scope-release-gate-20260915-v001.json`.

Visual:
- after v007 or if a newer rule already fixes it, prove equal desktop comparison columns/source-like wrapping and preserve beige/sage surfaces/icons/bullets;
- after v006 or if already fixed, prove white request-contact foreground and unchanged panel/button geometry;
- hero target copy begins lower in the existing 1640×920 comparison, but root cause is unproven: **no hero padding/margin patch without measured geometry + computed-style owner/cascade proof**. Use the dedicated hero diagnostic plan before any write;
- inner MetForm controls require measurement before any new CSS; absence of deterministic proof is not a defect;
- responsive acceptance views are 1920×1080, 1440×1000, 1024×900, 768×1024, 390×844 and 360×800; use the dedicated matrix for known 4→2→1 problem-grid, 2→1 comparison and <=400px contact-button contracts;
- floating contact dock is visually nearly empty/clipped while AX content exists. Exact standalone `header-live-source-v001.css` and `header-source-flex-responsive-v007.css` contain **no dock rules**, so the older claim that the former mapped the dock is stale. Actual live CSS ownership must be discovered from current DOM/post8/ID7 first. This page264 task must not deploy a global dock fix; a local exception is allowed only if the exact losing declaration can be corrected strictly under `body.page-id-264` without changing the global owner;
- `PIXEL_PASS=false` until deterministic same-browser exact viewport/DPR/zoom screenshot pair + overlay + diff exists.

Interaction:
- reviews ArrowRight/Down/Left/Up/Home/End plus previous/next synchronization;
- visual review-dot pointer behavior must be compared source/target directly before changing the existing pointer-active ID14 dots;
- tiszafa pointer + keyboard with native range and `--ba-pos` staying synchronized;
- Nordmann: first record `carousel--manual`; on a non-manual instance verify fresh ~4000ms autoplay and that successful manual navigation resets/restarts the countdown instead of permanently latching autoplay off; synchronize current/noncurrent slide role/`aria-hidden` and caption/alt order; verify ArrowLeft/Right, >=40px horizontally dominant swipe, reduced-motion, simple + compound hover/focus behavior and no duplicate timers;
- if a broken Nordmann slide occurs naturally, verify slide/dot removal, reindex, index clamp and current-state rendering, but do **not** infer stop/restart timing from `drop()` because it calls neither `stop()` nor `start()`;
- all four FAQ disclosures: source-equivalent initial expanded state, pointer/keyboard activation, multi-open vs accordion behavior, focus/ARIA/ID integrity and restored fourth-question preservation;
- these are proof-only by default: lack of an action-capable browser is not a reason to add another runtime owner.

## Evidence precedence / stale reports

Use `reports/subpages/oldtrees-evidence-supersedence-20260915-v005.json` before acting on historical open arrays. In particular:
- old `readonly-source-target-audit-v001` hero/form gaps are closed;
- old `oldtrees-semantic-audit-v001` 29/38 and 1/11 counts are closed;
- old `oldtrees-runtime-live-qa-v002` partial review names/extra-dot state are closed by later evidence for AX/focus; its unsynchronized Nordmann slide-role snapshot is not a fix specification;
- old `oldtrees-inline-form-v001` rows/photo-count/success-state opens are closed by Form33 ID5/ID6/settings, and its older 5568/`47152…` Form33 hash predates the accepted `#af-form-direct-call` addition;
- old broad visual v001 audit is superseded by v004/v005 plus the visual reconciliation;
- `build/floating-contact-dock-diagnostic-plan-20260914-v002.json` has stale CSS-owner provenance for page264 planning; use v003;
- `build/oldtrees-interaction-acceptance-20260915-v002.json` is superseded for current interaction planning by v003;
- `build/oldtrees-next-remote-window-20260915-v004.json` is superseded by v005;
- `reports/subpages/oldtrees-continuation-20260915-v012.json` is superseded by v013;
- historical interaction v003 schema 5 broken-slide wording is superseded by the current schema 6 content at the same path;
- `build/oldtrees-post-v005-acceptance-plan-20260914-v001.json` is historical measurement context only, not current execution authority;
- `reports/subpages/oldtrees-readback-closeout-20260915-v001.json` and v002 are historical SHA closeouts from before the current v013/v005/v003 source-runtime reconciliation;
- never redeploy historical visual bundles or obsolete semantic runtime versions.

Fresh live truth always outranks this documentation; reconcile drift instead of forcing a stale snapshot.

## Tooling / memory constraints

In the latest continuation the first Opera action was a single `list-tabs`, which returned **Browser not connected**. No Opera navigation, screenshot, new/replacement tab or reconnect loop was attempted afterward. When stable again, use at most one source + one target tab and stop on instability instead of tab fan-out.

WPVibe returned disabled on the first attempt in the latest continuation; no repeat call was made.

Generic web/direct runtime fallback did not produce a usable live source/target page. Thus no trustworthy current live QA/write gate is available in this conversation.

`specs/acceptance.json` and `specs/behaviors.json` are absent on `main`; do not invent them.

## Current status

**Elkészült:** page264 content/semantics and main media reconciled with no known copy/media gap; v004+v005 live; shared Form33 photo-count/textarea/success reconciled; shared Form33 saved-data timeline/direct-call dependency reconciled; v006 color microfix prepared; v007 comparison-grid microfix prepared; exact v006/v007 single-write bundle + parser-backed deploy manifest; authoritative acceptance ledger; content/semantic/visual/cascade coverage reconciliations; evidence-supersedence v005; complete section coverage map; source-carousel runtime reconciliation with exact manual/drop contracts; interaction v003; review-dot pointer diagnostic; hero computed-style/geometry diagnostic gate; six-view responsive acceptance matrix; native-required-first Form33 validation gate; inner-field visual diagnostic gate; exact route/CTA ledger; corrected dock owner diagnostic v003; next-live-window v005; continuation v013; scope-release gate.  
**Ellenőrzött:** historical live page264 hash; v004/v005 markers; v004 icons/bullets; current visual PASS items; exact v006/v007 property ownership/artifact identities/parser syntax/scope; 38/38 heading names; 11/11 ordered regions; final review AX; tiszafa initial AX; Nordmann static controls; source carousel class-derived manual contract and exact `drop()` caveat; seven-chip problem-grid source geometry/breakpoints; 5/5 main media roles; shared Form33 ID5/ID6/settings; accepted `#af-form-direct-call` change explains the 5568→6068 Form33 hash transition; MetForm native required capability; exact biological route `/biologiai-vedelem/`; no current proof of an inner-field styling defect; header standalone artifacts do not own dock CSS; latest repository plans/reconciliations.  
**Nyitott:** fresh +5 connection/quota/hash/marker preflight; conditional v006/v007 live deployment/readback; postwrite targeted screenshots; current shared Form33 identity + service-radio `mf_input_required` + native no-delivery proof; inner form field computed-style visual proof; fresh route/href readback; review keyboard + visual-dot pointer proof; tiszafa behavior; Nordmann synchronized slide-role/caption-alt order + timing/manual-navigation reset/swipe/pause/reduced-motion proof; FAQ interaction acceptance; hero measured root-cause proof; dock actual CSS-owner discovery and page264-local exception only if proven; deterministic six-view pixel matrix.  
**Következő művelet:** follow `build/oldtrees-next-remote-window-20260915-v005.json`: verify WPVibe +5 connection/quota → repo identity + compact hash/marker preflight → trustworthy two-tab v006/v007 visual gate → at most one exact repository CSS write → mandatory readback/regression capture → current shared Form33/native required proof → form-field/route/review-dot/interaction/hero/dock/responsive acceptance as capacity/tooling permits → evaluate the scope-release gate only after fresh implementation closeout.  
**Ismert jelenlegi keret:** **unknown** for `ncsnorbert+20260914-5@gmail.com`; actual counter must be read once before any package, and the mandatory 10-call D11 reserve must remain intact.  
**Release:** page264 is **NOT RELEASED**. Tool unavailability or static preparation is not completion evidence.