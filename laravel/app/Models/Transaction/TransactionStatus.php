<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionStatus extends Model
{
    use HasFactory;

    /**
     * @var string $table Table name
     */
    protected $table = "transaction_status";

    /**
     * @var string $primaryKey Primary key
     */
    protected $primaryKey = "tst_id";

    /**
     * @var array $fillable attributes that are mass assignable
     */
    protected $fillable = [
        "status",
    ];
}
