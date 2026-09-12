# STATE - 2026-09-12, HEDGE272 EAEL TRIAL NEEDS IMMEDIATE ROLLBACK

## Current state and continuation
Target: https://alakfamester-wp.clicknest.hu/ ; repository NNorbertP/ClickNest, main, alakfamester/.

WPVibe account `ncsnorbert+20260912-1@gmail.com`. Last exact quota read after the failed trial: 114/300 used, 186 remaining in the rolling 24-hour window. Keep at least 10 calls for closeout/recovery. Target WPVibe requests are currently returning HTTP 429 host/rate-limit responses; do not hammer retries. Resume with rollback first as soon as the target accepts a request.

### URGENT page272 rollback
Verified good pre-trial page272 `_elementor_data`: 29730 bytes, SHA256 `e1270fed74f2379eb2b8c938e16cd24316ba2a4a987111588a0516e40daf44af`, post_modified_gmt `2026-09-12 08:59:06`.
A server-side content/edit inserted experimental EAEL widget `b2e2c001` after legacy masonry widget `af2e004a`; resulting meta 43154 bytes, SHA256 `00ab199013b80e842fca8e3d37250eb39dd977e081a7603d2489fd4c64a3859c`. No CSS switch was applied. `wp elementor flush-css --regenerate` then exposed a WordPress fatal on `/soveny-specialista/`. Therefore this inserted widget must be removed before any other page272 write. Exact prepared widget JSON is local at `/mnt/data/alakfamester/hedge-eael-widget.json`; rollback is a match-once content/edit removing `,{<that exact minified widget>}` from post272 `_elementor_data`, followed by readback to the good 29730-byte / `e1270...` hash and frontend verification. Do not use SQL restore or guess another payload.

The isolated EAEL probes themselves were successful: temp page344 proved Free masonry rendering; temp page346 proved URL + media id 0 preserves the exact source alt via the item name. These temporary pages must be trashed after rollback. The failure was the unsupported direct structural injection / cache lifecycle on the real Atomic page, not evidence that EAEL masonry itself is unusable. Next implementation must use the supported Elementor save workflow with the complete stable page tree, or another isolated supported structure-preserving route; do not repeat direct structural content/edit on live page272.

### D17 scope and verified reference
User requires masonry galleries to use a plugin gallery widget. D17 selects Essential Addons for Elementor Free 6.8.3 `eael-filterable-gallery`; live schema verifies Free `masonry`, responsive columns and popup/lightbox. Source `/soveny-specialista.html` diagnostic exposed exactly 28 figures in this order: babermeggy pair; five tall leyland/sovenyveg images; `soveny-1.webp` through `soveny-21.webp`. Existing target legacy `af2e004a` has the same 28 images and alts. No asset reimport.
Source-equivalent masonry styling: 4 columns/230px, 16px gap; <=560px two columns/140px, 12px gap; natural aspect ratio after load; radius 14px 16px 14px 16px, 1px soft border, white background, shadow-sm. EAEL captions/filter controls must not introduce visual content absent from the source.

Hello Additional CSS post8 was untouched by the failed trial and remains 259652 bytes, SHA256 `f659a3b805dc54c7e28e832a531b14e9854508f1671621df9a4fa525435b042d`, marker v027. Do not change CSS until page272 is restored and the supported EAEL page save is validated.

## Other preserved package state
Page258: `_elementor_data` 81094 bytes, SHA256 `a3a3f85d828933caf0500984f9852c43b9c44cfce5a769edefd55673ef6984f1`; native reviews repair closed; legacy masonry `af270007` remains until page272 provides a proven D17 pattern.
Page268: 45647 bytes, SHA256 `1f9cfaba55dc15fd6d6cb1e675e6e6c79f9b4f930a0e2e60cadd8a05b1919dc5`; seven videos, native review tabs and hero structurally closed.
Page272 preserve proof carousel `af2e004d` (21 slides/dots), legacy masonry `af2e004a` (28 images), old hidden image widgets `af2e0009`..`af2e000e`, form `af2e0011`; after rollback inspect custom review widget `af2e0006` as a separate D12 defect.
Shared JS remains Head & Footer Code marker `af-source-interactions-v001`; do not duplicate handlers.

## Environment
WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4; Hello Elementor 3.5.1 active; Elementor 4.2.4; ElementsKit Lite 4.0.4; Essential Addons 6.8.3; MetForm 4.3.0; af-project 0.2.0; UpdraftPlus active. Preserve page56 homepage resource, capability page12, ElementsKit header20/footer21, MetForm33, Additional CSS8 and canonical pages 256/258/260/262/264/266/268/270/272.

## Acceptance
`PIXEL_PASS=false`. Formal frozen six-viewport source-target pairs/overlay/diff, geometry/fonts, controlled animation timelines, runtime interactions, console/network and second browser engine remain open. Live original is diagnostic only; preserve frozen aggregate `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`.

## Mandatory next action
1. Wait only for the current host-side 429 to clear, then remove exact inserted widget `b2e2c001` with match-once content/edit.
2. Verify page272 exact good hash `e1270...`, frontend and editor reopen.
3. Trash temp pages344/346.
4. Rebuild page272 EAEL migration only through supported Elementor save-page using stable existing IDs; verify before any CSS switch. Then evidence + STATE, page258 D17, and continue automatically.
