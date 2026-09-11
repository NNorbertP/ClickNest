# STATE — Alakfa mester

**Legfrissebb folytatási pont — 2026-09-11 15:21 UTC**

Az új WPVibe-fiókra váltás és az ismételt élő ellenőrzés lezárult. Az aktív WPVibe-fiók **`ncsnorbert+20260911@gmail.com`**, a céloldal `https://alakfamester-wp.clicknest.hu/` ehhez a fiókhoz sikeresen kapcsolódik, a WordPress-kapcsolat admin jogosultsággal működik. A legutóbbi közvetlen kvótajelzés **12/300 használt, 288 szabad**; a D11 szerinti 10 hívásos lezárási/helyreállítási tartalék továbbra is kötelező.

A GitHub projektállapot immár a `NNorbertP/ClickNest` **`main`** ágán kanonikus: a korábbi `alakfamester-sync-20260911` ág fast-forwarddal rávezetésre került a `main`-re. A folytatáshoz mindig a `main/alakfamester/STATE.md` az elsődleges projektállapot-fájl.

A page56 az új fiókkal frissen visszaolvasva továbbra is pontosan a `main-service-v001` checkpointon áll: **82697 byte**, SHA256 **`1eec600ee9c718ac56e48b35b7b12d167cb306db05c808703f21f53c22c00189`**, JSON valid, **9 felső szintű ág, 232 `af...` Elementor-ID, 34 `af15...` ID**. A dekoratív `#af-wave-service-out` külön frontend-visszaolvasása is sikeres, `data-id="af150022"`.

A `main-service-v001` státusza továbbra is **ellenőrzésre vár / VERIFY_PENDING**, nem teljes PASS. A hiányzó kötelező bizonyítékok: (1) kijelentkezott desktop/mobil source–target screenshotpár + overlay/diff + geometria/overflow mérés, (2) authentikált page56 Elementor-editor újranyitás/szerkeszthetőség/mentetlen-változás ellenőrzés. A jelenlegi WPVibe szerveroldali admin-render anonim login oldalt ad, a jelenlegi környezet pedig nem biztosít hiteles céloldali screenshot-capture-t; ezért ezekről nincs hamis PASS. Bizonyíték frissítve: `reports/home/main-service-v001-target.json`.

A következő forrásegység, **„Amit egy jól formázott növény visszaad a kertnek” + „Fajok, amelyeken már dolgoztam”**, teljesen elő van készítve, de **nincs WordPressre telepítve**. A forrásból rögzített 22 szöveg, a hat benefit-ikon, a felső/alsó hullám SVG-hashe, valamint a 1440 px referenciaképből mért geometria dokumentált. A tervezett tiszta Atomic fa **53 új elemet** használ, lefoglalt tartomány: **`af160001`–`af160035`**; telepítés esetén a várt page56 összesen 11 felső szintű ágra és 285 `af...` ID-ra nő. Élő ütközésvizsgálat: `af16` = 0 találat, `#af-benefit`/`benefit` CSS = 0 találat. Új plugin, asset vagy globális Elementor-osztály nem kell.

Előkészített, GitHub `main` alatt megőrzött állományok:

- `specs/patterns/benefits-species-v001.json` — kanonikus kompakt Atomic rekonstrukciós terv, pontos tartalom- és hierarchiaszerződéssel;
- `build/additional-css-benefits-species-v001.fragment.css` — **PREPARED ONLY**, nem önálló CSS-owner és nem került élő Additional CSS-be;
- `build/benefits-svg-source-v001.json` — forrás SVG markup + index + SHA256 proveniencia;
- `reports/home/benefits-species-v001-prep.json` — forrásmérés, ütközésvizsgálat, várható elemszám és deployment-gate;
- `specs/decisions.md` — D16 döntés hozzáadva.

**Következő művelet:** először csak a `main-service-v001` hiányzó két elfogadási bizonyítékát szabad lezárni. Ha mindkettő PASS, közvetlenül a következő WordPress-írás előtt újra kell olvasni page56 hash/ID/top-level állapotát, az `af16` ütközést, a Hello Additional CSS aktuális markerét/hashét és a WPVibe-kvótát. Csak változatlan precondition mellett telepíthető a `benefits-species-v001`, lehetőleg egy stabil Elementor-save ciklusban. A tényleges WordPress-állapot minden eltérésnél elsőbbséget élvez. A statikus kezdőlap-beállítás továbbra is változatlan: `show_on_front=posts`, `page_on_front=0`.

