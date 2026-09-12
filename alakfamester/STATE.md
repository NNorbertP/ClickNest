# STATE - 2026-09-12, HOMEPAGE/NAV CLOSED; RÓLAM + IDŐS FÁK MEDIA FINALIZATION ACTIVE

## Current target / quota
Target: https://alakfamester-wp.clicknest.hu/ ; repo `NNorbertP/ClickNest`, branch `main`, folder `alakfamester/`.

WPVibe account: `ncsnorbert+20260912-4@gmail.com`; live connection verified. Last exact quota checkpoint was **46/300 used, 254 remaining** before the latest read-only media checks; **recheck the counter before any write package and keep at least 10 calls for recovery/closeout**. No SMTP and no external form/test message.

Environment: WP 7.1 / PHP 8.3.33 / WPVibe 1.16.4; Hello Elementor 3.5.1 active. Preserve page56/page12, ElementsKit header20/footer21, MetForm33, Additional CSS post8 and canonical subpages. Homepage remains page56 on `elementor_header_footer`.

Frozen source aggregate: `fc1229f01ea7002131153b606f3cb6c549b001f93337efbb2352089800349707`.

## Rules
D02 Hello + ElementsKit global header/footer. D03 V4 Atomic normal structure with documented legacy-widget boundary. D05 MetForm Free. D06 Georgia/system stack. D07 handwritten CSS only in Hello Additional CSS. D08 exact source text/service structure. D09 canonical WP URL mapping. D11 10-call reserve. D12 reviews native Atomic Tabs. D17 EAEL Free masonry. D18 preserve V4 class semantics before structural full-save. Use targeted `content/edit` only for unique proven changes with immediate readback. Before any Additional CSS write reread complete post8 and modify only the af-project block.

## CLOSED - Homepage + navigation final audit v001
Evidence: `reports/home/home-final-audit-v001.json`, commit `3bf78b117ac90b614ad69b998e442ad1808a50b8`.
- hedge intro paragraphs source order restored without changing IDs;
- MetForm33 source final direct-call note restored, no submit/SMTP;
- footer target-only `Biró János · topiarista` removed;
- all ten canonical pages published on `elementor_header_footer`, exactly one global ElementsKit header/footer, 0 source-host / `.html` refs.
Hashes: page56 `66126facdd0fd5e7d8ff395ebf095efbe605e6e4af1de57fcecab90e5dfd82d1`; MetForm33 `ea091a697d1d4589998315fc24c0818479f5229a2fb6d64d99ab79b6d77518b3`; footer21 `81ea2bb5e50768b17230efac4e1f175d177759bda7df1325aa8912038c7322e1`.

## CLOSED - Subpage background-helper verification v001
Evidence: `reports/subpages/background-helper-finalization-v001.json`, commit `db71fa6f35046a25ca15ec864fa2c1978a18091f`.
Fresh live reads showed all three old issues already correct; no WordPress write:
- page270 `af-s-rolam-9` = `af-bg-sage`;
- page270 `af-s-rolam-11` = `af-bg-paper`;
- page272 `af-s-soveny-specialista-8` = `af-bg-sage`.
Hashes: page270 `7a100609dbb724419f46139d3a4b256dcf1e1e545f5e698c4249209bec4cba6f`; page272 `4c80d1108004fa133341da566e60adcda1b93c1f9ba5e3d110ff4cfdee4006e5`.

## CLOSED - Gallery + Hedge media parity recheck v001
Evidence: `reports/subpages/gallery-hedge-media-finalization-v001.json`, commit `d0ac9e9114aa44b400381537885ffa6cbdfcc0db`.
No WordPress write. The large missing-image counts from `site-finalization-20260911.md` are stale after the D17 migrations.
- Gallery source AX: 61 total = 60 main + 1 ClickNest footer reference; target = 60 main. EAEL migration remains documented at 44 items. Current page258 hash `1494ff3cce05b92be9a4e962c67bbb4bd903c3ae2829c7e46914c09d2065d656`, 72916 B.
- One Gallery source asset remains externally unavailable: `kepek/175725917368bda5a5b1ae6_370X354.webp` / alt `A többgömbös Ellwoodi niwaki, másik nézet` returns direct-browser 404. Do not invent or upload a substitute. Target related existing attachments are 149/150; they are different dimensions and are not asserted hash-identical to the missing source.
- Hedge source AX: 32 total = 31 main + 1 ClickNest footer reference; target = 31 main. EAEL migration remains 28 items. Saved proof contains `soveny-21.webp`; source/target showed different active proof slides only because carousel timing differed. Current page272 hash `4c80d1108004fa133341da566e60adcda1b93c1f9ba5e3d110ff4cfdee4006e5`, 53311 B.

## Previously closed/stable
Homepage header/hero, before/after, process/care/concerns, survivor/forms, hedge/not-fit/price, specialist/health/references, FAQ/contact; MetForm33 prompt-2 config; D09 contact-link audit; page256 biological hero; page264 Old Trees content/form packages; page258 EAEL masonry/native reviews; page272 proof/native reviews/EAEL masonry/MetForm; page56 partner section. Detailed evidence remains under `reports/`.

## NEXT - RÓLAM + IDŐS FÁK MEDIA PARITY RECHECK
Before any write:
1. reread current Rólam and Old Trees evidence plus D08/D11/D18;
2. fresh-count current source and target media from browser and compare page hashes/known attachment mappings;
3. preserve existing attachment IDs and do not retry the known unavailable Rólam portrait URL;
4. fix only concrete, available source→target gaps, using the smallest supported save and immediate readback;
5. update evidence/STATE, then verify Reference Videos featured-block vertical structure.

After that, continue viewport/behavior QA with available browser instrumentation. Do not claim page-wide pixel parity without controlled frozen-viewport screenshot/overlay/diff.

## Known blockers
- Rólam source portrait `Biró János munka közben` / `kepek/biro-janos-portre.webp`: source URL previously unavailable; do not retry blindly; require frozen/local source bytes or fresh proof it became available.
- Gallery Ellwoodi source asset above: direct-browser 404.
- `specs/acceptance.json` and `specs/behaviors.json` are not exposed through the repository connector; formal frozen automated matrix unavailable.
- SMTP/delivery and real MetForm submission are prompt-3 tasks.

## Acceptance
Homepage content/structure/navigation is closed; Gallery/Hedge media count gaps are closed except the documented unavailable Ellwoodi source asset. Site-wide controlled viewport visual/interaction acceptance remains open. `PIXEL_PASS=false`.
