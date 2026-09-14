# STATE - 2026-09-14, HEDGE PARITY PACKAGE PREPARED; WPVIBE 429 BLOCKS WRITES

## Current target / exact quota
Target: https://alakfamester-wp.clicknest.hu/ ; repo `NNorbertP/ClickNest`, branch `main`, folder `alakfamester/`.
WPVibe account: `ncsnorbert+20260914-3@gmail.com`.
**Latest exact WPVibe counter observed before throttling: 2/300 used, 298 remaining** in the rolling 24-hour window. Preserve at least **10 calls** for recovery/closeout per D11. The later HTTP 429 is a short-term rate-limit condition, not evidence that the 300-call quota is exhausted.

Environment rechecked 2026-09-14: WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4; Hello Elementor 3.5.1 active; Elementor 4.2.4; ElementsKit Lite 4.0.4; MetForm 4.3.0. Preserve page56/page12, ElementsKit header20/footer21, MetForm33, Additional CSS post8 and canonical page IDs.

## Governing continuation rules
D02 Hello + ElementsKit global header/footer. D03 V4 Atomic normal structure with documented legacy-widget boundary. D07 own CSS only Hello Additional CSS. D09 canonical WP URL mapping. D11 10-call reserve. D12 reviews native Atomic Tabs. D17 EAEL Free masonry. D18 preserve V4 Global Class semantics before structural full-save. Use the current live tree for structural work; do not restore old full-page snapshots. Preserve later manual changes unless a concrete source/acceptance conflict is proved. No raw SQL/meta structural mutation, no CSS behavioral substitute, no SMTP, real submission or external test message.

## PREPARED, NOT SENT - Hedge source parity follow-up
Target page: `page272`, `/soveny-specialista/`.
Prepared package: `build/hedge-parity-fix-20260914-v001.json`, commit `1423d7697b3cd166d342802d4eeab54d68cdab27`.

Fresh preflight before throttling:
- current page272 `_elementor_data`: **53032 B**, SHA256 `341793f0cf2dd80d33994d0668a78890c377eb196c21478625573c4ca44b962d`;
- current WordPress revision: ID531, `2026-09-14 15:22:08`;
- prior documented revision ID378 remains **53311 B**, SHA256 `4c80d1108004fa133341da566e60adcda1b93c1f9ba5e3d110ff4cfdee4006e5`;
- fresh source/target browser heading inventories both contain the complete Hedge heading set;
- current target keeps hero `af2e004e`, proof carousel `af2e004d`, native review tabs `c3d30005`, EAEL gallery `b2e2c001`, MetForm `af2e0011`.

The 2026-09-14 live drift was inspected element-by-element and **must not be overwritten wholesale**:
- hidden legacy image widgets `af2e0009`–`af2e000e` were removed; keep them removed;
- `af2e0007`, `af2e0045`, `af2e0047`, `af2e0049` contain expanded copy that more closely matches the source; preserve it;
- CTA `af2e000f` now contains the e-mail contact and `Tovább az űrlaphoz`; preserve it;
- Atomic form container `af2e0010` now has `_cssid=ajanlatkeres`; preserve it;
- EAEL gallery entries now reference the real attachment IDs; preserve the IDs and correct media alt metadata rather than reverting IDs to zero;
- carousel `af2e004d` now uses `role=listitem` for slides instead of the frozen source `group`; treat this as later accessibility-oriented manual drift and do not auto-revert it.

### Proven remaining Hedge source deltas
1. Target frontend no longer contains the exact sentence `Jellemzően 24 órán belül válaszolok.`; source does.
2. EAEL gallery `b2e2c001` was changed from `eael_fg_image_resolution_size=full` to `medium`. Fresh target accessibility URLs show `-225x300` / `-300x*` WordPress thumbnails; source uses original image files.
3. Because the EAEL entries now carry real media IDs, EAEL reads attachment alt metadata. Several attachment alts were blank or differed from the exact source item names; fresh target accessibility output therefore omitted/misnamed gallery images relative to the source. The exact 28 ID→alt map is saved in `build/hedge-parity-fix-20260914-v001.json`.

### Intended next safe write package
Before any write:
- re-read exact WPVibe counter;
- re-read page272 bytes/SHA256 and reconcile any drift before proceeding;
- re-read affected media alt values and update only changed values.

Then, without a whole-page restore:
1. update the 28 gallery attachment alt values to the exact source item names, preferably via WordPress REST `/batch/v1` in batches ≤25;
2. guarded `content/search` + match-once `content/edit` on page272 `_elementor_data`: change only the unique gallery resolution value `medium` → `full`;
3. guarded `content/search` + match-once `content/edit`: insert `<p class='form-reply'>Jellemzően 24 órán belül válaszolok.</p>` immediately before the existing `form-lead-note`, only if the sentence is still absent;
4. read back JSON validity/bytes/SHA256, then verify fresh frontend. Only if rendered output is stale, touch page272 through normal post hooks and regenerate Elementor CSS/cache once; do not perform an unnecessary full cache purge.

