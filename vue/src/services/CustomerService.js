import Axios from './Axios';

class CustomerService {
    /**
     * Get a list of available customers
     */
    getCustomerList = () => {
        return Axios({
            method : 'GET',
            url : 'customer'
        });
    }

    /**
     * Create a customer
     */
    createCustomer = (customer) => {
        return Axios({
            method : 'POST',
            url : 'customer',
            data : customer
        })
    }

    /**
     * Update a customer
     */
    updateCustomer = (customer) => {
        return Axios({
            method : 'PATCH',
            url : 'customer/' + customer.id,
            data : customer
        })
    }


    /**
     * Delete a particular customer
     */
    deleteCustomer = (customerID) => {
        return Axios({
            method : 'DELETE',
            url : 'customer/'+customerID
        })
    }

    /**
     * Get a list of available customer states/status
     */
    getCustomerStatus = () => {
        return Axios({
            method : 'GET',
            url : 'customer_status'
        });
    }

    /**
     * Get a list of available customer groups
     */
    getCustomerGroups = () => {
        return Axios({
            method : 'GET',
            url : 'customer_groups'
        });
    }

    /**
     * Get gender list
     */
    getGenderList()
    {
        return Axios({
            method : 'GET',
            url : 'gender'
        })
    }

    /**
     * Get currency
     */
    getCurrency = () => {
        return Axios({
            method : 'GET',
            url : 'currency'
        })
    }
}
export default new CustomerService;