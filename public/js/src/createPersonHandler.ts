import {buildFormData} from "../utils/buildFormData.js";
import {api} from "../services/api.js";
import {showAlert} from "../libraries/toastrExport.js";
import {Person} from "../Classes/Person.js";
import {removeModal} from "../utils/removeModal.js";

export async function createPersonHandler(ev: FormDataEvent): Promise<Person> {
    ev.preventDefault();
    const form = ev.currentTarget as HTMLFormElement;
    const formData = buildFormData(form);
    try {
        const {data} = await api.post('createPerson', formData);
        removeModal('#modal-create-person');
        showAlert.info('Данные успешно сохранены.');
        localStorage.setItem('personId', data.personId);
        const person = new Person();
        person.id = data.personId;
        return person;
    }
    catch (e: any) {
        showAlert.error("Ошибка: " + e.message);
    }

}
