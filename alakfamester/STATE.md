# STATE — Alakfa mester

**Legfrissebb folytatási pont — 2026-09-12 06:20 UTC**

A projekt folytatása az új WPVibe-fiókkal történik: **`clicknest001@gmail.com`**. A cél továbbra is `https://alakfamester-wp.clicknest.hu/`, a WordPress-kapcsolat frissen ellenőrzött adminisztrátori jogosultsággal működik. WPVibe `site_info`: WordPress 7.1, PHP 8.3.33, WPVibe 1.16.4, aktív téma **Hello Elementor 3.5.1** (`hello-elementor`). A közvetlen szolgáltatói kvótajelzés a munkacsomag indításakor **0/300 használt, 300 szabad**; a D11 szerinti **10 hívásos lezárási/helyreállítási tartalék kötelező**.

## Tényleges élő célállapot

A 2026-09-12-i friss WPVibe-visszaolvasás szerint a tegnapi `reports/site-finalization-20260911.md` checkpoint fennáll:

- statikus WordPress-kezdőlap: `show_on_front=page`, `page_on_front=56`, `page_for_posts=0`;
- page 56 `Főoldal`: publish, `_elementor_data` JSON-valid, **38 top-level gyökér**;
- aloldalak és ID-k: 256 `biologiai-vedelem`, 258 `galeria`, 260 `gyakran-ismetelt-kerdesek`, 262 `gyumolcsfak-metszese-es-vedelme`, 264 `idos-fak-megmentese-szolgaltatas`, 266 `kapcsolat`, 268 `referencia-videok`, 270 `rolam`, 272 `soveny-specialista`; mind publish és JSON-valid;
- a kilenc aloldalon a tegnap rögzített referencia-szekció/hullám counts továbbra is változatlanul egyeznek a finalization riporttal;
- megőrzendő erőforrások: page12 képességpróba, ElementsKit header20, footer21, MetForm33, Hello Additional CSS post8;
- Additional CSS post8: **243875 byte**, SHA256 **`e1085f6597c20999bd7ee8d567ffbfa8411fea9948f825a4590e055d88fa4fda`**; a `af-s-soveny-specialista-14` geometriai szabály jelen van.

Aktív, megőrzendő pluginfüggőségek a friss `site_info` szerint: `af-project`, Elementor, ElementsKit Lite, LiteSpeed Cache, MetForm, UpdraftPlus, WPVibe, Yoast. Új plugin telepítésére a most következő javítási csomaghoz nincs indok; az AGENTS.md választási rendje szerint meglévő natív/Elementor + Additional CSS megoldások elsőbbséget élveznek.

## Kötelező technikai határok

- D03: általános szerkezet V4 Atomic; MetForm/ElementsKit/af-project összetett elemek dokumentált legacy határon maradhatnak.
- D05: a kapcsolati űrlap kezelője MetForm Free; SMTP/külső tesztüzenet ebben a módban tilos.
- D07: minden saját kézzel írt CSS kizárólag a Hello Additional CSS megjelölt `af-project` blokkjában lehet.
- D11: legalább 10 WPVibe-hívás lezárási/helyreállítási tartalék.
- D12–D16: a már igazolt főoldali Atomic/legacy és SVG/CSS szerephatárokat meg kell őrizni; meglévő Elementor-ID nem változtatható indokolatlanul.
- Source referencia hash: `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`.
- Acceptance nézetek: 1440×1000, 1024×900, 768×1024, 390×844, 360×800, 1920×1080; statikus kulcselem cél tűrés desktop 2 CSS px, mobil 3 CSS px.

## Tegnapról bizonyított nyitott eltérések

A webhely **nem PIXEL_PASS**. Elsődleges bizonyíték: `reports/site-finalization-20260911.md`.

