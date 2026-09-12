# STATE — Alakfa mester

**Legfrissebb folytatási pont — 2026-09-12 09:14 UTC**

Aktív WPVibe-fiók: **`clicknest001@gmail.com`**. Cél: `https://alakfamester-wp.clicknest.hu/`. A legutóbbi közvetlen szolgáltatói számláló **109/300 használt, 191 szabad**; a D11 szerinti **10 hívásos lezárási/helyreállítási tartalék kötelező**. A számlálót a következő nagy csomag lezárásakor ismét közvetlenül le kell kérni. WordPress 7.1, PHP 8.3.33, WPVibe 1.16.4, aktív téma **Hello Elementor 3.5.1** (`hello-elementor`), élő admin kapcsolat rendben.

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

A forrás helyes renderelt készlete **36 működő kiemelt projektkép + 44 további galériakép**. Page258 `_elementor_data` JSON-valid; a teljes rekonstruált projektstruktúra és 44 masonry elem bent van. A natív Elementor dokumentum-újramentés sikeres; a stabil `af270007` widget frontendben ténylegesen rendereli az új kiemelt referencia DOM-ot. A korábbi védett cache-delete approval (`op_dd3ae07c6db44c60`) már nem szükséges, nem szabad újrapróbálni.

Nyitott page258: BA/manual-carousel/lightbox/masonry közvetlen műveleti QA, reduced-motion, exact screenshot/geometria, Elementor editor reopen.

## WP-20260912-C — page272 sövény médiaforrás-paritás frontend-live

Hero proof: **21 kép**, stabil új widget `af2e004d`, 21 slide + 21 dot. Referencia: **28 masonry elem** a meglévő `af2e004a` widgetben. A régi ismétlődő képi blokkok visszaállítható kontrollként megmaradtak, célzottan rejtve. Mentés előtti validáció és natív Elementor újramentés PASS. Frontend DOM-ban mind a 21 hero proof és 28 referenciaelem jelen van.

Opera böngészőben az auto-carousel tényleges futása igazolt: egymást követő accessibility olvasásokban az aktív kép **5. → 6.** lett. Nyitott: masonry konkrét oszlopgeometria, reduced-motion, exact source-target vizuális mérés, editor reopen.

## WP-20260912-D — közös forrás-viselkedési JS telepítve / részben QA-zva

Head & Footer Code 1.5.9 site-wide tulajdonos: `auhfc_settings_sitewide` footer. GitHub main: `build/source-interactions-v001.js`, commit `6710e707bbe4e4272ce6356c527c8511521de061`; helyi `node --check` PASS, SHA256 `c545a177861d1e811041b3444bda5a587de34aa32edee4060936514928fe1e66`.

Élő HFC option ellenőrzés: final marker `af-source-interactions-v001` = 1; probe = 0; idempotence guard, autoplay és MutationObserver jelen. A script kezeli a `.js-ba`, `.js-carousel`, `.js-zoom`, `.masonry` viselkedéseket. Böngészős PASS jelenleg az auto-carousel tényleges futására van; BA/manual/lightbox/masonry közvetlen műveleti QA továbbra is nyitott.

## WP-20260912-E — aktív csomag: page270 `Rólam` + page264 `Idős fák` forrásstruktúra-paritás

A releváns oldal-specifikációk és a **fagyasztott forrás élő `main` DOM-ja** visszaolvasva. Ez pontosította a puszta assetlista alapján adódó feltételezést: **`biro-janos-portre.webp` nem szükséges látható forráselem**, ezért nem importálható csak azért, mert az assetleltárban szerepel. Minden ténylegesen szükséges renderelt kép már megtalálható a WordPress médiatárban; **nincs médiafeltöltési feladat** ebben a csomagban.

### page270 — `Rólam`

A forrás tényleges szerkezete:

