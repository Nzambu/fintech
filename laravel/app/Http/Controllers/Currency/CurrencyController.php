<?php
/**
 * FinTech Sample
 * 
 * @author  Patrick Nzambu <patricknzambu@gmail.com>
 * 
 */

namespace App\Http\Controllers\Currency;

use Illuminate\Http\Request;
use App\Models\Currency\Currency;
use App\Http\Controllers\Controller;
use App\Http\Resources\Currency\CurrencyResource;

/**
 * @group Currency
 *
 * Currency endpoints
 * 
 * @package Controllers
 */
class CurrencyController extends Controller
{
    /**
     * Currency
     * 
     * This resource will return a collection of the available currencies. 
     * Get the id from the selected resource and use it as currency_id when creating customer.
     * Each customer is assumed to transact(send) money using his/her selected curreny. 
     * However, one can receive money in other currencies part from his/her selected curreny. 
     * In transactions, use currency from the sender while displaying the record
     * 
     * @apiResourceCollection App\Http\Resources\Currency\CurrencyResource
     * @apiResourceModel App\Models\Currency\Currency
     * 
     * @responseFile responses/tokenExpired.json
     * 
     * @return object A collection of currency
     */
    public function currency()
    {
        // Select all the available currency
        $currency = Currency::all();

        // Return a collection of the currencies
        return CurrencyResource::collection($currency);
    }
}
