# STATE — Alakfa mester

**Legfrissebb folytatási pont — 2026-09-12 08:52 UTC**

Aktív WPVibe-fiók: **`clicknest001@gmail.com`**. Cél: `https://alakfamester-wp.clicknest.hu/`. A munkamenet eleji friss szolgáltatói számláló **59/300 használt, 241 szabad**; a D11 szerinti **10 hívásos lezárási/helyreállítási tartalék kötelező**. WordPress 7.1, PHP 8.3.33, WPVibe 1.16.4, aktív téma **Hello Elementor 3.5.1** (`hello-elementor`), az élő kapcsolat adminisztrátori.

## Tényleges élő célállapot

- statikus WordPress-kezdőlap: `show_on_front=page`, `page_on_front=56`, `page_for_posts=0`;
- kanonikus aloldalak: 256 `biologiai-vedelem`, 258 `galeria`, 260 `gyakran-ismetelt-kerdesek`, 262 `gyumolcsfak-metszese-es-vedelme`, 264 `idos-fak-megmentese-szolgaltatas`, 266 `kapcsolat`, 268 `referencia-videok`, 270 `rolam`, 272 `soveny-specialista`;
- megőrzendő erőforrások: page12, ElementsKit header20/footer21, MetForm33, Hello Additional CSS post8;
- aktív pluginfüggőségek: `af-project`, Elementor, ElementsKit Lite, Head & Footer Code, LiteSpeed Cache, MetForm, UpdraftPlus, WPVibe, Yoast.

## Kötelező határok

D03: V4 Atomic általános szerkezet, dokumentált legacy összetett widget-határ. D05: MetForm Free, SMTP/külső tesztüzenet tilos. D07: saját CSS csak a Hello Additional CSS `af-project` blokkjában. D11: 10 hívás tartalék. D12–D16: stabil Elementor-ID-k és rögzített Atomic/legacy/SVG szerephatárok megőrzendők. Source referencia hash: `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`. Acceptance viewportok: 1440×1000, 1024×900, 768×1024, 390×844, 360×800, 1920×1080.

## WP-20260912-A1 — lezárva

Három bizonyított helper-hiba célzottan javítva: page270 `af-s-rolam-9` paper→sage, page270 `af-s-rolam-11` sage→paper, page272 `af-s-soveny-specialista-8` stone→sage. Mindhárom egyszeres `content/edit` csere volt; végső vizuális QA-ban újramérendő.

## WP-20260912-B — page258 galéria, adatparitás elkészült / render-cache blokkolt

A fagyasztott forrás alapján a helyes renderelt cél 36 működő kiemelt projektkép + 44 további kép; a statikus HTML három 1757… hivatkozása a forráson is 404 volt és az eredeti JS eltávolította.

Jelenlegi page258 `_elementor_data`: JSON-valid, 57 899 byte, a 44 masonry elem és a rekonstruált kiemelt projektkártyák bent vannak, a három forrás-404 nincs bent. A nagy teljes `save-page` próbát korábban a host WAF 403-mal blokkolta és nem landolt; a tartalmi csomag ezért kis `content/edit` lépésekben került be. Hello Additional CSS post8: 252 669 byte, SHA256 `e5fe7f102901eb0b67a61f1f8830994a2c490fb4e0bd28fbc490b784eb9cbf01`, `af-gallery-source-v1:start` pontosan egyszer.

A builder-adat és a frontend jelenleg eltér: `_elementor_element_cache` 84 343 byte, a frontend `.ref-grid` még nem található. `elementor flush-css --regenerate` sikeresen lefutott, de a régi HTML-render cache-t nem oldotta fel. A védett `_elementor_element_cache` célzott törlését a WPVibe belső biztonsági kapuja külön approvalhoz kötötte; függő művelet: **`op_dd3ae07c6db44c60`**. Nyers SQL-lel ezt nem kerülhetjük meg. Jóváhagyás után kötelező: approval státusz → frontend `.ref-grid`/`.masonry` visszaolvasás → csak ezután JS/viselkedés QA. A Head & Footer Code aktív, de a galéria BA/manual-carousel/lightbox/masonry JS még nincs lezárt, visszaellenőrzött állapotban.

## WP-20260912-C — aktív következő csomag: page272 sövény médiaforrás-paritás

A releváns AGENTS/D03/D07 szabályok és `specs/pages/soveny-specialista.json` visszaolvasva. A forrás médiacsoportjai pontosan:

- hero proof: **21 kép**, `soveny-1.webp` … `soveny-21.webp`, 800×600; a hero proof `.carousel.js-carousel`, tehát az `auto-carousel` behavior szerződés vonatkozik rá;
- review képek: a közös három ügyfélkép, külön meglévő reviews komponens tulajdona;
- referencia: **28 kép** = `babermeggy_soveny_elotte/utana` (2) + magas leylandi sövény sorozat (5) + `soveny-1.webp` … `soveny-21.webp` (21); forrásosztályok közt `.masonry.js-masonry`, ezért masonry behavior szükséges;
- az oldal korábbi helper-színe `af-s-soveny-specialista-8` már sage-re javítva.

Következő művelet: page272 aktuális Elementor-fa + médiatár egyezés összevont visszaolvasása → hiánylista helyi előállítása → stabil meglévő elemek/ID-k megőrzésével a hero proof és referencia teljes tartalmának legkisebb támogatott mentési csomagja → DOM/adat visszaellenőrzés. Új plugin nem indokolt. A galéria page258 approvaltól függetlenül ez a csomag folytatható.

## További nyitott sorrend

1. page272 hero proof + 28 referencia paritás;
2. page258 approval után render-cache és viselkedés lezárása;
3. page270 / page264 médiaaudit és pótlás;
4. page268 featured videó szerkezeti/geometriai javítása;
5. source↔target vizuális QA az exact acceptance viewportokon, screenshot/overlay/diff/overflow;
6. kritikus Elementor editor reopen/editability/unsaved-change;
7. csak teljes bizonyíték után `PIXEL_PASS`, majd 3. prompt átadási mód.

## Kapacitás

Utolsó közvetlen keret: 59/300 használt, 241 szabad; azóta néhány olvasás, egy sikertelen védett-cache törléskísérlet és egy sikeres Elementor CSS-regenerálás történt. Következő nagy csomag lezárásakor újra közvetlenül le kell kérni a szolgáltatói számlálót. A 10 hívásos tartalék érintetlen cél marad.

## Hivatkozások

`AGENTS.md`; `specs/decisions.md`; `specs/acceptance.json`; `specs/behaviors.json`; `specs/pages/galeria.json`; `specs/pages/soveny-specialista.json`; `reports/site-finalization-20260911.md`; `reports/summary.md`.
