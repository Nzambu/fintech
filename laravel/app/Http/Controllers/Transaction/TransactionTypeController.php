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
use App\Models\Transaction\TransactionType;
use App\Http\Resources\Transaction\TransactionTypeResource;

/**
 * @group  Transaction
 *
 * Transaction type endpoints
 * 
 * @package Controllers
 */
class TransactionTypeController extends Controller
{
    /**
     * Types
     * 
     * A transaction can be classified into different types. The type is declared when creating the transaction.
     * It is advisable to pick this field using radio buttons on the transaction form to pick the appropriate type.
     * This resource gives the data for each type. Use the resource id as the type_id creating a transaction.
     * 
     * @apiResourceCollection App\Http\Resources\Transaction\TransactionTypeResource
     * @apiResourceModel App\Models\Transaction\TransactionType
     * 
     * @responseFile responses/tokenExpired.json
     * @responseFile responses/notFound.json
     * 
     * @return object A collection of the types/classification of a transaction
     */
    public function types()
    {
        $states = TransactionType::all();
        return TransactionTypeResource::collection($states);
    }
}
