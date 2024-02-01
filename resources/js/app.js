import './bootstrap';

import "~resources/scss/app.scss";
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);


// GESTIONE MODAL - DELETE
const buttons = document.querySelectorAll('.btn-delete');
console.log(buttons);

buttons.forEach(button => {
    button.addEventListener('click', (event) => {
        event.preventDefault();
        // console.log('clicked');
        
        const deleteModal = new bootstrap.Modal('#delete-modal');
        
        const title = button.getAttribute('data-title');
        document.getElementById('title-to-delete').innerHTML = title;
        
        document.getElementById('button-delete').addEventListener('click', () => {
            // console.log(button.parentElement);
            button.parentElement.submit();
        })

        deleteModal.show();
    });
})
 // fine MODAL - DELETE