1. `rolam` page270: `af-s-rolam-9` jelenleg paper, a forrásban sage; `af-s-rolam-11` jelenleg sage, a forrásban paper.
2. `soveny-specialista` page272: `af-s-soveny-specialista-8` jelenleg stone, a forrásban sage.
3. Galéria page258: a forrás `<main>` 86 képet tartalmaz (3 review + 39 kiemelt + 44 további); tegnapi target accessibility DOM 37 képet mutatott. A teljes forrás-médiakészletet és sorrendet vissza kell építeni a már meglévő médiatárból.
4. Sövény page272: a forrás `<main>` 52 képet tartalmaz (21 hero proof + 3 review + 28 referencia); tegnapi target accessibility DOM 16 képet mutatott. A teljes hero proof és referencia-galéria paritást helyre kell állítani.
5. `rolam` és `idos-fak-megmentese-szolgaltatas`: a forrásképek teljes paritását újra kell számolni, és a hiányzó képeket pótolni.
6. `referencia-videok` page268: mind a 7 videó jelen van, de a kiemelt videó Elementorban külön testvérként maradt a mért szekció mellett; a forrás vertikális struktúrájával össze kell vonni vagy célzottan kompenzálni.
7. Target screenshot/overlay/diff bizonyíték hiányzik. Az Opera Browser Connector DOM-olvasása működött, screenshot végpontja tegnap hibázott; ezt újra kell próbálni. PIXEL_PASS csak friss target képpárral, geometriával/overflow-val és kritikus editor reopen ellenőrzéssel adható.

## Automatikusan kiválasztott következő munkacsomag

**WP-20260912-A — paritási javítások és médiarekonstrukció.** Sorrend:

1. a három ismert helper-osztály eltérés célzott javítása és visszaolvasása;
2. page258 galéria forrás-média sorrendjének helyi rekonstrukciója a `specs/pages/galeria.json` alapján, élő média-ID/URL megfeleltetéssel, majd egy stabil Elementor mentéssel;
3. page272 sövény hero proof + galéria rekonstrukciója ugyanígy;
4. page270 / page264 médiaaudit és szükséges pótlás;
5. page268 featured videó szerkezeti/geometriai javítása;
6. source↔target desktop/mobile vizuális QA az acceptance viewportokon, interakciók a `specs/behaviors.json` szerint; hibák javítása több belső körben;
7. kritikus Elementor editor reopen/editability/unsaved-change ellenőrzés;
8. csak teljes bizonyíték után `PIXEL_PASS`, majd 3. prompt átadási mód.

Minden nagyobb távoli mentés előtt az érintett oldal aktuális JSON/ID/class/media állapotát vissza kell olvasni; bizonytalan korábbi írás nem ismételhető. Strukturális/repeated Elementor változtatásnál a támogatott `/wpvibe/v1/elementor/save-page` út az elsődleges, stabil meglévő ID-kkel; célzott szöveg/class patchhez `content/edit` használható. Additional CSS-hez csak friss teljes mezőből, kizárólag saját markerblokk cseréjével szabad nyúlni.

## Kapacitásbecslés

A tegnapi munkából a fő költséget a sok apró WPVibe round-trip adta. A mostani friss 300-as keret mellett a terv **oldalanként egy összevont read → helyi validálás → egy save → egy visszaolvasás** ciklus, külön böngészős QA-val, így várhatóan a teljes finalization belefér úgy, hogy a 10 hívásos vésztartalék végig megmaradjon. Ha a szolgáltatói számláló ettől eltérő fogyást mutat, a tényleges számláló az elsődleges.

## Hivatkozott bizonyítékok és specifikációk

- `AGENTS.md`
- `specs/decisions.md`
- `specs/acceptance.json` és `specs/behaviors.json` (a feltöltött `specs.zip` fagyasztott referenciacsomagjában)
- `specs/pages/galeria.json`
- `specs/pages/soveny-specialista.json`
- `specs/pages/rolam.json`
- `specs/pages/idos-fak-megmentese-szolgaltatas.json`
- `specs/pages/referencia-videok.json`
- `reports/site-finalization-20260911.md`
- `reports/summary.md`
