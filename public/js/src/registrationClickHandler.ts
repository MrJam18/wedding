import {showModal} from "../utils/showModal.js";

export function registrationClickHandler(ev): void {
    ev.preventDefault();
    showModal('#modal-create-person');
}
