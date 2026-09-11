# Alakfa mester — site finalization / QA checkpoint

**Időpont:** 2026-09-11, a 300 hívásos WPVibe ablak lezárási pontja előtt

## Élő WordPress állapot

- Cél: `https://alakfamester-wp.clicknest.hu/`
- Referencia: `https://alakfamester.clicknest.hu/`
- Aktív WPVibe-fiók: `ncsnorbert+20260911@gmail.com`
- Utolsó közvetlen WPVibe számláló: **290 / 300**. A projekt D11 szerinti **10 hívásos helyreállítási/vésztartalék** érintetlenül maradt.
- A WordPress statikus kezdőlapja most **page 56 / Főoldal**: `show_on_front=page`, `page_on_front=56`, `page_for_posts=0`.
- Additional CSS post 8: **243875 byte**; a teljes referencia-geometriai szabályrendszer jelen van, beleértve a `af-s-soveny-specialista-14` szabályt.
- A MetForm 33 többfájlos fotófeltöltési flagje aktív (`mf_input_multiple_file=on`).

## Összevont strukturális QA

Az utolsó egyetlen SQL-QA minden céllapot egyszerre ellenőrzött. Mind a tíz oldal `publish`, minden `_elementor_data` JSON érvényes.

| ID | slug | roots | mért referencia-szekciók | elvárt | hullámok | elvárt |
|---:|---|---:|---:|---:|---:|---:|
| 56 | fooldal | 38 | 0* | 0* | 0* | 0* |
| 256 | biologiai-vedelem | 1 | 7 | 7 | 4 | 4 |
| 258 | galeria | 1 | 8 | 8 | 6 | 6 |
| 260 | gyakran-ismetelt-kerdesek | 1 | 9 | 9 | 8 | 8 |
| 262 | gyumolcsfak-metszese-es-vedelme | 1 | 6 | 6 | 3 | 3 |
| 264 | idos-fak-megmentese-szolgaltatas | 1 | 12 | 12 | 8 | 8 |
| 266 | kapcsolat | 1 | 4 | 4 | 4 | 4 |
| 268 | referencia-videok | 1 | 6 | 6 | 5 | 5 |
| 270 | rolam | 1 | 8 | 8 | 5 | 5 |
| 272 | soveny-specialista | 1 | 9 | 9 | 6 | 6 |

`*` A Főoldal korábban szakaszonként, saját stabil ID/CSS tulajdonlással készült; ott nem az `af-s-index-*` mérési osztályrendszer a kanonikus tulajdonos.

További élő ellenőrzés:

- page 56: 38 top-level Elementor gyökér, MetForm jelen.
- page 258: MetForm jelen; Elementor image-widgetek mellett további képek közvetlen DOM-ban vannak.
- page 268: **7 YouTube-videó** élő Elementor-adatban.
- page 266 és 272: MetForm jelen.
- A böngésző accessibility DOM-ja a statikus `/` URL-en már valóban a Főoldalt adja, és tartalmazza a benefits/species blokkot is.

## Forrásparitás — ami bizonyított

A fagyasztott referencia HTML-ekből és az acceptance/geometry baseline-ból a következő viewportokhoz vannak pontos geometriai szabályok: 1920, 1440, 1024, 768, 390 és 360 px. A kilenc aloldalon a mért forrás-szekciókhoz tartozó `af-s-*` osztályok és a hullám-pozíciók száma már teljesen egyezik az elvárttal. A forrás szekciószínei és elrendezési sorrendje alapján a legtöbb oldal helper-osztályai is a referencia ritmusát követik.

## Ismert, még nyitott pixel-/médiaparitási eltérések

A site **még nem jelölhető pixel-perfect PASS-nak**.

1. **Target screenshot/overlay bizonyíték hiányzik.** Az Opera Browser Connector DOM-olvasása és navigációja működik, de a screenshot hívás `Browser not connected / Allow AI connection` hibát ad. A konténer DNS-e szintén nem oldja fel a Clicknest hostokat, ezért abból sem készíthető hiteles target screenshot. A forrás screenshotok és a fagyasztott geometria rendelkezésre állnak, de target kép nélkül nincs korrekt diff/overlay PASS.
2. **Galéria médiaparitás:** a fagyasztott referencia `<main>` részében 86 kép van (3 review + 39 kiemelt + 44 további kép). A jelenlegi target accessibility DOM 37 képet jelzett. A fő képpárok és sok további saját munka jelen vannak, de a teljes forráskészlet még nincs visszaadva.
3. **Sövény médiaparitás:** a referencia `<main>` részében 52 kép van (21 hero proof + 3 review + 28 referencia). A jelenlegi target accessibility DOM 16 képet jelzett. A `soveny-7`–`soveny-21` sorozat látszik, de a teljes proof/gallery készlet még nem egyezik.
4. **Rólam háttérszín:** a live adatokban `af-s-rolam-9` jelenleg `af-bg-paper`, holott a forrás ezen a helyen sage; `af-s-rolam-11` jelenleg `af-bg-sage`, holott a forrás paper. Ez két egyszerű helper-osztály csere a következő írható körben.
5. **Sövény háttérszín:** `af-s-soveny-specialista-8` jelenleg `af-bg-stone`; a forrás ezen a pozíción sage. Egy helper-osztály csere szükséges.
6. **Referencia-videók:** a 7 videó mind jelen van, de a featured videó Elementorban külön testvérként maradt a 4. mért szekció mellett. A forrásban ez a featured szekció része. A DOM-tartalom megvan, de a pixelpontos vertikális összegzésnél ezt screenshot mellett külön ellenőrizni kell.

## Következő biztonságos folytatás

A következő WPVibe-ablakban először a kvótát kell ellenőrizni. Ha legalább 20–25 írható hívás szabad a 10-es tartalékon felül, akkor sorrendben:

1. a három ismert háttér-helper eltérés javítása;
2. a galéria teljes forrás-képkészletének visszaépítése a már feltöltött WordPress médiatárból;
3. a sövény hero proof + referencia-galéria forrásparitásának visszaépítése;
4. a Rólam / idős-fák oldalak forrás-médiaparitásának újraszámolása és szükség szerinti pótlása;
5. referencia-videók featured blokk vertikális szerkezetének összevonása vagy célzott CSS-kompenzációja;
6. desktop és mobil target screenshotok készítése az exact acceptance viewportokon, source-target overlay/diff és overflow ellenőrzés;
7. authentikált Elementor editor reopen/editability/unsaved-change ellenőrzés a kritikus oldalakon;
8. csak ezek után `PIXEL_PASS` státusz.

A korábbi `STATE.md` legfelső blokkja már elavult (még 12/300 kreditet és 9 root-os page56 állapotot ír); **ennél a checkpointnál a jelen fájl és a tényleges WordPress állapot az elsődleges.**
