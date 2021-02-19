<?php

namespace App\Models\Customer;

use App\Models\User;
use App\Models\Currency\Currency;
use App\Models\Transaction\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    /**
     * @var string $table Table name
     */
    protected $table = "customers";

    /**
     * @var string $primaryKey Primary key
     */
    protected $primaryKey = "cst_id";

    /**
     * @var array $fillable attributes that are mass assignable
     */
    protected $fillable = [
        "cst_id",
        "status_id",
        "group_id",
        "currency_id",
    ];

    /**
     * Relationship - belongs to user
     * 
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(
            User::class,
            'cst_id',
            'usr_id'
        );
    }

    /**
     * Relationship - belongs to currency
     * 
     * @return mixed
     */
    public function currency()
    {
        return $this->belongsTo(
            Currency::class,
            'currency_id',
            'crr_id'
        );
    }

    /**
     * Relationship - belongs to status
     * 
     * @return mixed
     */
    public function status()
    {
        return $this->belongsTo(
            CustomerStatus::class,
            'status_id',
            'cst_id'
        );
    }

    /**
     * Relationship - belongs to group
     * 
     * @return mixed
     */
    public function group()
    {
        return $this->belongsTo(
            CustomerGroup::class,
            'group_id',
            'cgr_id'
        );
    }

    /**
     * Relationship - has many transactions as a beneficiary
     * 
     * @return mixed
     */
    public function from_beneficiary()
    {
        return $this->hasMany(
            Transaction::class,
            'beneficiary',
            'cst_id'
        );
    }

    /**
     * Relationship - has many transactions as a sender
     * 
     * @return mixed
     */
    public function to_sender()
    {
        return $this->hasMany(
            Transaction::class,
            'sender',
            'cst_id'
        );
    }

    /**
     * Calculate total amount for the beneficiary
     * 
     * @return integer
     */
    public function amount_paid($id)
    {
        return Transaction::where([
            ['beneficiary', $id]
        ])->sum('amount');
    }
}
