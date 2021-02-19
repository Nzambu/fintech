<?php
/**
 * FinTech Sample
 * 
 * @author  Patrick Nzambu <patricknzambu@gmail.com>
 * 
 */

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction\Transaction;
use App\Http\Requests\Transaction\TransactionRequest;
use App\Http\Resources\Transaction\TransactionResource;

/**
 * @group Transaction
 *
 * Transaction method endpoints
 * 
 * @package Controllers
 */
class TransactionController extends Controller
{
    /**
     * Transactions
     * 
     * This resource will return a collection of the transactions.
     * 
     * @apiResourceCollection App\Http\Resources\Transaction\TransactionResource
     * @apiResourceModel App\Models\Transaction\Transaction
     * 
     * @responseFile responses/tokenExpired.json
     * 
     * @return object A collection of transactions
     */
    public function index()
    {
        // Select all the available transactions
        $transactions = Transaction::all();

        // Return a collection of the transactions
        return TransactionResource::collection($transactions);
    }

    /**
     * Create transaction
     * 
     * @apiResourceCollection App\Http\Resources\Transaction\TransactionResource
     * @apiResourceModel App\Models\Transaction\Transaction
     * 
     * @responseFile responses/tokenExpired.json
     * 
     * @return object The created transaction
     */
    public function store(TransactionRequest $request, Transaction $transaction)
    {
        // reference number 
        $request['ref_no'] = 'ref/s/'.$request['sender'].'/b/'.$request['beneficiary'];

        // order reference 
        $request['order_no'] = 'ref/o/'.$request['order_no'];

        // By default all transactions are pending
        $request['status_id'] = 1;

        // Extract transaction data
        $data = $request->only($transaction->getFillable());

        // Create transaction record
        $transaction->fill($data)->save();

        // Clear data by assigning to empty array
        $data = [];

        // Return the created transaction as a resource
        return new TransactionResource($transaction);
    }

    /**
     * Get transaction
     * 
     * Select a transaction using the id. If the transaction exists, the response containes transaction data.
     * Otherwise, return a not found error response.
     * 
     * @urlParam transaction required The id of the transaction
     * 
     * @apiResource App\Http\Resources\Transaction\TransactionResource
     * @apiResourceModel App\Models\Transaction\Transaction
     * 
     * @responseFile responses/tokenExpired.json
     * @responseFile responses/notFound.json
     * 
     * @return object The selected transaction
     */
    public function show(Transaction $transaction)
    {
        // Return an instance of the selected transaction
        return new TransactionResource($transaction);
    }

     /**
     * Update transaction
     * 
     * @urlParam transaction required The id of the transaction
     * 
     * @apiResource App\Http\Resources\Transaction\TransactionResource
     * @apiResourceModel App\Models\Transaction\Transaction
     * 
     * @responseFile responses/tokenExpired.json
     * @responseFile responses/notFound.json
     * 
     * @return object The updated transaction
     */
    public function update(TransactionRequest $request, Transaction $transaction)
    {
       // Extract transaction data
       $data = $request->only($transaction->getFillable());

       // Create transaction record
       $transaction->fill($data)->update();

       // Clear data by assigning to empty array
       $data = [];

       // Return the created transaction as a resource
       return new TransactionResource($transaction);
    }

    /**
     * Delete transaction
     * 
     * Provide the id of the transaction in the case of deleting the transaction. No recovery of deleted data. The action is permanent.
     * 
     * @urlParam transaction required The id of the transaction
     * 
     * @apiResource App\Http\Resources\Transaction\TransactionResource
     * @apiResourceModel App\Models\Transaction\Transaction
     * 
     * @responseFile responses/tokenExpired.json
     * @responseFile responses/notFound.json
     * 
     * @return object The deleted customer
     */
    public function destroy(Transaction $transaction)
    {
        // Delete the transaction
        $transaction->delete();

        // Return the instance of the deleted transaction
        return new TransactionResource($transaction);
    }
}
