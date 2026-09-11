# Alakfa mester — WordPress-előkészítés

**Ez az előkészítési projekt, nem kész WordPress-weboldal. Távoli módosítás nem történt.**

- [Eredmény és nyitott pontok](reports/summary.md)
- [Folytatási állapot, oldalanként és szekciónként](STATE.md)
- [Tartós projektszabályok és teljes pluginlista](AGENTS.md)
- [Környezet, verziók és telepítési terv](specs/environment.md)
- [Építési sorrend és komponensek](specs/build-plan.md)
- [Rögzített döntések](specs/decisions.md)
- [Tartalom-/assetleltár](specs/content-inventory.md)
- [CSS-felelősség](specs/css-registry.md), [fontok](specs/fonts.md), [viselkedések](specs/behaviors.json)
- [Elfogadási bemenet](specs/acceptance.json), [legutolsó futások](reports/index.json)
- [Híváskeret és folytatási költségterv](specs/usage-plan.md)
- [Eredeti felhasználói kérés](specs/request.md)

## Újrafuttatás

Node.js és Playwright/Chromium, pixelmatch, pngjs szükséges. A lib.cjs előbb a telepített csomagokat, majd a jelenlegi gép Codex-runtime-ját keresi; más gépen az ALAKFA_NODE_MODULES változóval adható meg a csomagkönyvtár. A használati parancsok a projektgyökérből:

```powershell
node tools/measure.cjs
node tools/measure.cjs --baseline
node tools/measure.cjs --baseline --page referencia-videok.html
node tools/behaviors.cjs
# Kizárólag a 2. promptban megépített cél ellenőrzéséhez:
node tools/measure.cjs --target https://alakfamester-wp.clicknest.hu/
node tools/behaviors.cjs --target https://alakfamester-wp.clicknest.hu/ --page index.html
node tools/compare-behaviors.cjs <reference-result.json> <target-result.json>
```

A futók helyi HTTP-szervert és új böngészőkontextusokat nyitnak, végül bezárják azokat. A két hibásan dekódolt ZIP-fájlnév kiszolgálási aliasát használják; a source/ fájljait nem módosítják. A hét rögzített külső videóborítót az eredeti URL-en helyi, hash-ellenőrzött válaszként szolgálják ki. POST/PUT/DELETE kérést a mérés blokkol: nem küld levelet vagy űrlapot szerverre. A valódi pluginfeldolgozás emiatt külön, későbbi engedélyezett teszt.

Az első futás és minden mérőeszköz-változás után kötelező öntesztek automatikusan lefutnak; sikertelen önteszt letiltja az elfogadási futást. Az összehasonlító szigorúan ellenőrzi az URL-t, HTTP-státuszt, H1-et és szelektorszámot. A cible planned af-osztályait a page-plan/acceptance alapján kell az építésben létrehozni. Hiányzó elem FAIL; meg nem valósított szerkesztői vagy animációs ellenőrzés NOT_CHECKED.

Az inventory.cjs és pin-external.cjs újraindítása új élő letöltést készít: **ne futtasd új referencia elfogadása nélkül**. A már rögzített fájlok és reference.json az irányadók. A write-docs.py az eredeti bemásolt kérés helyi elérési útjára támaszkodó előkészítő generátor, nem szükséges a méréshez.
