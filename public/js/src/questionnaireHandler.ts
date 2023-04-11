import {getCheckedData} from "../utils/getCheckedData.js";
import {api} from "../services/api.js";
import {showAlert} from "../libraries/toastrExport.js";
import {Person} from "../Classes/Person.js";

export async function questionnaireHandler(ev: FormDataEvent, person: Person) {
    ev.preventDefault();
    if(!person) return showAlert.error('Для прохождения опроса зарегистрируйтесь из меню.');
    try {
        const formData: any = getCheckedData(ev);
        // @ts-ignore
        formData.comment = ev.currentTarget.elements.comment.value;
        formData.personId = person.id;
        if (person.questionnaireGroupId) {
            formData.answer_group_id =  person.questionnaireGroupId;
        }
        const {data} = await api.post('setQuestionnaireAnswers', formData);
        showAlert.info('Данные анкеты успешно сохранены');
        if(!person.questionnaireGroupId) {
            person.questionnaireGroupId = data.answer_group_id;
        }
    } catch (e) {
        console.log(e);
        showAlert.error('Ошибка: ' + e.message);
    }
}
