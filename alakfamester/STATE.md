# STATE - 2026-09-14, PAGE264 ONLY; V004+V005 LIVE; QA PENDING; NEW WPVIBE ACCOUNT UNVERIFIED

## Current continuation point — Idős fák / page264 only

Target: `https://alakfamester-wp.clicknest.hu/idos-fak-megmentese-szolgaltatas/` (page264).  
Reference: `https://alakfamester.clicknest.hu/idos-fak-megmentese-szolgaltatas.html`.  
Repository: `NNorbertP/ClickNest`, branch `main`, folder `alakfamester/`.

**WordPress write scope:** only page264 may change. A Hello Additional CSS edit is permitted only when every effect selector is explicitly page264-scoped. Do not modify another page, global header/footer template, shared media, shared plugin setting, SMTP or send a real/external form test from this package.

Authoritative reconciliation report: `reports/subpages/oldtrees-continuation-20260914-v006.json`.  
Authoritative live visual deployment evidence: `reports/subpages/oldtrees-visual-live-qa-20260914-v006.json`.

## Important correction — do NOT deploy another oldtrees visual bundle

The repository contains a later live QA proving that page264 visual **v004 and v005 are already deployed** in Hello Additional CSS.

Live deployment facts:
- page264 `_elementor_data`: **48874 B**, SHA256 **`09f661e095714c1b3149c40406d7f31f04887c49a392f59c7c41b11fee3a788a`**, JSON valid;
- visual v004 marker was inserted once and read back once;
- post-v004 Additional CSS: **611030 B**, SHA256 **`87fb6f275f9550dfcb406ac855b1287f4cf4dbd15da226840e6d2d8c28108bb6`**;
- visual v005 marker was then inserted once and read back once; the write returned **611423 B**;
- the full post-v005 Additional CSS hash was intentionally not spent because D11 reserve was being preserved;
- Elementor data remained unchanged through the visual package.

The v004 live capture already proved source-like warning/growth icons and X/check leaf bullets in `Kivágás vagy átalakítás?`. It also proved that card backgrounds/equal-height stretching were still losing in the cascade, which is why the narrow v005 page264-only `!important` cascade fix was added.

Therefore **do not redeploy** any of these as a new package:
- `build/oldtrees-visual-parity-v001.css`
- `build/oldtrees-visual-parity-mobile-correction-v002.css`
- `build/oldtrees-visual-parity-corrections-v003.css`
- `build/oldtrees-visual-parity-bundle-v004.css`
- `build/oldtrees-visual-parity-v004.css`
- `build/oldtrees-visual-parity-v005-cascade-fix.css`

A redundant `build/oldtrees-visual-parity-v003.css` created during continuation before this later live state was discovered has been deleted in commit `1f37656b9c56cc40a658c5c96fb114a02735602a`. Git history retains it if forensic comparison is ever needed.

## WPVibe account handoff

The current requested WPVibe identity was verified as **`ncsnorbert+20260914-5@gmail.com`** and the email is verified. `connect_site` returned a WordPress one-click authorization URL, but the WPVibe tool became unavailable before `list_sites` / `site_info` could verify the approved connection or the current rolling quota.

Therefore:
- current `-5` account site connection is **not yet confirmed**;
- current exact quota is **unknown**;
- do not reuse the historical `-4` account counters as if they were current;
- after WPVibe becomes available, verify identity + site connection + exact quota first and preserve D11's 10-call closeout reserve.

No WordPress write was made through the unavailable `-5` connection in this continuation.

## Existing page264 content/runtime that must be preserved

Runtime evidence: `reports/subpages/oldtrees-runtime-live-qa-20260914-v004.json` and `build/oldtrees-semantic-runtime-v003.php`.

- Code Snippets ID33 is page-guarded with `is_page(264)` and was active at last verification;
- all three real review tab accessible names match the source;
- target-only numbered review dots are removed from AX/focus while pointer appearance/behavior is preserved;
- form accessible name/description, radio-group labelling and Település help relationship were already handled by the page264 runtime;
- tiszafa `.js-ba` was initialized at 50%, native range `0..100`, step `1`;
- do not replay older semantic saved-data packages or earlier review-label patches;
- do not add duplicate interaction listeners/timers without a live failing proof.

