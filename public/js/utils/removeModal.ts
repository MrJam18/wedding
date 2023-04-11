import {HtmlHelper} from "../Classes/Helpers/HtmlHelper.js";

export function removeModal(modalSelector: string) {
    const modal = document.querySelector(modalSelector) as HTMLElement;
    const backgrounds = document.querySelectorAll('.modal-backdrop');
    backgrounds.forEach((el: HTMLElement) => {
        el.classList.remove('show');
    });
    modal.classList.remove('show');
    modal.style.backgroundColor = 'transparent';
    const body = document.querySelector('body');
    body.classList.remove('modal-open');
    body.style.overflow = 'initial';
    setTimeout(() => {
        modal.style.display = 'none';
        backgrounds.forEach((el: HTMLElement) => {
            el.style.display = 'none';
        });
    }, 200);
}
