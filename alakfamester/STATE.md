# STATE — Alakfa mester

**Legfrissebb folytatási pont — 2026-09-12 09:08 UTC**

Aktív WPVibe-fiók: **`clicknest001@gmail.com`**. Cél: `https://alakfamester-wp.clicknest.hu/`. A friss szolgáltatói számláló **109/300 használt, 191 szabad**; a D11 szerinti **10 hívásos lezárási/helyreállítási tartalék kötelező**, ezért 181 hívás tervezhető a tartalék fölött. WordPress 7.1, PHP 8.3.33, WPVibe 1.16.4, aktív téma **Hello Elementor 3.5.1** (`hello-elementor`), élő admin kapcsolat rendben.

## Tényleges élő célállapot

- statikus kezdőlap: `show_on_front=page`, `page_on_front=56`, `page_for_posts=0`;
- kanonikus aloldalak: 256 `biologiai-vedelem`, 258 `galeria`, 260 `gyakran-ismetelt-kerdesek`, 262 `gyumolcsfak-metszese-es-vedelme`, 264 `idos-fak-megmentese-szolgaltatas`, 266 `kapcsolat`, 268 `referencia-videok`, 270 `rolam`, 272 `soveny-specialista`;
- megőrzendő: page12, ElementsKit header20/footer21, MetForm33, Hello Additional CSS post8;
- friss pluginleltár: `af-project` 0.2.0, Elementor 4.2.4, ElementsKit Lite 4.0.4, Head & Footer Code 1.5.9, MetForm 4.3.0, UpdraftPlus 1.26.7, WPVibe 1.16.4, Yoast 28.4 aktív; **LiteSpeed Cache 7.9.1 inaktív**.

## Kötelező határok

D03: V4 Atomic általános szerkezet, dokumentált legacy összetett widget-határ. D05: MetForm Free, SMTP/külső tesztüzenet tilos. D07: saját CSS csak a Hello Additional CSS `af-project` blokkjában. D11: 10 hívás tartalék. D12–D16: stabil Elementor-ID-k és rögzített Atomic/legacy/SVG szerephatárok megőrzendők. Source referencia hash: `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`. Acceptance viewportok: 1440×1000, 1024×900, 768×1024, 390×844, 360×800, 1920×1080.

## WP-20260912-A1 — lezárva

Helper háttérjavítások: page270 `af-s-rolam-9` paper→sage, page270 `af-s-rolam-11` sage→paper, page272 `af-s-soveny-specialista-8` stone→sage. Végső vizuális QA-ban újramérendők.

## WP-20260912-B — page258 galéria média-/DOM-paritás frontend-live

A forrás helyes renderelt készlete **36 működő kiemelt projektkép + 44 további galériakép**; a statikus HTML három 1757… hivatkozása a forráson is 404 volt. Page258 `_elementor_data` JSON-valid, 57 899 byte, a teljes rekonstruált projektstruktúra + 44 masonry elem bent van, a forrás-404-ek nincsenek. A natív Elementor dokumentum-újramentés sikeres. A `.elementor-element-af270007` frontend-visszaolvasás ténylegesen rendereli az új `#kiemelt-referenciak` blokkot, BA paneleket és manual carouseleket. A korábbi `op_dd3ae07c6db44c60` védett cache-törlés már nem szükséges; nem szabad újrapróbálni.

Nyitott page258: BA/manual-carousel/lightbox/masonry közvetlen műveleti QA, reduced-motion, exact screenshot/geometria, Elementor editor reopen.

## WP-20260912-C — page272 sövény médiaforrás-paritás frontend-live

Hero proof: **21 kép** `soveny-1.webp`…`soveny-21.webp`, stabil új widget **`af2e004d`**, 21 slide + 21 dot. Referencia: **28 masonry elem** a meglévő `af2e004a` widgetben. A régi ismétlődő képi blokkok visszaállítható kontrollként megmaradtak, célzottan rejtve. Mentés előtti validáció és natív Elementor újramentés PASS. Frontend DOM-ban mind a 21 hero proof és 28 referenciaelem ténylegesen jelen van.

