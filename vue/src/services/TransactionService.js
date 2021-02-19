import Axios from './Axios';

class TransactionService {
    /**
     * Get a list of available transactions
     */
    getTransactionList = () => {
        return Axios({
            method : 'GET',
            url : 'transaction'
        });
    }

    /**
     * Create a transaction
     */
    createTransaction = (transaction) => {
        return Axios({
            method : 'POST',
            url : 'transaction',
            data : transaction
        })
    }

    /**
     * Update a transaction
     */
    updateTransaction = (transaction) => {
        return Axios({
            method : 'PATCH',
            url : 'transaction/' + transaction.id,
            data : transaction
        })
    }


    /**
     * Delete a particular transaction
     */
    deleteTransaction = (transactionID) => {
        return Axios({
            method : 'DELETE',
            url : 'transaction/'+transactionID
        })
    }

    /**
     * Get a list of available transaction states/status
     */
    getTransactionStatus = () => {
        return Axios({
            method : 'GET',
            url : 'transaction_status'
        });
    }

    /**
     * Get a list of available transaction types
     */
    getTransactionTypes = () => {
        return Axios({
            method : 'GET',
            url : 'transaction_type'
        });
    }

    /**
     * Get a list of available transaction methods
     */
    getTransactionMethods = () => {
        return Axios({
            method : 'GET',
            url : 'transaction_method'
        });
    }
}
export default new TransactionService;