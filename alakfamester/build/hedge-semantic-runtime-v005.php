<?php
/**
 * AF Hedge semantic parity runtime v005
 * Scope: page ID 272 only.
 * Prepared successor to live Code Snippets ID36.
 * Accessibility attributes only; no CSS, visible text, DOM reorder, validation,
 * submission, click or keyboard behavior changes.
 *
 * v005 preserves any current native IDREF relations when adding the project-owned
 * description/naming IDs. It intentionally does NOT label #ajanlatkeres as a region
 * until a fresh DOM proves one complete target root owns the full source form section.
 */
add_action('wp_footer', function () {
    if (!is_page(272)) {
        return;
    }
    ?>
<script id="af-hedge-semantic-parity-v005">
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

  function addIdRef(el, attr, id) {
    if (!el || !id) return;
    var raw = el.getAttribute(attr) || '';
    var refs = raw.trim() ? raw.trim().split(/\s+/) : [];
    if (refs.indexOf(id) === -1) refs.push(id);
    el.setAttribute(attr, refs.join(' '));
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

  function findDirectCall(root) {
    if (!root) return null;

    var stable = root.querySelector('#af-form-direct-call');
    if (stable) return stable;

    var link = root.querySelector('a[href="tel:+36305394820"]');
    return link ? link.closest('p') : null;
  }

  function fixForm() {
    var root = document.querySelector('.mf-form-wrapper[data-form-id="33"]');
    if (!root) return;

    var form = root.querySelector('form');
    if (form) {
      form.setAttribute('aria-label', 'Ajánlatkérés');

      var directCall = findDirectCall(root);
      if (directCall) {
        addIdRef(form, 'aria-describedby', ensureId(directCall, 'af-form-direct-call'));
      }
    }

    var service = root.querySelector('#af-form-service .mf-input-wrapper');
    var serviceLabel = root.querySelector('#af-form-service .mf-input-label');
    if (service && serviceLabel) {
      var currentRole = service.getAttribute('role');
      if (!currentRole || currentRole === 'group') {
        service.setAttribute('role', 'group');
        addIdRef(service, 'aria-labelledby', ensureId(serviceLabel, 'af-hedge-form-service-label'));
      }
    }

    var cityInput = root.querySelector('#af-form-city input[name="telepules"]');
    var cityHelp = root.querySelector('#af-form-city .mf-input-help');
    if (cityInput && cityHelp) {
      addIdRef(cityInput, 'aria-describedby', ensureId(cityHelp, 'af-hedge-form-city-help'));
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
