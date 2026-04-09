<?php
if (defined('FOERDELAB_DEMO_OVERLAY_RENDERED')) {
    return;
}
define('FOERDELAB_DEMO_OVERLAY_RENDERED', true);
?>
<style>
.foerdelab-demo-badge {
    position: fixed;
    right: 18px;
    bottom: 18px;
    z-index: 9999;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    max-width: min(92vw, 420px);
    padding: 12px 16px;
    border-radius: 14px;
    border: 1px solid rgba(196,163,90,.3);
    background: rgba(27,72,82,.92);
    color: #fff;
    box-shadow: 0 12px 34px rgba(0,0,0,.28);
    backdrop-filter: blur(10px);
    font: 600 13px/1.35 'Lora', Georgia, serif;
    text-decoration: none;
    transition: border-color .2s, box-shadow .2s;
}
.foerdelab-demo-badge:hover {
    border-color: rgba(196,163,90,.55);
    box-shadow: 0 12px 34px rgba(0,0,0,.35);
}
.foerdelab-demo-badge__mark {
    flex: 0 0 auto;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border-radius: 999px;
    background: linear-gradient(135deg, #C4A35A, #A8883C);
    color: #1B4852;
    font-family: 'Playfair Display', Georgia, serif;
    font-weight: 800;
}
.foerdelab-demo-badge__meta {
    display: flex;
    flex-direction: column;
    gap: 2px;
}
.foerdelab-demo-badge__meta strong {
    font-size: 12px;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: #C4A35A;
}
.foerdelab-demo-badge__meta span {
    font-size: 13px;
    font-weight: 500;
    opacity: .85;
}
@media (max-width: 640px) {
    .foerdelab-demo-badge {
        right: 12px;
        left: 12px;
        bottom: 12px;
        max-width: none;
    }
}
</style>
<a href="https://foerdelab.de" target="_blank" rel="noopener noreferrer" class="foerdelab-demo-badge" aria-label="FördeLab Demo-Hinweis">
    <span class="foerdelab-demo-badge__mark">F</span>
    <span class="foerdelab-demo-badge__meta">
        <strong>FördeLab Demo</strong>
        <span>Demo für Malermeister Lukas Anderson · Nicht zur Weitergabe</span>
    </span>
</a>