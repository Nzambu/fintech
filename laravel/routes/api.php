<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|-----------------------------------------------------------------------------------------------------------------------------
| API Routes
|-----------------------------------------------------------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'middleware' => 'api'
], function($router){
    /*
    |-----------------------------------------------------------------------------------------------------------------------------
    | Authentication Routes - login, forgot password && change password
    |-----------------------------------------------------------------------------------------------------------------------------
    | The routes address login, forgot and change password
    |
    */
    Route::post('login', ['App\Http\Controllers\Auth\JWTController', 'login']); 
    Route::post('forgot_password', ['App\Http\Controllers\Auth\JWTController','forgotPassword']);    

     /*
    |-----------------------------------------------------------------------------------------------------------------------------
    | Authentication Routes - refresh, logout
    |-----------------------------------------------------------------------------------------------------------------------------
    | The routes address refreshing access token and user log out
    |
    */
    Route::post('verify_reset_password_token', ['App\Http\Controllers\ResetPasswordController', 'verifyResetPasswordToken']);
    Route::post('change_password', ['App\Http\Controllers\ResetPasswordController','changePassword']);
    
});

Route::group(['middleware' => 'auth:api'], function ()
{ 
    /*
    |-----------------------------------------------------------------------------------------------------------------------------
    | Authentication Routes - refresh, logout, profile change password
    |-----------------------------------------------------------------------------------------------------------------------------
    | The routes address refreshing access token, user log out, change password while logged in
    |
    */
    Route::get('refresh', ['App\Http\Controllers\Auth\JWTController', 'refreshToken']); 
    Route::get('logout', ['App\Http\Controllers\Auth\JWTController', 'logout']); 
    Route::post('profile_change_password', ['App\Http\Controllers\ResetPasswordController', 'profileChangePassword']);

    /*
    |-----------------------------------------------------------------------------------------------------------------------------
    | User Routes - profile, registration, update
    |-----------------------------------------------------------------------------------------------------------------------------
    | The routes address membership
    |
    */
    Route::get('profile', ['App\Http\Controllers\UserController', 'profile']);
    Route::post('update_profile', ['App\Http\Controllers\UserController', 'updateProfile']);

    /*
    |-----------------------------------------------------------------------------------------------------------------------------
    | User Email Routes - CRUD
    |-----------------------------------------------------------------------------------------------------------------------------
    | The routes controll email records
    |
    */
    Route::post('switch_primary_email', ['App\Http\Controllers\EmailController', 'switchPrimaryEmail']);
    Route::apiResource('email', 'App\Http\Controllers\EmailController');

    /*
    |-----------------------------------------------------------------------------------------------------------------------------
    | User Phone Routes - CRUD, switch primary phone
    |-----------------------------------------------------------------------------------------------------------------------------
    | The routes controll phone records
    |
    */
    Route::post('switch_primary_phone', ['App\Http\Controllers\PhoneController', 'switchPrimaryPhone']);
    Route::apiResource('phone', 'App\Http\Controllers\PhoneController');

    /*
    |-----------------------------------------------------------------------------------------------------------------------------
    | Gender Routes - get services
    |-----------------------------------------------------------------------------------------------------------------------------
    | The route address get all genders
    |
    */
    Route::get('gender', ['App\Http\Controllers\GenderController', 'index']);

    /*
    |-----------------------------------------------------------------------------------------------------------------------------
    | Customer - CRUD, customer status & customer groups
    |-----------------------------------------------------------------------------------------------------------------------------
    | The route address get all genders
    |
    */

    /**
     * Customer - Create, Read, Update and Delete & get all customers
     */
    Route::apiResource('customer', 'App\Http\Controllers\Customer\CustomerController');

    // Get customer status
    Route::get('customer_status', ['App\Http\Controllers\Customer\CustomerStatusController', 'status']);

    // Get customer groups
    Route::get('customer_groups', ['App\Http\Controllers\Customer\CustomerGroupController', 'groups']);

    /*
    |-----------------------------------------------------------------------------------------------------------------------------
    | Currency - get currencies
    |-----------------------------------------------------------------------------------------------------------------------------
    | The route address get all currencies
    |
    */

    /**
     * Get all currencies
     */
    Route::get('currency', ['App\Http\Controllers\Currency\CurrencyController', 'currency']);

    /*
    |-----------------------------------------------------------------------------------------------------------------------------
    | Transaction - CRUD, transaction type, transaction status and transaction method
    |-----------------------------------------------------------------------------------------------------------------------------
    | The route address get all currencies
    |
    */

    /**
     * Transaction - Create, Read, Update and Delete & get all transactions
     */
    Route::apiResource('transaction', 'App\Http\Controllers\Transaction\TransactionController');

    /**
     * Transaction status - get a list of all possible transaction states/status
     */
    Route::get('transaction_status', ['App\Http\Controllers\Transaction\TransactionStatusController', 'status']);

    /**
     * Transaction type - get a list of all possible types of transaction
     */
    Route::get('transaction_type', ['App\Http\Controllers\Transaction\TransactionTypeController', 'types']);

    /**
     * Transaction method - get a list of forms/methods of transacting
     */
    Route::get('transaction_method', ['App\Http\Controllers\Transaction\TransactionMethodController', 'methods']);
});
