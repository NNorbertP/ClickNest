<?php
/**
 * AF Hedge semantic parity runtime v001
 * Scope: page ID 272 only.
 * Visual-neutral: accessibility attributes only; no CSS, visible text replacement,
 * DOM reordering, click handling, keyboard handling, validation or control removal.
 * Prepared from source/target AX evidence, D12 native tabs and the proven MetForm33 contract.
 */
add_action('wp_footer', function () {
    if (!is_page(272)) {
        return;
    }
    ?>
<script id="af-hedge-semantic-parity-v001">
(function () {
  'use strict';

  var REVIEW_LABELS = [
    'Panasonic Hűtő-Klíma Technikai Kft. Kardos Attila · ügyvezető',
    'Otolecz Transzportbeton Kft. Otolecz Andrea · ügyvezető',
    "ARKER'S Építésziroda Kft. Lőrincz Balázs · ügyvezető"
  ];

  function setId(el, id) {
    if (!el) return null;
    if (!el.id) el.id = id;
    return el.id;
  }

  function fixReviews() {
    var root = document.querySelector('.elementor-element-c3d30005');
    if (!root) return;

    var tabList = root.querySelector('[role="tablist"]');
    if (tabList) {
      tabList.setAttribute('aria-label', 'Ügyfélvélemények');
    }

    root.querySelectorAll('[role="tab"]').forEach(function (tab, index) {
      if (REVIEW_LABELS[index]) {
        tab.setAttribute('aria-label', REVIEW_LABELS[index]);
      }
    });
  }

  function fixForm() {
    var region = document.querySelector('#ajanlatkeres');
    if (region) {
      region.setAttribute('role', 'region');
      region.setAttribute('aria-label', 'Küldjön fotót a sövényről');
    }

    var root = document.querySelector('.mf-form-wrapper[data-form-id="33"]');
    if (!root) return;

    var form = root.querySelector('form');
    if (form) {
      form.setAttribute('aria-label', 'Ajánlatkérés');
      var directCallLink = form.querySelector('a[href="tel:+36305394820"]');
      var directCall = directCallLink ? directCallLink.closest('p') : null;
      if (directCall) {
        form.setAttribute('aria-describedby', setId(directCall, 'af-hedge-form-direct-call'));
      }
    }

    var service = root.querySelector('#af-form-service .mf-input-wrapper');
    var serviceLabel = root.querySelector('#af-form-service .mf-input-label');
    if (service && serviceLabel) {
      var serviceLabelId = setId(serviceLabel, 'af-hedge-form-service-label');
      service.setAttribute('role', 'group');
      service.setAttribute('aria-labelledby', serviceLabelId);
    }

    var cityInput = root.querySelector('#af-form-city input[name="telepules"]');
    var cityHelp = root.querySelector('#af-form-city .mf-input-help');
    if (cityInput && cityHelp) {
      cityInput.setAttribute('aria-describedby', setId(cityHelp, 'af-hedge-form-city-help'));
    }
  }

  function apply() {
    fixReviews();
    fixForm();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', apply, { once: true });
  } else {
    apply();
  }

  var observer = new MutationObserver(function (mutations) {
    var shouldApply = mutations.some(function (m) {
      return m.addedNodes && m.addedNodes.length;
    });
    if (shouldApply) apply();
  });
  observer.observe(document.documentElement, { childList: true, subtree: true });
})();
</script>
    <?php
}, 120);
