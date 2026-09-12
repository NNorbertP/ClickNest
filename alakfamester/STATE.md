# STATE — Alakfa mester

**Legfrissebb folytatási pont — 2026-09-12 09:22 UTC**

Aktív WPVibe-fiók: **`clicknest001@gmail.com`**. Cél: `https://alakfamester-wp.clicknest.hu/`. Friss szolgáltatói számláló: **132/300 használt, 168 szabad**; a D11 szerinti **10 hívásos lezárási/helyreállítási tartalék kötelező**, így 158 hívás tervezhető a tartalék fölött. WordPress 7.1, PHP 8.3.33, WPVibe 1.16.4, aktív téma Hello Elementor 3.5.1, Elementor 4.2.4.

## Tényleges élő célállapot

- statikus kezdőlap: `show_on_front=page`, `page_on_front=56`, `page_for_posts=0`;
- kanonikus aloldalak: 256 `biologiai-vedelem`, 258 `galeria`, 260 `gyakran-ismetelt-kerdesek`, 262 `gyumolcsfak-metszese-es-vedelme`, 264 `idos-fak-megmentese-szolgaltatas`, 266 `kapcsolat`, 268 `referencia-videok`, 270 `rolam`, 272 `soveny-specialista`;
- megőrzendő: page12, ElementsKit header20/footer21, MetForm33, Hello Additional CSS post8;
- aktív: `af-project` 0.2.0, Elementor 4.2.4, ElementsKit Lite 4.0.4, Head & Footer Code 1.5.9, MetForm 4.3.0, UpdraftPlus 1.26.7, WPVibe 1.16.4, Yoast 28.4; LiteSpeed Cache 7.9.1 inaktív.

## Kötelező határok

D03 V4 Atomic általános szerkezet / dokumentált legacy összetett határ. D05 MetForm Free, SMTP/külső tesztüzenet tilos. D07 saját CSS csak Hello Additional CSS `af-project` blokk. D11 10 WPVibe-hívás tartalék. D12–D16 stabil Elementor-ID-k és rögzített Atomic/legacy/SVG határok megőrzendők. Source referencia hash: `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`. Acceptance viewportok: 1440×1000, 1024×900, 768×1024, 390×844, 360×800, 1920×1080.

## WP-20260912-A1 — lezárva

Helper háttérjavítások: page270 `af-s-rolam-9` paper→sage, page270 `af-s-rolam-11` sage→paper, page272 `af-s-soveny-specialista-8` stone→sage. Végső vizuális QA-ban újramérendők.

## WP-20260912-B — page258 galéria struktúra/frontend PASS, behavior QA részben nyitott

A fagyasztott forrás renderelt készlete: 36 működő kiemelt projektkép + 44 további kép. A teljes rekonstruált projekt-DOM és 44 masonry elem bent van; natív Elementor újramentés sikeres; `af270007` frontendben az új referencia DOM-ot rendereli. Közös JS telepítve. Nyitott: BA/manual/lightbox/masonry közvetlen műveleti QA, reduced-motion, exact vizuális mérés, editor reopen. A korábbi `op_dd3ae07c6db44c60` cache-delete approval nem szükséges és nem ismétlendő.

## WP-20260912-C — page272 sövény média/frontend PASS, auto-carousel PASS

Hero proof: 21 kép / 21 slide / 21 dot, widget `af2e004d`. Referencia: 28 masonry elem `af2e004a`. A régi ismétlődő képi blokkok visszaállíthatóan megmaradtak, célzottan rejtve. Natív Elementor újramentés PASS, frontend DOM PASS. Opera böngészőben a proof auto-carousel 5.→6. aktív képre lépett a 4 s intervallumon belül. Nyitott: masonry konkrét oszlopgeometria, reduced-motion, exact vizuális mérés, editor reopen.

## WP-20260912-D — közös forrás-viselkedési JS telepítve

Tulajdonos: Head & Footer Code 1.5.9 site-wide `auhfc_settings_sitewide.footer`, marker `af-source-interactions-v001`. GitHub main: `build/source-interactions-v001.js`, commit `6710e707bbe4e4272ce6356c527c8511521de061`, SHA256 `c545a177861d1e811041b3444bda5a587de34aa32edee4060936514928fe1e66`, `node --check` PASS. BA, auto/manual carousel, lightbox, masonry, broken-slide removal, reduced-motion no-autoplay és Elementor MutationObserver benne van. A site-wide optionban final marker 1, probe 0.

## WP-20260912-E — page270 `Rólam` + page264 `Idős fák` forrásstruktúra-paritás: STRUCTURE/FRONTEND PASS, behavior részben QA-zva

