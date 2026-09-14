# STATE - 2026-09-14, REFERENCE VIDEOS CTA STRUCTURAL FIX IN PROGRESS

## Current target / exact quota
Target: https://alakfamester-wp.clicknest.hu/ ; repo `NNorbertP/ClickNest`, branch `main`, folder `alakfamester/`.
WPVibe account: `ncsnorbert+20260914-2@gmail.com`.
**Latest exact WPVibe counter: 42/300 used, 258 remaining** in the rolling 24-hour window. Preserve at least **10 calls** for recovery/closeout per D11; 248 calls are currently available above reserve.

Environment rechecked 2026-09-14: WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4; Hello Elementor 3.5.1 active; Elementor 4.2.4; ElementsKit Lite 4.0.4; MetForm 4.3.0. Preserve page56/page12, ElementsKit header20/footer21, MetForm33, Additional CSS post8 and canonical page IDs.

### Live drift / continuation safety check
- The repository checkpoint below is from 2026-09-12; the live site contains later 2026-09-14 semantic QA work. Do not restore old full-page snapshots.
- page268 current `_elementor_data`: **45773 B**, SHA256 `b16abccf8de83a3e55fe46b3ed319acfec9d26e695a1933371f94a962ecd28c7`.
- page268 current `af2c0101` child order is still `af2c0007 -> af2c0102 -> af2c0107`; the documented CTA-order defect therefore remains open.
- D18 preflight: the only `_css_classes` occurrence on page268 is on the legacy `text-editor` widget (`af-section-heading`). The Atomic containers in the affected region already use typed V4 `settings.classes`; no Atomic legacy-class bridge is missing for this save.
- `specs/acceptance.json` is not present on `main` (GitHub 404); the repository `specs/` directory currently exposes `css-registry.md`, `decisions.md`, `patterns/`, and `work-packages/`. The exact acceptance matrix therefore remains unavailable for final PASS.
- Code Snippets ID23 `AF footer link semantics fix v001` is active on the live site and was freshly verified on Rólam and Kapcsolat: footer navigation items retain native link semantics while list wrappers remain. This later live fix was not part of the 2026-09-12 checkpoint.

## Governing continuation rules
D02 Hello + ElementsKit global header/footer. D03 V4 Atomic normal structure with documented legacy-widget boundary. D07 own CSS only Hello Additional CSS. D09 canonical WP URL mapping. D11 10-call reserve. D12 reviews native Atomic Tabs. D17 EAEL Free masonry. **D18 preserve V4 Global Class semantics before structural full-save.** Use only the current live tree for structural work; preserve all existing IDs/classes/settings except the proven sibling order change. No raw SQL/meta structural mutation, no CSS `order` workaround, no SMTP, real submission or external test message.

## IN PROGRESS - Reference Videos featured CTA structural order
Evidence basis: `reports/subpages/reference-videos-structure-finalization-v001.json` plus 2026-09-14 live readback above.

Safe write plan for this package:
1. create a temporary admin-only Code Snippets REST helper;
2. on invocation, re-read current page268 `_elementor_data`, require the exact current SHA and exact sibling order;
3. move existing `af2c0107` before `af2c0007` inside `af2c0101` in memory only;
4. call WPVibe's supported `/wpvibe/v1/elementor/save-page` from the authenticated request so Elementor performs its normal save/CSS/cache pipeline;
5. immediately read back hash/order, verify all seven videos and rendered/focus order, open the Elementor editor route, then deactivate the temporary helper;
6. if any precondition changed, abort without a WordPress write.

---

## Prior checkpoint - 2026-09-12, SITE-WIDE FUNCTIONAL FINALIZATION CLOSED TO EXPLICIT BLOCKERS

### Prior target / exact quota
Target: https://alakfamester-wp.clicknest.hu/ ; repo `NNorbertP/ClickNest`, branch `main`, folder `alakfamester/`.
WPVibe account at that checkpoint: `ncsnorbert+20260912-4@gmail.com`.
Prior exact WPVibe counter: 79/300 used, 221 remaining in the rolling 24-hour window. Preserve at least 10 calls for recovery/closeout.

Environment: WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4; Hello Elementor 3.5.1 active; Elementor 4.2.4; ElementsKit Lite 4.0.4; MetForm 4.3.0. Preserve page56/page12, ElementsKit header20/footer21, MetForm33, Additional CSS post8 and canonical page IDs. Homepage is page56 on `elementor_header_footer`.
Frozen source aggregate: `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`.

### Governing rules at prior checkpoint
D02 Hello + ElementsKit global header/footer. D03 V4 Atomic normal structure with documented legacy-widget boundary. D04 editable `af-hero-art`. D05 MetForm Free. D06 Georgia/system font stack. D07 own CSS only Hello Additional CSS. D08 exact source text/service structure. D09 canonical WP URL mapping. D11 10-call reserve. D12 reviews native Atomic Tabs. D17 EAEL Free masonry. D18 preserve V4 Global Class semantics before structural full-save. Use localized supported edits only for unique proven changes with immediate readback. Before any Additional CSS write reread full post8 and patch only the af-project block. No SMTP, real submission or external test message in this mode.