Acceptance for this package:
- 28 EAEL items preserved in exact source order;
- source-exact accessible image names for all 28 gallery entries;
- full/original target image sources, not medium thumbnails;
- exact 24-hour reply sentence restored;
- hero/reviews/proof/form IDs preserved;
- no hidden legacy image widgets reintroduced;
- no SMTP or real form submission.

### Current blocker
WPVibe began returning **HTTP 429** during the verification phase. A later `/batch/v1` write attempt also returned HTTP 429 **before execution**. No WordPress writes from `hedge-parity-fix-20260914-v001` have executed. Do not retry the same call blindly; first verify target hash/state and quota again in a fresh window/session.

## CLOSED - Reference Videos featured CTA structural order
Evidence: `reports/subpages/reference-videos-cta-order-fix-v001.json`, commit `52422cf98931621d9680b860bf766a1d4fcb349a`.

Preflight live state before write:
- page268 `_elementor_data`: 45773 B, SHA256 `b16abccf8de83a3e55fe46b3ed319acfec9d26e695a1933371f94a962ecd28c7`;
- `af2c0101` children: `af2c0007 -> af2c0102 -> af2c0107`;
- D18 check: no affected Atomic container used legacy `_css_classes`; affected Atomic containers already used typed V4 `settings.classes`.

Write:
- temporary admin-only Code Snippets helper ID24 required exact SHA + exact sibling order and aborted on mismatch;
- helper used authenticated internal WPVibe `/wpvibe/v1/elementor/save-page`; save returned **no warnings**;
- only existing sibling order changed, IDs/classes/settings were preserved;
- helper ID24 is now **inactive**.

Post-save readback:
- page268 `_elementor_data`: **46622 B**, SHA256 `af362a9e7295cf06757b94c487e7504dbc5a01f84ee956906c16d6c93059e747`;
- `af2c0101` children now `af2c0107 -> af2c0007 -> af2c0102`;
- live data contains exactly **7** legacy video widgets;
- fresh Opera accessibility tree shows CTA heading `Ugyanezt a munkát az Ön kertjében is elvégzem` before featured heading `Kínai hibrid terülő boróka (Niwaki) nyírása – Mire figyeljünk?`;
- fresh browser tree shows seven `Videó lejátszása` controls and the CTA link still points to `/kapcsolat/#ajanlatkeres`.

Remaining verification for this package:
- Elementor editor reopen is **not PASS** in this session: Opera redirected the direct editor URL to `wp-login.php?...&reauth=1`.
- Controlled six-viewport source-target screenshot/overlay/diff remains open because the current browser connector does not expose deterministic viewport/DPR/zoom controls required by the documented matrix.

## LIVE DRIFT RECORDED - 2026-09-14 footer semantics
Code Snippets ID23 `AF footer link semantics fix v001` is active on the live site. Fresh browser verification on Rólam and Kapcsolat confirmed footer navigation entries retain native `link` semantics while list wrappers remain. This later live fix was not part of the 2026-09-12 checkpoint.

## Repository specification availability
The full `main` tree was re-read on 2026-09-14. `specs/acceptance.json` and `specs/behaviors.json` are **not present**. `specs/` currently contains `css-registry.md`, `decisions.md`, `patterns/`, and `work-packages/`. Therefore the exact machine acceptance matrix requested by the project rules cannot be run until those files are restored or supplied.

## Remaining explicit blockers / next safe action
1. **Hedge write package blocked by WPVibe 429:** resume from `build/hedge-parity-fix-20260914-v001.json`, but first re-check page272 hash and media values. Do not restore old revision 378 wholesale.
2. **Exact acceptance matrix unavailable:** restore/provide `specs/acceptance.json` and `specs/behaviors.json`, then run their defined checks before final PASS.
3. **Controlled visual acceptance still unavailable:** current Opera connector lacks deterministic viewport/DPR/zoom control for the frozen 1920/1440/1024/768/390/360 matrix. `PIXEL_PASS=false`.
4. **Rólam source portrait unavailable:** `https://alakfamester.clicknest.hu/kepek/biro-janos-portre.webp` was previously 404. Need frozen/local source bytes; do not invent substitute.
5. **Gallery Ellwoodi source asset unavailable:** `https://alakfamester.clicknest.hu/kepek/175725917368bda5a5b1ae6_370X354.webp` was previously 404. Need frozen/local source bytes; do not invent substitute.
6. **Editor reopen proof for page268:** repeat only when an authenticated editor browser session is available; do not resave page268 merely to obtain this proof.
7. SMTP/delivery and real MetForm submission remain prompt-3 tasks.

---

