<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerStatus extends Model
{
    use HasFactory;

    /**
     * @var string $table Table name
     */
    protected $table = "customer_status";

    /**
     * @var string $primaryKey Primary key
     */
    protected $primaryKey = "cst_id";

    /**
     * @var array $fillable attributes that are mass assignable
     */
    protected $fillable = [
        "status",
    ];
}