### CLOSED - Homepage + navigation final audit
Evidence: `reports/home/home-final-audit-v001.json`, commit `3bf78b117ac90b614ad69b998e442ad1808a50b8`.
- page56 hedge intro paragraphs now render in source order without changing IDs;
- MetForm33 source final direct-call note restored as `af04000d` / `#af-form-direct-call`, `tel:+36305394820`; no submit/SMTP;
- footer21 target-only `Biró János · topiarista` removed;
- all 10 canonical pages published on `elementor_header_footer`, exactly one ElementsKit header/footer, 0 source-host or `.html` refs.

### CLOSED - Background-helper verification
Evidence: `reports/subpages/background-helper-finalization-v001.json`, commit `db71fa6f35046a25ca15ec864fa2c1978a18091f`.
No write: `af-s-rolam-9=af-bg-sage`, `af-s-rolam-11=af-bg-paper`, `af-s-soveny-specialista-8=af-bg-sage` were already correct.

### CLOSED - Gallery + Hedge media recheck
Evidence: `reports/subpages/gallery-hedge-media-finalization-v001.json`, commit `d0ac9e9114aa44b400381537885ffa6cbdfcc0db`.
No write. Gallery main image count 60 source vs 60 target; Hedge 31 source vs 31 target. D17 EAEL galleries remain 44 and 28 items; Hedge proof contains `soveny-21.webp`. The old large missing-media counts were stale after D17 migrations.

### CLOSED - Rólam + Idős fák media recheck
Evidence: `reports/subpages/about-oldtrees-media-finalization-v001.json`, commit `882007531c0e08cbe1408e17a58b1b309b679d23`.
No write. Idős fák 5 source-main vs 5 target-main roles pass. Rólam has one unavailable source role only: `Biró János munka közben`; source URL remains 404.

### OPEN - Reference Videos featured CTA structural order
Evidence: `reports/subpages/reference-videos-structure-finalization-v001.json`, commit `44cf8f9f29d05634ba6bd232adb679b633ec2305`.
Prior page268 basis: 45647 B, SHA `1f9cfaba55dc15fd6d6cb1e675e6e6c79f9b4f930a0e2e60cadd8a05b1919dc5`; all seven videos present.
Fresh source AX proved featured region child order CTA -> featured heading/intro -> video/details. Prior target Elementor/rendered DOM inside `af2c0101` was `af2c0007` heading/intro -> `af2c0102` split/video/details -> `af2c0107` CTA.
A CSS `order` workaround was rejected because it would leave keyboard/screen-reader focus order inconsistent. Safe fix requires a supported Elementor structural save preserving the full current V4 data/class graph and moving existing `af2c0107` before `af2c0007`, followed by editor/frontend/focus verification. Do not reconstruct the tree from snippets and do not raw-edit meta/SQL.

### CLOSED - Site-wide functional/content finalization v001
Evidence: `reports/sitewide-functional-finalization-v001.json`, commit `c8612f0163eb3c7276e0d701a49a912834a62565`.
Fresh source-target browser checks covered Homepage, Gallery, Hedge, Rólam, Idős fák, Reference Videos, Biological Protection, FAQ, Fruit Trees and Contact.
- Biological Protection: media and critical links pass. Apparent heading-order difference was an AX flattening artifact; `Mi történik a metszés után?` is a nested article inside the same `Miért nem ér véget...` region on source/target. No write.
- FAQ: section/media/link structure present; sampled questions across the set are present as disclosure controls on target. No write.
- Fruit Trees: media and critical links pass. Apparent heading-order difference was an AX flattening artifact; `Mikor történik a metszés?` is an internal note in the same `Gyümölcsfa metszés és gondozás – röviden` region on source/target. No write.
- Contact: hero image, tel/mail routes and form submit present; prior verified MetForm config remains authoritative; no submit/SMTP.
- Direct authenticated editor URLs successfully opened for page56 and page268. The Browser Connector disconnected before deep editor-tree/unsaved-state introspection, so do not claim more than route/editor-load proof.
- WPVibe `/wpvibe/v1/builder-login` is not usable for Elementor on this site: it incorrectly reports `seedprod_missing`; it was not retried.
- page239 `TEMP QA Mobile Compare` is private. Ownership is not documented in repo, therefore it was not deleted automatically. page12 is the documented isolated capability-test page and must be preserved.

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

### Prior explicit blockers / next safe action
1. Controlled visual acceptance unavailable because the Opera screenshot/accessibility connector was intermittently disconnected; `PIXEL_PASS=false`.
2. Rólam source portrait unavailable: `https://alakfamester.clicknest.hu/kepek/biro-janos-portre.webp` returned 404. Need frozen/local source bytes; do not invent substitute.
3. Gallery Ellwoodi source asset unavailable: `https://alakfamester.clicknest.hu/kepek/175725917368bda5a5b1ae6_370X354.webp` returned 404. Need frozen/local source bytes; do not invent substitute.
4. Reference Videos CTA order needed a safe full Elementor structural save path or GUI mutation preserving V4 classes and allowing editor reopen/focus verification.
5. `specs/acceptance.json` and `specs/behaviors.json` were not exposed through the repository connector; if made available, run their exact matrix before final PASS.
6. SMTP/delivery and real MetForm submission remain prompt-3 tasks.

## Acceptance
All currently safe, source-verifiable content/navigation/media/structural work is closed except the explicit blockers above. The site **must not** be described as pixel-perfect yet. `PIXEL_PASS=false`.