## Prior checkpoint - 2026-09-12, SITE-WIDE FUNCTIONAL FINALIZATION CLOSED TO EXPLICIT BLOCKERS

### Prior target / exact quota
Target: https://alakfamester-wp.clicknest.hu/ ; repo `NNorbertP/ClickNest`, branch `main`, folder `alakfamester/`.
WPVibe account at that checkpoint: `ncsnorbert+20260912-4@gmail.com`.
Prior exact WPVibe counter: 79/300 used, 221 remaining in the rolling 24-hour window. Preserve at least 10 calls for recovery/closeout.

Environment: WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4; Hello Elementor 3.5.1 active; Elementor 4.2.4; ElementsKit Lite 4.0.4; MetForm 4.3.0. Preserve page56/page12, ElementsKit header20/footer21, MetForm33, Additional CSS post8 and canonical page IDs. Homepage is page56 on `elementor_header_footer`.
Frozen source aggregate: `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`.

### CLOSED - Homepage + navigation final audit
Evidence: `reports/home/home-final-audit-v001.json`, commit `3bf78b117ac90b614ad69b998e442ad1808a50b8`.
- all 10 canonical pages published on `elementor_header_footer`, exactly one ElementsKit header/footer, 0 source-host or `.html` refs;
- homepage content/navigation package closed with documented hashes.

### CLOSED - Background-helper verification
Evidence: `reports/subpages/background-helper-finalization-v001.json`, commit `db71fa6f35046a25ca15ec864fa2c1978a18091f`.

### CLOSED - Gallery + Hedge media recheck
Evidence: `reports/subpages/gallery-hedge-media-finalization-v001.json`, commit `d0ac9e9114aa44b400381537885ffa6cbdfcc0db`.
Gallery main image count 60 source vs 60 target; Hedge 31 source vs 31 target; D17 EAEL galleries 44 and 28 items.

### CLOSED - Rólam + Idős fák media recheck
Evidence: `reports/subpages/about-oldtrees-media-finalization-v001.json`, commit `882007531c0e08cbe1408e17a58b1b309b679d23`.
Idős fák 5 source-main vs 5 target-main roles pass. Rólam had one unavailable source role only: `Biró János munka közben`; source URL remained 404.

### CLOSED - Site-wide functional/content finalization v001
Evidence: `reports/sitewide-functional-finalization-v001.json`, commit `c8612f0163eb3c7276e0d701a49a912834a62565`.
Fresh source-target browser checks covered Homepage, Gallery, Hedge, Rólam, Idős fák, Reference Videos, Biological Protection, FAQ, Fruit Trees and Contact. SMTP/real submission were not performed.

### Final saved hashes at prior continuation point
- header20: 5855 B, `e8293a7b0d7c7910af1e5eeb8dd7613677d65b08e315d4fe12cbb59ade4fcafb`
- footer21: 11491 B, `81ea2bb5e50768b17230efac4e1f175d177759bda7df1325aa8912038c7322e1`
- MetForm33: 6068 B, `ea091a697d1d4589998315fc24c0818479f5229a2fb6d64d99ab79b6d77518b3`
- page56: 246602 B, `66126facdd0fd5e7d8ff395ebf095efbe605e6e4af1de57fcecab90e5dfd82d1`
- page256: 34725 B, `b480423f4a29331789541b3a1ded5ec1e681dfd773bb205a5c09e4d4d1dbf253`
- page258: 72916 B, `1494ff3cce05b92be9a4e962c67bbb4bd903c3ae2829c7e46914c09d2065d656`
- page260: 34188 B, `e3ddf65d54039a4866e88311fe870bcc70b3cd408e78e3c020c325f62b2b0660`
- page262: 31792 B, `59179aff94198af9b6504c4202d9b3cae62f20872e4af4d424cf1ca4d7738e74`
- page264: 47327 B, `ae8ed86ab62b4f27c5f72f1c4baf5ecaa2b14186e067ebd2fee5f61d3938e765`
- page266: 8685 B, `815f22bec4aa1a4401a78186505bf553740a2c19710b720407d19b4703366fae`
- page268: 45647 B, `1f9cfaba55dc15fd6d6cb1e675e6e6c79f9b4f930a0e2e60cadd8a05b1919dc5`
- page270: 38705 B, `7a100609dbb724419f46139d3a4b256dcf1e1e545f5e698c4249209bec4cba6f`
- page272: 53311 B, `4c80d1108004fa133341da566e60adcda1b93c1f9ba5e3d110ff4cfdee4006e5`

Prior final structural audit: Elementor source-host/`.html` refs = **0**; published global ElementsKit headers = **1**; footers = **1**.

## Acceptance
All currently safe, source-verifiable content/navigation/media/structural work is closed except the explicit blockers above. The site **must not** be described as pixel-perfect yet. `PIXEL_PASS=false`.
