<?php
/**
 * FinTech Sample
 * 
 * @author  Patrick Nzambu <patricknzambu@gmail.com>
 * 
 */

namespace App\Http\Controllers\Customer;

use App\Models\User;
use App\Models\Email;
use App\Models\Phone;
use Illuminate\Http\Request;
use App\Models\Customer\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\CustomerRequest;
use App\Http\Resources\Customer\CustomerResource;
use App\Http\Requests\Customer\UpdateCustomerRequest;

/**
 * @group Customer
 *
 * Customer endpoints
 * 
 * @package Controllers
 */
class CustomerController extends Controller
{
    /**
     * Customers
     * 
     * This resource will return a collection of the customers.
     * 
     * @apiResourceCollection App\Http\Resources\Customer\CustomerResource
     * @apiResourceModel App\Models\Customer\Customer
     * 
     * @responseFile responses/tokenExpired.json
     * 
     * @return object A collection of customers
     */
    public function index()
    {
        // Select all the available customers
        $customers = Customer::all();

        // Return a collection of the customers
        return CustomerResource::collection($customers);
    }

    /**
     * Create customer 
     * 
     * Create a new customer. Select the status id from customer status, group id from customer group and currency id from a resource in currency collection.
     * The currency wille be referenced when the user transacts. That is, the currency show for each transaction.
     * 
     * @apiResourceCollection App\Http\Resources\Customer\CustomerResource
     * @apiResourceModel App\Models\Customer\Customer
     * 
     * @responseFile responses/tokenExpired.json
     * 
     * @return object The created customer
     */
    public function store(CustomerRequest $request, Customer $customer)
    {
        $user = new User();
        // Extract user data
        $data = $request->only($user->getFillable());

        // Create user record
        $user->fill($data)->save();

        // Clear data by assigning empty array
        $data = [];

        //Extract the user id and use it as primary key creating a customer in the db
        $user_id = $user->usr_id;

        // Pass user id to request
        $request['cst_id'] = $user_id;

        // Default status is 
        $request['status_id'] = 1;

        // Extract customer data
        $data = $request->only($customer->getFillable());

        // Create customer
        $customer->fill($data)->save();

        // Return the created customer as a resource
        return new CustomerResource($customer);
    }

    /**
     * Get customer
     * 
     * Select a customer using the id. If the customer exists, the response containes customer data.
     * Otherwise, return a not found error response.
     * 
     * @urlParam customer required The id of the customer
     * 
     * @apiResourceCollection App\Http\Resources\Customer\CustomerResource
     * @apiResourceModel App\Models\Customer\Customer
     * 
     * @responseFile responses/tokenExpired.json
     * @responseFile responses/notFound.json
     * 
     * @return object The selected customer
     */
    public function show(Customer $customer)
    {
        // Return an instance of the selected customer
        return new CustomerResource($customer);
    }

     /**
     * Update customer
     * 
     * Update an existing customer. Pick the data based on selected fields stored in the database. Select the status id from customer status, group id from customer group and currency id from a resource in currency collection.
     * The currency wille be referenced when the user transacts. That is, the currency show for each transaction.
     * 
     * @urlParam customer required The id of the customer
     * 
     * @apiResourceCollection App\Http\Resources\Customer\CustomerResource
     * @apiResourceModel App\Models\Customer\Customer
     * 
     * @responseFile responses/tokenExpired.json
     * @responseFile responses/notFound.json
     * 
     * @return object The updated customer
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        // Extract user id
        $user_id = $customer->cst_id;

        // Get user instance
        $user = User::find($user_id);
        
        // Extract user data
        $data = $request->only($user->getFillable());

        // Update user record
        $user->fill($data)->save();

        // set user id
        $request['user_id'] = $user->usr_id;

        // Phone instance
        $phone = new Phone();

        // Update customer primary phone or create a new record
        if($user->primary_phone($user->usr_id) && $request['phone']) {
            // Pick the first record where primary phone is 1 or true and update or
            $phone->where([
                ['user_id', $user->usr_id],
                ['primary', '1']
            ])->orderBy('phn_id', 'ASC')->first();
            
            $phone->update([
                'phone' => $request['phone']
            ]);
        } else {
            // Create new primary phone for the customer/user 
            $request['primary'] = 1;
            $data = $request->only($phone->getFillable());
            $phone->fill($data)->save();
        }

        // update customer primary email
        // if($request['email']) {
        //     $email = Email::where([
        //         ['user_id', $user->usr_id],
        //         ['primary', '1']
        //     ])->orderBy('eml_id', 'ASC')->first();

        //     $email->update([
        //         'email' => $request['email']
        //     ]);
        // }

        // Extract customer data
        $data = $request->only($customer->getFillable());

        // Create customer
        $customer->fill($data)->update();

        // Return the updated customer as a resource
        return new CustomerResource($customer);
    }

    /**
     * Delete customer
     * 
     * Provide the id of the customer in the case of deleting the customer. No recovery of data once deleted.
     * 
     * @urlParam customer required The id of the customer
     * 
     * @apiResourceCollection App\Http\Resources\Customer\CustomerResource
     * @apiResourceModel App\Models\Customer\Customer
     * 
     * @responseFile responses/tokenExpired.json
     * @responseFile responses/notFound.json
     * 
     * @return object The deleted customer
     */
    public function destroy(Customer $customer)
    {
        // Delete the customer
        $customer->delete();

        // Return the instance of the deleted customer
        return new CustomerResource($customer);
    }
}
