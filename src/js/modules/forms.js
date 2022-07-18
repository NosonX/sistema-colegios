import Pristine from 'pristinejs';

const createForm = document.getElementById('createForm');
const editForm = document.getElementById('editForm');
const submitCreateFormButton = document.getElementById('createModal').querySelector('button[type="submit"]')
const submitEditFormButton = document.getElementById('editModal').querySelector('button[type="submit"]')

const config = {
    // class of the parent element where the error/success class is added
    classTo: 'form-group',
    errorClass: 'has-danger',
    successClass: 'has-success',
    // class of the parent element where error text element is appended
    errorTextParent: 'form-group',
    // type of element to create for the error text
    errorTextTag: 'div',
    // class of the error text element
    errorTextClass: 'text-danger'
};

const submitForm = async (event, form) => {
    event.preventDefault();
    const pristine = new Pristine(form, config);
    const isValid = pristine.validate();
    if (isValid) {
        form.submit();
    }
};

submitCreateFormButton.addEventListener('click', (event) => submitForm(event, createForm));
submitEditFormButton.addEventListener('click', (event) => submitForm(event, editForm));