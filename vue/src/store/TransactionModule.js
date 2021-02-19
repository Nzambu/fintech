import TransactionService from '../services/TransactionService';

const initialState = {
    list : [],
    status : [],
    types : [],
    methods : [],
}

export const transaction = {
    namespaced: true,
    state: initialState,
    actions: {
        
        /**
         * Get transactions list
         * 
         */
        list({ commit }) {
            return TransactionService.getTransactionList().then(
                feedback => {
                    commit('transactionList', feedback.data)
                    return Promise.resolve(feedback)
                },
                fail => {
                    return Promise.reject(fail)
                }
            );            
        },

        /**
         * Create transaction
         */
        create({ commit }, transaction) {
            return TransactionService.createTransaction(transaction).then(
                feedback => {
                    let transaction = feedback.data;
                    commit('createdTransaction', transaction);
                    return Promise.resolve(feedback);
                },
                fail => {
                    return Promise.reject(fail);
                }
            )
        },

        /**
         * Update transaction
         */
        update({ commit }, transaction) {
            return TransactionService.updateTransaction(transaction).then(
                feedback => {
                    let transaction = feedback.data;
                    commit('updatedTransaction', transaction);
                    return Promise.resolve(feedback);
                },
                fail => {
                    return Promise.reject(fail);
                }
            )
        },

        /**
         * Delete transaction
         */
        delete({ commit }, transaction) {
            return TransactionService.deleteTransaction(transaction.id).then(
                feedback => {
                    let transaction = feedback.data;
                    commit('deletedTransaction', transaction.id);
                    return Promise.resolve(feedback);
                },
                fail => {
                    return Promise.reject(fail);
                }
            )
        },

        /**
         * Get transactions
         * 
         */
        status({ commit }) {
            return TransactionService.getTransactionStatus().then(
                feedback => {
                    commit('transactionStatus', feedback.data)
                    return Promise.resolve(feedback)
                },
                fail => {
                    return Promise.reject(fail)
                }
            );            
        },

        /**
         * Get transaction types
         * 
         */
        types({ commit }) {
            return TransactionService.getTransactionTypes().then(
                feedback => {
                    commit('transactionTypes', feedback.data)
                    return Promise.resolve(feedback)
                },
                fail => {
                    return Promise.reject(fail)
                }
            );            
        },

        /**
         * Get transaction methods
         * 
         */
        methods({ commit }) {
            return TransactionService.getTransactionMethods().then(
                feedback => {
                    commit('transactionMethods', feedback.data)
                    return Promise.resolve(feedback)
                },
                fail => {
                    return Promise.reject(fail)
                }
            );            
        },

    },
    mutations: {

        /**
         * Store transaction list
         * 
         */
        transactionList(state, list) {
           state.list = list
        },

        /**
         * Store created transaction
        */
       createdTransaction(state, transaction) {
            state.list.push(transaction);
       },

        /**
         * Update transaction
         */
        updatedTransaction(state, updatedTransaction) {
            let transactionIndex = state.list.findIndex(transaction => transaction.id === updatedTransaction.id)
            if(transactionIndex !== -1) {
                state.list.splice(transactionIndex, 1, updatedTransaction)
            }
        },

        /**
         * Remove deleted transaction
         */
        deletedTransaction(state, transactionID) {
            let transactionIndex = state.list.findIndex(transaction => transaction.id === transactionID)
            state.list.splice(transactionIndex, 1)
        },

        /**
         * Store transaction status
         * 
         */
        transactionStatus(state, list) {
            state.status = list
        },

        /**
         * Store transaction types
         * 
         */
        transactionTypes(state, list) {
            state.types = list
        },

        /**
         * Store transaction methods
         * 
         */
        transactionMethods(state, list) {
            state.methods = list
        },
    }
}