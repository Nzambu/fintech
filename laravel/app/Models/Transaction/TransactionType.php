<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    use HasFactory;

    /**
     * @var string $table Table name
     */
    protected $table = "transaction_types";

    /**
     * @var string $primaryKey Primary key
     */
    protected $primaryKey = "tty_id";

    /**
     * @var array $fillable attributes that are mass assignable
     */
    protected $fillable = [
        "type",
    ];
}
