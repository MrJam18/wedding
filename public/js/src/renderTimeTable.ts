import {TimeTablePosition} from "../Classes/TimeTablePosition.js";
import {TimeTablePositionType} from "../Types/TimeTablePositionType.js";

const table: TimeTablePosition[] = [
]
let position: TimeTablePosition = new TimeTablePosition();
position.name = 'Make-up невесты';
position.time = '10:00';
position.description = 'Подготовимся к празднику';
position = pushAndCreateNewPosition()
position.time = '12:00';
position.name = 'Photo сборы невесты';
position.description = 'Сделаем отличные селфи';
position = pushAndCreateNewPosition();
position.time = '12:30';
position.name = 'Встреча молодоженов';
position.description = 'Встречаем праздник';
position = pushAndCreateNewPosition();
position.time = '13:00';
position.name = 'Tour-фотосессия';
position.description = 'Соберем отличные впечатления!';
const sobor: TimeTablePositionType = {
    address: 'Петергофский собор Петра и Павла',
    coordinates: [59.878834, 29.912551],
    fullAddress: 'Санкт-Петербургский пр-т., 32, Санкт-Петербург'
}
position = pushAndCreateNewPosition(sobor);
position.time = '14:30';
position.name = 'Венчание';
position.description = 'Главная часть праздника';
position = pushAndCreateNewPosition();
position.time = '16:00';
position.name = 'Праздничный фуршет';
position.description = 'Подкрепимся и не только';
position = pushAndCreateNewPosition();
position.time = '16:30';
position.name = 'встреча молодоженов, праздничный банкет';
position.description = 'Празднование бракосочетания';
position = pushAndCreateNewPosition();
position.time = '22:00';
position.name = 'Окончание торжества';
position.description = 'Отправим молодоженов в свадебное путешествие';

export function renderTimeTable() {
    let rendering = '';
    const last = table.length - 1;
    table.forEach((el: TimeTablePosition, index: number)=> {
        rendering += `
        <li>
            <div class="datetime zoomInLeft">
                <h3>${el.time}</h3>
            </div>
            <div class="details">
                <h3>${el.name}</h3>
                <p class="description js-emoji-included">${el.description}</p>
                <p class="addr">
                    <span class="param">Адрес: </span>
                    <span class="value" data-id="4" data-coords="${el.coordinates}" data-time-when="${el.time}" data-date-when="11 августа 2023 г." data-name="${el.name}" data-desc="${el.description}" data-addr="${el.addressFull}" data-toggle="modal" data-target="#program-map">
${el.address}</span>
                </p>
            </div>
        </li>
        `
    if(index !== last) rendering += '<li class="timeline-divider">○</li>';
    });
    document.getElementById('timelist').insertAdjacentHTML('beforeend', rendering);
}



function pushAndCreateNewPosition(data: TimeTablePositionType = null) {
    table.push(position);
    if(data) return new TimeTablePosition(data.address, data.coordinates, data.fullAddress);
    else return new TimeTablePosition();
}

