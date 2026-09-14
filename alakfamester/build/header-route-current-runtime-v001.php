<?php
/**
 * AF header route-group current-state parity v001.
 * Global header only; visual state class only; no content, layout or navigation mutation.
 */
add_action('wp_footer', function () {
    ?>
<script id="af-header-route-current-parity-v001">
(function () {
  'use strict';

  var GROUPS = {
    'af-nav-services': [
      '/soveny-specialista/',
      '/idos-fak-megmentese-szolgaltatas/',
      '/biologiai-vedelem/',
      '/gyumolcsfak-metszese-es-vedelme/'
    ],
    'af-nav-references': [
      '/galeria/',
      '/referencia-videok/'
    ]
  };

  function normalize(path) {
    path = String(path || '/').replace(/\/+$/, '');
    return path || '/';
  }

  function apply() {
    var current = normalize(window.location.pathname);
    Object.keys(GROUPS).forEach(function (id) {
      var button = document.getElementById(id);
      var host = button && button.closest('.af-nav-dropdown-host');
      if (!host) return;
      var active = GROUPS[id].some(function (path) {
        return normalize(path) === current;
      });
      host.classList.toggle('is-current', active);
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', apply, { once: true });
  } else {
    apply();
  }
  setTimeout(apply, 400);
  setTimeout(apply, 1400);

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
