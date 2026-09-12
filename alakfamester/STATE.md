# STATE — Alakfa mester

**Legfrissebb folytatási pont — 2026-09-12 08:44 UTC**

Aktív WPVibe-fiók: **`clicknest001@gmail.com`**. Cél: `https://alakfamester-wp.clicknest.hu/`. A 2026-09-12 08:40 UTC körüli friss szolgáltatói számláló **59/300 használt, 241 szabad**; a D11 szerinti **10 hívásos lezárási/helyreállítási tartalék kötelező**, így jelenleg 231 hívás tervezhető a tartalék fölött. A WordPress-kapcsolat élő és adminisztrátori: WordPress 7.1, PHP 8.3.33, WPVibe 1.16.4, aktív téma **Hello Elementor 3.5.1** (`hello-elementor`).

## Tényleges élő célállapot

- statikus WordPress-kezdőlap: `show_on_front=page`, `page_on_front=56`, `page_for_posts=0`;
- page 56 `Főoldal` és a kilenc aloldal továbbra is publish; a kanonikus oldalak/ID-k: 256 `biologiai-vedelem`, 258 `galeria`, 260 `gyakran-ismetelt-kerdesek`, 262 `gyumolcsfak-metszese-es-vedelme`, 264 `idos-fak-megmentese-szolgaltatas`, 266 `kapcsolat`, 268 `referencia-videok`, 270 `rolam`, 272 `soveny-specialista`;
- megőrzendő erőforrások: page12 képességpróba, ElementsKit header20, footer21, MetForm33, Hello Additional CSS post8;
- aktív pluginfüggőségek: `af-project`, Elementor, ElementsKit Lite, **Head & Footer Code**, LiteSpeed Cache, MetForm, UpdraftPlus, WPVibe, Yoast;
- új konkurens galéria-addon nem szükséges: az AGENTS szerinti natív Elementor + Additional CSS + célzott projekt-JS sorrend marad érvényben.

## Kötelező technikai határok

- D03: általános szerkezet V4 Atomic; MetForm/ElementsKit/af-project összetett elemek dokumentált legacy határon maradhatnak.
- D05: a kapcsolati űrlap kezelője MetForm Free; SMTP/külső tesztüzenet ebben a módban tilos.
- D07: minden saját kézzel írt CSS kizárólag a Hello Additional CSS megjelölt `af-project` blokkjában lehet.
- D11: legalább 10 WPVibe-hívás lezárási/helyreállítási tartalék.
- D12–D16: a már igazolt Atomic/legacy és SVG/CSS szerephatárokat meg kell őrizni; meglévő Elementor-ID nem változtatható indokolatlanul.
- Source referencia hash: `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`.
- Acceptance nézetek: 1440×1000, 1024×900, 768×1024, 390×844, 360×800, 1920×1080; statikus kulcselem cél tűrés desktop 2 CSS px, mobil 3 CSS px; a galéria címrégió pixel-diff baseline tűrése 0.0001.

## WP-20260912-A1 — lezárva

A korábban bizonyított három háttér-helper eltérés célzott `content/edit` patch-csel javítva, szerkezeti vagy ID-módosítás nélkül:

- page270: `af-s-rolam-9` paper → sage;
- page270: `af-s-rolam-11` sage → paper;
- page272: `af-s-soveny-specialista-8` stone → sage.

Mindhárom írás egyszeres csere volt. A végső vizuális QA-ban újra ellenőrizendők.

## WP-20260912-B — page258 galéria forrásparitás, épül

A releváns `AGENTS.md`, D03/D07, `specs/pages/galeria.json`, `specs/acceptance.json` és a `before-after`, `manual-carousel`, `lightbox`, `masonry` behavior szerződések visszaolvasva. A fagyasztott forrás renderelt állapota szerint a három statikus HTML-ben hivatkozott 1757… fájl a forráson is 404 volt, ezért az eredeti JS eltávolította őket; a helyes cél **36 renderelt kiemelt projektkép + 44 további galériakép**, nem 39 működő projektkép.

A page258 jelenlegi `_elementor_data` állapota:

