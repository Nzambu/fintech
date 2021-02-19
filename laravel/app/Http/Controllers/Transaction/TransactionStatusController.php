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
use App\Models\Transaction\TransactionStatus;
use App\Http\Resources\Transaction\TransactionStatusResource;

/**
 * @group  Transaction
 *
 * Transaction status endpoints
 * 
 * @package Controllers
 */
class TransactionStatusController extends Controller
{
    /**
     * Status
     * 
     * A transaction can be a success, pending or failed. This resource returns the data for each state/status.
     * By default each transaction has a pending status as it waiting to be processed. The admin will change state to success or failed.
     * 
     * @apiResourceCollection App\Http\Resources\Transaction\TransactionStatusResource
     * @apiResourceModel App\Models\Transaction\TransactionStatus
     * 
     * @responseFile responses/tokenExpired.json
     * @responseFile responses/notFound.json
     * 
     * @return object A collection of transaction states
     */
    public function status()
    {
        $states = TransactionStatus::all();
        return TransactionStatusResource::collection($states);
    }
}
