const tableEditButtons = document.querySelectorAll('[data-table-action="edit"]');
const tableDeleteButtons = document.querySelectorAll('[data-table-action="delete"]');

const tableActionClick = (event) => {
    const id = event.currentTarget.getAttribute('data-record-id')
    const deleteUrl = `${window.location.href}/eliminar/${id}`;
    console.log('deleteUrl', deleteUrl)
    const form = document.getElementById('deleteForm');
    form.setAttribute('action', deleteUrl);
    console.log('form', form)
}
tableDeleteButtons.forEach(button => button.onclick = tableActionClick)

// let selectedId = -1;
//
// tableActionButtons.forEach(button => {
//     button.onclick = (event) => {
//         selectedId = event.currentTarget.getAttribute('data-id');
//     }
// })