Forrás-DOM alapján nem kellett új médiafeltöltés; `biro-janos-portre.webp` nem szükséges látható forráselem. Minden tényleges source asset már a médiatárban volt.

### page270 `Rólam`

- `af2d0007` forrásidegen kép stabil ID megtartásával vizuálisan rejtve; a copy 100% szélességet kapott;
- `af2d0047` ugyanazon stabil widgetben 5 képes **manual carousel** + timeline;
- `af2d004b` ugyanazon stabil widgetben 3 source-like BA projektkártya: tiszafa, kék boróka, keleti tuja;
- pre-save validáció: JSON-valid, `_elementor_data` 17 551 byte, 5 carousel slide, 3 BA range, `af-personal-gallery` 0;
- natív Elementor dokumentum-újramentés PASS;
- frontend `af2d0047` és `af2d004b` visszaolvasás PASS;
- Opera manual-carousel teszt PASS: két, 4+ másodperccel elválasztott állapotban végig `Biró János a munkájában, 1. kép` maradt aktív → nincs autoplay.

### page264 `Idős fák`

- `af2a004a` ugyanazon stabil widgetben source-like két projektkártya;
- tiszafa: teljes BA range + story-meta;
- Nordmann-jegenyefenyő: 6 képes **auto** carousel + 6 dot + story-meta;
- pre-save validáció: JSON-valid, `_elementor_data` 20 170 byte, 6 carousel slide, 1 BA range, régi `af-before-after` 0; abies 2–5 hivatkozások jelen;
- natív Elementor dokumentum-újramentés PASS;
- frontend `af2a004a` visszaolvasás PASS;
- Opera első live állapotban a Nordmann carousel aktív képe már a 3. kép volt, tehát az inicializáció/autoplay elindult; a második időzített olvasás előtt az Opera Connector megszakadt. Emiatt az oldalspecifikus auto-carousel kétállapotos PASS még nyitott, noha a közös autoplay page272-n már bizonyított.

CSS: Hello Additional CSS post8-ban marker `af-project:about-survivor-media-v001` pontosan egyszer; patch utáni postméret 255 948 byte. Részletes bizonyíték: `reports/subpages/about-survivor-source-parity-v001.json` (commit `188e1a3cb853750d103de17f64177ce9af4d3654`).

## WP-20260912-F — aktív következő csomag: page268 `Referencia videók`

Munkalistából következő független feladat: a már meglévő 7 videó mellett a **featured videó szerkezeti/geometriai eltérésének** pontos forrás↔target auditja és minimális javítása.

Kötelező sorrend a következő írás előtt:

1. visszaolvasni a releváns page268 specifikációt, acceptance/behavior szabályokat és a fagyasztott forrás `main`/videó szakasz tényleges DOM-ját;
2. frissen visszaolvasni page268 `_elementor_data` stabil ID-ket, video URL-eket és a hozzá tartozó post8 CSS owner szabályokat;
3. eldönteni, hogy a különbség tartalom/szerkezet vagy kizárólag geometriai adapter; a 7 már meglévő videót nem duplikálni;
4. változáscsomagot helyben validálni, majd a legkisebb támogatott Elementor/CSS mentést használni;
5. natív dokumentum-újramentés, frontend readback, lehetőség szerint Opera source↔target ellenőrzés.

## Utána

1. source↔target exact acceptance viewport QA: screenshot, overlay, diff, kulcsgeometria, overflow, kritikus viselkedések;
2. kritikus Elementor editor reopen/editability/unsaved-change;
3. nyitott BA/manual/lightbox/masonry/reduced-motion tesztek lezárása, amennyire a böngészőeszköz engedi;
4. csak teljes bizonyíték után `PIXEL_PASS`, majd 3. prompt átadási mód.

## Kapacitás

Friss keret: **132/300 használt, 168 szabad**; D11 tartalék után 158 tervezhető. A következő nagy csomag lezárásakor újra közvetlen számláló-lekérés szükséges.

## Hivatkozások

`AGENTS.md`; `specs/decisions.md`; `specs/acceptance.json`; `specs/behaviors.json`; `specs/pages/galeria.json`; `specs/pages/soveny-specialista.json`; extrahált `specs/pages/rolam.json`; extrahált `specs/pages/idos-fak-megmentese-szolgaltatas.json`; `reports/site-finalization-20260911.md`; `reports/summary.md`; `reports/subpages/about-survivor-source-parity-v001.json`; `build/source-interactions-v001.js`.
