<?php
/**
 * AF Hedge review semantic parity v001
 * Scope: page ID 272 only.
 * Visual-neutral: accessibility attributes only; no CSS, visible text or DOM reordering.
 */
add_action('wp_footer', function () {
    if (!is_page(272)) {
        return;
    }
    ?>
<script id="af-hedge-review-semantic-parity-v001">
(function () {
  'use strict';

  function apply() {
    var root = document.querySelector('.af-reviews-tabs');
    if (!root) return;

    var tablist = root.querySelector('[role="tablist"]');
    if (tablist) {
      tablist.setAttribute('aria-label', 'Ügyfélvélemények');
    }

    root.querySelectorAll('.af-review-source-dot').forEach(function (dot) {
      dot.setAttribute('tabindex', '-1');
      dot.setAttribute('aria-hidden', 'true');
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', apply, { once: true });
  } else {
    apply();
  }

  /* ID14 performs a delayed reusable-review boot; re-apply after that point. */
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
