import {api} from "../services/api.js";
import {Person} from "../Classes/Person.js";
import {HtmlHelper} from "../Classes/Helpers/HtmlHelper.js";
import {showAlert} from "../libraries/toastrExport.js";

export async function initialPersonLogic(): Promise<Person | null> {
    const personId = +localStorage.getItem('personId');
    if(personId) {
        try{
            const {data} = await api.get('getPersonData/' + personId);
            const person = new Person();
            person.id = data.id;
            person.inviteAnswerId = data.inviteAnswerId;
            person.questionnaireGroupId = data.questionnaireGroupId;
            if(person.inviteAnswerId) HtmlHelper.innerHTML('.accept-note', 'Спасибо, что ответили на приглашение.');
            return person;
        }
        catch (e) {
            console.log(e);
            showAlert.error('Ошибка: ' + e.message);
        }

    }
    return null;
}
