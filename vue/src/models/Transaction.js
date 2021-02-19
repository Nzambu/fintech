export default class Customer {
    constructor(id, amount, order_no, status_id, type_id, method_id, sender, beneficiary) {
        this.id = id;
        this.amount = amount;
        this.order_no = order_no;
        this.status_id = status_id;
        this.type_id = type_id;
        this.method_id = method_id;
        this.sender = sender;
        this.beneficiary = beneficiary;
    }
}