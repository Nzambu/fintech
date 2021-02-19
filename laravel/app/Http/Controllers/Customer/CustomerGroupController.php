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
use App\Models\Customer\CustomerGroup;
use App\Http\Resources\Customer\CustomerGroupResource;

/**
 * @group  Customer
 *
 * Customer Group endpoints
 * 
 * @package Controllers
 */
class CustomerGroupController extends Controller
{
    /**
     * Groups
     * 
     * This resource will return a collection of the different groups of customers.
     * 
     * @apiResourceCollection App\Http\Resources\Customer\CustomerGroupResource
     * @apiResourceModel App\Models\Customer\CustomerGroup
     * 
     * @responseFile responses/tokenExpired.json
     * 
     * @return object A collection of groups of customers
     */
    public function groups()
    {
        $groups = CustomerGroup::all();
        return CustomerGroupResource::collection($groups);
    }
}