- JSON-valid: **1**;
- adatméret: **57 899 byte**;
- `project-card` hivatkozások: **20**;
- `masonry__item`: **44**;
- a három forrásoldali 404-es kép nincs beépítve;
- a teljes 44 elemű további képgaléria és a kiemelt projektkártyák tartalma a meglévő szerkeszthető Elementor-widgetekbe bekerült, a korábbi ideiglenes egyszerűsített blokkok célzottan rejtve vannak;
- a nagy teljes `save-page` próbát a host WAF 403-mal blokkolta, ezért az írás kisebb `content/edit` csomagokra lett bontva; a 403-as mentés **nem landolt**;
- a tartalmi meta-változások érvényesek, de a frontend még régi Elementor render-cache-t szolgál: `_elementor_element_cache` **84 343 byte**, a friss frontend `.ref-grid` szelektora még nem található;
- ezért a következő kötelező lépés a jelenlegi, változatlan ID-jű page258 fa **egyetlen támogatott `/wpvibe/v1/elementor/save-page` újramentése**, immár beágyazott `<script>` nélkül, hogy Elementor invalidálja a render-cache-t és újragenerálja a CSS-t. Bizonytalan korábbi írást nem szabad megismételni.

Hello Additional CSS post8 jelenlegi állapota:

- **252 669 byte**;
- SHA256 **`e5fe7f102901eb0b67a61f1f8830994a2c490fb4e0bd28fbc490b784eb9cbf01`**;
- `af-gallery-source-v1:start` marker pontosan egyszer jelen van;
- a galéria CSS már mentve van, ezért a következő mentés előtt újabb CSS-írás nem kell.

A Head & Footer Code plugin aktív, de a galéria forrásviselkedési JS-e még nincs lezárt, visszaellenőrzött állapotban. A JS tulajdonosa csak a dokumentált forrásviselkedés (`.js-ba-range`, `.carousel--manual`, `.js-zoom`, `.js-masonry`) lehet; site-wide kód csak névtérbe zárva és egyetlen kijelölt futási helyen használható. A következő JS-írás előtt az aktuális plugin-beállítást vissza kell olvasni, idegen tartalmat meg kell őrizni.

## Nyitott eltérések

A webhely **nem PIXEL_PASS**.

1. page258: render-cache invalidálás + friss DOM ellenőrzés, majd BA/manual-carousel/lightbox/masonry forrásviselkedés célzott bekötése és tesztje;
2. page272: teljes 21 hero proof + 28 referencia médiaparitás helyreállítása;
3. page270 és page264: forrásképek teljes paritásának újraszámolása és szükséges pótlása;
4. page268: a 7 videó megvan, de a featured videó szerkezeti/geometriai összevonása vagy kompenzációja még nyitott;
5. target screenshot/overlay/diff bizonyíték hiányzik; a médiarekonstrukciók után újra kell próbálni a Browser Connectort az exact acceptance viewportokon;
6. kritikus Elementor editor reopen/editability/unsaved-change ellenőrzés nyitott;
7. SMTP/kézbesítés ebben a módban nem tesztelendő.

## Következő sorrend

1. page258 támogatott Elementor újramentés a jelenlegi változatlan fával → DOM/cache visszaellenőrzés;
2. page258 forrás-JS releváns BA/carousel/lightbox/masonry viselkedésének egyetlen dokumentált futtatási helyre kötése → desktop/mobil/reduced-motion teszt;
3. page272 sövény hero proof + galéria;
4. page270 / page264 médiaaudit és szükséges pótlás;
5. page268 featured videó szerkezeti/geometriai javítása;
6. source↔target desktop/mobile vizuális QA az acceptance viewportokon, interakciók a `specs/behaviors.json` szerint;
7. kritikus Elementor editor reopen/editability/unsaved-change ellenőrzés;
8. csak teljes bizonyíték után `PIXEL_PASS`, majd 3. prompt átadási mód.

Minden nagyobb távoli mentés előtt az érintett oldal aktuális JSON/ID/class/media állapotát vissza kell olvasni. Strukturális/repeated Elementor változtatásnál a támogatott `/wpvibe/v1/elementor/save-page` az elsődleges, stabil meglévő ID-kkel; célzott kis patchhez `content/edit` használható. Additional CSS-hez csak friss teljes mezőből, kizárólag saját markerblokk cseréjével szabad nyúlni.

## Kapacitásbecslés

Friss szolgáltatói keret: **59/300 használt, 241 szabad**. A 10-es tartalék fölött 231 hívás áll rendelkezésre. A további terv oldalanként egy összevont állapot-read → helyi validálás → egy támogatott save → egy összevont visszaolvasás, külön böngészős QA-val. A tényleges szolgáltatói számláló elsődleges minden becsléssel szemben.

## Hivatkozott bizonyítékok és specifikációk

- `AGENTS.md`
- `specs/decisions.md`
- `specs/acceptance.json`
- `specs/behaviors.json`
- `specs/pages/galeria.json`
- `reports/site-finalization-20260911.md`
- `reports/summary.md`
