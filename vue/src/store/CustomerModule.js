import CustomerService from '../services/CustomerService';

const initialState = {
    list : [],
    status : [],
    groups : [],
    gender : [],
    currency : [],
}

export const customer = {
    namespaced: true,
    state: initialState,
    actions: {
        
        /**
         * Get customers
         * 
         */
        list({ commit }, propertyID) {
            return CustomerService.getCustomerList(propertyID).then(
                feedback => {
                    commit('customerList', feedback.data)
                    return Promise.resolve(feedback)
                },
                fail => {
                    return Promise.reject(fail)
                }
            );            
        },

        /**
         * Create customer
         */
        create({ commit }, customer) {
            return CustomerService.createCustomer(customer).then(
                feedback => {
                    let customer = feedback.data;
                    commit('createdCustomer', customer);
                    return Promise.resolve(feedback);
                },
                fail => {
                    return Promise.reject(fail);
                }
            )
        },

        /**
         * Update customer
         */
        update({ commit }, customer) {
            return CustomerService.updateCustomer(customer).then(
                feedback => {
                    let customer = feedback.data;
                    commit('updatedCustomer', customer);
                    return Promise.resolve(feedback);
                },
                fail => {
                    return Promise.reject(fail);
                }
            )
        },

        /**
         * Delete customer
         */
        delete({ commit }, customerID) {
            return CustomerService.deleteCustomer(customerID).then(
                feedback => {
                    let customer = feedback.data;
                    commit('deletedCustomer', customer.id);
                    return Promise.resolve(feedback);
                },
                fail => {
                    return Promise.reject(fail);
                }
            )
        },

        /**
         * Get customers status
         * 
         */
        status({ commit }) {
            return CustomerService.getCustomerStatus().then(
                feedback => {
                    commit('customerStatus', feedback.data)
                    return Promise.resolve(feedback)
                },
                fail => {
                    return Promise.reject(fail)
                }
            );            
        },

        /**
         * Get customers groups
         * 
         */
        groups({ commit }) {
            return CustomerService.getCustomerGroups().then(
                feedback => {
                    commit('customerGroups', feedback.data)
                    return Promise.resolve(feedback)
                },
                fail => {
                    return Promise.reject(fail)
                }
            );            
        },

        /**
         * Get customer's gender
         * 
         */
        gender({ commit }) {
            return CustomerService.getGenderList().then(
                feedback => {
                    commit('customerGender', feedback.data)
                    return Promise.resolve(feedback)
                },
                fail => {
                    return Promise.reject(fail)
                }
            );            
        },

        /**
         * Get currency
         */
        currency({ commit }) {
            return CustomerService.getCurrency().then(
                feedback => {
                    commit('currency', feedback.data)
                    return Promise.resolve(feedback)
                },
                fail => {
                    return Promise.reject(fail)
                }
            )
        }

    },
    mutations: {

        /**
         * Store customer list
         * 
         */
        customerList(state, list) {
           state.list = list
        },

        /**
         * Store created customer
        */
       createdCustomer(state, customer) {
            state.list.push(customer);
       },

       /**
         * Update customer
         */
        updatedCustomer(state, updatedCustomer) {
            let customerIndex = state.list.findIndex(customer => customer.id === updatedCustomer.id)
            if(customerIndex !== -1) {
                state.list.splice(customerIndex, 1, updatedCustomer)
            }
        },

        /**
         * Remove deleted customer
         */
        deletedCustomer(state, customerID) {
            let customerIndex = state.list.findIndex(customer => customer.id === customerID)
            state.list.splice(customerIndex, 1)
        },

        /**
         * Store customer status
         * 
         */
        customerStatus(state, list) {
            state.status = list
        },

        /**
         * Store customer groups
         * 
         */
        customerGroups(state, list) {
            state.groups = list
        },

        /**
         * Store customer gender
         * 
         */
        customerGender(state, list) {
            state.gender = list
        },

        /**
         * Store currency
         */
        currency(state, list) {
            state.currency = list
        },
    }
}