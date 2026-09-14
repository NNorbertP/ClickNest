# Header parity — current authoritative package

**Scope:** global header only. Reference: `https://alakfamester.clicknest.hu/`. Target: `https://alakfamester-wp.clicknest.hu/`.

## Current continuation

Use `header-continuation-20260914-v007.json` as the last deployed-state checkpoint, then apply the newer authoritative package below. The WordPress live baseline is still the previously verified base `header-live-source-v001` plus deployed `header-desktop-alignment-v003`; nothing newer has been written because WPVibe became unavailable.

## Authoritative source contract and acceptance

- `../../specs/header-contract-v001.json` — exact header CSS/JS contract transcribed from the live reference `styles.css` and `script.js`.
- `../../specs/header-acceptance-v001.json` — geometry/typography/responsive/source-target selector pairs and controlled viewports.
- `../../specs/header-behaviors-v001.json` — sticky/dropdown/mobile behavior tests.
- `../../specs/header-a11y-v001.json` — closed/open accessibility-tree requirements.

## Authoritative next deployment

- CSS: `../../build/header-source-flex-responsive-v007.css`
  - source flex/space-between model; no guessed absolute centering;
  - exact 1460/1240/900/560 source breakpoints;
  - source hamburger geometry;
  - current parent/child visual states;
  - exactly one visible custom dropdown implementation; original ElementsKit submenu is suppressed only when a custom host sibling exists.
- Runtime: `../../build/header-runtime-parity-v008.json`
  - banner landmark;
  - one brand announcement, decorative logo/tagline duplication removed from a11y without visual change;
  - decorative caret removed from a11y without visual change;
  - rAF sticky scheduling at >8px;
  - exact dropdown keyboard traversal/current-route state;
  - mobile initial focus;
  - original duplicate ElementsKit submenu aria-hidden/inert while custom runtime exists.
- Remote sequencing/budget/rollback: `../../build/header-deployment-plan-v009.json`.

## Do not deploy

These are historical/prepared iterations superseded before deployment: `header-desktop-alignment-v004.css`, `header-alignment-responsive-v005.css`, `header-source-flex-responsive-v006.css`, runtime active-groups v002/v003, runtime parity v004/v005/v006/v007, deployment plans v007/v008.

## Live baseline guards before any write

Require a fresh read and reconcile any drift. Last verified values:

- Hello Additional CSS post8: `600999 B`, SHA256 `8cd8a9cfb804ba6ca5ab57a8ff59d7858c2e14bfb940f4921f2bceddefd80b83`;
- deployed refinement marker: `af-project:header-desktop-alignment-v003`;
- ElementsKit header ID20 `_elementor_data`: `7729 B`, SHA256 `db264139dd139df1f2451cd06f0d7bb44aff685eaa46179bcd58436af2735c0d`;
- Code Snippets ID7: `9723 B`, SHA256 `260f11e080437159c227019da27a3dd5c8099a35c7d10d82cf861bc7ce8200dd`, active.

Any mismatch means an intervening/manual change: stop, read the actual live state and merge deliberately. Never replay a prepared package blindly.

## Current blockers

WPVibe is unavailable/disabled in the current conversation, so the requested `ncsnorbert+20260914-5@gmail.com` account cannot yet be re-verified for site connection/quota and no WordPress write is safe. Opera is intentionally kept to one reference + one target tab; connector availability has been intermittent. `PIXEL_PASS=false` until controlled same-browser/viewport/DPR/zoom/load-state screenshot pairs, overlay/diff and required behavior/a11y tests pass.
