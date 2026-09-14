<?php
/**
 * AF Hedge semantic parity runtime v002
 * Scope: page ID 272 only.
 * Successor to live Code Snippets ID36.
 * Accessibility attributes only; no CSS, visible text, DOM reorder, validation,
 * submission, click or keyboard behavior changes.
 */
add_action('wp_footer', function () {
    if (!is_page(272)) {
        return;
    }
    ?>
<script id="af-hedge-semantic-parity-v002">
(function () {
  'use strict';

  var REVIEW_LABELS = [
    'Panasonic Hűtő-Klíma Technikai Kft. Kardos Attila · ügyvezető',
    'Otolecz Transzportbeton Kft. Otolecz Andrea · ügyvezető',
    "ARKER'S Építésziroda Kft. Lőrincz Balázs · ügyvezető"
  ];

  function ensureId(el, id) {
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

    root.querySelectorAll('.af-review-source-dot').forEach(function (dot) {
      dot.setAttribute('tabindex', '-1');
      dot.setAttribute('aria-hidden', 'true');
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
        form.setAttribute('aria-describedby', ensureId(directCall, 'af-hedge-form-direct-call'));
      }
    }

    var service = root.querySelector('#af-form-service .mf-input-wrapper');
    var serviceLabel = root.querySelector('#af-form-service .mf-input-label');
    if (service && serviceLabel) {
      service.setAttribute('role', 'group');
      service.setAttribute('aria-labelledby', ensureId(serviceLabel, 'af-hedge-form-service-label'));
    }

    var cityInput = root.querySelector('#af-form-city input[name="telepules"]');
    var cityHelp = root.querySelector('#af-form-city .mf-input-help');
    if (cityInput && cityHelp) {
      cityInput.setAttribute('aria-describedby', ensureId(cityHelp, 'af-hedge-form-city-help'));
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

  /* Global reusable reviews ID14 has a documented delayed boot. */
  setTimeout(apply, 900);

  var observer = new MutationObserver(function (mutations) {
    if (mutations.some(function (mutation) {
      return mutation.addedNodes && mutation.addedNodes.length;
    })) {
      apply();
    }
  });
  observer.observe(document.documentElement, { childList: true, subtree: true });
})();
</script>
    <?php
}, 120);
