<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerGroup extends Model
{
    use HasFactory;

    /**
     * @var string $table Table name
     */
    protected $table = "customer_groups";

    /**
     * @var string $primaryKey Primary key
     */
    protected $primaryKey = "cgr_id";

    /**
     * @var array $fillable attributes that are mass assignable
     */
    protected $fillable = [
        "group",
    ];
}
