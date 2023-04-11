export function getCheckedData(ev: FormDataEvent) {
    const elements = (ev.currentTarget as HTMLFormElement).elements;
    const data = {};
    for (let i = 0; i < elements.length; i++) {
        const el = elements[i] as HTMLInputElement;
        const name = el.name;
        if(el.checked && name) {
            if(el.getAttribute('type') === 'checkbox') {
                if(data[name]) data[name].push(el.value);
                else data[name] = [el.value];
            }
            else data[name] = el.value;
        }
    }
    return data;
}
