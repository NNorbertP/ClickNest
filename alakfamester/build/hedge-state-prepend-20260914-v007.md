# STATE PREPEND — 2026-09-14, HEDGE PAGE272 LEGACY SEMANTICS SAVED; RUNTIME PREPARED; HOST 429

## Current Hedge continuation point
Write scope: **only** `https://alakfamester-wp.clicknest.hu/soveny-specialista/` (page272). Reference-only: `https://alakfamester.clicknest.hu/soveny-specialista.html`.

Latest saved-data proof before the current host throttle: `_elementor_data` **53606 B**, SHA256 **`ef688b2885adb2e7f0b272f294efb3a1066fd22c3005ec33ee2f0eada2213b56`**, JSON valid. Preserve hero `af2e004e`, proof carousel `af2e004d`, native reviews `c3d30005`, MetForm `af2e0011`, `#ajanlatkeres`, the exact sentence `Jellemzően 24 órán belül válaszolok.`, EAEL `b2e2c001` 28-item/full-resolution gallery, and the removal of legacy image widgets `af2e0009`–`af2e000e`.

### Closed in this continuation
- shared-media scope recovery is **26/26 PASS**; do not write Hedge-specific alt text back to shared attachments;
- EAEL page-only decoupling is **28/28 media id = 0**, preserving item URL/name/order/repeater IDs and `full` resolution;
- complete legacy named regions saved for `af2e0007`, `af2e0045`, `af2e0047`, `af2e0049`, `af2e000f`;
- `af2e000f` now exposes the full e-mail CTA as one `mailto:` link with exact accessible name `ÍRJON BÁTRAN kreativ@alakfa-mester.hu`, while `#ajanlatkeres` remains;
- `af2e004c` phone/e-mail links now have exact source accessible names; the 24-hour sentence remains.

Evidence: `reports/subpages/hedge-scope-recovery-gallery-pass-20260914-v004.json`, `reports/subpages/hedge-legacy-semantics-runtime-prep-20260914-v006.json`.

### Prepared, not deployed
`build/hedge-review-semantic-runtime-20260914-v001.php` latest commit `2bbe5ee797ee2df712ebcf8d4a97082c38acee39`; static QA: `reports/subpages/hedge-review-semantic-runtime-static-qa-v001.json` commit `e576addcdaa5248c598681d051e9a31690b48c40`.

The helper is guarded by `is_page(272)` and changes accessibility attributes only. Prepared parity:
- native review tablist name `Ügyfélvélemények`;
- exact source accessible names for the three review tabs, hiding the visible `01/02/03` prefixes only from the accessible name, not visually;
- `#ajanlatkeres` complete region name `Küldjön fotót a sövényről`;
- MetForm33 form name `Ajánlatkérés`, description relation to the existing direct-call paragraph, radio-group labelling, and Település help relation.

Do **not** alter the extra focusable `1. vélemény / 2. vélemény / 3. vélemény` controls until ownership and click/keyboard behavior are proven. Do not guess Elementor Atomic attribute wire format: live Elementor 4.2.4 `e-tabs` schema exposes an `attributes` array but prior page256 evidence proved guessed Atomic aria attributes may save without frontend emission.

### Current blocker and quota
WPVibe account `ncsnorbert+20260914-4@gmail.com`; latest exact provider counter **241/300 used, 59 remaining**. D11 reserve is 10, therefore 49 nominal calls remain above reserve. The target continues to return host/site-level **HTTP 429** to page reads after retries, while the provider counter remains unchanged; stop site calls until the throttle clears.

Opera is limited to the existing two tabs, but they are currently being used by another old-trees QA flow. Do not create extra tabs or overwrite that flow. Reuse at most one Hedge source + one Hedge target tab when they are free.

### Next safe package
1. After host throttle clears, re-read page272 hash; require `ef688b2885adb2e7f0b272f294efb3a1066fd22c3005ec33ee2f0eada2213b56` unless new drift is reconciled first.
2. Discover Code Snippets abilities; if no matching write exists, use the already proven plugin-aware `/code-snippets/v1/snippets` REST path. Inspect live snippet inventory and avoid duplicate page272 helpers.
3. Deploy the single page272-only semantic runtime helper; read back active/error state and prove page272 Elementor hash unchanged.
4. Fresh frontend + editor lifecycle QA for review tablist/tabs, `#ajanlatkeres`, form name/description, radio-group and Település help.
5. Then investigate ownership/behavior of the extra review-index buttons before any removal/hiding.
6. Prove complete outer-container ownership before adding missing hero/gallery named-region semantics.
7. `PIXEL_PASS=false` until deterministic 1920/1440/1024/768/390/360 screenshot-overlay-diff evidence becomes available. `specs/acceptance.json` and `specs/behaviors.json` remain absent from repository history.
