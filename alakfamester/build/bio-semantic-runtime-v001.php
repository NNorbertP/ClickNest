<?php
/**
 * AF Biological Protection semantic parity runtime v001
 * Scope: page ID 256 only.
 * Visual-neutral: ARIA/keyboard exposure attributes only; no CSS, no DOM reorder, no text replacement.
 */
add_action('wp_footer', function () {
    if (!is_page(256)) {
        return;
    }
    ?>
<script id="af-bio-semantic-parity-v001">
(function () {
  'use strict';

  var REVIEW_LABELS = [
    'Panasonic Hűtő-Klíma Technikai Kft. Kardos Attila · ügyvezető',
    'Otolecz Transzportbeton Kft. Otolecz Andrea · ügyvezető',
    "ARKER'S Építésziroda Kft. Lőrincz Balázs · ügyvezető"
  ];

  function setRegion(selector, label) {
    var el = document.querySelector(selector);
    if (!el) return;
    el.setAttribute('role', 'region');
    el.setAttribute('aria-label', label);
  }

  function fixReviews() {
    var tabList = document.querySelector('.af-reviews-tabs [role="tablist"]');
    if (tabList) tabList.setAttribute('aria-label', 'Ügyfélvélemények');

    document.querySelectorAll('.af-reviews-tabs [role="tab"]').forEach(function (tab, index) {
      if (REVIEW_LABELS[index]) tab.setAttribute('aria-label', REVIEW_LABELS[index]);
    });

    document.querySelectorAll('.af-reviews-tabs .af-review-source-dot').forEach(function (dot) {
      dot.setAttribute('tabindex', '-1');
      dot.setAttribute('aria-hidden', 'true');
    });
  }

  function apply() {
    setRegion('#af-sub-bio-hero', 'Biológiai növényvédelem alakfákhoz, sövényekhez és értékes kerti növényekhez');
    setRegion('.elementor-element-af260008', 'Biológiai védelem – kérdések');
    fixReviews();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', apply, { once: true });
  } else {
    apply();
  }

  var observer = new MutationObserver(function (mutations) {
    if (mutations.some(function (mutation) { return mutation.addedNodes && mutation.addedNodes.length; })) {
      apply();
    }
  });
  observer.observe(document.documentElement, { childList: true, subtree: true });
})();
</script>
    <?php
}, 120);
