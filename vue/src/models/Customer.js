export default class Customer {
    constructor(id, first_name, last_name, phone, email, currency_id, status_id, group_id, gender_id, id_number) {
        this.id = id;
        this.first_name = first_name;
        this.last_name = last_name;
        this.phone = phone;
        this.email = email;
        this.currency_id = currency_id;
        this.status_id = status_id;
        this.group_id = group_id;
        this.gender_id = gender_id;
        this.id_number = id_number;
    }
}