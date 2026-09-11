# 03 — Reprezentatív főoldal és minták

Szabály-visszaolvasás: AGENTS.md; decisions D02–D08 és D11; STATE.md 2026-09-10 05:01 UTC folytatási pont; specs/pages/index.json; specs/css-registry.md. A D03 döntés lezárt: V4 Atomic alapszerkezet, legacy widgetek V4 konténerben. Forrás: `source/alakfa-mester-weboldal/index.html`, SHA256 `ed55dba72e3dcf7a46f51ff2c68a95395f2e2ea786d3e39746793b8650be5460`.

## Cél és határ

A főoldal a reprezentatív oldal, mert ezen van a legtöbb eltérő szekciótípus és interakció. Desktop és mobil együtt készül. Az első lezárható rész a teljes hero: kéthasábos V4 szerkezet, eredeti eyebrow/H1/bevezető, kapcsolatgombok, CTA-k, metaelemek, eredeti SVG-k és az `af-hero-art` eredeti animáció. A szükséges e-button/e-svg/e-flexbox link sémák Elementor 4.2.4-ből egyszer begyűjtve és helyben tárolva.

Aktuális mintafájl: `specs/patterns/hero-complete-v002.json`; a korábbi `hero-core-v001.json` történeti magminta. A v002 minta mentés előtt új elem-ID-ket kap, feloldja a globális osztály- és attachment-hivatkozásokat, és a helyőrzőket a használó oldal saját tartalmával tölti ki. Közvetlenül, feloldás nélkül nem küldhető az Elementor mentési végpontjára. Feloldási terv: `build/payloads/home-hero-v002.resolution.json`.

A hero utáni következő forrásegység helyi mintája: `specs/patterns/trust-toc-v001.json`. Ez a négy bizalmi elemet, a két akadálymentes H2-nevet és a nyolc pontos szakaszhivatkozást tartalmazza 34 egyedi ID-helyőrzővel. A hero experience/camera/location SVG-je hash szerint újrahasználandó; új feltöltést csak a scissors ikon igényelhet. Class-terv: `build/payloads/trust-toc-global-classes-v001.plan.json`; ID-/asset-feloldás: `build/payloads/home-trust-toc-v001.resolution.json`; CSS-kivételek: `build/additional-css-trust-toc-v001.fragment.css`.

## Távoli előfeltételek

1. Frissen egyeztesd: page12, form33, header20, footer21, aktív Hello 3.5.1, Elementor 4.2.4, af-project 0.1.0 és a gördülő keret.
2. A következő ténylegesen használt új widget sémáját egyszer kérd le és mentsd a `specs/schemas/` alá. Ne ismételd a már változatlan e-flexbox/e-heading/e-paragraph/af-hero-art sémákat.
3. Ellenőrizd, van-e már főoldal-céloldal vagy azonos című draft. Ismeretlen vagy kézzel módosított tartalmat ne írj felül.
4. Hozd létre a végleges szemantikus globális osztályokat, majd olvasd vissza az ID-ket. A próba `g-af-probe-*` osztályai nem használhatók végleges oldalstílusként.
5. A teljes hero mentés–visszaolvasás–frontend desktop/mobil–editor csomagot csak akkor kezdd el, ha a 10 hívás tartalék fölött belefér.

## Belső ellenőrzés

- pontos eredeti szöveg, egy H1, `ő/ű` glyph és Georgia tényleges render;
- egy `af-hero-art` példány, kezdő/köztes/végállapot, desktop pointer, mobil, reduced motion és editor újrarenderelés;
- kéthasábos desktop és egymás alá rendezett mobil geometria, nincs overflow;
- ElementsKit fejléc/lábléc egyszer jelenik meg, Hello nem dupláz;
- képpár, overlay, diff és kulcsgeometria az elfogadási nézeteken;
- csak a mentett WordPress-oldal friss betöltése számít bizonyítéknak.

## Keret

Utolsó tényleges szolgáltatói jelzés 2026-09-10 04:54 UTC: 83/100 használt, 17 szabad. A 10-es lezárási tartalék mellett 7 tervezhető. Ez nem elég az osztály-/asset-/CSS-/oldalmentést és teljes visszaellenőrzést igénylő hero biztos lezárásához, ezért a jelenlegi csomag helyi előkészítéssel folytatódik. Új távoli írás előtt friss keret- és célállapot-ellenőrzés kötelező.

