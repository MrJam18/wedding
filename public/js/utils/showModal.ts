import {removeModal} from "./removeModal.js";

export function showModal(modalSelector: string) {
    const modal = document.querySelector(modalSelector) as HTMLElement;
    const body = document.querySelector('body');
    modal.style.display = 'block';
    setTimeout(()=> {
        modal.classList.add('show');
    });
    modal.style.backgroundColor = 'rgba(0, 0, 0, 0.5)'
    body.classList.add('modal-open');
    body.style.overflow = 'hidden';
    modal.addEventListener('click', () => removeModal(modalSelector));
    modal.querySelector('.modal-content').addEventListener('click', (ev)=> {
        ev.stopPropagation();
    });
    const closeButton = modal.querySelector('.modal-close');
    if(closeButton) closeButton.addEventListener('click', () => removeModal(modalSelector))
}
