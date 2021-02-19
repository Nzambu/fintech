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
use App\Models\Transaction\TransactionMethod;
use App\Http\Resources\Transaction\TransactionMethodResource;

/**
 * @group  Transaction
 *
 * Transaction method endpoints
 * 
 * @package Controllers
 */
class TransactionMethodController extends Controller
{
    /**
     * Methods
     * 
     * A transaction can use various methods such as debit card, mobile app or cash. Each resource has method data. 
     * Pass the id of resource as method_id when creating a new transaction. 
     * 
     * @apiResourceCollection App\Http\Resources\Transaction\TransactionMethodResource
     * @apiResourceModel App\Models\Transaction\TransactionMethod
     * 
     * @responseFile responses/tokenExpired.json
     * @responseFile responses/notFound.json
     * 
     * @return object A collection of transaction methods
     */
    public function methods()
    {
        $methods = TransactionMethod::all();
        return TransactionMethodResource::collection($methods);
    }
}
