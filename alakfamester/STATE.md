# STATE — Alakfa mester

**Legfrissebb folytatási pont — 2026-09-12 09:00 UTC**

Aktív WPVibe-fiók: **`clicknest001@gmail.com`**. Cél: `https://alakfamester-wp.clicknest.hu/`. A friss szolgáltatói számláló **101/300 használt, 199 szabad**; a D11 szerinti **10 hívásos lezárási/helyreállítási tartalék kötelező**, ezért 189 hívás tervezhető a tartalék fölött. WordPress 7.1, PHP 8.3.33, WPVibe 1.16.4, aktív téma **Hello Elementor 3.5.1** (`hello-elementor`), élő admin kapcsolat rendben.

## Tényleges élő célállapot

- statikus kezdőlap: `show_on_front=page`, `page_on_front=56`, `page_for_posts=0`;
- kanonikus aloldalak: 256 `biologiai-vedelem`, 258 `galeria`, 260 `gyakran-ismetelt-kerdesek`, 262 `gyumolcsfak-metszese-es-vedelme`, 264 `idos-fak-megmentese-szolgaltatas`, 266 `kapcsolat`, 268 `referencia-videok`, 270 `rolam`, 272 `soveny-specialista`;
- megőrzendő erőforrások: page12, ElementsKit header20/footer21, MetForm33, Hello Additional CSS post8;
- aktív pluginok a friss leltár szerint: `af-project` 0.2.0, Elementor 4.2.4, ElementsKit Lite 4.0.4, Head & Footer Code 1.5.9, MetForm 4.3.0, UpdraftPlus 1.26.7, WPVibe 1.16.4, Yoast 28.4; **LiteSpeed Cache 7.9.1 inaktív**;
- új konkurens galéria-/carousel-addon nem szükséges.

## Kötelező határok

D03: V4 Atomic általános szerkezet, dokumentált legacy összetett widget-határ. D05: MetForm Free, SMTP/külső tesztüzenet tilos. D07: saját CSS csak a Hello Additional CSS `af-project` blokkjában. D11: 10 hívás tartalék. D12–D16: stabil Elementor-ID-k és rögzített Atomic/legacy/SVG szerephatárok megőrzendők. Source referencia hash: `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`. Acceptance viewportok: 1440×1000, 1024×900, 768×1024, 390×844, 360×800, 1920×1080.

## WP-20260912-A1 — lezárva

Három bizonyított helper-hiba célzottan javítva: page270 `af-s-rolam-9` paper→sage, page270 `af-s-rolam-11` sage→paper, page272 `af-s-soveny-specialista-8` stone→sage. Mindhárom egyszeres `content/edit` csere volt; végső vizuális QA-ban újramérendő.

## WP-20260912-B — page258 galéria média-/DOM-paritás frontend-live

A fagyasztott forrás helyes renderelt készlete: **36 működő kiemelt projektkép + 44 további galériakép**; a statikus HTML három 1757… hivatkozása a forráson is 404 volt, az eredeti JS ezeket eltávolította.

A page258 `_elementor_data` JSON-valid, 57 899 byte; a teljes rekonstruált kiemelt projektstruktúra, a 44 masonry elem és a rejtett régi kontrollblokk jelen van, a három forrás-404 nincs beépítve. A korábbi teljes `save-page` WAF 403-mal elbukott és nem landolt; a tartalom kis `content/edit` csomagokban került fel. A natív Elementor `POST /elementor/v1/documents/258/media/import` dokumentum-újramentés sikeres (`document_saved: true`). Az Elementor element-cache base64-dekódolva már az új `ref-grid` és `af-gallery-legacy-hidden` állapotot tartalmazza. A stabil `.elementor-element-af270007` frontend-visszaolvasás **ténylegesen rendereli** az új `#kiemelt-referenciak` blokkot, before-after paneleket, manual carouseleket és a teljes új projektkártya-DOM-ot. A korábbi `.ref-grid` közvetlen selector no-match a WPVibe selector viselkedésének korlátja volt, nem hiányzó frontend tartalom.

A védett `_elementor_element_cache` közvetlen törlésére korábban létrejött `op_dd3ae07c6db44c60` approval függőben maradt, de **a feladat folytatásához már nem szükséges**; nem szabad újrapróbálni vagy nyers SQL-lel megkerülni.

Nyitott page258: source-viselkedési JS (before-after, manual carousel, lightbox, masonry), reduced-motion és interakcióteszt, vizuális/geometriai screenshot QA, Elementor editor reopen.

