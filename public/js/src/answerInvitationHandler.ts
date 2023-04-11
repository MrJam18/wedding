import {buildFormData} from "../utils/buildFormData.js";
import {api} from "../services/api.js";
// @ts-ignore
import {AxiosResponse} from "axios";
import {showAlert} from "../libraries/toastrExport.js";
import {removeModal} from "../utils/removeModal.js";
import {HtmlHelper} from "../Classes/Helpers/HtmlHelper.js";
import {Person} from "../Classes/Person.js";
let answerId = null;

export async function answerInvitationHandler(ev: FormDataEvent, person: Person, modalSelector: string) {
    ev.preventDefault();
    const form = ev.currentTarget as HTMLFormElement;
    const formData: any = buildFormData(form);
    formData.personId = person.id;
    if(person.inviteAnswerId) formData.answerId = answerId;
    try {
        const {data} = await api.post('setInvitedAnswer', formData);
        if(!person.inviteAnswerId) person.inviteAnswerId = data.answerId;
        removeModal(modalSelector);
        HtmlHelper.innerHTML('.accept-note', 'Спасибо, что ответили на приглашение.');
        showAlert.info('Ваш ответ отправлен молодоженам')
    }
    catch (e) {
        console.log(e);
        showAlert.error('Ошибка: ' + e.message);
    }

}
