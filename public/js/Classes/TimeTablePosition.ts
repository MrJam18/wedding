export class TimeTablePosition
{
    constructor(address: string = null, coordinates: [number, number] = null, addressFull: string = null) {
        this.address = address ?? 'Ленинградская область, Ломоносовский район, территория троицкая гора, д. 33 (Петергоф-Лофт)';
        this.coordinates = coordinates ?? [59.867710, 29.836527];
        this.addressFull = addressFull ?? address;
    }
    public time: string;
    public address: string;
    public addressFull: string;
    public name: string;
    public description: string;
    public coordinates: [number, number];
}
