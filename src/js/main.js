import '@popperjs/core';
import 'bootstrap/dist/js/bootstrap';
import './modules/bootstrap';

const tableActionButtons = document.querySelectorAll('[data-element="table-action"]');

let selectedId = -1;

tableActionButtons.forEach(button => {
    button.onclick = (event) => {
        selectedId = event.currentTarget.getAttribute('data-id');
    }
})