# STATE PREPEND — 2026-09-14, +5 PROFILE VERIFIED; LIVE CONNECTOR BLOCKED; DIRECT VISUAL/AX CONTINUATION

## Tool state
Target only: `https://alakfamester-wp.clicknest.hu/`; reference read-only: `https://alakfamester.clicknest.hu/`.

WPVibe profile identity was verified as **ncsnorbert+20260914-5@gmail.com** with verified email, but the connector became unavailable before the target site's connection and rolling quota could be confirmed. The old +4 quota is historical only. **Do not send a WordPress write until the +5 site connection and exact quota are freshly verified.**

Opera policy remained strict: only the two pre-existing project tabs were reused; **zero new tabs** were opened. The connector recovered temporarily for same-browser 1640x920 QA, then disconnected again. Do not open replacement tabs just to obtain proof.

## Preserved live baselines
- page272 Hedge: `_elementor_data` 53606 B / SHA256 `ef688b2885adb2e7f0b272f294efb3a1066fd22c3005ec33ee2f0eada2213b56` / JSON valid; legacy/gallery package closed; ID36 v001 documented active.
- page256 Biological Protection: 35382 B / `55fd9bbe1710db728a30188ff93ea6a2da9df6a6f33cad02632835e4eca990f3` / JSON valid; v010 semantic closeout + ID35 authoritative.
- page264 Old Trees: 48874 B / `09f661e095714c1b3149c40406d7f31f04887c49a392f59c7c41b11fee3a788a` / JSON valid; ID33 active. `af-oldtrees-visual-v004` and v005 are already live; never replay them. v004 readback: 611030 B / `87fb6f275f9550dfcb406ac855b1287f4cf4dbd15da226840e6d2d8c28108bb6`; v005 marker readback passed at returned 611423 B.
- global header: header-v004 CSS + ID37 route-current helper live; ID7 8px sticky preserved.
- page268 Reference Videos: CTA structural order already fixed; 46622 B / `af362a9e7295cf06757b94c487e7504dbc5a01f84ee956906c16d6c93059e747`.

## Fresh direct proofs
### page256
`reports/subpages/bio-direct-ax-compare-20260914-v014.json` directly proved source stress card `article` vs target `aside`/`complementary`, and source expectations section 2 article roles vs target 0 while content order/headings align. Technology has 3 article roles on both sides; reviewed region/table names align.

### page264
`reports/subpages/oldtrees-direct-live-compare-20260914-v005.json` + `reports/subpages/oldtrees-post-v005-visual-qa-20260914-v007.json`:
- final review AX proof PASS: exact three real tab names; previous/next names match; numbered duplicate review dots are absent from target AX/focus;
- Tiszafa range source/target accessible name and initial value 50 match;
- Nordmann static AX prev/next + dot 1–6 names match; timed/swipe/reduced-motion interaction still open;
- v005 card surfaces/icons/heights are live, but source has equal comparison columns while target remains unequal-width;
- request form heading/panel/clock are now source-like, but target green contact-button label/value foreground remains dark instead of source white;
- hero left copy starts roughly 40–45px lower at the same viewport while lower hero boundary is close; root cause is not proven, so no hero patch;
- `KÉT ÚT` exists in both AX trees under the same comparison region; anchored screenshot difference may be ID/scroll landing, not missing text. Do not rewrite it.

Prepared, NOT deployed:
- `build/oldtrees-visual-v006-contact-text-cascade.css` + static QA: three page264 contact color declarations only;
- `build/oldtrees-visual-v007-comparison-grid-cascade.css` + static QA: page264 comparison parent grid/child sizing only.
Prefer one guarded post8 write containing both blocks only if fresh preflight/browser proof still shows both failures.

## Header proof
`reports/header/header-route-current-live-qa-20260914-v007.json`:
- service child page: source/target Services parent current state PASS;
- normal homepage: source/target Főoldal current and Services not-current PASS;
- duplicate caret absent on reviewed desktop captures.
`build/header-runtime-active-groups-v002.json` is obsolete for deployment because live ID37 already owns the behavior. References-child route, dropdown keyboard/focus, mobile drawer and controlled scroll state remain proof-only.

## Floating quick-contact dock
Repeated explicit source screenshots show phone/mail/CTA; repeated explicit target screenshots show an almost blank white pill while target AX exposes all three expected links. Exact source `.dock`, `.dock__icon`, `.dock__cta` desktop/mobile CSS was recovered from the reference AX stylesheet. Current plan: `build/floating-contact-dock-diagnostic-plan-20260914-v002.json`.

Do not patch yet. Fresh live target reads must first establish ID7 emitted classes and every current post8 `.dock/.af-source-dock` declaration/winning cascade. Do not create a second runtime owner or duplicate markup.

## Next remote sequence when WPVibe +5 is usable
1. Verify +5 profile, target site connection and exact quota. Preserve D11 10-call recovery reserve; prefer >=30 remaining for the first 7-call package because a 429 may consume retries.
2. page256 first proven visual package: `build/bio-visual-single-write-plan-20260914-v004.json`; one guarded post8 insertion containing `bio-visual-parity-v001.css` + `bio-hero-layout-parity-v001.css`, expectations v002 remains HOLD.
3. page256 stress semantic microfix: fresh raw af260007 search then exact tag-only aside -> article; no full save/reconstruction.
4. page264 v006+v007 only if fresh post8/page264 readback and browser evidence prove both still needed.
5. floating dock: live cascade diagnosis, then smallest source-exact CSS correction only if proven.
6. page256 af260013 expectations article investigation only from fresh raw boundaries.
7. page272 ID36 successor only after live DOM proves the direct-call description owner inside MetForm33; update existing ID36 only.

Authoritative queue: `reports/parity-open-items-20260914-v011.json`.

## Hard blockers / acceptance
Exact page270 portrait and page258 Ellwoodi alternate-view source bytes remain unavailable/404. `specs/acceptance.json` and `specs/behaviors.json` remain absent. Deterministic same-browser/DPR/zoom 1920/1440/1024/768/390/360 overlay/diff and generic click/keyboard interaction tooling remain unavailable. SMTP/delivery and real submissions stay outside prompt 2.

`PIXEL_PASS=false` until deterministic acceptance evidence exists.
