<?php

namespace App\Models\Transaction;

use App\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    /**
     * @var string $table Table name
     */
    protected $table = "transactions";

    /**
     * @var string $primaryKey Primary key
     */
    protected $primaryKey = "trn_id";

    /**
     * @var array $fillable attributes that are mass assignable
     */
    protected $fillable = [
        "type_id",
        "method_id",
        "sender",
        "beneficiary",
        "amount",
        "ref_no",
        "order_no",
        "status_id",
    ];

    /**
     * Relationship - belongs to type
     * 
     * @return mixed
     */
    public function type()
    {
        return $this->belongsTo(
            TransactionType::class,
            "type_id",
            "tty_id",
        );
    }

    /**
     * Relationship - belongs to method
     * 
     * @return mixed
     */
    public function method()
    {
        return $this->belongsTo(
            TransactionMethod::class,
            "method_id",
            "tmt_id"
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
            TransactionStatus::class,
            "status_id",
            "tst_id"
        );
    }

    /**
     * Relationship - belongs to sender
     * 
     * @return mixed
     */
    public function from_sender()
    {
        return $this->belongsTo(
            Customer::class,
            "sender",
            "cst_id"
        );
    }

    /**
     * Relationship - belongs to beneficiary
     * 
     * @return mixed
     */
    public function to_beneficiary()
    {
        return $this->belongsTo(
            Customer::class,
            "beneficiary",
            "cst_id"
        );
    }
}