## WP-20260912-C — page272 sövény médiaforrás-paritás frontend-live

A forrás médiakészlete teljesen helyreállt, új médiafeltöltés nélkül, a már meglévő WordPress assetekből:

- hero proof: **21 kép** (`soveny-1.webp` … `soveny-21.webp`), új stabil widget ID **`af2e004d`**, class `af-art af-hedge-proof-host`, 21 carousel slide + 21 dot;
- referencia: **28 masonry elem** = 2 babérmeggy + 5 magas leylandi + 21 `soveny-*`; a meglévő `af2e004a` szerkeszthető text-editor widgetben;
- a korábbi 6 külön image widget és 15 képes legacy grid megmaradt visszaállítható kontrolladatként, de célzott rejtési osztállyal/stabil elem-ID-kre kötött CSS-sel nem jelenik meg;
- reviews komponens érintetlen.

Mentés előtti validáció: page272 JSON-valid, 29 057 byte, `af2e004d` pontosan egyszer, 21 `carousel__slide`, 28 `masonry__item`, `af-hedge-legacy-hidden` egyszer, `af-project:hedge-media-v001:start` CSS marker egyszer. A natív Elementor `POST /elementor/v1/documents/272/media/import` újramentés sikeres (`document_saved: true`). Frontend visszaolvasás:

- `.elementor-element-af2e004d` ténylegesen rendereli mind a 21 proof képet és 21 navigációs pontot;
- `.elementor-element-af2e004a` ténylegesen rendereli mind a 28 referencia masonry elemet és a rejtett legacy kontrollblokkot.

Hello Additional CSS post8 a hedge-media patch után **254 457 byte**; `af-project:hedge-media-v001:start` pontosan egyszer. A már meglévő globális source `.carousel`, `.masonry` és before-after CSS újrahasznált, nem duplikált. A proof-host külön target-geometriai adaptert kapott a meglévő `.af-hero > .af-art` jobb oldali oszlop-szerződéshez.

Nyitott page272: auto-carousel és masonry JS tényleges futása/reduced motion; exact source-target geometria és screenshot QA; Elementor editor reopen.

## WP-20260912-D — aktív következő csomag: közös forrás-viselkedési JS

A fagyasztott `script.js` viselkedési szerződései visszaolvasva. Egyetlen névtérbe zárt közös tulajdonos szükséges, nem oldalpéldányonkénti script:

- `.js-ba-range` → before-after `--ba-pos` frissítés;
- `.js-carousel` → auto/manual carousel, 600 ms CSS transition, auto mód 4000 ms, nyíl/pont/billentyű/swipe, hover/focus pause, reduced-motion esetén nincs autoplay;
- `.js-zoom` → lightbox;
- `.masonry.js-masonry` → forrás szerinti oszlopképzés/átrendezés és resize kezelés.

Az AGENTS szerint összetett saját JS elsődleges helye a projektplugin; dokumentumszintű kódhoz a Head & Footer Code engedélyezett. Jelenleg Head & Footer Code 1.5.9 aktív. `auhfc_settings` opció még **nem létezik**, DB-ben csak `auhfc_db_ver` található, ezért nincs meglévő globális idegen kód, amit felül lehetne írni. Írás előtt a plugin 1.5.9 pontos opciósémáját saját forrásból igazolni kell; találgatott `auhfc_settings` struktúra nem menthető.

## További sorrend

1. közös source JS tulajdonos lezárása + page258/page272 behavior QA;
2. page270 / page264 teljes médiaaudit és szükséges pótlás;
3. page268 featured videó szerkezeti/geometriai javítása;
4. source↔target desktop/mobile vizuális QA az exact acceptance viewportokon, screenshot/overlay/diff/overflow;
5. kritikus Elementor editor reopen/editability/unsaved-change;
6. csak teljes bizonyíték után `PIXEL_PASS`, majd 3. prompt átadási mód.

## Kapacitás

Friss keret: **101/300 használt, 199 szabad**; D11 tartalék után 189 tervezhető. Következő nagy csomag lezárásakor a szolgáltatói számlálót újra közvetlenül le kell kérni. A tényleges számláló elsődleges minden becsléssel szemben.

## Hivatkozások

`AGENTS.md`; `specs/decisions.md`; `specs/acceptance.json`; `specs/behaviors.json`; `specs/pages/galeria.json`; `specs/pages/soveny-specialista.json`; `reports/site-finalization-20260911.md`; `reports/summary.md`.