Structural/content work already verified and to preserve:
- hero `af2a0052` with exact accessible title/description;
- seven-chip source problem grid `af2a0007` with original SVG geometry;
- exact comparison copy and source caveat;
- inline MetForm33 request section and source-visible 24-hour reply text;
- current page264 IDs/order/data hash above.

## Next work is QA/readback first, not writing

When WPVibe is available again:
1. verify account `ncsnorbert+20260914-5@gmail.com`, site connection and exact quota;
2. re-read page264 hash/JSON; if it differs from `09f661e0...a788a`, stop and reconcile before any write;
3. server-side inspect Additional CSS marker counts; require one `af-oldtrees-visual-v004`, one `af-oldtrees-visual-v005`, and one `af-project:end`; do not insert visual CSS if v004/v005 are present;
4. use fresh frontend QA only unless a new reproducible source-target delta is proven;
5. if any future write returns HTTP 429, outcome is UNKNOWN until readback proves it; never blind-retry.

### Visual checks still required
- fresh comparison capture after v005: beige negative card, sage positive card, equal card height;
- fresh `#ajanlatkeres` source/target capture: joined white panel, 18×18 clock icon, contact buttons, organic sage glow, continuous transition into MetForm fields;
- synchronized hero geometry recheck. A prior ~40 px target vertical offset has **no proven root cause**, so do not change hero padding/margin from that observation alone;
- inspect comparison→dark divider only if a fresh post-v005 capture proves a mismatch;
- formal screenshot pair + overlay + diff remains open, so **`PIXEL_PASS=false`**.

### Interaction checks still required
Source interaction owner: `build/source-interactions-v001.js`; target ownership remains the existing shared runtime + ID14/ID33.
- review Arrow/Home/End keyboard behavior;
- tiszafa pointer and keyboard behavior;
- Nordmann carousel 4000 ms normal-motion behavior;
- hover/focus pause and pointer-swipe behavior;
- reduced-motion stop/restart behavior.

Do not add another runtime layer unless one of these fails in a stable interaction-capable browser.

### Form processing items still open
Evidence: `reports/subpages/oldtrees-inline-form-v001.json`, D05.
- textarea last documented as rows=10 vs source rows=5; changing shared MetForm33 requires fresh live schema/read plus page264-safe containment;
- source upload contract is 3–5 photos, 8 MB/file; server-side maximum-five validation still requires a proven scoped `mf_after_validation_check` implementation;
- required service/topic radio must be genuinely enforced on target;
- exact success/submit-state parity remains open;
- no SMTP, delivery test or real submission in this mode.

## Tooling / memory constraints

Opera Browser Connector is disconnected. During continuation only the existing two project tabs were reused; **zero new tabs** were opened. When Opera is stable again, use at most one source and one target tab and reuse them.

Local Chromium exists, but this runtime cannot currently resolve the Clicknest hosts by DNS, so it cannot replace Opera for live deterministic screenshot comparison.

`specs/acceptance.json` and `specs/behaviors.json` are absent from current `main`; do not reconstruct them by guesswork. Deterministic frozen six-viewport same-browser/DPR/zoom capture remains unavailable.

## Current status

**Elkészült:** page264 content/semantic work; v004 + v005 visual CSS is live; repository state reconciled; obsolete v003 prep removed.  
**Ellenőrzött:** v004 marker/readback; v005 marker/readback; Elementor hash unchanged; v004 icons/bullets visibly source-like.  
**Nyitott:** post-v005 visual capture, form-panel visual capture, hero geometry root-cause check, interaction acceptance, scoped form-processing parity, deterministic pixel matrix.  
**Következő művelet:** WPVibe `-5` connection/quota verification, then page/hash/marker readback and **QA only** if intact.  
**Ismert jelenlegi keret:** **unknown** for `ncsnorbert+20260914-5@gmail.com`; no current-counter claim until WPVibe is available again.