A fresh Opera target tabon a proof auto-carousel valódi böngészős működése igazolt: két egymást követő accessibility tree lekérésben az aktív kép **5. → 6.** lett, tehát a 4000 ms automatikus léptetés fut. A proof-kártya a hero jobb oldali oszlopában vizuálisan megjelent; képbetöltés friss navigáció után megtörtént. Nyitott: masonry konkrét oszlopgeometria, reduced-motion, exact source-target vizuális mérés, editor reopen.

## WP-20260912-D — közös forrás-viselkedési JS telepítve / részben QA-zva

Head & Footer Code 1.5.9 pontos sémája a plugin saját forrásából igazolva: site-wide tulajdonos **`auhfc_settings_sitewide`** (`head/body/footer`, prioritások, shortcode flag-ek). A telepítés előtt ez az option nem létezett, tehát nem volt idegen HFC site-wide kód.

A közös target-adaptált source interaction csomag GitHub mainen: `build/source-interactions-v001.js`, commit `6710e707bbe4e4272ce6356c527c8511521de061`. Helyi validáció: `node --check` PASS, 9 516 byte, SHA256 `c545a177861d1e811041b3444bda5a587de34aa32edee4060936514928fe1e66`.

Tulajdonos: Head & Footer Code site-wide `footer`, marker **`af-source-interactions-v001`**. A rövid probe előbb sikeresen felkerült, majd véglegesen lecserélve. Friss adatellenőrzés az `auhfc_settings_sitewide` optionon:

- option méret 9 790 byte;
- final marker = 1;
- probe marker = 0;
- `__AF_SOURCE_INTERACTIONS_V001__` guard jelen;
- autoplay `setInterval` jelen;
- Elementor lifecycle `MutationObserver` jelen.

A script egy tulajdonosból inicializálja: `.js-ba`, `.js-carousel`, `.js-zoom`, `.masonry`; auto carousel 4000 ms; 600 ms vizuális transitiont a meglévő source CSS adja; nyíl/pont/billentyű/swipe, pause, reduced-motion no-autoplay, broken slide removal, lightbox, shortest-column masonry és 120 ms resize schedule. Elementor DOM-rerenderhez idempotens MutationObserver van.

Böngészős PASS jelenleg csak az **auto-carousel tényleges futására** van. BA/manual/lightbox/masonry interaktív működést közvetlen művelettel még igazolni kell; ezeket nem szabad PASS-nak nevezni.

## WP-20260912-E — aktív következő csomag: page270 + page264 médiaaudit

Munkalistából következő független építési feladat: a `Rólam` és `Idős fák megmentése` oldalak forrásképeinek teljes paritása. A következő távoli írás előtt kötelező:

1. visszaolvasni `specs/pages/rolam.json`, `specs/pages/idos-fak-megmentese-szolgaltatas.json` és szükséges media/behavior szerződéseket;
2. összevontan felmérni a médiatárban meglévő forrásfájlokat és a page270/page264 jelenlegi `_elementor_data` hivatkozásait;
3. helyben előállítani a hiánylistát; azonos assetet nem tölteni újra;
4. csak ténylegesen hiányzó, forrásban működő assetet importálni, majd stabil ID-kkel a legkisebb támogatott Elementor-csomagban bekötni;
5. natív dokumentum-újramentés + DOM/adat visszaellenőrzés.

## Utána

1. page268 featured videó szerkezeti/geometriai korrekció;
2. source↔target exact acceptance viewport QA: screenshot, overlay, diff, kulcsgeometria, overflow, viselkedések;
3. kritikus Elementor editor reopen/editability/unsaved-change;
4. csak teljes bizonyíték után `PIXEL_PASS`, majd 3. prompt átadási mód.

## Kapacitás

Friss keret: **109/300 használt, 191 szabad**; D11 tartalék után 181 tervezhető. A tényleges szolgáltatói számláló elsődleges minden becsléssel szemben.

## Hivatkozások

`AGENTS.md`; `specs/decisions.md`; `specs/acceptance.json`; `specs/behaviors.json`; `specs/pages/galeria.json`; `specs/pages/soveny-specialista.json`; `reports/site-finalization-20260911.md`; `reports/summary.md`; `build/source-interactions-v001.js`.
