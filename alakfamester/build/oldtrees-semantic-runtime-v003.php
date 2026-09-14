<?php
/**
 * AF old trees semantic parity runtime v003
 * Scope: page ID 264 only.
 * Visual-neutral: semantic/accessibility attributes only; no CSS, no DOM reordering, no visible text replacement.
 * Mirrors live Code Snippets ID 33 after the 2026-09-14 duplicate review-dot accessibility fix.
 */
add_action('wp_footer', function () {
    if (!is_page(264)) {
        return;
    }
    ?>
<script id="af-oldtrees-semantic-parity-v001">
(function(){'use strict';
var regions=[['#af-sub-survivor-hero','Túlnőtt a fa? Mielőtt kivágatná, nézzük meg, lehet-e belőle alakfa'],['.elementor-element-af2a0007 .af-sub-inner','Ezekkel a helyzetekkel keresnek a leggyakrabban'],['.elementor-element-af2a0045 .af-sub-inner','Kivágás vagy átalakítás?'],['.elementor-element-af2a0047 .af-sub-inner','Hat lépés a kivágás helyett'],['.elementor-element-af2a0049 .af-sub-inner','Nem minden növényt kell és nem minden növényt lehet megmenteni'],['.elementor-element-af2a004a .af-sub-inner','Növények, amiket nem vágtunk ki'],['.elementor-element-af2a004b .af-sub-inner','Van hasonló növénye?'],['.elementor-element-af2a004f .af-sub-inner','Három lépés, kötelezettség nélkül'],['.elementor-element-af2a0050 .af-sub-inner','Túlnőtt növények – kérdések'],['#ajanlatkeres','Küldjön róla néhány képet']];
var reviewLabels=['Panasonic Hűtő-Klíma Technikai Kft. Kardos Attila · ügyvezető','Otolecz Transzportbeton Kft. Otolecz Andrea · ügyvezető','ARKER\'S Építésziroda Kft. Lőrincz Balázs · ügyvezető'];
function reg(s,l){var e=document.querySelector(s);if(e){e.setAttribute('role','region');e.setAttribute('aria-label',l);}}
function headings(s){document.querySelectorAll(s).forEach(function(e){e.setAttribute('role','heading');e.setAttribute('aria-level','3');});}
function ensureId(e,id){if(!e)return null;if(!e.id)e.id=id;return e.id;}
function reviewFix(){var list=document.querySelector('.af-reviews-tabs [role="tablist"]');if(list)list.setAttribute('aria-label','Ügyfélvélemények');document.querySelectorAll('.af-reviews-tabs [role="tab"]').forEach(function(t,i){if(reviewLabels[i])t.setAttribute('aria-label',reviewLabels[i]);});document.querySelectorAll('.af-reviews-tabs .af-review-source-dot').forEach(function(d){d.setAttribute('tabindex','-1');d.setAttribute('aria-hidden','true');});}
function formFix(){var r=document.querySelector('#af-survivor-metform');if(!r)return;var f=r.querySelector('form');if(f){f.setAttribute('aria-label','Ajánlatkérés');var d=r.querySelector('#af-form-direct-call');if(d)f.setAttribute('aria-describedby',ensureId(d,'af-form-direct-call'));}var g=r.querySelector('#af-form-service .mf-input-wrapper'),lab=r.querySelector('#af-form-service .mf-input-label');if(g&&lab){g.setAttribute('role','group');g.setAttribute('aria-labelledby',ensureId(lab,'af-form-service-label'));}var ci=r.querySelector('#af-form-city input[name="telepules"]'),ch=r.querySelector('#af-form-city .mf-input-help');if(ci&&ch)ci.setAttribute('aria-describedby',ensureId(ch,'af-form-city-help'));}
function apply(){regions.forEach(function(x){reg(x[0],x[1]);});headings('.elementor-element-af2a0047 .af-number-steps strong');headings('.elementor-element-af2a004f .af-number-steps strong');reviewFix();var a=document.querySelector('.elementor-element-af2a004b a[href="mailto:kreativ@alakfa-mester.hu"]');if(a)a.setAttribute('aria-label','ÍRJON BÁTRAN kreativ@alakfa-mester.hu');var p=document.querySelector('.elementor-element-af2a0054 a[href="tel:+36305394820"]');if(p)p.setAttribute('aria-label','HÍVJON NYUGODTAN +36 30 539 48 20');var m=document.querySelector('.elementor-element-af2a0054 a[href="mailto:kreativ@alakfa-mester.hu"]');if(m)m.setAttribute('aria-label','ÍRJON BÁTRAN kreativ@alakfa-mester.hu');formFix();}
if(document.readyState==='loading')document.addEventListener('DOMContentLoaded',apply,{once:true});else apply();var o=new MutationObserver(function(ms){if(ms.some(function(m){return m.addedNodes&&m.addedNodes.length;}))apply();});o.observe(document.documentElement,{childList:true,subtree:true});})();
</script>
    <?php
}, 120);