1. a `Miért éppen alakfák? / Egy szakma, ahol minden döntés látszik` sage blokk **kép nélkül** (`media-row is-solo`); targeten az `af2d0007` image widget (`biro-janos-5.webp`) forrásidegen vizuális elem, ezért a meglévő stabil ID megtartásával vizuálisan el kell rejteni / a sort egyoszlopossá kell tenni;
2. a `Szakmai bizonyítékok` stone blokkban a forrás bal oldalon **5 képes manual carousel** (`biro-janos-1.webp` … `biro-janos-5.webp`), jobb oldalon timeline; target `af2d0047` jelenleg csak egyszerű szöveges idővonal — ezt ugyanazon stabil widgetben kell forrásazonos carousel+timeline struktúrára cserélni;
3. a `Saját munkák / Néhány munkám` paper blokk a forrásban **3 teljes before–after projektkártya**: 50+ tiszafa, kék boróka (`IMG_20260829_131143.webp` / `IMG_20260829_183731.webp`), keleti tuja (`thujaorient_elegantissima_elotte1_20260715_103452.webp` / `...utana1...`). Target `af2d004b` jelenleg egyszerű 4 képes personal gallery; ugyanabban a stabil widgetben source-like 3 BA projektkártyára cserélendő.

A szükséges képek mind élő attachmentként jelen vannak: `biro-janos-1..5` IDs 142–146; tiszafa 127/128; kék boróka 165/166; keleti tuja 118/121. A közös HFC source JS már tud manual carousel és BA viselkedést.

### page264 — `Idős fák megmentése`

A fagyasztott forrás `#tortenetek` blokkjában két projektkártya van:

1. 50+ tiszafa: teljes `.ba.js-ba` range-es before–after + `story-meta`;
2. Nordmann-jegenyefenyő: **6 képes automata `.carousel.js-carousel`** (`abies_nordmannii_gombaforma_1.webp` … `_6.webp`), 6 dot + nyilak, majd `story-meta`.

Target `af2a004a` jelenleg két leegyszerűsített `af-before-after` blokkot tartalmaz; a második csak az 1. és 6. Nordmann képet használja. Ugyanazon stabil `af2a004a` widget editor HTML-jét kell source-like két project-card struktúrára cserélni. A szükséges abies1–6 assetek IDs 130–135, tiszafa 127/128; import nem kell. A közös HFC source JS már tud BA és auto-carousel viselkedést.

### Mentési terv — következő távoli írás előtt

1. frissen ellenőrizni post8-ban, hogy a source generic `.carousel`, `.ba`, `.project-card`, `.story-meta`, grid/layout szabályok már léteznek-e; új CSS csak ténylegesen hiányzó page-specifikus adapterre;
2. page270: minimális CSS az `af2d0007` forrásidegen image elrejtésére / egyoszlopos sage blokkra, ha a meglévő layout ezt igényli; `af2d0047` és `af2d004b` exact-once `content/edit`;
3. page264: `af2a004a` exact-once `content/edit`;
4. pre-save validáció: page270 JSON-valid + 5 carousel slide + 3 BA range; page264 JSON-valid + 1 BA range + 6 carousel slide + abies2–5 hivatkozás;
5. natív Elementor dokumentum újramentés mindkét oldalon;
6. frontend stabil widget visszaolvasás; majd Opera QA: Rólam manual carousel **nem** autoplay, Idős fák Nordmann carousel autoplay; BA közvetlen műveleti QA csak akkor PASS, ha tényleges interakció igazolható.

## Utána

1. page268 featured videó szerkezeti/geometriai korrekció;
2. source↔target exact acceptance viewport QA: screenshot, overlay, diff, kulcsgeometria, overflow, viselkedések;
3. kritikus Elementor editor reopen/editability/unsaved-change;
4. csak teljes bizonyíték után `PIXEL_PASS`, majd 3. prompt átadási mód.

## Kapacitás

Legutóbbi közvetlen keret: **109/300 használt, 191 szabad**. Azóta további read-only auditok történtek, ezért a következő nagy csomag lezárásakor kötelező újra közvetlenül lekérni. A 10 hívásos D11 tartalék változatlanul kötelező.

## Hivatkozások

`AGENTS.md`; `specs/decisions.md`; `specs/acceptance.json`; `specs/behaviors.json`; `specs/pages/galeria.json`; `specs/pages/soveny-specialista.json`; feltöltött/extrahált `specs/pages/rolam.json`; feltöltött/extrahált `specs/pages/idos-fak-megmentese-szolgaltatas.json`; `reports/site-finalization-20260911.md`; `reports/summary.md`; `build/source-interactions-v001.js`.
