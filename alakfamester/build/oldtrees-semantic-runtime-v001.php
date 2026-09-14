<?php
/**
 * AF old trees semantic parity runtime v001
 * Scope: page ID 264 only.
 * Visual-neutral: attributes only; no CSS, no DOM reordering, no text replacement.
 * Installed as Code Snippets ID 33 on 2026-09-14 after exact page264 hash preflight.
 */
add_action('wp_footer', function () {
    if (!is_page(264)) {
        return;
    }
    ?>
<script id="af-oldtrees-semantic-parity-v001">
(function () {
  'use strict';

  var REGION_MAP = [
    ['#af-sub-survivor-hero', 'Túlnőtt a fa? Mielőtt kivágatná, nézzük meg, lehet-e belőle alakfa'],
    ['.elementor-element-af2a0007 .af-sub-inner', 'Ezekkel a helyzetekkel keresnek a leggyakrabban'],
    ['.elementor-element-af2a0045 .af-sub-inner', 'Kivágás vagy átalakítás?'],
    ['.elementor-element-af2a0047 .af-sub-inner', 'Hat lépés a kivágás helyett'],
    ['.elementor-element-af2a0049 .af-sub-inner', 'Nem minden növényt kell és nem minden növényt lehet megmenteni'],
    ['.elementor-element-af2a004a .af-sub-inner', 'Növények, amiket nem vágtunk ki'],
    ['.elementor-element-af2a004b .af-sub-inner', 'Van hasonló növénye?'],
    ['.elementor-element-af2a004f .af-sub-inner', 'Három lépés, kötelezettség nélkül'],
    ['.elementor-element-af2a0050 .af-sub-inner', 'Túlnőtt növények – kérdések'],
    ['#ajanlatkeres', 'Küldjön róla néhány képet']
  ];

  var REVIEW_LABELS = [
    'Panasonic Hűtő-Klíma Technikai Kft. Kardos Attila · ügyvezető',
    'Otolecz Transzportbeton Kft.',
    "ARKER'S Építésziroda Kft."
  ];

  function setRegion(selector, label) {
    var el = document.querySelector(selector);
    if (!el) return;
    el.setAttribute('role', 'region');
    el.setAttribute('aria-label', label);
  }

  function setStepHeadings(selector) {
    document.querySelectorAll(selector).forEach(function (el) {
      el.setAttribute('role', 'heading');
      el.setAttribute('aria-level', '3');
    });
  }

  function setId(el, id) {
    if (!el) return null;
    if (!el.id) el.id = id;
    return el.id;
  }

  function fixReviewSemantics() {
    var tabList = document.querySelector('.af-reviews-tabs [role="tablist"]');
    if (tabList) tabList.setAttribute('aria-label', 'Ügyfélvélemények');

    document.querySelectorAll('.af-reviews-tabs [role="tab"]').forEach(function (tab, index) {
      if (REVIEW_LABELS[index]) tab.setAttribute('aria-label', REVIEW_LABELS[index]);
    });
  }

  function fixFormSemantics() {
    var root = document.querySelector('#af-survivor-metform');
    if (!root) return;

    var form = root.querySelector('form');
    if (form) {
      form.setAttribute('aria-label', 'Ajánlatkérés');
      var directCall = root.querySelector('#af-form-direct-call');
      if (directCall) {
        form.setAttribute('aria-describedby', setId(directCall, 'af-form-direct-call'));
      }
    }

    var service = root.querySelector('#af-form-service .mf-input-wrapper');
    var serviceLabel = root.querySelector('#af-form-service .mf-input-label');
    if (service && serviceLabel) {
      var serviceLabelId = setId(serviceLabel, 'af-form-service-label');
      service.setAttribute('role', 'group');
      service.setAttribute('aria-labelledby', serviceLabelId);
    }

    var cityInput = root.querySelector('#af-form-city input[name="telepules"]');
    var cityHelp = root.querySelector('#af-form-city .mf-input-help');
    if (cityInput && cityHelp) {
      cityInput.setAttribute('aria-describedby', setId(cityHelp, 'af-form-city-help'));
    }
  }

  function apply() {
    REGION_MAP.forEach(function (item) { setRegion(item[0], item[1]); });
    setStepHeadings('.elementor-element-af2a0047 .af-number-steps strong');
    setStepHeadings('.elementor-element-af2a004f .af-number-steps strong');
    fixReviewSemantics();

    var ctaMail = document.querySelector('.elementor-element-af2a004b a[href="mailto:kreativ@alakfa-mester.hu"]');
    if (ctaMail) {
      ctaMail.setAttribute('aria-label', 'ÍRJON BÁTRAN kreativ@alakfa-mester.hu');
    }

    var formPhone = document.querySelector('.elementor-element-af2a0054 a[href="tel:+36305394820"]');
    if (formPhone) {
      formPhone.setAttribute('aria-label', 'HÍVJON NYUGODTAN +36 30 539 48 20');
    }

    var formMail = document.querySelector('.elementor-element-af2a0054 a[href="mailto:kreativ@alakfa-mester.hu"]');
    if (formMail) {
      formMail.setAttribute('aria-label', 'ÍRJON BÁTRAN kreativ@alakfa-mester.hu');
    }

    fixFormSemantics();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', apply, { once: true });
  } else {
    apply();
  }

  var observer = new MutationObserver(function (mutations) {
    var needsApply = mutations.some(function (m) { return m.addedNodes && m.addedNodes.length; });
    if (needsApply) apply();
  });
  observer.observe(document.documentElement, { childList: true, subtree: true });
})();
</script>
    <?php
}, 120);
