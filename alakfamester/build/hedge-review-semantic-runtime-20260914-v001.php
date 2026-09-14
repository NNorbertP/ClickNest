<?php
/**
 * AF Hedge review semantic parity runtime v001
 * Scope: page ID 272 only.
 * Visual-neutral: accessibility attributes only; no CSS, text replacement,
 * DOM reordering, click handling, keyboard handling or control removal.
 * Prepared from source/target AX evidence and the proven D12 native tabs tree.
 */
add_action('wp_footer', function () {
    if (!is_page(272)) {
        return;
    }
    ?>
<script id="af-hedge-review-semantic-parity-v001">
(function () {
  'use strict';

  var REVIEW_LABELS = [
    'Panasonic Hűtő-Klíma Technikai Kft. Kardos Attila · ügyvezető',
    'Otolecz Transzportbeton Kft. Otolecz Andrea · ügyvezető',
    "ARKER'S Építésziroda Kft. Lőrincz Balázs · ügyvezető"
  ];

  function apply() {
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