**Kanonikus folytatási pont — 2026-09-11 14:41 UTC**

Ez a fájl a feltöltött korábbi `STATE.md`, a projekt riportjai és a WPVibe-bal 2026-09-11-én frissen visszaolvasott WordPress-állapot összevetéséből készült. **Eltérés esetén a tényleges WordPress-állapot a mérvadó.** Már elkészült oldalt, sablont, ID-t, assetet, osztályt vagy beállítást nem szabad duplikálni.

## Aktív munkaszakasz

- Szakasz: **2. prompt — teljes teszthonlap kivitelezése**.
- Cél WordPress: `https://alakfamester-wp.clicknest.hu/`
- Referencia: `https://alakfamester.clicknest.hu/`
- Élesítés és SMTP/külső tesztlevél nem része ennek a módnak; ezek a 3. prompt feladatai.
- Aktív téma: **Hello Elementor 3.5.1** (`hello-elementor`).
- Oldalépítő: **Elementor Free 4.2.4**, V4 Atomic szerkezettel a D03 szerint.

## Ténylegesen megőrzendő WordPress-azonosítók

- Főoldal munkapéldány: **page 56**, cím `Főoldal`, slug `/fooldal/`, `publish`, sablon `elementor_header_footer`.
- Elkülönített képességpróba: **page 12**, `/alakfa-elkulonitett-kepessegproba/`; ne hozd létre újra.
- Privacy Policy: **page 3**, draft; megőrzendő.
- Elementor Default Kit: **ID 6**; megőrzendő.
- ElementsKit globális fejléc: **ID 20**, publish; megőrzendő, ne legyen második globális fejléc.
- ElementsKit globális lábléc: **ID 21**, publish; megőrzendő, ne legyen második globális lábléc.
- MetForm próbaűrlap: **ID 33**; az előző hiányos ID32 a lomtárban van, ne hozd létre újra és ne töröld végleg.
- Hello Additional CSS custom CSS post: **ID 8**.
- Témaváltás előtti teljes natív mentés: **7986a994c977**, 2026-09-09 05:38 UTC.

## Pluginállapot a legutóbbi élő ellenőrzés szerint

Aktív és megőrzendő:

- Alakfa Project Widgets / `af-project`: **0.2.0**
- Elementor: **4.2.4**
- ElementsKit Lite: **4.0.4**
- MetForm: **4.3.0**
- UpdraftPlus: **1.26.7**
- WPVibe: **1.16.4**
- Yoast SEO: **28.4**

LiteSpeed Cache **7.9.1 telepítve, de inaktív**. Meglévő működő pluginokat ne frissíts, cserélj vagy távolíts el indokolatlanul.

## Reconciliation — a feltöltött STATE eltérése

A feltöltött `STATE.md` legfelső bejegyzése még a reviews-v001 lezárását és a `#szolgaltatasi-utak` csomagot jelölte következőnek. A friss WordPress-visszaolvasás ezzel szemben bizonyította, hogy page56 már a későbbi **definitions-v001** állapoton volt:

- 7 felső szintű ág
- 198 egyedi Elementor-ID
- `_elementor_data`: **72086 byte**
- SHA256: `033b72e266cb85db33f0cf45eb52487d05247d370dc811eb090e3b3f53e3b8b9`
- `#szolgaltatasi-utak` jelen
- `#mi-az-alakfa` jelen

Ez megegyezett a `reports/home/definitions-v001-target.json` és a későbbi AGENTS/work-package checkpoint állapotával. **A routes és definitions szakasz nem épült újra.**

A Hello Additional CSS szintén előrébb járt a definitions riport v025 állapotánál. A friss élő állapot:

- marker: `/* af-project:start v026 */`
- **89034 byte**
- SHA256: `0b9ce60bf09e0f16233740d915416bb4c469baaa3dc80997a428d925370d62ec`
- módosítva: 2026-09-11 13:01:14 UTC

A v026 már tartalmazta a következő szolgáltatásblokk célzott CSS-szabályait, ezért a mostani csomagban **nem történt Additional CSS-írás**.

## Elkészült és megőrzendő főoldali csomagok

1. `hero-v002` — page56 hero, `af100001`–`af10001f`, `af-hero-art`, CTA-k és meta.
2. `trust-toc-v001` — `af110001`–`af110022`, bizalmi sáv és 8 horgonylink.
3. `reviews-atomic-v001` — Atomic Tabs + 3 legacy image widget; af-project 0.2.0 billentyűkezelés.
4. `routes-v001` — `#szolgaltatasi-utak`; Atomic linkkártyák, D13.
5. `definitions-v001` — `#mi-az-alakfa`; Atomic definíciós és összehasonlító szerkezet, D14.
6. `main-service-v001` — **felépítve, ellenőrzésre vár**, részletek lent.

