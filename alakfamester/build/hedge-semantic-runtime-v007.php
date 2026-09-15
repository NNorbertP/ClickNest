<?php
/**
 * AF Hedge semantic parity runtime v007
 * Scope: page ID 272 only.
 *
 * Preserves the verified v006 review/Form33 semantics and adds source-equivalent
 * accessible names only to three freshly proven complete section-scale roots:
 * hero, gallery and request-form section.
 *
 * No CSS, visible text, DOM reorder, Elementor data, form validation,
 * submission, click or keyboard behavior changes.
 */
add_action('wp_footer', function () {
    if (!is_page(272)) {
        return;
    }
    ?>
<script id="af-hedge-semantic-parity-v007">
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

  function setRegionLabelIfUnowned(selector, expected) {
    var region = document.querySelector(selector);
    if (!region) return;
    var currentLabel = (region.getAttribute('aria-label') || '').trim();
    var currentLabelledby = (region.getAttribute('aria-labelledby') || '').trim();
    if (!currentLabel && !currentLabelledby) {
      region.setAttribute('aria-label', expected);
    }
  }

  function fixOuterRegions() {
    setRegionLabelIfUnowned('#af-sub-hedge-hero', 'Minőségi sövény formára vágás, metszés és megújítás');
    setRegionLabelIfUnowned('#af-hedge-gallery', 'Sövénymunkák');
    setRegionLabelIfUnowned('#ajanlatkeres', 'Küldjön fotót a sövényről');
  }

  function fixReviews() {
    var root = document.querySelector('.af-reviews-tabs') || document.querySelector('.elementor-element-c3d30005');
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
    fixOuterRegions();
    fixReviews();
    fixForm();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', apply, { once: true });
  } else {
    apply();
  }

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
