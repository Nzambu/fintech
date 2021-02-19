<?php
/**
 * FinTech Sample
 * 
 * @author  Patrick Nzambu <patricknzambu@gmail.com>
 * 
 */

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer\CustomerStatus;
use App\Http\Resources\Customer\CustomerStatusResource;

/**
 * @group  Customer
 *
 * Customer status endpoints
 * 
 * @package Controllers
 */
class CustomerStatusController extends Controller
{
    /**
     * Status
     * 
     * A customer can exist in different states at different times depending on their activities in the application. 
     * This resource will return a collection of the possible states.
     * 
     * @apiResourceCollection App\Http\Resources\Customer\CustomerStatusResource
     * @apiResourceModel App\Models\Customer\CustomerStatus
     * 
     * @responseFile responses/tokenExpired.json
     * @responseFile responses/notFound.json
     * 
     * @return object A collection of possible states of a customer
     */
    public function status()
    {
        $states = CustomerStatus::all();
        return CustomerStatusResource::collection($states);
    }
}
