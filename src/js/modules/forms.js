import Pristine from 'pristinejs';

const createForm = document.getElementById('createForm');
const submitCreateFormButton = document.getElementById('createModal').querySelector('button[type="submit"]')
console.log(submitCreateFormButton)

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

submitCreateFormButton.addEventListener('click', async (event) => {
    event.preventDefault();
    const pristine = new Pristine(createForm, config);
    const isValid = pristine.validate();
    if (isValid) {
        createForm.submit();
    }
})