## 2026-09-10 — trust/toc mentett ellenőrzési pont

Page56-on a hero és a `trust-toc-v001` együtt 65 egyedi elem. A 11 osztály, v006 Additional CSS, desktop/mobil frontend és Elementor-vászon visszaellenőrzése PASS; részletek: `reports/home/trust-toc-v001-target.json`. A következő forrásegység az `Amit a megbízóim mondanak` véleményszakasz. Előbb helyi, verziózott mintát és teljes feloldási csomagot kell készíteni, majd friss page56/CSS/keret egyeztetés után lehet egyben menteni. Tényleges keret: 65/100 használt, 35 szabad; 10 lezárási tartalék.

## 2026-09-11 — véleményszakasz mentett ellenőrzési pont

Page56-on a hero, trust/toc és `reviews-atomic-v001` v2 együtt 116/116 egyedi elem. A 18 új osztály, három hash-térképezett fotó, v016 Additional CSS, af-project 0.2.0 billentyűparitás, desktop/mobil frontend és Elementor-vászon PASS; részletek: `reports/home/reviews-atomic-v001-target.json`. Az Atomic e-image validációs hibája után a D12 szerinti legacy image widget a bizonyított minta. Tényleges keret: 64/100 használt, 36 szabad; 10 lezárási tartalék. Következő forrásegység: `Három helyzettel szoktam találkozni:` (`#szolgaltatasi-utak`).

## 2026-09-11 — útvonalkártyák mentett ellenőrzési pont

Page56-on hat felső szintű ág és 139/139 egyedi Elementor-ID van; az új `routes-v001` rész 23 Atomic elemből áll. A három kártyagyökér valódi link, a teljes forrásszöveg és három cél megmaradt. A v019 Additional CSS base64 SVG ikon-, nyíl- és hullámgeometriája desktopon és mobilon látható. A forrással egyező szekció- és kártyamagasságok, tipográfia, 0 overflow, Tab/focus-visible és az Elementor-vászon PASS; részletek: `reports/home/routes-v001-target.json`. Tényleges keret: 45/100 használt, 55 szabad; 10 lezárási tartalék felett 45 tervezhető. Következő forrásegység: `Mi az alakfa, és mi a niwaki?` (`#mi-az-alakfa`).

## 2026-09-11 — fogalom- és összehasonlító szakasz mentett ellenőrzési pont

Page56-on hét felső szintű ág és 198/198 egyedi Elementor-ID van; az új definitions-v001 rész 59 Atomic elemből áll. A két fogalomkártya, hat listapont, két összehasonlító kártya és nyolc listapont teljes forrásszöveggel elkészült. Desktopon és mobilon a szakasz, konténer, kártyák és összehasonlító oszlopok mért mérete a referenciával egyezik; ikonok, listajelölők, 0 overflow és Elementor-vászon PASS. Részletek: reports/home/definitions-v001-target.json. Tényleges keret: 42/100 használt, 58 szabad; 10 tartalék felett 48 tervezhető. Következő forrásegység: Alakfa készítés és ápolás – a kettő együtt működik (#fo-szolgaltatas).

## 2026-09-11 — fő szolgáltatás szakasz strukturális ellenőrzési pont

A friss WordPress-állapot szerint a definitions-v001 már ténylegesen kész volt, ezért nem épült újra. A Hello Additional CSS post8 a csomag előtt már v026 / 89034 byte / `0b9ce60bf09e0f16233740d915416bb4c469baaa3dc80997a428d925370d62ec`, és tartalmazta a `#fo-szolgaltatas` szabályait. Page56-ra 34 új Atomic elem került `af150001`–`af150022` tartományban; az eredmény 9 felső szintű ág, 232 elem, 82697 byte, `1eec600ee9c718ac56e48b35b7b12d167cb306db05c808703f21f53c22c00189`, JSON-valid. A friss frontend DOM-ban a teljes eredeti szöveg, két panel, hat listaelem és a két CTA jelen van. Részletek: `reports/home/main-service-v001-target.json`. A csomag **ellenőrzésre vár**, mert kijelentkezott desktop/mobil képpár/geometria és Elementor-editor újranyitás ebben a normál Chat-futásban nem készült el. Következő művelet ezek pótlása; csak PASS után jöhet az `Amit egy jól formázott növény visszaad a kertnek` egység.
