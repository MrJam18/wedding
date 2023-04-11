import {renderTimeTable} from "./src/renderTimeTable.js";
import {HtmlHelper} from "./Classes/Helpers/HtmlHelper.js";
import {createPersonHandler} from "./src/createPersonHandler.js";
import {answerInvitationHandler} from "./src/answerInvitationHandler.js";
import {questionnaireHandler} from "./src/questionnaireHandler.js";
import {initialPersonLogic} from "./src/initialPersonLogic.js";
import {Person} from "./Classes/Person.js";
import {showModal} from "./utils/showModal.js";
import {registrationClickHandler} from "./src/registrationClickHandler.js";
import {showAlert} from "./libraries/toastrExport.js";

renderTimeTable();
let person: Person = null;
initialPersonLogic().then((personValue) => person = personValue);
HtmlHelper.submitEvent('#form-create-person',async (ev)=>{
    person = await createPersonHandler(ev);
});
HtmlHelper.submitEvent('#form-guest-accept', async (ev)=> {
    await answerInvitationHandler(ev, person, '#modal-guest-accept');
});
HtmlHelper.submitEvent('#form-guest-decline', async (ev) => {
    await answerInvitationHandler(ev, person, '#modal-guest-decline');
});
HtmlHelper.submitEvent('#questionnaire', async (ev) => await questionnaireHandler(ev, person));
HtmlHelper.addClickEvent('#decline-invite-button',() => {
    if(person) showModal('#modal-guest-decline');
    else showAlert.error('Сначала пройдите регистрацию из меню');
} );
HtmlHelper.addClickEvent('#accept-invite-button', () => {
    if(person) showModal('#modal-guest-accept');
    else showAlert.error('Сначала пройдите регистрацию из меню')
});
HtmlHelper.addClickEvent('#registration-button', registrationClickHandler);