## main-service-v001 — aktuális állapot

A következő hiányzó forrásegység, **`#fo-szolgaltatas` / „Alakfa készítés és ápolás – a kettő együtt működik”**, felkerült page56-ra.

- 34 új, helyileg egyedi Atomic elem: `af150001`–`af150022`.
- Új felső szintű gyökerek: `af150001` és `af150022`.
- A két szolgáltatáspanel a meglévő `g-af-type-eyebrow`, `g-af-type-heading`, `g-af-type-body` globális osztályokat használja.
- Új plugin: nincs.
- Új asset: nincs.
- Új globális osztály: nincs.
- CSS-írás: nincs; a meglévő v026 szabályai kerültek felhasználásra.
- CTA 1: `A kialakítás folyamata` → `#kialakitas`.
- CTA 2: `Az alakfa ápolása` → `#apolas`.

A módosítás WPVibe `content/edit` match-once patch-ekkel történt a page56 `_elementor_data` mezőjén. Egy WP-CLI `eval` próbát a WPVibe biztonsági emulátora 403-mal blokkolt; azt nem ismételtük meg és nem került megkerülésre.

### Visszaolvasott page56 a csomag után

- `_elementor_data`: **82697 byte**
- SHA256: `1eec600ee9c718ac56e48b35b7b12d167cb306db05c808703f21f53c22c00189`
- JSON valid: igen
- felső szintű ágak: **9**
- Elementor `af...` ID-k: **232** = korábbi 198 + 34 új
- új `af15...` ID-k: **34**
- Elementor CSS cache és object cache a visszaolvasás során automatikusan ürült.

Frontend DOM ellenőrzés a `/fooldal/` oldalon, `#fo-szolgaltatas` szelektorral: **PASS_STRUCTURAL**. Megjelent a fő szakasz, mindkét article-kártya, mind a 6 listapont, a pontos szöveg és mindkét horgonylink. A `#af-wave-service-out` későbbi külön visszaolvasása szintén sikeres.

Bizonyíték: `reports/home/main-service-v001-target.json`.

### main-service-v001 még nyitott ellenőrzései

**Állapot: ellenőrzésre vár — nem teljes PASS.**

A jelenlegi környezetben még nincs hitelesen igazolva:

- kijelentkezott desktop/mobil source–target screenshotpár, overlay és diff;
- pontos desktop/mobil geometria- és overflow-mérés;
- page56 authentikált Elementor-editor újranyitás / szerkeszthetőség / mentetlen változás ellenőrzés.

Ezek nélkül a csomagot nem szabad `megfelelt` állapotúnak jelölni.

## Kezdőlap-beállítás

**Még változatlan:** `show_on_front=posts`, `page_on_front=0`. Page56 tehát még nincs statikus WordPress-kezdőlapként beállítva. Ezt ne változtasd meg automatikusan egy tartalmi részcsomag közben; a munkarend szerinti megfelelő ponton kell elvégezni és ellenőrizni.

## WPVibe-keret

**Aktív fiók:** `ncsnorbert+20260911@gmail.com`. Legutóbbi közvetlen jelzés: **12/300 használt, 288 szabad**. A 10 hívásos lezárási/helyreállítási tartalék megőrzendő. A korábbi `80/100` és `86–87/100` értékek a lecserélt WPVibe-fiók történeti adatai, a jelenlegi munkakeretre nem vonatkoznak.

Ne kezdj új WordPress-írási csomagba addig, amíg a teljes mentés–visszaolvasás–ellenőrzés és a tartalék együtt nem fér bele.

## KÖVETKEZŐ MŰVELET

1. Először **csak a `main-service-v001` hiányzó desktop/mobil vizuális és authentikált Elementor-editor ellenőrzését** zárd le.
2. Ha minden kötelező ellenőrzés PASS, frissítsd ezt a STATE-et és a `reports/home/main-service-v001-target.json` bizonyítékot `megfelelt` állapotra.
3. Ezután telepíthető a már előkészített `benefits-species-v001` csomag, de közvetlenül előtte kötelező a page56/CSS/hash/ID/keret újraolvasása és az ütközésvizsgálat.
4. Minden új munkacsomagnál a WordPress élő állapota marad mérvadó.
