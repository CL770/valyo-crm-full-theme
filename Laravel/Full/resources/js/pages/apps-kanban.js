/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Apps Kanban
 * Version: 4.1.0
 */
import Sortable from 'sortablejs'

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('[data-plugins="sortable"]').forEach(el => {
        new Sortable(el, {
            animation: 150,
            group: 'shared',
            ghostClass: 'sortable-item-ghost',
            forceFallback: true,
            emptyInsertThreshold: 100,
            chosenClass: 'sortable-item-active'
        });
    });
})