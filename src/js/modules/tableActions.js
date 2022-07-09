const tableEditButtons = document.querySelectorAll('[data-table-action="edit"]');
const tableDeleteButtons = document.querySelectorAll('[data-table-action="delete"]');

tableDeleteButtons.forEach(button => button.addEventListener('click', (event) =>
    tableActionClick(event, 'eliminar', 'deleteForm'))
);

tableEditButtons.forEach(button => button.addEventListener(
        'click',
        (event) => {
            const formId = 'editForm';
            tableActionClick(event, 'actualizar', formId);
            setEditFormFields(event, formId);
        }
    )
);

const tableActionClick = (event, action, formId) => {
    const id = event.currentTarget.getAttribute('data-record-id')
    const url = `${window.location.href}/${action}/${id}`;
    const form = document.getElementById(formId);
    form.setAttribute('action', url);
}

const setEditFormFields = (event, formId) => {
    const record = JSON.parse(event.currentTarget.getAttribute('data-record'));
    const form = document.getElementById(formId);
    const fields = form.querySelectorAll('input');
    fields.forEach(field => {
        const name = field.name;
        field.value = record[name];
    })
}